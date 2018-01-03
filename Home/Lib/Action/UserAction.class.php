<?php
	class UserAction extends Action{
		
		public function log(){
			if(isset($_SESSION['name'])|| $_SESSION['name']!=null){
				$this->error('您已经登陆过，如需登录别的用户，请先注销之后再使用本功能!!!',U('Index/index'));
			}
			$this->display();
		}
		public function dolog(){
			$name=$_POST['name'];
			
			$password=$_POST['password'];
			//echo $password;
			$user=M('user');
			$where['name']=$name;
			$where['password']=$password;
			//find方法取得的是一个具体的值
			//field('id')是只取得ID号
			$arr=$user->field('id')->where($where)->find();
			if($arr){
				$_SESSION['name']=$name;
				$_SESSION['id']=$arr['id'];
				$this->success('welcome,'.$name.' !!!',U('Uuser/user'));//U是生成一个完整的路径
			}else{
				$this->error('The user does not exit!!!',U('Index/index'));
				
			}
		}
		public function doreg(){
			$user=M('user');
			
			$demo['name']=$_POST['name'];
			$demo['password']=$_POST['password'];
			$demo['email']=$_POST['email'];
			$demo['phone']=$_POST['phone'];
			$demo['address']=$_POST['address'];
			$demo['sex']=$_POST['sex'];
			//dump($demo);
			$where['name']=$_POST['name'];
			$count=$user->where($where)->count();
			if($count){
				$this->error('This user already exists!!!');
				$this->redirect('Register/register');
			}
			$lastId=$user->add($demo);
			if($lastId){
				$this->success('Congrantulation!'.$username.' ,you just registered successfully',U('Uuser/log'));//U是生成一个完整的路径
			}else{
				$this->error('Registration failed!!!!');
			}
			
		}
	}
?>