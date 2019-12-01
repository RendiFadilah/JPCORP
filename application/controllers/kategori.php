<?php

class Kategori extends CI_Controller{
    public function menu_hari_senin(){
        $data['menu_hari_senin'] = $this->model_kategori->data_menu_hari_senin()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('menu_hari_senin', $data);
        $this->load->view('templates/footer');
    }
    public function menu_hari_selasa(){
        $data['menu_hari_selasa'] = $this->model_kategori->data_menu_hari_selasa()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('menu_hari_selasa', $data);
        $this->load->view('templates/footer');
    }
    public function menu_hari_rabu(){
        $data['menu_hari_rabu'] = $this->model_kategori->data_menu_hari_rabu()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('menu_hari_rabu', $data);
        $this->load->view('templates/footer');
    }
    public function menu_hari_kamis(){
        $data['menu_hari_kamis'] = $this->model_kategori->data_menu_hari_kamis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('menu_hari_kamis', $data);
        $this->load->view('templates/footer');
    }
    public function menu_hari_jumat(){
        $data['menu_hari_jumat'] = $this->model_kategori->data_menu_hari_jumat()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('menu_hari_jumat', $data);
        $this->load->view('templates/footer');
    }
    
    
}