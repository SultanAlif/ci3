<?php 

/**
 * summary
 */
class Blog_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }

    public function getPostList () {
    	$query = $this->db->query("SELECT * FROM post");
		return $query->result_array();
    }

    public function insertPost() {
    	$data = array(
    			'judul' => $this->input->post('judul'),
    			'konten' => $this->input->post('konten'),

    		);
    	$this->db->insert('post', $data);
    }

    public function getPost($id) {
    	$this->db->where('id', $id);
    	$query = $this->db->get('post');
    	return $query->result();
    }

    public function updateById($id) {
    	$data = array(
    		'judul' => $this->input->post('judul'),
    		'konten' => $this->input->post('konten'),
    		);

    	$this->db->where('id', $id);
    	$this->db->update('post', $data);
    }

    public function deleteById($id) {
    	$this->db->where('id', $id);
    	$this->db->delete('post');
    }
}
 ?>