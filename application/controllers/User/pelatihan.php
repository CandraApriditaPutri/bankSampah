<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pelatihan extends CI_Controller {

    public function index()
    {
        $this->load->view('User/pelatihan/index');
    }
}
?>