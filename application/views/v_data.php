<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Pengajuan
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                             <th>No</th>
                                             <th>Nama Lengkap</th>
                                             <th>Foto KTP</th>
                                             <th>Foto Kartu Keluarga</th>
                                             <th> Foto Kartu Tani</th>
                                             <th>Kelompok Tani</th>
                                             <th>Luas Lahan</th>
                                             <th>Komoditas</th>
                                             <th>Nomor Telpon</th>
                                             <th>Status</th>
                                           
                                        </tr>
                                        </thead>   
                                    </tbody>
                                        <?php $no=1; foreach ($pengajuanpupuk as $key => $value) {?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td> <img src="<?= base_url('assets/gambar/'. $value->kk) ?>" width="150px"></td>
                                                <td><img src="<?= base_url('assets/gambar/'. $value->ktp) ?>" width="150px"></td>
                                                <td><img src="<?= base_url('assets/gambar/'. $value->kartutani) ?>" width="150px"></td>
                                                <td><?= $value->kelompok_tani ?></td>
                                                <td><?= $value->luas_lahan ?></td>
                                                <td><?= $value->komoditas ?></td>
                                                <td><?= $value->no_telpon ?></td>
                                                <td><?= $value->status ?></td>
                                                
                                                
                                            </tr>
                                       <?php } ?>
                                            </thead>
                                            <tbody>
                                            </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                   
                                <!-- /.panel-body -->
                            </div>