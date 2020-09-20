<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{

    public function welcome()
    {
        return 'welcome Model';
    }
    public function insertUser()
    {
        $user = array(
            "name" => "Jhon",
            "lastname" => "Mendoza",
            "identification" => "100340",
            "email	" => "jhon@correo.com",
            "city" => "Medellín"
        );
        //inser into data in database
        $this->db->insert("user", $user);
        return "User added SuccessFuly";
    }
}
