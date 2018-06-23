<?php
/**
 * User: Zzx
 * Date: 2018/4/28
 * Time: 23:26
 * 在线商城的用户类
 */

class User
{
    /* 成员变量 */
    var $username;
    var $password;
    var $company;
    var $email;
    var $phone;
    var $country;
    var $address;
    var $city;
    var $state;
    var $postcode;
    var $isVip;

    /* 构造方法 */
    function __construct(){
        //待实现，构造方法
    }

    /* 成员方法 */
    function getX(){
        //待实现，获取各成员变量的值
    }

    function setX(){
        //待实现，设置各成员变量的值
    }

    function getLoginInstance(){
        //待实现，获取用于登录的实例对象
    }

    function getUpdateInstance(){
        //待实现，获取用于更新的实例对象
    }

    function getCartInstance(){
        //待实现，获取用于购物车的实例对象
    }

    function comment(){
        //用户发布评论，回复评论等
    }

    function search(){
        //用户搜索商品、新闻、评论等信息
    }

    function addProduct(){
        //用户添加商品到购物车
    }

    function buy(){
        //用户购买商品
    }

    function cancel(){
        //用户取消交易
    }
}
?>