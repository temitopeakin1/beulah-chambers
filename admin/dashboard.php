<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
// adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Section | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/typography.css" />
    <link rel="stylesheet" href="../assets/css/admin.css" />
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
 <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
        <!---Header area ends-->

      <!-- Admin page start-->
 <section class="admin wrapper"  id="admin__wrapper">
<!---Begin: left Sidebar---->
     <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!--End: left sidebar---->
        <div class="admin__content">
                      
            <div class="content">
             <div class="page-title">Dashboard</div>
             

             <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

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



