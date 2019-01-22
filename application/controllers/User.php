<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function index()
    {
        $data['konten']="home";
        $this->load->view('template', $data);
    }
    public function Profil()
    {
        $data['konten']="Profil";
        $this->load->view('template', $data);
    }
    public function gallery()
    {
        $data['konten']="gallery";
        $this->load->view('template', $data);
    }
    public function event()
    {
        $data['konten']="event";
        $this->load->view('template', $data);
    }
}

?>