<?php
	class YuyueAction extends CommenAction{
		public function index(){
			$keshi=M('keshi');
			//dump($keshi->select());
			$this->assign("keshi",$keshi->select());
			$this->display();
		}
		public function keshi(){
			$keshi=$_GET['name'];
			$this->assign('keshi',$keshi);
			$doctor=M('doctor');
			
			$where['keshi']=$keshi;
			$data=$doctor->where($where)->select();
			//dump($data);
			
			$this->assign('data',$data);
			$this->display();
		}
	}
?>