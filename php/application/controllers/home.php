<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends TreeTrailController {

  public function index_get(){
    $this->load->model('session_model', 'session_m');

    $data = ['isLogin' => $this->session_m->isLogin()];

    $this->render('home',$data, [
      'layout' => 'layout'
    ]);
  }
  
}
