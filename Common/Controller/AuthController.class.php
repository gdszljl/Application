<?php
//后台登录权限验证
class AuthController extends Controller{
    //构造函数
    public function __init(){
		if(!session("aid")){
			$this->error('你还没有登陆，请登陆后操作','login/login');
			}
    }
}
