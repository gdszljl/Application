<?php
// 后面管理员登陆与退出模块
class LoginController extends Controller{
    //动作方法
    public function login(){
        //显示视图
        $this->display();
    }
	//登陆时的验证码显示
	public function code(){
		$code=new Code();
		$code->show();
	}
	public function checkCode(){
			if(strtoupper($_POST['code'])==$_SESSION['code']){// 验证通过
			echo 1;
			}else{// 验证失败
			echo 0;
			}
			exit;
	}
}