<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Comment as CommentModel;

class Comment implements Rule
{
    private $message;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // 过滤无意义评论
        if (ctype_alnum($value) || in_array($value, ['test', '测试'])) {
            $this->message = '禁止无意义评论';
            return false;
        }
        // 获取用户id
        $userId = session('user.id');
        // 获取当前时间戳
        $time = time();
        // 获取最近一次评论时间
        $commentModel = new CommentModel();
        $lastCommentDate = $commentModel->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->value('created_at');
        $lastCommentTime = strtotime($lastCommentDate);
        // 限制10秒钟内只许评论1次
        if ($time-$lastCommentTime < 10) {
            $this->message = '评论太过频繁,请稍后再试.';
            return false;
        }
        // 限制用户每天最多评论30条
        $date = date('Y-m-d', $time);
        $count = $commentModel
            ->where('user_id', session('user.id'))
            ->whereBetween('created_at', [$date.' 00:00:00', $date.' 23:59:59'])
            ->count();
        if ($count > 30) {
            $this->message = '评论已被限制.';
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
