<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index() {
    	$this->load->model('blog_model');
    	$data['postlist'] = $this->blog_model->getPostList();
    	$this->load->view('postlist', $data);

    }


	public function create()
	{
		$this->load->model('blog_model');

    	$this->form_validation->set_rules('judul', 'Judul', 'trim|required');

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('input_post');
    	}else {
    		$this->blog_model->insertPost();
    		$this->load->view('sukses_input');
    	}
	}


	 public function update($id) {
    	$this->load->model('blog_model');
    	$this->form_validation->set_rules('judul', 'Judul', 'trim|required');

    	$data['post']=$this->blog_model->getPost($id);

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('edit_post', $data);
    	}else {
    		$this->blog_model->updateById($id);
    		$this->load->view('sukses_edit');
    	}
    }

    public function delete($id) {
    	$this->load->model('blog_model');

    	$data['post']=$this->blog_model->getPost($id);
    	$this->blog_model->deleteById($id);
    	$this->load->view('sukses_delete');
    }
}