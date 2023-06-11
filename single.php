<?php include 'path.php'; ?>
<?php
include ROOT_PATH . '/app/controllers/posts.php';
if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Read Posts | Beulah Chambers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/article.css" />
    <link rel="stylesheet" href="assets/css/typography.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      type="text/javascript"
    ></script>
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
 
<?php include ROOT_PATH . '/app/includes/header.php'; ?>
        <!--Begin : page Wrapper-->
        <div class="main-content_single">  
                            <h1 class="post-title"><?php echo $post[
                                'title'
                            ]; ?></h1>
                            <div class="sub">
                             <i class="fas fa-user"> K.H Bamiwola & Co | Posted :</i>
                                 &nbsp;
                        <i class="fas fa-calendar-day"> <?php echo date(
                            'jS F, Y',
                            strtotime($post['created_at'])
                        ); ?></i></div>
                           <div class="post-content">
                              <?php echo html_entity_decode($post['body']); ?>
                            </div>
                           
                        </div>
                                    

    <!-- Begin: Footer-->
    <?php include ROOT_PATH . '/app/includes/footer.php'; ?>
    <!--End : Footer-->

        <!-- Scripts -->
        
        <script src="assets/js/main.js"></script>
        <script src="assets/js/slider.js"></script>
        <!-- swiper js -->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/swiper.js"></script>
    </body>
    </html>



