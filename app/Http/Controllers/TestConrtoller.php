<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Comment\Store;
use App\Models\OauthUser;
use App\Models\Category;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Comment;
use App\Models\Config;
use App\Models\User;
use App\Models\Tag;
use Cache;

class TestController extends Controller{

    public function comment(Store $request, Comment $commentModel, OauthUser $oauthUserModel)
    {
        $data = $request->only('content', 'article_id', 'pid');
        // 获取用户id
        $userId = session('user.id');
        $id = $commentModel->storeData($data);
        // 更新缓存
        Cache::forget('common:newComment');
        return ajax_return(200, ['id' => $id]);
    }
}

?>