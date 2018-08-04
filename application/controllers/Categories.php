<?php
class Categories extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Categories List';

        $data['categories'] = $this->category_model->get_categories();

        $this->load->view('templates/Lifeblog/header', $data);
        $this->load->view('templates/Lifeblog/topmenu');
        $this->load->view('templates/Lifeblog/categories_list', $data);
        $this->load->view('templates/Lifeblog/footer');
        $this->load->view('templates/Lifeblog/end_footer');

    }

    public function create()
    {
        $data['title'] = 'Create Category';

        
        $this->form_validation->set_rules('category', 'Category', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/Lifeblog/header', $data);
            $this->load->view('templates/Lifeblog/topmenu');
            $this->load->view('templates/Lifeblog/category_create', $data);
            $this->load->view('templates/Lifeblog/footer');
            $this->load->view('templates/Lifeblog/end_footer');

        } else {
            $this->category_model->create_category();
            redirect('categories');
        }
        
    }

    public function posts($id)
        {
            $data['title'] = $this->category_model->get_categories($id)->name;

            $data['posts'] = $this->post_model->get_posts_by_category($id);

            $this->load->view('templates/Lifeblog/header', $data);
            $this->load->view('templates/Lifeblog/topmenu');
            $this->load->view('templates/posts/index', $data);
            $this->load->view('templates/Lifeblog/footer');
            $this->load->view('templates/Lifeblog/end_footer');




        }

}


?>