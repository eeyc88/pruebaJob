<!DOCTYPE html>
<html lang="en">
<?php
  include('header.php');
  include('nav.php');
  include('gallery.php');
?>
<body>



<div class="container text-center">
  <?php include('login.php')  ?>
  <h3>INFORMACION</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</body>
<script type="text/javascript" src="./js/popup.js"></script>
</html>
