<div class="panel panel-default">
        <div class="panel-heading">
            <p>الاعضاء</p>
           </div>
           <div class="panel-body">
             <?php
               $stmt = $con->prepare("SELECT * FROM users");
               $stmt->execute();
               $infos = $stmt->fetchAll();
               
               ?>
            <div class="row">
                
                <?php foreach($infos as $info){ ?>
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <?php  echo '<a href="profile.php?uid='.$info['user_id'].' ">'; ?> 
                 <img src="themes/img/user.png" alt="user photo "> 
                    </a>
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
