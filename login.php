<?php

session_start();
$nonav = '';

if (isset($_SESSION['email'])){
    
    header('location:index.php');
}

include 'int.php';

if($_SERVER['REQUEST_METHOD']== 'POST'){
    
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    
    $stmt = $con->prepare("SELECT user_id , email , pass from users where email = ? and pass = ? ");
    $stmt->execute(array($email,$pass));
    $get = $stmt->fetch();
    $count = $stmt->rowCount ();
    
    if($count > 0){
        $_SESSION['email'] = $email;
        $_SESSION['uid'] = $get['user_id'] ;
        
        header('location: index.php');
        
    }
    
}

?>

<div class="container">

   <div class="col-sm-offset-3 col-sm-6">
       <div class="login-form">
        <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label>email</label>
            <input class="form-control"  type="text" name="email" placeholder="type your email">
            </div>
           <div class="form-group">
               <label>password</label>
            <input class="form-control" type="password" name="pass" placeholder="type your password">
            </div>
            <div class="form-group">
                
             <button class="form-control  login-btn" type="submit">login</button>
            
            </div>
           
           </form>
       </div>
    </div>
</div>