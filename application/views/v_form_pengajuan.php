<div class="form-row">
    <div class="center">
     <div class="col-sm">
        <div class="panel panel-primary">
            <div class="panel-heading">Form Pengajuan  Subsidi</div>
            <div class="panel-body">
            <div class="panel-body">
                            <?php 
                            echo validation_errors(' <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ','</div>');

                        if ($this->session->flashdata('pesan')) {
                            echo  '<div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                            echo $this->session->flashdata('pesan');
                            echo'</div>';
                        }
                            
                            ?>
                    <form action="<?= base_url('bantuan/input') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-5">
                            <label>Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control" value="<?= set_value('nama') ?>"  placeholder="Nama" required>
                        </div>
                    
                        <div class="form-group col-md-5">
                            <label>KTP</label>
                            <input name="ktp" type="file" accept=".jpg" class="form-control" value="<?= set_value('ktp') ?>"  placeholder="Kertu Tanda Penduduk" required>
                        </div>
                    
                        <div class="form-group col-md-5">
                            <label>Kartu Keluarga</label>
                            <input name="kk" type="file" class="form-control" value="<?= set_value('kk') ?>"  placeholder="Kartu Keluarga" required>
                        </div>
                    
                        <div class="form-group col-md-5">
                            <label>Kartu Tani</label>
                            <input name="kartutani" type="file" class="form-control" value="<?= set_value('kartutani') ?>"  placeholder="Kartu Tani" required>
                        </div>
                               
                        <div class="form-group col-md-5">
                            <label>Kelompok Tani</label>
                            <input name="kelompok_tani" type="text" class="form-control" value="<?= set_value('kelompok_tani') ?>"  placeholder="Kelompok Tani" required>
                        </div>
                        
                              
                        <div class="form-group col-md-5">
                            <label>Luas Lahan (m<sup>2</sup>)</label>
                            <input name="luas_lahan" type="text" class="form-control" value="<?= set_value('luas_lahan') ?>"  placeholder="Luas Lahan" required>
                        </div>
                        
                              
                        <div class="form-group col-md-5">
                            <label>Komoditas</label>
                            <input name="komoditas" type="text" class="form-control" value="<?= set_value('komoditas') ?>"  placeholder="Komoditas" required>
                        </div>
                        
                              
                        <div class="form-group col-md-5">
                            <label>Nomor Telpon</label>
                            <input name="no_telpon" type="text" class="form-control" value="<?= set_value('nomo_telpon') ?>"  placeholder="Nomor Telpon" required>
                        </div>

                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-success">Reset</button>
                        </div>
                    </form>                            
                                              
            </div>
        </div>
    </div>
</div>
</div>
            </div>
        </div>

    </div>

</div>
