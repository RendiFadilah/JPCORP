<?php

Class Laporan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('pdf');
    }
}