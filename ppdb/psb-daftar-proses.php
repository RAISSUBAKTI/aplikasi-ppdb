
<?php
//Melakukan kontrol pada kunci
include('system/conf/psb-koneksi.php');
$perintah="SELECT * FROM tpdb_kunci_set"; 
$jalankan=mysqli_query($koneksi,$perintah); 
$data=mysqli_fetch_array($jalankan); 
$status="yes"; 
if($data['setkunci']==$status){ 
	include('system/conf/sesi.php');  
}else{
	
}
?>
<?php
include('system/conf/psb-koneksi.php');
//cekking dengan menggunakan isset, jika kosong tampilkan pesan bahwa data kosng
$direct="daftar";
$a=true;
if(isset($_POST['nama'])==""){
echo "Data nama tidak boleh kosong<br/>";
$direct="daftar";
$a=false;
}
$b=true;
if(isset($_POST['tempat_lahir'])==""){
	echo "Data tempat lahir tidak boleh kosong<br/>";
	$direct="daftar";
	$b=false;
}
$c=true;
if(isset($_POST['tanggal'])==""){
	echo "Data tanggal tidak boleh kosong<br/>";
	$direct="daftar";
$c=false;
}
$d=true;
if(isset($_POST['jenis_kelamin'])==""){
	echo "Data jenis kelamin tidak boleh kosong<br/>";
	$direct="daftar";
$d=false;
}
$e=true;
if(isset($_POST['sekolah'])==""){
	echo "Data Sekolah tidak boleh kosng<br/>";
	$direct="daftar";
$e=false;
}
$f=true;
if(isset($_POST['nisn'])==""){
	echo "Data NISN tidak boleh kosong<br/>";
	$direct="daftar";
$f=false;
}
$g=true;
if(isset($_POST['orang_tua'])==""){
	echo "Data Orang tua tidak boleh kosong<br/>";
	$direct="daftar";
$g=false;
}
$h=true;
if(isset($_POST['alamat'])==""){
	echo "Data Alamat tidak boleh kosong<br/>";
	$direct="daftar";
$h=false;
}
$h2=true;
if(isset($_POST['rt'])==""){
	echo "Data RT tidak boleh kosong<br/>";
	$direct="daftar";
$h2=false;
}
$h3=true;
if(isset($_POST['rw'])==""){
	echo "Data RW tidak boleh kosong<br/>";
	$direct="daftar";
$h3=false;
}
$h4=true;
if(isset($_POST['desa'])==""){
	echo "Data Desa tidak boleh kosong<br/>";
	$direct="daftar";
$h4=false;
}
$h5=true;
if(isset($_POST['kecamatan'])==""){
	echo "Data Kecamatan tidak boleh kosong<br/>";
	$direct="daftar";
$h5=false;
}
$i=true;
if(isset($_POST['kota'])==""){
	echo "Data Kota tidak boleh kosong<br/>";
	$direct="daftar";
$i=false;
}
$j=true;
if(isset($_POST['provinsi'])==""){
	echo "Data Provinsi Tidak Boleh Kosong<br/>";
	$direct="daftar";
$j=false;
}
$k=true;
if(isset($_POST['no_tlp'])==""){
	echo "Data nomor telepon tidak boleh kosong";
	$direct="daftar";
$k=false;
}
 echo "<meta http-equiv=\"refresh\" content=\"3;URL=$direct\" />";					
$cek=($a&&$b&&$c&&$d&&$e&&$f&&$g&&$h&&$h2&&$h3&&$h4&&$h5&&$i&&$j&&$k)?true:false;

if($cek==true){//jika data benar eksekusi perintah selanjutnya

$imgFile = $_FILES['foto']['name'];
$tmp_dir = $_FILES['foto']['tmp_name'];
$imgSize = $_FILES['foto']['size'];

$upload_dir = 'gambar/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$itempic = rand(1000,1000000).".".$imgExt; //rename kedalam angka

	//validasi ektensi gambar b2
			if(in_array($imgExt, $valid_extensions)){			
		//jika gambar lebih besar
				if(!$imgSize< 2000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
	$status_siswa="Belum diverifikasi";
	$perintah=sprintf("INSERT INTO tpdb_daftar
	VALUES('null','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','$status_siswa','$itempic')",
	$_POST['nama'],
	$_POST['tempat_lahir'],
	$_POST['tanggal'],
	$_POST['jenis_kelamin'],
	$_POST['sekolah'],
	$_POST['nisn'],
	$_POST['orang_tua'],
	$_POST['alamat'],
	$_POST['rt'],
	$_POST['rw'],
	$_POST['desa'],
	$_POST['kecamatan'],
	$_POST['kota'],
	$_POST['provinsi'],
	$_POST['no_tlp'],'$status_siswa','$itempic');
$query=mysqli_query($koneksi,$perintah);
if(!$query) {
				echo "Akses Gagal<br/>";
				echo "ERROR:".mysqli_error();
				}
				else{					
			echo "<script>alert('Data berhasil disimpan!')</script>";			
			echo "<script>window.open('kunci-hapus','_self')</script>";
				}
			}
			//jika gambar besar
			
			else{
			echo "<script>alert('Maaf file terlalu besar.')</script>";	
			echo "<script>window.open('daftar','_self')</script>";
			}
	//jika gambar terlalu besar b1

}//akhiri fungsi b1
//validasi ektensi gambar b2
			else{
				
	echo "<script>alert('Maaf file tidak sesuai atau file kosong.')</script>";				
	echo "<script>window.open('daftar','_self')</script>";
				
			}
//validasi akhir b2
}
		



?>

					
