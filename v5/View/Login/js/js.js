// JavaScript Document
$(function(){
	$('form').validate({
	username:{
			rule:{
				//表示username字段必须添写
				required:true
	},
	error:{
		required:'用户名不能为空'
		}
	},
	password:{
			rule:{
				//表示password字段必须添写
				required:true
	},
	error:{
		required:'用户密码不能为空'
		}
	},
	code:{
			rule:{
				//表示code字段必须添写
				//通过AJAX异步验证（验证码正确性）
				required:true,
				ajax:"checkCode"
	},
	error:{
		required:'验证码不能为空',
		ajax:'验证码输入错误'
		},
		success:'输入正确'
	}
	})
})

	