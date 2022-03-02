<?php 
include 'header.php';
include '../koneksi.php';
?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      EMAIL
      <small>Edit Email Template</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-8 col-lg-offset-2">       
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Edit Email Template</h3>
            <a href="email_view.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a> 
          </div>
          <div class="box-body">
            <form action="email_update.php" method="post" enctype="multipart/form-data">
              <?php 
              // $id = $_GET['id'];
              $id = 1;              
              $data = mysqli_query($koneksi, "select * from email_template where id='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>

                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" class="form-control" name="subject" value="<?php echo $d['subject'] ?>" required="required">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $d['id'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Body</label>
                  <textarea id="editor1" style="resize: vertical;height: 200px" class="form-control" name="body" required="required" placeholder="Isi deskripsi tentang kandidat (Visi, Misi atau lainnya)"><?php echo $d['body'] ?>
                  </textarea>
                </div>


                <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Simpan">
                </div>
                <?php
              }

              ?>
              
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>