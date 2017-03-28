<?php
namespace link\Controllers;

class HomeController extends BaseController{
	public function get(){
		$this->render('link-saver.html');
	}
}