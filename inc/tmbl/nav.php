<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ِAlibook</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <form action="search-nav.php" method="POST" class="navbar-form navbar-left">
        <div class="form-group">
          <input name="phrase" type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search" ></i></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> الرسائل <i class="fa fa-comments"></i></a></li>
        <li><a href="index.php"> الرئيسية <i class="fa fa-home"></i></a></li>
        <li class="dropdown">
            <?php  
            $myId  = $_SESSION['uid'];
            
            $stmt = $con->prepare("SELECT * FROM users  where user_id = $myId ");
            $stmt -> execute();
            $info = $stmt->fetch();  
            ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo ucfirst($info['f_name']) .' '.ucfirst($info['l_name']) ;
              
              echo '<img style="height:30px; width:30px;border-radius:30px" src="upload/avatar/user.png" />'
              ?> 
              <span class="caret"></span></a>
            
          <ul class="dropdown-menu">
            <li><a href="edit.php"> <i class="fa fa-edit" ></i> تعديل الحساب </a></li>
            <li><a href="my-profile.php"> <i class="fa fa-user"></i> الصفحة الشخصية</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php"> <i class="fas fa-power-off"></i> الخروج</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>