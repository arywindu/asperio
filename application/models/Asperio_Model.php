<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asperio_Model extends CI_Model
{
    // Function to handle sign in user admin
    public function login_user($username, $pass){
        $this->db->select('*');
        $this->db->from('bb_admin');
        $this->db->where('username', $username);
        $this->db->where('password', md5($pass));

        if($query = $this->db->get()){
            return $query->row_array();
        }
        else{
            return false;
        }
    }
    // Function to handle add article 
    public function add_article($data)
    {
        $insert = $this->db->insert('bb_article', $data);

        if($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    // Function to handle update article
    public function update_article($id, $data)
    {
       
        $this->db->set('title', $data['title']);        
        $this->db->set('lead_article', $data['lead_article']);
        $this->db->set('article', $data['article']);
        $this->db->set('keywords', $data['keywords']);
        $this->db->set('category', $data['category']);
        $this->db->set('is_published', $data['is_published']);
        $this->db->where('id', $id);

        $update = $this->db->update('bb_article');

        if($update)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function update_image_article($id)
    {
        $this->db->set('img', $this->upload->data('file_name'));
        $this->db->where('id', $id);
        return $this->db->update('bb_article');
    }
    // Function to handle get all article
    public function get_article()
    {
        $this->db->from('bb_vw_article');
        $this->db->order_by('created_date', 'DESC');       
        // $this->db->where('is_published', '1');

        $query = $this->db->get();

        return $query->result();
    }
    public function get_article_pagination($number, $offset)
    {
        return $query = $this->db->get('bb_vw_article', $number, $offset)->result();
    }
    public function get_article_row($category_name)
    {
        return $this->db->get_where('bb_vw_article', array('category' => $category_name))->num_rows();
    }
    // Function to handle get related article from the same category
    public function get_related_article($id_category, $slug)
    {
        $this->db->from('bb_article');
        $this->db->order_by('created_date', 'RANDOM');
        $this->db->where('category', $id_category);
        $this->db->where_not_in('slug', $slug);
        $this->db->limit('3');
        $query = $this->db->get();

        return $query->result();
    }
    // Function to handle get all article filtered by category name
    public function get_article_from_category($category_name, $limit, $start_index)
    {
        
        // $this->db->from('bb_vw_article');        
        // $this->db->where('category', $category_name);
        // $this->db->order_by('created_date','DESC');        
        // $query = $this->db->get();
        $query = $this->db->get_where('bb_vw_article', array('category' => $category_name), $limit, $start_index);        
        $this->db->order_by('created_date', 'DESC');

        return $query->result();
    }
    
    // Function to handle get all article using limit
    public function get_article_using_limit($limit)
    {
        $this->db->from('bb_vw_article');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit);

        $query = $this->db->get();

        return $query->result();
    }
    // Function to handle get all article using limit    
    public function get_article_detail($slug = FALSE)
    {
        if($slug == TRUE)
        {            
            $query = $this->db->get_where('bb_vw_article', array('slug' => $slug));

            return $query->result();        
        }
        else
        {
            return false;
        }
    }
    // Function to handle get all article category
    public function get_article_category()
    {
        $this->db->from('bb_article_category');
        $this->db->order_by('category_name', 'ASC');
        $this->db->where('is_active', '1');

        $query = $this->db->get();

        return $query->result();
    }
    // Function to handle get article from id
    public function get_article_from_id($id)
    {
        $this->db->from('bb_vw_article');
        $this->db->where('id', $id);

        $query = $this->db->get();

        return $query->result();
    }
    // Function to handle delete selected article
    public function delete_article($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('bb_article');
    }
    function getwebinarbyslug($slug)
    {
        $this->db->from('bb_webinar');
        $this->db->where('slug', $slug);

        $query = $this->db->get();

        return $query->row();
   }

    /* 
    Section visitor end
    */ 
    public function get_all(){
            return $this->db->get('bb_article')->result();
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('bb_article');
        $this->db->like('article',$keyword);
        return $this->db->get()->result();
    }
        // return $this->db->get()->result();
}
?>