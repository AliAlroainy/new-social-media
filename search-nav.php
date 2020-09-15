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
      
    <div class="panel panel-default">
        <div class="panel-heading">
            <p>الاعضاء</p>
           </div>
           <div class="panel-body">
             <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
               $phrase = $_POST['phrase'];
             
        
               $stmt = $con->prepare("SELECT *  FROM `users` 
               WHERE (CONVERT(`user_id` USING utf8) LIKE '%ahmed%' 
               OR CONVERT(`f_name` USING utf8)  LIKE '%$phrase%' 
               OR CONVERT(`l_name` USING utf8)  LIKE '%$phrase%' 
               OR CONVERT(`email` USING utf8) LIKE '%$phrase%' 
             ) ");
               $stmt->execute();
               $infos = $stmt->fetchAll();
                 }else{ header('location:index.php'); }
               ?>
            <div class="row">
                
                <?php foreach($infos as $info){ ?>
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                 <img src="themes/img/user.png" alt="user photo "> 
                    <div class="caption">
                     <h4 class="text-center"><strong> <?php echo $info['f_name'] . ' ' .$info['l_name'];  ?> </strong> </h4>
                     <p class="text-center"> <?php echo $info['age'] . ' - ' .$info['town'];  ?> </p>
                     <p align="center"><a href="#" class="btn btn-primary" role="button" ><i class="fa fa-user-plus"></i></a> <a href="#" class="btn btn-default" role="button"><i class="fa fa-comments"></i></a></p>
                    </div>
                 </div>
                </div>
               <?php  }?>
            </div>
         </div>
     </div> 

    
    
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
