	<!-- Footer section -->
	<div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-widget">
						<div class="about-widget">
						<h2 class="fw-title"><?= $konfig->judul_web ?></h2>
						<P><?= $konfig->profil_web ?></P>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<ul>
							<li class="fw-title">Kategori</li>
							<?php foreach($kategori as $categories){ ?>
							<li><a href="<?= base_url('home/kategori/'.$categories['id_kategori']) ?>"><?= $categories['nama_kategori'] ?></a></li>
							<?php }?>
							<li><a href="<?= base_url('auth') ?>">Login</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Contact</h2>
						<ul>
							<li><a href="">Alamat : <?= $konfig->alamat ?></a></li>
							<li><a href="">Email : <?= $konfig->email ?></a></li>
							<li><a href="">Telepon : <?= $konfig->no_wa ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">

					</div>
				</div>

			</div>

		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="<?= $konfig->instagram ?>" target="_blank"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="https://wa.me/<?= $konfig->no_wa ?>" target="_blank"><i class="fa fa-whatsapp"></i><span>Whatsapp</span></a>
					<a href="https://www.youtube.com/channel/UCWJPyuGcv6QPExXmZdlwejg" target="_blank"><i class="fa fa-youtube"></i><span>youtube</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer section end -->