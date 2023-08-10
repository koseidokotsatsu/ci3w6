<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer.php');
    }
}
