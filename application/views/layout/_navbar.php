	
	<!-- Header section -->
	<header class="header-section">
    <ul class="main-menu" >
		<?php foreach($kategori as $categories){ ?>
			<li><a href="<?= base_url('home/kategori/'.$categories['id_kategori']) ?>"><?= $categories['nama_kategori'] ?></a></li>
			<?php }?> 
			<li><a href="<?= base_url('auth') ?>">Login</a></li>
    </ul>
	<div class="slicknav-menu ">
			</div>
	</header>
	<!-- Header section end -->
	<style>
 */
 .slicknav_btn,.slicknav_nav .slicknav_item{cursor:pointer}.slicknav_menu,.slicknav_menu *{box-sizing:border-box}.slicknav_btn{position:relative;display:block;vertical-align:middle;float:right;padding:.438em .625em;line-height:1.125em}.slicknav_btn .slicknav_icon-bar+.slicknav_icon-bar{margin-top:.188em}.slicknav_menu .slicknav_menutxt{display:block;line-height:1.188em;float:left;color:#fff;font-weight:700;text-shadow:0 1px 3px #000}.slicknav_menu .slicknav_icon{float:left;width:1.125em;height:.875em;margin:.188em 0 0 .438em}.slicknav_menu .slicknav_icon:before{background:0 0;width:1.125em;height:.875em;display:block;content:"";position:absolute}.slicknav_menu .slicknav_no-text{margin:0}.slicknav_menu .slicknav_icon-bar{display:block;width:1.125em;height:.125em;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;-webkit-box-shadow:0 1px 0 rgba(0,0,0,.25);-moz-box-shadow:0 1px 0 rgba(0,0,0,.25);box-shadow:0 1px 0 rgba(0,0,0,.25)}.slicknav_menu:after,.slicknav_menu:before{content:" ";display:table}.slicknav_menu:after{clear:both}.slicknav_nav li,.slicknav_nav ul{display:block}.slicknav_nav .slicknav_arrow{font-size:.8em;margin:0 0 0 .4em}.slicknav_nav .slicknav_item a{display:inline}.slicknav_nav .slicknav_row,.slicknav_nav a{display:block}.slicknav_nav .slicknav_parent-link a{display:inline}.slicknav_menu{*zoom:1;font-size:16px;background:#4c4c4c;padding:5px}.slicknav_nav,.slicknav_nav ul{list-style:none;overflow:hidden;padding:0}.slicknav_menu .slicknav_icon-bar{background-color:#fff}.slicknav_btn{margin:5px 5px 6px;text-decoration:none;text-shadow:0 1px 1px rgba(255,255,255,.75);-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#222}.slicknav_nav{clear:both;color:#fff;margin:0;font-size:.875em}.slicknav_nav ul{margin:0 0 0 20px}.slicknav_nav .slicknav_row,.slicknav_nav a{padding:5px 10px;margin:2px 5px}.slicknav_nav .slicknav_row:hover{-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;background:#ccc;color:#fff}.slicknav_nav a{text-decoration:none;color:#fff}.slicknav_nav a:hover{-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;background:#ccc;color:#222}.slicknav_nav .slicknav_txtnode{margin-left:15px}.slicknav_nav .slicknav_item a,.slicknav_nav .slicknav_parent-link a{padding:0;margin:0}.slicknav_brand{float:left;color:#fff;font-size:18px;line-height:30px;padding:7px 12px;height:44px}
	</style>