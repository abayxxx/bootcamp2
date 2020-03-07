<?php

require('functions.php');

$id = $_GET['id'];

$val = query("SELECT * FROM book_tb JOIN category_tb ON book_tb.category_id = category_tb.id_cat JOIN writer_tb ON book_tb.writer_id = writer_tb.id_writ WHERE id_book = $id")[0];

if(isset($_POST['update-btn'])){
  if(update($_POST) >= 0 ){
    echo "<script>alert('Data Buku Berhasil di Ubah')
           document.location.href = 'tugas.php';
            </script>";
  }else{
    echo "<script>alert('Data Buku Gagal di Ubah')
            document.location.href = 'tugas.php';
            </script>";
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Pokemon</title>
  </head>
  <body>

   <div class="container">

    <div class="row mt-3 mb-3">
      <div class="col">
        <h3>Update Pokemon</h3>
      </div>
    </div>


    <div class="row ml-3">
      <div class="col-sm-5">
           <form action="" method="post" enctype="multipart/form-data">
             
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="id-book" value="<?= $val['id_book']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="gambar-lama" value="<?= $val['img']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="name-book" placeholder="Name Book"
                         value="<?= $val['name_book']; ?>">
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">Info ID</button> 
                        <input type="text" class="form-control" name="cat-id" placeholder="Category"
                         value="<?= $val['category_id']; ?>">
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">Info ID</button> 
                        <input type="text" class="form-control" name="writ-id" placeholder="Writer"
                       value="<?= $val['writer_id']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="pub-year" placeholder="Publication Year"
                         value="<?= $val['publication_year']; ?>">
                      </div>
                      <div class="form-group">
                        <img src="img/<?= $val['img'] ?>" width=100px heigth=100px>
                        <input type="file" name="picture">
                      </div>
                      <div class="modal-footer">
                        <a href="tugas.php" class="btn btn-secondary">Cancel</a>
                        <button type="submit" name="update-btn" class="btn btn-primary">Update</button>
                      </div>
                </form>
    </div>

  </div>
  
  
  
  <?php
  $cat = query("SELECT * FROM category_tb");
  ?>
  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
   <div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
     <div class="modal-header"> 
      <h5 class="modal-title" id="exampleModalLabel">Category Code Info</h5> 
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
     </div> 
     <div class="modal-body"> 
      <?php foreach($cat as $c) : ?> 
      <?php echo "Code ".$c['id_cat']. " = ". $c['name_cat']; ?> 
      <?= "<br>"; ?> 
      <?php endforeach; ?> 
      <br> 
      <b>Jika Code Tidak Tersedia Silahkan Input Element Baru!!</b> 
     </div> 
     <div class="modal-footer"> 
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
     </div> 
    </div> 
   </div> 
  </div>
  
  
  <?php
  $writer = query("SELECT * FROM writer_tb");
  ?> 
  <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
   <div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
     <div class="modal-header"> 
      <h5 class="modal-title" id="exampleModalLabel">Writer Code Info</h5> 
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
     </div> 
     <div class="modal-body"> 
      <?php foreach($writer as $w) : ?> 
      <?php echo "Code ".$w['id_writ']. " = ". $w['name_writ']; ?> 
      <?= "<br>"; ?> 
      <?php endforeach; ?> 
      <br> 
      <b>Jika Code Tidak Tersedia Silahkan Input Element Baru!!</b> 
     </div> 
     <div class="modal-footer"> 
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
     </div> 
    </div> 
   </div> 
  </div> 
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
