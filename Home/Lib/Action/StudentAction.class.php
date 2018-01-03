<?php
	class StudentAction extends Action{
		public function student(){
			$student=M('student');
			#var_dump($student->select());
			$m=rand(1,13);
		
			$this->assign('m',$m);
			$arr=$student->limit($m)->order('rand()')->select();
			#dump($arr);
			$sum=0;
			foreach($arr as $key){
				$sum=$sum+$key['grades'];
			}
			$avg=$sum/$m;
			
			$this->assign('avg',$avg);
			#echo $student->min('grades');
			#$ping=$student->avg('grades');
			#$d=$arr->getField('grades');
			#var_dump($d);
			$this->assign('data',$arr);
			
			$this->display();
		}
	}
?>