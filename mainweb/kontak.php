<?php include('home.php'); ?>
	<section id="kontak">
	<div class="container">
		<h3>Hubungi Kami</h3>
		<p>Bila ada kritik dan saran silahkan hubungi kami melalui kontak form yang terdapat di bawah ini</p>
	<form method="post" action="mainweb/kontak-proses.php">
	<div class="row uniform">
	<div class="6u 12u(xsmall)"><input type="text" name="nama" id="nama" placeholder="Nama" /></div>
	
	<div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div></div>

	<div class="row uniform">
	<div class="12u"><input type="text" name="judul" id="judul" placeholder="judul" /></div></div>
	<div class="row uniform">
	<div class="12u"><textarea name="pesan" id="pesan" placeholder="pesan" rows="6"></textarea></div></div>
<input type="hidden" name="tanggal" id="tanggal" value="<?php echo date("d-m-y h:i:s");?>" />
<input type="hidden" name="ip" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
	<div class="row uniform">
	<div class="12u">
	<ul class="actions">
	<li><input type="submit" class="special" value="Kirim pesan" /></li>
	<li><input type="reset" value="Reset Form" /></li>
	</ul>
	</div>
	</div>
		</form>
	</div>
							</section>