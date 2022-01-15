<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Daftar User
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr>
                                             <th>No</th>
                                             <th>NIK</th>
                                             <th>Nama</th>
                                             <th>Username</th>
                                             
                                           
                                           
                                        </tr>
                                        </thead>   
                                    </tbody>
                                        <?php $no=1; foreach ($user as $key => $value) {?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $value->nik ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td><?= $value->username ?></td>
                                               
                                               
                                                
                                            </tr>
                                       <?php } ?>
                                            </thead>
                                            <tbody>
                                            </table>
                                    </div> 
                                    <!-- /.table-responsive -->
                                   
                                <!-- /.panel-body
                            </div>