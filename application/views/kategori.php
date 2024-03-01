<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?= $nama_kategori ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google font -->
	<link href="<?= base_url('https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap') ?>" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/magnific-popup.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/animate.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/style.css"/>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<?php require_once('layout/_navbar.php') ?>
<br><br>
<!-- Blog section -->
<section class="blog-section spad">
    <div class="container">
            <h2 style="color:white; text-align:center;" ><?=  $nama_kategori?></h2> <br>
			<div class="row">
				<div class="col-lg-12 blog-posts">
					<div class="blog-post featured-post">
                            <?php foreach($konten as $content){ ?>

						<img src="<?= base_url('assets/upload/konten/'.$content['foto']) ?>" alt="">
						<div class="post-date"><?= $content['tanggal'] ?></div>
						<h2 style="color:white;"><?= $content['judul'] ?></h2>
						<div class="post-metas">
							<div class="post-meta">By <?= $content['nama'] ?></div>
						</div>
						<a href="<?= base_url('home/artikel/'.$content['slug']) ?>" class="site-btn">Read More</a>
            			    <?php }?>
					</div>
					<div class="row">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->
    <?php require_once('layout/_footer.php') ?>															
	<?php require_once('layout/_js.php') ?>	
	</body>
</html>
