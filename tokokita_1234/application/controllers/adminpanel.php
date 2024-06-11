<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Adminpanel extends CI_Controller {
    public function index(){
        $this->load->view('admin/login');
    }

    public function dashboard(){
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/dashboard');
    }
}