<?php

namespace App\Admin\Controllers;

use App\Models\CouponCode;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CouponCodesController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('优惠券列表');
            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('编辑优惠券');
            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('新增优惠券');
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(CouponCode::class, function (Grid $grid) {
            $grid->model()->orderBy('created_at', 'desc');
            $grid->id('ID')->sortable();
            $grid->name('名称')->sortable();
            $grid->admin_id('管理员(生成)')->sortable();
            $grid->code('优惠码');
            $grid->description('描述');
            $grid->column('usage', '用量')->display(function ($value) {
                return "{$this->used} / {$this->total}";
            })->sortable();
            $grid->enabled('是否启用')->display(function ($value) {
                return $value ? '是' : '否';
            })->sortable();
            $grid->not_before('启用时间')->sortable();
            $grid->not_after('失效时间')->sortable();
            $grid->created_at('创建时间')->sortable();

            $grid->filter(function($filter){
                // 移除默认的ID筛选器
                $filter->disableIdFilter();
                // $filter->like('name', '名称'); //用 名称 作为条件模糊查
                // Add a column filter
                $filter->where(function ($query) {
                    $query->where('id', 'like', "%{$this->input}%")
                        ->orWhere('name', 'like', "%{$this->input}%");
                }, '使用Id或Name进行筛选'); 
                        
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(CouponCode::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('name', '名称')->rules('required');
            $form->text('code', '优惠码')->rules(function($form) {
                // 如果 $form->model()->id 不为空，代表是编辑操作
                if ($id = $form->model()->id) {
                    return 'nullable|unique:coupon_codes,id,'.$id;
                } else {
                    return 'nullable|unique:coupon_codes';
                }
            });
            $form->radio('type', '类型')->options(CouponCode::$typeMap)->rules('required');
            $form->text('value', '折扣')->rules(function ($form) {
                if ($form->type === CouponCode::TYPE_PERCENT) {
                    // 如果选择了百分比折扣类型，那么折扣范围只能是 1 ~ 99
                    return 'required|numeric|between:1,99';
                } else {
                    // 否则只要大等于 0.01 即可
                    return 'required|numeric|min:0.01';
                }
            });
            $form->text('total', '总量')->rules('required|numeric|min:0');
            $form->text('min_amount', '最低金额')->rules('required|numeric|min:0');
            $form->datetime('not_before', '启用时间');
            $form->datetime('not_after', '失效时间');
            $form->radio('enabled', '启用')->options(['1' => '是', '0' => '否']);

            $form->saving(function (Form $form) {
                if (!$form->code) {
                    $form->code = CouponCode::findAvailableCode();
                }
                $form->model()->admin_id = Admin::user()->id; // 自动为该字段附上对应管理员的身份id
            });
        });
    }
}
