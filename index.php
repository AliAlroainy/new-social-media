<?php

session_start();

if(isset($_SESSION['email'])){
include 'int.php';

?>
    
<div class="container-fluid">
    <div class=" ads col-xs-12 col-sm-12 col-md-3 col-lg-3">
     <?php include $tmbl . 'ads.php';  ?>
    </div>

<div class=" col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <?php include $tmbl . 'search.php';  ?>
</div>
    
<div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <?php include $tmbl . 'members.php';  ?>
</div>

<div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3">
   <?php include $tmbl . 'control.php';  ?> 
</div>
    
</div>

<?php

include $tmbl . 'footer.php';

}else {
    
    header("location:login.php");
}
