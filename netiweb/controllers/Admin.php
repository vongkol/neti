<?php

class Admin extends CI_Controller{
   public function __construct()
    {
        parent:: __construct();
              
    }
    public function index()
    {
        $data['title']="Net I - Administration";
        $this->load->view("master/header",$data);
    }
    public function login()
    {
        $data['title'] = "User Authentication";
        $this->load->view("template/header",$data);
        $this->load->view("master/login");
        $this->load->view("template/footer");
    }
}
