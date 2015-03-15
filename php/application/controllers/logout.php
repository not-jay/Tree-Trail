<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends TreeTrailController {

  public function index_get(){
    $this->session->sess_destroy();
    redirect('/');
  }

  private function renderPageWithData($data = []){
    $this->render('home', $data, [
      'layout' => 'layout'
    ]);
  }

  // Override because we want the admin to visit logout, instead of redirect
  public function redirectToDashboardIfSuperAdmin(){}
  
}
