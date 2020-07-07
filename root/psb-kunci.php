<?php 
if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">alert
	("Anda harus login dulu!");document.location="index.php";</script>';
}
?>
<div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Tambah Kunci</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Kunci Untuk Daftar
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                <form role="form" method="post" action="psb-kunci-proses.php" enctype="multipart/form-data">
                                    
<div class="form-group">
<label>Kata Kunci</label>
<input class="form-control" placeholder="Masukan Kunci" id="" name="kunci" id="kunci"required="">
</div>

<button type="submit" class="btn btn-primary" name="tambah" id="tambah">Tambah Kunci</button>
<button type="reset" class="btn btn-default">Batal</button>
                </form>
                                </div>
                               
                                    
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
