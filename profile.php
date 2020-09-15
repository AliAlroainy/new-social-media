<?php
    session_start();

    include 'int.php';
     $id = isset($_GET['uid']) && is_numeric($_GET['uid']) ? intval($_GET['uid']) : 0;
     
     $stmt = $con->prepare("SELECT * FROM users WHERE user_id = $id ") ;
     $stmt->execute();
    $info = $stmt->fetch();
?>

   <div class="continer-fluid">
   <div class="  col-xs-12  col-sm-12 col-md-9 col-lg-9 " style="height: 600px; " >
       
         <div class="panel panel-default">
         <div class="panel-heading">
           <p> المنشورات </p>
           </div>  
           <div  class=" panel-body">
              
           </div>
       </div>
       
       </div>
   <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 " >
       <div class="panel panel-default">
         <div class="panel-heading">
           <p>   <?php echo ucfirst($info['f_name'] ) .' '.ucfirst($info['l_name']) ?> </p>
           </div>  
           <div class=" panel-body">
              <img class="img-responsive img-thumbnail" src="themes/img/user.png" />
           </div>
            <div class="caption">
                     <p align="center">
                         
                         <a href="#" class="btn btn-primary" role="button" ><i class="fa fa-user-plus " style="font-size:20px;"></i></a>
                         <a href="#" class="btn btn-default" role="button"><i class="fa fa-comments" style="font-size:20px;"></i></a>
                         <a href="#" class="btn btn-default" role="button"><i class="fa fa-heart"></i></a>
                </p>
                    </div>
       </div>
       </div>
       
     
       
   <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 " >
          <div class=" panel-default">
         <div class="panel-heading">
             
           <p>  معرض الصور </p>
             
           </div>  
           <div class="panel panel-body">
              
           </div>
       </div>
       </div>
       
   <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 " >
        <div class=" info panel panel-default  " >
         <div class="panel-heading">
           <p>  المعلومات الشخصية </p>
           </div>  
           <div class=" panel-body">
               <h3 align="center"><strong> <?php echo ucfirst($info['f_name'] ) .' '.ucfirst($info['l_name']) ?></strong> </h3>
              <ul class="list-unstyled">
               <li><span>السن</span>: <?php echo $info['age'] ?>  </li>
                <li><span>البلد</span>: <?php echo $info['town'] ?></li>
                 <li><span>العمل</span>: <?php echo $info['job'] ?> </li>
                  <li><span>الحالة الاجتماعية</span>: <?php echo $info['rel_status'] ?> </li>
               </ul>
            </div>
         </div>
       </div>
   

   </div>
<?php

include $tmbl . 'footer.php';