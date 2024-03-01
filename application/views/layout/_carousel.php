<!-- Hero section -->
<section class="hero-section">
		<div class="hero-slider owl-carousel">
      <?php foreach($carousel as $carosel){ ?>
			<div class="hero-item set-bg" data-setbg="<?= base_url('assets/upload/carousel/'.$carosel['foto']) ?>">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<h2><?= $carosel['judul'] ?></h2>
						</div>
					</div>
				</div>
			</div>
      <?php }?>
		</div>
	</section>
	<!-- Hero section end -->