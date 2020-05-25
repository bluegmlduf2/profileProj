<?php defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	private $responseType = 'json'; // json or jsonp
	/**
	 * onload
	 */
	public function __construct()
    {
        parent::__construct();
		$this->load->database();
	}

	/**
	 * 메인페이지 호출
	 */
	public function index() {
		$this->load->model('Member_model');

		$default_data=array('title'=> 'member page title',
			'content'=> 'member page test'
		);

		$this->load->view('layout/header', $default_data);
		$this->load->view('page/index', $data);
		$this->load->view('layout/footer', $default_data);
		//$string = $this->load->view('welcome_message', '', true);//해당 화면을 데이터로 저장
	}

	

}
