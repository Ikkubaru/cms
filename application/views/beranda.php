<?php require_once('layout/_header.php') ?>
<body>
	<?php require_once('layout/_navbar.php') ?>
	<?php require_once('layout/_carousel.php') ?> 
	<!-- Blog section -->
	<section class="blog-section spad" >
		<div class="container">
			<div class="row" style="margin:10px;">
				<div class="col-lg-8 blog-posts" >
					<div class="blog-post featured-post" >
            <?php foreach($content as $contents){ ?> <br>
						<img src="<?= base_url('assets/upload/konten/'.$contents['foto']) ?>" alt="">
						<div class="post-date"><?= $contents['tanggal'] ?></div>
						<h3></h3>
						<div class="post-metas">
							<strong>
								<div class="post-meta">By <?= $contents['nama'] ?></div>
							</strong>
							<strong>
								<h2 style="color:white;">
									<?= $contents['judul'] ?>
								</h2>
							</strong>
						<a href="<?= base_url('home/artikel/'.$contents['slug']) ?>" >
						<button class="site-btn" style="padding:10px; margin:10px;">Read More</button></a>
						</div>
            			<?php }?>
					</div>
					<div class="row">
					</div>
				</div>
				<div class="col-lg-4 sidebar">
				<div class="sb-widget" >
				<!-- <form class="sb-search" method="post" action="<?= base_url('home/search') ?>"> 
							<input type="text" placeholder="Search" name="keyword">
							<input type="submit" value="search">
						</form> <br> -->
						<h2 class="sb-title">Kategori</h2>
						<ul class="sb-cata-list">
							<?php foreach($kategori as $categories){ ?>
							<li><a href="<?= base_url('home/kategori/'.$categories['id_kategori']) ?>"><?= $categories['nama_kategori'] ?>
							 <span></span></a></li>
							<?php }?>   
						</ul> <br>  <br>
						<h2 class="sb-title">Latest Post</h2>
								<?php foreach($latest_post as $post){ ?>
									<img src="<?= base_url('assets/upload/konten/'.$post['foto']) ?>" alt="">
									<a href="<?= base_url('home/artikel/'.$post['slug']) ?>">
										<h4 class="sb-title"><?= $post['judul'] ?></h4>
									</a>
									<p>Dibuat pada <?= $post['tanggal'] ?></p>
								<?php }?>
					</div>	
			</div>
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</section>
	<!-- Blog section end -->
	<?php require_once('layout/_footer.php') ?>															
	<?php require_once('layout/_js.php') ?>															
	</body>
</html>
