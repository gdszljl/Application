<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后登陆录入口</title>
<script type='text/javascript' src='http://localhost/v5cms/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/v5cms/hdphp/Extend/Org/hdjs/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://localhost/v5cms/hdphp/Extend/Org/hdjs/hdui/js/hdui.js'></script>
<link href='http://localhost/v5cms/hdphp/Extend/Org/hdjs/hdvalidate/css/hdvalidate.css' rel='stylesheet' media='screen'>
<script src='http://localhost/v5cms/hdphp/Extend/Org/hdjs/hdvalidate/js/hdvalidate.js'></script>
<script src='http://localhost/v5cms/hdphp/Extend/Org/cal/lhgcalendar.min.js'></script>
<script src='http://localhost/v5cms/hdphp/Extend/Org/hdjs/hdslide/js/hdslide.js'></script>
<script type='text/javascript'>
HOST = 'http://localhost';
ROOT = 'http://localhost/v5cms';
WEB = 'http://localhost/v5cms/index.php';
URL = 'http://localhost/v5cms/index.php/V5/Login/login';
APP = 'http://localhost/v5cms/Application';
COMMON = 'http://localhost/v5cms/Application/Common';
HDPHP = 'http://localhost/v5cms/hdphp';
HDPHPDATA = 'http://localhost/v5cms/hdphp/Data';
HDPHPEXTEND = 'http://localhost/v5cms/hdphp/Extend';
MODULE = 'http://localhost/v5cms/index.php/V5';
CONTROLLER = 'http://localhost/v5cms/index.php/V5/Login';
ACTION = 'http://localhost/v5cms/index.php/V5/Login/login';
STATIC = 'http://localhost/v5cms/Static';
HDPHPTPL = 'http://localhost/v5cms/hdphp/Lib/Tpl';
VIEW = 'http://localhost/v5cms/./Application/V5/View';
PUBLIC = 'http://localhost/v5cms/./Application/V5/View/Public';
CONTROLLERVIEW = 'http://localhost/v5cms/./Application/V5/View/Login';
HISTORY = 'http://localhost/v5cms/index.php/V5/Login/out';
</script>
<link href='http://localhost/v5cms/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen'>
<script src='http://localhost/v5cms/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js'></script>
<script type="text/javascript" src="http://localhost/v5cms/./Application/V5/View/Login/js/js.js"></script>
</head>

<body>
<h3>管理员登陆</h3>
<form method="post" action="http://localhost/v5cms/index.php/V5/Login/login" class="hd-form">
<table class="table1">
	<tr>
    	<td class="w100">帐号</td>
        <td>
        	<input type='text' name="username"/>
        </td>
    </tr>
    	<tr>
    	<td>密码</td>
        <td>
        	<input type='password' name="password"/>
        </td>
    </tr>
        </tr>
    	<tr>
    	<td>验证码</td>
        <td>
        	<input type='text' name="code"/>
            <img src="http://localhost/v5cms/index.php/V5/Login/code"/>
            <span id='hd_code'/>
        </td>
    </tr>

	<tr>
    	<td colspan="2">
        <input type="submit" value="登陆"/ class="btn btn-primary">
        </td>
    </tr>
</table>
</form> 
</body>
</html>
