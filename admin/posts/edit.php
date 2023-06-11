<?php include '../../path.php'; ?>
<?php include ROOT_PATH . '/app/controllers/posts.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Edit Posts | Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="../../assets/css/typography.css" />
    <link rel="stylesheet" href="../../assets/css/admin.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- swiper css -->
    <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      type="text/javascript"
    ></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <!-- Latest compiled JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.ico"
      type="image/x-icon"
    />
  </head>

<body>
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

     
      <!-- Admin page start-->

 <section class="admin wrapper"  id="admin__wrapper">

          <!---Begin: left Sidebar---->
     <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!--End: left sidebar---->
        <div class="admin__content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="articles.php" class="btn btn-big">Manage Posts</a>
            </div>
            
            <div class="content-post">
             <h2 class="page-title">Edit Posts</h2>
             <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                 <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>" >
             
                <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>
                    <div> 
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>
                        <!--<textarea name="editor1"></textarea>-->
                        <script>
                            CKEDITOR.replace( 'body' );
                    </script>
                    <div>  
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div> 
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option> 
                              <?php foreach ($topics as $key => $topic): ?>
                            <?php if (!empty($topic_id) && $topic['id'] == $topic['id'] ): ?>
                                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>

                                <?php else: ?>
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>

                                    <?php endif; ?>

                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div>
                        <div>
                            <?php if(empty($published) && published == 0): ?>
                             <label>
                                <input type="checkbox" name="published">
                                Publish
                                </label>
                                <?php else: ?>
                                    <input type="checkbox" name="published" checked>
                                Publish
                                    <?php endif; ?>
                           
                        </div>
                    <div>
                        <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
                    </div>
                </form>
            </div>
        </div>
  </section>
     
 <!-- Scripts -->
    <script src="../../assets/js/admin.js"></script>
    <script src="../../assets/js/main.js"></script>
   
    </body>
</html>



