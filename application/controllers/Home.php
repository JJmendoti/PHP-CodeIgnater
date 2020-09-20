<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home');
    }

    public function welcome()
    {
        $message=$this->HomeModel->welcome();
        echo $message;
    }
    public function insertUser()
    {
        $response= $this->HomeModel->insertUser();
        echo "<h1>$response</h1>";
    }

    
}
