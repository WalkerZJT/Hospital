<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="maximum-scale=1,user-scale=1, width=device-width, initial-scale=1 "><title>登录</title><link rel="stylesheet" type="text/css" href="http://localhost/Hospital/bootstrap/css/bootstrap.css"><link rel="stylesheet" type="text/css" href="http://localhost/Hospital/Public/css/index.css" /><style type="text/css">    	.Link{
			margin-top:150px;	
		}
    </style><script type="text/javascript">		function validate() {
			var pw1 = document.getElementById("pw1").value;
			var pw2 = document.getElementById("pw2").value;
			if(pw1 == pw2) {
				document.getElementById("tishi").innerHTML="<font color='green'>两次密码相同</font>";
				document.getElementById("submit").disabled = false;
			}
			else {
				document.getElementById("tishi").innerHTML="<font color='red'>两次密码不相同</font>";
				document.getElementById("submit").disabled = true;
			}
}

    </script></head><body class="lead"><nav class="navbar navbar-default navbar-fixed-top" style="background:#EDEDED"><div class="container"></div><div class="container"><div class="navbar-header"><a href="###" class="navbar-brand"><span class="glyphicon glyphicon glyphicon-leaf"></span> 西京医院</a><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div><div class="collapse navbar-collapse navbar-right" id="navbar-collapse"><ul class="nav navbar-nav" style="margin-top:0px;"><li class="active"><a href="http://localhost/hospital/index.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li><li><a href="http://localhost/hospital/index.php/News/news"><span class="glyphicon glyphicon glyphicon-list-alt"></span> 资讯</a></li><li><a href="http://localhost/hospital/index.php/Uuser/user"><span class="glyphicon glyphicon-user"></span><?php echo ($uname); ?>个人中心</a></li><li><a href="http://localhost/hospital/index.php/User/log"><span class="glyphicon glyphicon-check"></span> 登录</a></li><li><a href="http://localhost/hospital/index.php/DoLogout/doLogout"><span class="glyphicon glyphicon-info-sign"></span> 注销</a></li></ul></div></div></nav><div class="container" style="width:40%;margin-top:100px;"><ul class="nav nav-tabs"><li class="active"><a href="#log" data-toggle="tab">登陆</a></li><li ><a href="#reg" data-toggle="tab">注册</a></li></ul><div class="tab-content" style="padding:10px;"><div class="tab-pane active" id="log"><form class="form-signin" method="post" action='__URL__/dolog' name="myForm"><h2>Please Login</h2><input type="text" maxlength="20" class="form-control" placeholder="姓名" name="name" required autofocus></br><input type="password" maxlength="20"  class="form-control" placeholder="密码" name="password" required></br><div class="checkbox"><label><input type="checkbox" value="remember-me"> Remember me
          				</label></div><button class="btn btn-lg btn-primary btn-block" type="submit">Login in</button></form></div><div class="tab-pane" id="reg"><form class="form-signin" method="post"   action='__URL__/doreg' name="myForm"><h2>Please Regesiter</h2><input type="text" maxlength="20" class="form-control" placeholder="姓名" name="name" required autofocus></br><input type="password" maxlength="20" class="form-control" placeholder="密码" name="password" id="pw1" required></br><input type="password" maxlength="20" class="form-control" placeholder="确定密码" name="password" onKeyUp="validate()" id="pw2" required></br><span id="tishi"></span></input><input type="email" maxlength="20" class="form-control" placeholder="Email" name="email" required></br><input type="text" maxlength="20" class="form-control" placeholder="电话" name="phone" required></br><input type="text" maxlength="20" class="form-control" placeholder="地址" name="address" required></br><div class="radio"><label class="radio-inline"><input type="radio" name="sex" checked value="男"/>男
                		</label><label class="radio-inline"><input type="radio" name="sex" value="女" />女
                		</label></div><button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Join us</button></form></div></div></div><div class="Link"></div><div id="footer" class="container lead"><nav class="navbar navbar-default navbar-fixed-bootom" style="background:#DBDBDB;"><div class="navbar-inner navbar-content-center"><p>合作事宜 | 版权投诉 | 关于我们</p><p>蜀 ICP 备 16010396 . © WALKER工作室 Powered by bootstrap</p></div></nav></div><script src="http://localhost/Hospital/bootstrap/js/jquery.min.js"></script><script src="http://localhost/Hospital/bootstrap/js/bootstrap.min.js"></script></body></html>