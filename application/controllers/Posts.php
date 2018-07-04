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
    $this->load->view('posts/index', $data);
    $this->load->view('templates/Lifeblog/auth_modal');
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
    $this->load->view('templates/Lifeblog/auth_modal');
    $this->load->view('templates/Lifeblog/footer');
    $this->load->view('templates/Lifeblog/end_footer');

  }

  public function create()
  {
    $data['title'] = 'Create Post';

    $data['categories'] = $this->posts_model->get_categories();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('body', 'News Text', 'required');

    if ($this->form_validation->run() === false) {

      $this->load->view('templates/Lifeblog/header', $data);
      $this->load->view('templates/Lifeblog/topmenu');
      $this->load->view('templates/Lifeblog/post_create', $data);
      $this->load->view('templates/Lifeblog/auth_modal');
      $this->load->view('templates/Lifeblog/footer');
      $this->load->view('templates/Lifeblog/end_footer');
    } else {

      $this->posts_model->create_post();
      redirect('posts');

    }

  }

  public function delete($id)
  {
    $this->posts_model->delete_post($id);
    redirect('posts');

  }

  public function edit($slug)
  {
    $data['post'] = $this->posts_model->get_posts($slug);

    $data['categories'] = $this->posts_model->get_categories();

    if (empty($data['post'])) {
      show_404();
    }

    $data['title'] = 'Edit post';

    $this->load->view('templates/Lifeblog/header', $data);
    $this->load->view('templates/Lifeblog/topmenu');
    $this->load->view('posts/edit', $data);
    $this->load->view('templates/Lifeblog/auth_modal');
    $this->load->view('templates/Lifeblog/footer');
    $this->load->view('templates/Lifeblog/end_footer');

  }

  public function update()
  {
    $this->posts_model->update_post();
    redirect('posts');
  }

}
 ?>
