<?php

/**
 * Pages class

 */
class Pages extends CI_Controller
{

  public function view($page = 'home')
  {
    if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
      show_404();
    }

    $data['title'] = ucfirst($page);

    $this->load->view('templates/Lifeblog/header', $data);
    $this->load->view('templates/Lifeblog/left_sidebar');
    $this->load->view('templates/LifeBlog/page_title');
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/Lifeblog/right_sidebar');
    $this->load->view('templates/Lifeblog/footer');
  }

}
 ?>
