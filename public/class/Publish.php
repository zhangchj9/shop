<?php
/**
 * 负责信息发布的模块
 */

class Publish
{
    var $user1;
    var $user2;
    var $admin;
    var $content;
    var $time;

    function check($admin){
        //管理员审核博客、评论等
    }

    function publish($user1){
        //用户发布博客
    }

    function publish($user1,$user2){
        //用户回复评论
    }

    function getRandomAdmin(){
        //系统随机抽选管理员审核博客、评论等
    }
    //其他函数...
}

?>