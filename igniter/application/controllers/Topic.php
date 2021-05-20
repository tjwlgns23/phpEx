<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('topic_model');
		log_message('debug', 'topic 초기화');
	}

	function index(){
		$topics = $this->topic_model->gets();
		$this->load->view('header');
		$this->load->view('topic_list', array('topics'=>$topics));
		$this->load->view('main');
		$this->load->view('footer');
	}

	function _head(){
		var_dump($this->session->userdata('session_test'));
		$this->session->set_userdata('session_test', 'egoing');

		$this->load->helper(array('url', 'HTML', 'date_helper'));
		$this->load->view('header');
		$topics = $this->topic_model->gets();
		$this->load->view('topic_list', array('topics'=>$topics));
	}

	function get($id){
		log_message('debug', 'get 호출');
		$topics = $this->topic_model->gets();
		$topic = $this->topic_model->get($id);

		//log
		if(empty($topic)){
			log_message('error', 'topic의 값이 없습니다.');
			show_error('topic의 값이 없습니다.');
		}
		log_message('info', var_export($topic,1));

		$this->load->helper(array('url', 'HTML', 'date_helper'));
		$this->load->view('header');
		$this->load->view('topic_list', array('topics'=>$topics));
		$this->load->view('get', array('topic'=>$topic));
		
		$this->load->view('footer');
	}

	function add(){

		if(!$this->session->userdata('is_login')){
			$this->load->helper('url');
			redirect('/auth/login');
		}

		$this->_head();
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('title', '제목', 'required');
		$this->form_validation->set_rules('description', '본문', 'required');

		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('add');
			}
		else
			{
				$topic_id=$this->topic_model->add($this->input->post('title'), $this->input->post('description'));
				$this->load->helper('url');
				redirect('topic/get/'.$topic_id);
			}

		$this->load->view('footer');
	}

	function update($id){
		
		$topic = $this->topic_model->get($id);

		$this->_head();

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('title', '제목', 'required');
		$this->form_validation->set_rules('description', '본문', 'required');

		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('update', array('topic'=>$topic));
			}
		else
			{
				$topic_id=$this->topic_model->update($topic->id, $this->input->post('title'), $this->input->post('description'));
				$this->load->helper('url');
				redirect('topic/get/'.$topic_id);
			}

		$this->load->view('footer');
	}

	function delete($id){
		$topic = $this->topic_model->get($id);
		$this->topic_model->delete($topic->id);
		$this->load->helper('url');
		redirect('topic/');
	}

	function upload_form(){
		$this->_head();
		$this->load->view('upload_form');
		$this->load->view('footer');
	}

	function upload_receive(){
		// 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
		$config['upload_path'] = './static/img';
		// git,jpg,png 파일만 업로드를 허용한다.
		$config['allowed_types'] = 'gif|jpg|png';
		// 허용되는 파일의 최대 사이즈
		$config['max_size'] = '100';
		// 이미지인 경우 허용되는 최대 폭
		$config['max_width']  = '1024';
		// 이미지인 경우 허용되는 최대 높이
		$config['max_height']  = '768';
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('user_upload_file')){
			echo $this->upload->display_errors();
		}else{
			$data = array('upload_data'=>$this->upload->data());
			echo "성공";
			var_dump($data);
		}
	}
}
?>