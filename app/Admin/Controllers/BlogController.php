<?php

namespace App\Admin\Controllers;

use App\Models\Article;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class BlogController extends Controller
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

            $content->header('博客列表');
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

            $content->header('编辑博客');
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

            $content->header('创建新博客');
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
        return Admin::grid(Article::class, function (Grid $grid) {
            $grid->model()->orderBy('created_at', 'desc');
            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->admin_id('管理员')->sortable(); // 只有管理员可以生成博客，这个就把它当作是author（后续这里可能要搞一下）
            $grid->description('摘要');
            $grid->markdown('正文');
            $grid->html('链接');
            $grid->keywords('关键词');
            $grid->cover('封面图片');
            $grid->is_top('是否置顶')->sortable();
            $grid->click('点击数')->sortable();
            $grid->created_at('创建时间')->sortable();
            $grid->updated_at('更新时间')->sortable();

            $grid->filter(function($filter){
                // 移除默认的ID筛选器
                $filter->disableIdFilter();
                $filter->where(function ($query) {
                    $query->where('title', 'like', "%{$this->input}%")
                        ->orWhere('keywords', 'like', "%{$this->input}%");
                }, '使用title或keywords进行筛选'); 
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
        return Admin::form(Article::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->display('click', '点击数');
            $form->url('html', '链接')->rules('required');
            $form->text('title', '标题')->rules('required');
            $form->text('keywords', '关键词')->rules('required');
            $form->text('is_top', '是否置顶')->options(['1' => '是', '0'=> '否'])->default('0');
            $form->image('cover', '封面图片')->rules('required|image');
            
            $form->textarea('description', '摘要')->rows(5)->rules('required');
            $form->editor('markdown', '正文')->rules('required');
            


            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');

            $form->saving(function (Form $form) {
                $form->model()->admin_id = Admin::user()->id; // 自动为该字段附上对应管理员的身份id
            });
        });

    }
}
