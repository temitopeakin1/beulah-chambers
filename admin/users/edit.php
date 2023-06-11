<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
// adminOnly();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Section | Edit Topic</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="../../assets/css/typography.css" />
    <link rel="stylesheet" href="../../assets/css/admin.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      type="text/javascript"
    ></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
    <!-- Favicon -->
    <link rel="shortcut icon"
      href="assets/images/favicon.ico"
      type="image/x-icon"
    />
  </head>

<body>
 <!-- header area start -->
 <header class="l-header">
        <nav class="nav bd-grid">
          <div class="logo">
            <a href="index.php"><img src="../../assets/images/logo2.png"></a>
          </div>
            <div class="nav__menu" id="nav-menu">
            <?php if (isset($_SESSION['username'])): ?>
                                   <ul>
                                   <li>
                                       <a href="#">
                                           <i class="fas fa-user"></i>
                                           <!--display the user name thats ligging in to the session-->
                                            <?php echo $_SESSION['username']; ?>
                                            <i class="fas fa-chevron-down" style="font-size: .8em;" text-decoration="none;"></i>
                                       </a>
                                       <ul>
                                           <li><a href="<?php echo BASE_URL .
                                               '/logout.php'; ?>" class="logout">Logout</a></li>
                                        </ul>
                                    </li>
                                 </ul>
                             <?php endif; ?>
                              
              
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div> 
        </nav>
    </header>
        <!---Header area ends-->
      <!-- Admin page start-->

      <section class="admin wrapper"  id="admin__wrapper">
      
     <!---Begin: left Sidebar---->
     <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!--End: left sidebar---->


        <div class="admin__content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="articles.php" class="btn btn-big">Manage Users</a>
            </div>
            
            <div class="content-user">
             <h2 class="page-title">Edit User</h2>

             <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="edit.php" method="post">

                  <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                      </div>
                      <div>
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $email; ?>" class="text-input">
                      </div>
                      <div>
                        <label>Password</label>
                        <input type="text" name="password" value="<?php echo $password; ?>" class="text-input">
                      </div>
                      <div>
                        <label>Password Confirmation</label>
                        <input type="text" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                      </div>
                      <div>
                          <?php if (isset($admin) && $admin == 1): ?>
                         <label>
                          <input type="checkbox" name="admin" checked>
                        Admin
                      </label>
                      <?php else: ?>
                      <label>
                        <input type="checkbox" name="admin">
                        Admin
                      </label>
                      <?php endif; ?>
                       </div>
                     <div>
                        <button type="submit" name="update-user" class="bttn-sm">Update User</button>
                    </div>
                </form>
            </div>
        </div>
  </section>
     
 <!-- Scripts -->
     <!-- <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/admin.js"></script>
    <script src="../../assets/js/main.js"></script>
    </body>
</html>



