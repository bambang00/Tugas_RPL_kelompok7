<?php
class MahasiswaController extends Controller{
	
	public function actionCreate() {
		$model = new Mahasiswa();
		if(isset($_POST['Mahasiswa']))
		{
			$model->attributes=$_POST['Mahasiswa'];
			if($model->validate())
				return $this->render('view',array('model'=>$model));
		}
		return $this->render('create',array('model'=>$model));
	}
}
?>