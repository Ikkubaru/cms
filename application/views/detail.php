<?php require_once('layout/_header.php') ?>
<body>
<?php require_once('layout/_navbar.php') ?>
	<!-- Blog section -->
	<section class="game-section character-one">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
                    <?php foreach($konten as $content){ ?>
					<div class="blog-post single-post">
						<img src="<?= base_url('assets/upload/konten/'.$content['foto']) ?>" alt="">
						<div class="post-date"><?= $content['tanggal'] ?></div>
						<h3><?= $content['judul'] ?></h3>
						<div class="post-metas">
							<div class="post-meta">By <?= $content['nama'] ?></div>
							<div class="post-meta">kategori</div>
						</div>
                        <p><?= $content['keterangan'] ?></p>
                        <?php }?>
			</div>
            <!-- <div class="row">
						
					</div>
				</div>
				<div class="col-lg-3 sidebar">
					<div class="sb-widget">
						
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Kategori</h2>
                    <?php foreach($kategori as $categories){ ?>
						<ul class="sb-cata-list">
							<li><a href=""><?= $categories['nama_kategori'] ?></a></li>
						</ul>
                        <?php }?>   
					</div> -->
		</div>
	</section>
	<!-- Blog section end -->
	<?php require_once('layout/_footer.php') ?>															
	<?php require_once('layout/_js.php') ?>	
	</body>
</html>
