<?php

class Model_invoice extends CI_Model{
    public function index(){
         $nama              = $this->input->post('nama');
         $kelas             = $this->input->post('kelas');
         $no_hp           = $this->input->post('no_hp');
    

         $invoice = array(
             'nama'             => $nama,
             'kelas'            => $kelas,
             'no_hp'          => $no_hp

        );
        $this->db->insert('invoice_admin', $invoice);
        $id_invoice = $this->db->insert_id();
        
        foreach($this->cart->contents() as $item){
            $data = array(
                'id_invoice'    => $id_invoice,
                'id_brg'        => $item['id'],
                'nama_brg'      => $item['name'],
                'jumlah'        => $item['qty'],
                'harga'         => $item['price'],  
            );
            $this->db->insert('tb_pesanan', $data);
        }
        return TRUE;
     }

     public function tampil_data() {
         $result = $this->db->get('invoice_admin');
         if($result->num_rows() > 0) {
             return $result->result();
         } else{
             return false;
         }
     }

     public function ambil_id_invoice($id_invoice){
         $result = $this->db->where('id', $id_invoice)->limit(1)->get('invoice_admin');

         if($result->num_rows() > 0){
             return $result->row();
         }else{
             return false;
         }
     }

     public function ambil_id_pesanan($id_invoice){
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');

        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    
}