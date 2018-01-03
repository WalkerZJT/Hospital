<?php
	class CommenAction extends Action{
		public function _initialize(){
			if(!isset($_SESSION['name'])|| $_SESSION['name']==''){
				$this->error("登陆后才能使用！",U('User/log'));
				
			}else{
				$this->assign('uname',$_SESSION['name']);
			}
			
			
		}
	}
?>