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

        $this->form_validation->set_rules('title', 'Judul', 'required|is_unique[blogs.post_title]',
   array(
       'required'      => 'Isi %s donk, males amat.',
       'is_unique'     => 'Judul ' .$this->input->post('title'). ' sudah ada bosque.'
   ));

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

        $this->form_validation->set_rules('text', 'Konten', 'required|min_length[8]',
   array(
       'required'      => 'Isi %s lah, hadeeh.',
       'min_length'    => 'Isi %s kurang panjang bosque.',
   ));

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