<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
    public function index()
    {
        $this->load->view('quemsomos');
    }
    
    public function login()
    {
        $this->load->view('login');
    }
    
    public function cadastrar_usuario()
    {
        $this->load->view('cadastrar_usuario');
    }
}