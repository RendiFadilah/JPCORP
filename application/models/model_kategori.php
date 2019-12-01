<?php

class Model_kategori extends CI_Model{
    public function data_menu_hari_senin(){
       return $this->db->get_where("tb_barang", array('kategori' => 'menu hari senin'));
    }
    public function data_menu_hari_selasa(){
        return $this->db->get_where("tb_barang", array('kategori' => 'menu hari selasa'));
     }
     public function data_menu_hari_rabu(){
        return $this->db->get_where("tb_barang", array('kategori' => 'menu hari rabu'));
     }
     public function data_menu_hari_kamis(){
        return $this->db->get_where("tb_barang", array('kategori' => 'menu hari kamis'));
     }
     public function data_menu_hari_jumat(){
        return $this->db->get_where("tb_barang", array('kategori' => 'menu hari jumat'));
     }
}