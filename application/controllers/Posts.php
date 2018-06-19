<?php

/**
 * Posts class

 */
class Posts extends CI_Controller
{

  public function index()
  {


    $data['title'] = ucfirst('Latest Posts');

    $data['posts'] = $this->posts_model->get_posts();

    $this->load->view('templates/Lifeblog/header', $data);
    $this->load->view('templates/Lifeblog/topmenu');
    $this->load->view('templates/Lifeblog/slider');
    $this->load->view('posts/index', $data);
    $this->load->view('templates/LifeBlog/auth_modal');
    $this->load->view('templates/Lifeblog/footer');
    $this->load->view('templates/Lifeblog/end_footer');
  }

  public function view($slug = NULL)
  {
    $data['post'] = $this->posts_model->get_posts($slug);

    if (empty($data['post'])) {
      show_404();
    }

    $data['title'] = $data['post']['title'];

    $this->load->view('templates/Lifeblog/header', $data);
    $this->load->view('templates/Lifeblog/topmenu');
    $this->load->view('templates/Lifeblog/news_full', $data);
    $this->load->view('templates/Lifeblog/comments');
    $this->load->view('templates/LifeBlog/auth_modal');
    $this->load->view('templates/Lifeblog/footer');
    $this->load->view('templates/Lifeblog/end_footer');

  }

  public function create()
  {
    $data['title'] = 'Create Post';

    $this->load->view('templates/Lifeblog/header', $data);
    $this->load->view('templates/Lifeblog/topmenu');
    $this->load->view('templates/Lifeblog/slider');
    $this->load->view('templates/Lifeblog/post_create', $data);
    $this->load->view('templates/LifeBlog/auth_modal');
    $this->load->view('templates/Lifeblog/footer');
    $this->load->view('templates/Lifeblog/end_footer');


  }

}
 ?>
