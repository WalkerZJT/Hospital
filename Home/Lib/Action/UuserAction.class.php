<?php
	class UuserAction extends CommenAction{
		public function user(){
			$this->assign('uname',$_SESSION['name']);
			$this->display();
		}
		public function imfor(){
			$this->display();
		}
		
		
	}
?>