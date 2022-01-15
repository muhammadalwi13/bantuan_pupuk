<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>/assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Daftar Akun</p>
							</div>
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
                            echo form_open('auth/register');  
                            ?>
                            	<form class="form-auth-small" action="index.php">
								<div class="form-group">
    							<input name="nik" placeholder="NIK" value="<?= set_value('nik') ?>" class="form-control" />
								</div>

							<form class="form-auth-small" action="index.php">
								<div class="form-group">
    							<input name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>" class="form-control" />
								</div>

							<form class="form-auth-small" action="index.php">
								<div class="form-group">
    							<input name="username" placeholder="Username" value="<?= set_value('') ?>" class="form-control" />
								</div>
                            
								<div class="form-group">	
									<input name= 'password' type="password" class="form-control"value="<?= set_value('password') ?>" placeholder="Password">
								</div>
						
								<button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>

                                <p class="loginhere">
                                  Have already an account ? <a href="<?= base_url('auth') ?>" class="loginhere-link">Login here</a>
                                 </p>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
						<h3 style="color: rgb(9,88,27);margin-top: 30px;margin-bottom: 30px;" class="text-center"><strong>SYARAT PENGAJUAN!!</strong><br></h3>
        <ol>
          <li style="margin-top: 15px;font-size: 22px;">Memiliki kartu tani</li>
          <li style="margin-top: 15px;font-size: 22px;">Terdaftar dalam eRDKK dengan bukti memiliki kartu tani</li>
          <li style="margin-top: 15px;font-size: 22px;">Menjadi anggota kelompok tani</li>
          <li style="margin-top: 15px;font-size: 22px;">Luas lahan (Pangan, Hortikurtura) max 2 ha </li>
          <li style="margin-top: 15px;font-size: 22px;"><strong>Syarat Dokumen :</strong> KTP, Kartu Keluarga, Kartu Tani  </li>
         
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
</html>