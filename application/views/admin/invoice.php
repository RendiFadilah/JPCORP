<div class="container-fluid"> 
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Kelas</th>
            <th>No Telp</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv): ?>

        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->kelas ?></td>
            <td><?php echo $inv->no_hp ?></td>
            <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
        </tr>

<?php endforeach; ?>

    </table>
</div>
