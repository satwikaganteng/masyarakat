<div class="card shadow">
    <div class="card-header">
        <a href="masyarakat.php" class="btn btn-primary btn-icon-split"> 
        <span class=" icon text-white-5">
            <i class="fa fa-arrow-left"></i>
        </span>
        <span class="text">kembali</span>
    </a>
</div>
<div class="card-body">
<form action="post" action="proses=pengaduan.php" enctype="multipart/form-data">

<div class="form-group">
    <label style="font-size: 18px">tanggal_Pengaduan</label><br>
    <input type="text" name="tgl_pengaduan" class="form_control" readonly value="<?= date('Y/m/d'); ?>">
</div>
<div class="form-group">
    <label style="font-size: 18px">isi_laporan</label>
    <textarea name="isi_laporan" class="form-control" required></textarea>
</div>
<div class="form-group">
    <label style="font-size: 18px">foto</label>
    <input type="file" required class="form-control" name="foto" accept="image/*">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">SIMPAN</button>
</div>
</form> 

</div>
</div>