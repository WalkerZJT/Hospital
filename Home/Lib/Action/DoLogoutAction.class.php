<?php
	class DologoutAction extends CommenAction{
		public function doLogout(){
			
				$name=$_SESSION['name'];
				//echo $name;
				$_SESSION=array();
					if(isset($_COOKIE[session_name()])){
						setcookie(session_name(),'',time()-1,'/');
					}
				$test=session_destroy();
				if($test){
					$this->success('Welcome once again to use us!',U('Index/index'));//U������һ��������·��
				}else{
					$this->error("ע��ʧ��");
				}
			
		}
	}
?>