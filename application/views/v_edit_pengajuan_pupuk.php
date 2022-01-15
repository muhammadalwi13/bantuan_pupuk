<div class="col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Edit Data Pengajuan
                        </div>
                        <div class="panel-body">
                            <?php 
                            echo validation_errors(' <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ','</div>');

                        if ($this->session->flashdata('pesan')) {
                            echo validation_errors(' <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>');
                            echo $this->session->flashdata('pesan');
                            echo'</div>';
                        }
                            echo form_open('pengajuan/edit/'.$pengajuan->id_pengajuan); 
                            ?> 

<div class="form-group">
    <label>Nama Lengkap</label>
     <input name="nama" placeholder="Nama Lengkap" value="<?= $pengajuan->nama ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Foto KTP</label>
     <input name="ktp" placeholder="Foto KTP" value="<?= $pengajuan->ktp ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Foto Kartu Keluarga</label>
     <input name="kk" placeholder="Foto Kartu Keluarga" value="<?= $pengajuan->kk?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Foto Kartu Tani</label>
     <input name="kartutani" placeholder="Foto Kartu Tani" value="<?= $pengajuan->kartutani?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Nama Kelompok Tani</label>
     <input name="kelompok_tani" placeholder="Nama Kelompok Tani" value="<?= $pengajuan->kelompok_tani?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Luas Lahan</label>
     <input name="luas_lahan" placeholder="Luas Lahan" value="<?= $pengajuan->luas_lahan ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Komoditas</label>
     <input name="komoditas" placeholder="Komoditas" value="<?= $pengajuan->komoditas ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Nomor Telpon</label>
     <input name="no_telpon" placeholder="Nomor Telpon" value="<?= $pengajuan->no_telpon ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Status</label>
     <input name="status" placeholder="Status" value="<?= $pengajuan->status ?>" class="form-control" />
 </div>
 

 <div class="form-group">
    <label></label>
    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    <button type="reset" class="btn btn-sm btn-success">Reset</button>

</div>
 
 <?php echo  form_close();?>
                            
                                              
            </div>
        </div>
    </div>
</div>


