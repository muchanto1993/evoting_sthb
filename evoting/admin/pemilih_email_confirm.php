<?php include 'header.php'; ?>

<script>
    $(document).ready(function() {
    $('.mdb-select').materialSelect();
    });

</script>
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Pemilih
      <small>Pemilih Kirim Email</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Konfirmasi Kirim Email Pemilih</h3>
          </div>
          <div class="box-body">

          <center>
            <b>
              <p style="font-size:22px">Email akan dikirimkan dengan detail di bawah ini : </p></br>
            </b>
          </center>

          <form action="pemilih_send_email.php" method="post" enctype="multipart/form-data">
            <?php 
                
                $id_email = 1;              
                $dataemail = mysqli_query($koneksi, "select * from email_template where id='$id_email'");
                $demail = mysqli_fetch_array($dataemail);
                
                if (isset($_GET['id']))
                {
                    $id_pemilih = $_GET['id'];
                    $datapemilih = mysqli_query($koneksi, "select * from pemilih where pemilih_id='$id_pemilih'");
                    $dpemilih = mysqli_fetch_array($datapemilih);
            ?>
                <div class="form-group">
                  <label>To</label>
                  <input readonly type="text" class="form-control" name="email" value="<?php echo $dpemilih['pemilih_email'] ?>" required="required">
                  <input type="hidden" class="form-control" name="idpemilih" value="<?php echo $dpemiilih['pemilih_id'] ?>" required="required">
                </div>
            <?php
                }
                
            ?>

                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" class="form-control" name="subject" value="<?php echo $demail['subject'] ?>" required="required">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $d['id'] ?>" required="required">
                </div>


                <div class="form-group">
                  <label>Body</label>
                  <textarea id="editor1" style="resize: vertical;height: 200px" class="form-control" name="body" required="required" placeholder="Isi deskripsi tentang kandidat (Visi, Misi atau lainnya)"><?php echo $demail['body'] ?>
                  </textarea>
                </div>
                
                <left>
                    <b></br>
                    <p>&nbsp;&nbsp;&nbsp;Pastikan data diatas sudah benar.</p></br>
                    </b>
                </left>

                <div class="form-group">
                  <button type="submit" class="btn btn-success" style="margin-left:10px" >
                  <i class="fa fa-paper-plane"></i> &nbsp; Kirim Email
                    </button>
                  <a href="pemilih.php" class="btn btn-danger btn-md" style="margin-left:25px"><i class="fa fa-close"></i> &nbsp; Batal & Kembali</a>
                </div>
               
                
              
            </form>

            
            <br>
            <br>
          </div>  

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>