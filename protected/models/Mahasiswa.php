<?php
class Mahasiswa extends CFormModel {
	
	public $panjang;
	public $lebar;
	public $alas;
	public $tinggi;
	public $jari;	
	public $lp;
	public $ls;
	public $ll;

	
	public function rules() {
		return array (
			array('panjang,lebar,alas,tinggi,jari' , 'required'),
			array('panjang,lebar,alas,tinggi,jari','numerical','integerOnly'=>true),
			);
	}
			
	public function attributeLabels ()
	{
		return array(
			'panjang' => 'Panjang',
			'lebar' => 'Lebar',
			'alas' => 'Alas',
			'tinggi' => 'Tinggi',
			'jari' => 'Jari-jari',
			
		);
	}
	
}
?>