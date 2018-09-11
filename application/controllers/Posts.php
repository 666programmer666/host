<?php

/**
 * Posts class

 */
class Posts extends CI_Controller
{

  public function index()
  {


    $data['title'] = ucfirst('Последние статьи');

    $data['posts'] = $this->posts_model->get_posts();

    $this->load->view('templates/Lifeblog/header', $data);
    $this->load->view('templates/Lifeblog/left_sidebar');
    $this->load->view('templates/LifeBlog/page_title');
    $this->load->view('posts/index', $data);
    $this->load->view('templates/Lifeblog/right_sidebar');
    $this->load->view('templates/Lifeblog/footer');
  }

  public function view($slug = NULL)
  {
    $data['post'] = $this->posts_model->get_posts($slug);

    if (empty($data['post'])) {
      show_404();
    }

    $data['title'] = $data['post']['title'];

    $this->load->view('templates/Lifeblog/header', $data);
    $this->load->view('templates/Lifeblog/left_sidebar');
    $this->load->view('templates/LifeBlog/page_title');
    $this->load->view('templates/Lifeblog/news_full', $data);
    $this->load->view('templates/Lifeblog/comments');
    $this->load->view('templates/Lifeblog/right_sidebar');
    $this->load->view('templates/Lifeblog/footer');

  }

  public function create()
  {
    $data['title'] = 'Создать статью';

    $data['categories'] = $this->posts_model->get_categories();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('body', 'News Text', 'required');

    if ($this->form_validation->run() === false) {

      $this->load->view('templates/Lifeblog/header', $data);
      $this->load->view('templates/Lifeblog/left_sidebar');
      $this->load->view('templates/LifeBlog/page_title');
      $this->load->view('templates/Lifeblog/post_create', $data);
      $this->load->view('templates/Lifeblog/right_sidebar');
      $this->load->view('templates/Lifeblog/footer');
    } else {
      $config['upload_path'] = './assets/Lifeblog/images/posts';
      $config['allowed_types'] = 'gif|png|jpg';
      $config['max_size'] = '2048';
      $config['max_width'] = '5000';
      $config['max_height'] = '5000';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) {
        $errors = array('error' => $this->upload->display_errors());
        $post_image = 'noimages.jpg';
      } else {
        $data = array('upload_data' => $this->upload->data());
        $post_image = $_FILES['userfile']['name'];
      }


      $this->posts_model->create_post($post_image);
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

    $data['title'] = 'Редактировать статью';

    $this->load->view('templates/Lifeblog/header', $data);
    $this->load->view('templates/Lifeblog/left_sidebar');
    $this->load->view('templates/LifeBlog/page_title');
    $this->load->view('posts/edit', $data);
    $this->load->view('templates/Lifeblog/right_sidebar');
    $this->load->view('templates/Lifeblog/footer');

  }

  public function update()
  {
    $this->posts_model->update_post();
    redirect('posts');
  }

}
 ?>
