<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if($keranjang = $this->cart->contents()){
                    foreach($keranjang as $item){
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',', '.');
                 ?>
            </div><br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            
            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan'); ?> ">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" class="form-control" name="kelas" placeholder="Kelas">
                </div>
                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telpon Anda">
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>


            </form>

            <?php
        } else {
            echo "<h4>Keranjang Belanja Anda Masih Kosong   ";
        } 
            ?>
        </div>

    
        <div class="col-md-2"></div>
    </div>
</div>