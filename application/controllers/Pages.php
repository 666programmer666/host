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
    $this->load->view('templates/Lifeblog/topmenu');
    $this->load->view('templates/Lifeblog/slider');
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/LifeBlog/auth_modal');
    $this->load->view('templates/Lifeblog/footer');
    $this->load->view('templates/Lifeblog/end_footer');
  }

}
 ?>
