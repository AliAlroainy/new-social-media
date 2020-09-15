<?php 
  session_start();
  include 'int.php';
  if(isset($_SESSION['email'])){
      if($_SERVER['REQUEST_METHOD'] == "POST"){
       
      $uid       =  $_SESSION['uid'];
          
      $fname     =  $_POST['f_name'];
      $lname     =  $_POST['l_name'];
      $sex       =  $_POST['sex'];      
      $email     =  $_POST['email'];
      $pass      =  $_POST['pass'];
      $town      =  $_POST['town'];
      $job       =  $_POST['job'];
      $relstatus =  $_POST['rel_status'];
          
          
          $stmt = $con->prepare("UPDATE users SET f_name = ? , l_name = ? , sex = ? , email = ? , pass = ? , town = ? , job = ? , rel_status = ? WHERE user_id = ? ");
          
          $stmt->execute(array(
          $fname,
          $lname ,
          $sex  ,
          $email ,
           $pass ,
           $town ,
           $job ,
           $relstatus,
           $uid 
          ));
          
          if($stmt){
              
              echo 'success';
          }
          
           }
          $uid       =  $_SESSION['uid'];
          $stmt = $con->prepare("SELECT * FROM users WHERE user_id = $uid  ");
          $stmt->execute();
          $info = $stmt->fetch();
      
          
      ?>

   <div class="container-fluid">
       <div class="row">
           <div class="col-sm-12 col-md-offset-3 col-md-6  col-lg-6">
               <div class="panel panel-default">
                  <div class="panel-heading">
                       <p>    تعديل البيانات الشخصية </p>
                    </div>
                       <div class="panel-body">
                          <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" class=" form-horizontal ">
                           <div class="form-group">
                              
                               <div class="col-sm-9">
                               <input class="form-control" value="<?php echo $info['f_name'] ?>" name="f_name" type="text"  >
                                   </div>
                               <label class="col-sm-3 ">الاسم الاول </label>
                              </div>
                              
                              <div class="form-group">
                             
                               <div class="col-sm-9">
                               <input class="form-control"  value="<?php echo $info['l_name'] ?>"  name="l_name" type="text"  >
                                   </div>
                                   <label class="col-sm-3 ">الاسم الاخير </label>
                              </div>
                              
                              <div class="form-group">
                              
                               <div class="col-sm-9">
                               <input class="form-control" value="<?php echo $info['sex'] ?>" name="sex" type="text"  >
                                   </div>
                               <label class="col-sm-3 ">الجنس</label>
                                  
                              </div>
                              
                              <div class="form-group">
                              
                               <div class="col-sm-9">
                               <input class="form-control"  value="<?php echo $info['email'] ?>"  name="email" type="email"  >

                                   </div>
                                  <label class="col-sm-3 ">البريد الالكتروني  </label>
                              </div>
                              <div class="form-group">
                              
                               <div class="col-sm-9">
                               <input class="form-control"  value="<?php echo $info['email'] ?>"  name="pass" type="password"  >

                                   </div>
                                  <label class="col-sm-3 ">كلمة المرور  </label>
                              </div>
                              <div class="form-group">
                              
                               <div class="col-sm-9">
                               <input class="form-control"  value="<?php echo $info['job'] ?>"  name="job" type="text"  >
                                   </div>
                                  <label class="col-sm-3 "> المهنة  </label>
                              </div>
                              <div class="form-group">
                              
                               <div class="col-sm-9">
                               <input class="form-control"  value="<?php echo $info['town'] ?>"  name="town" type="text"  >
                                   </div>
                                  <label class="col-sm-3 ">البلد </label>
                              </div>
                              <div class="form-group">
                            
                               <div class="col-sm-9">
                                   <select name="rel_status"   class="form-control"  >
                                       <?php 
          
                                       $stmt = $con->prepare("select sex from users where user_id = $uid  ");
                                         $stmt->execute();
                                         $sex = $stmt->fetch();
                                          
                                        
      
                                        if($sex['sex'] == 'ذكر'){
                                            
                                        $engaged  = 'خاطب';  
                                        $singel  = 'اعزب';
                                        $marred  = 'متزوج';
                                        $inlove  =  'مرتبط'; 
                                            
                                        }elseif($sex['sex'] == 'انثى'){
                                            
                                        $engaged  = 'مخطوبة';  
                                        $singel  = 'عزبا';
                                        $marred  = 'متزوجه';
                                        $inlove  =  'مرتبطه';
                                            
                                        };
                                        
                                        
          
                                       ?>
                                       
                                   <option value="<?php echo $singel ?>"  >اعزب/عزبا</option>
                                   <option value="<?php echo $marred ?>"  >متزوج/متزوجه</option>
                                   <option value="<?php echo $engaged ?>"  > خاطب/مخطوبة</option>
                                    <option value="<?php echo $inlove ?>"  >مرتبط/مرتبطه</option>
                                   </select  >

                                   </div>
                                    <label class="col-sm-3 ">الحالة الاجتماعية </label>
                              </div>
                              
                              <div class="form-group">
                              
                               <div class="  col-md-9">
                              <button type="submit" class=" login-btn btn-block "> حفظ</button>

                                   </div>
                              </div>
                              
                           </form>
                       </div>
                </div>
               </div>
           </div>
       </div>

      <?php
      
      include $tmbl . 'footer.php';
      
  }else{
      
      header('location:login.php');
      
  }


?>