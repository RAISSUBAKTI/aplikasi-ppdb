<!-- Wrapper -->
<div id="wrapper">
<!-- Main -->
<div id="main">
<!-- One Tentang Sekolah -->
<section id="tentang">
<div class="container">
<header class="major">
<h2><?php echo "$ten[judul]"; ?></h2>
</header>
<p><?php echo "$ten[tentang]"; ?></p>
</div>
</section>
<!-- Two Visi Misi-->
<section id="visimisi">
<div class="container">
<h3>Visi dan Misi <?php echo "$ten[judul]"; ?></h3>
<p>Sekolah ini memiliki visi dan misi sebagai berikut,</p>
<ul class="feature-icons">
<?php while($vis=mysqli_fetch_array($query)){ ?>
<li class="fa-users"><?php echo $vis['visi_misi'];?></li>
<?php }?>
</ul>
</div>
</section>
<!-- Three -->
<section id="fasilitas">
<div class="container">
<h3>Fasilitas di <?php echo "$ten[judul]"; ?></h3>
<p>Berikut ini adalah beberapa fasilitas yang terdapat di <?php echo "$ten[judul]";?></p>
<div class="features">
<?php while($fas=mysqli_fetch_array($query2)){ ?>
<article>
<a href="#" class="image"><img src="images/fasilitas/<?php echo "$fas[gambar]"; ?>" alt="logo" /></a>
<div class="inner">
<h4><?php echo "$fas[nama_fasilitas]"; ?></h4>
<p><?php echo "$fas[deskripsi_fasilitas]"; ?></p>
</div>
</article>
<?php }?>
</div></div></section>
<!-- End wrapper And Main -->
						
</div>
</div>
					
