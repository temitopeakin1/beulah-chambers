<?php include 'path.php';
include ROOT_PATH . '/app/controllers/topics.php';
// fetch all posts

$posts = [];
$postsTitle = 'Latest Articles';

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    // $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} elseif (isset($_POST['search-term'])) {
    $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}

$posts = selectAll('posts', ['published' => 1]);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Articles | Beulah Chambers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/article.css" />
    <link rel="stylesheet" href="assets/css/typography.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- swiper css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
  <!-- header include -->
  <?php include ROOT_PATH . '/app/includes/header.php'; ?>
  
<!--Begin :About Image-->   
<section class="articles-hero" id="articles__hero">
  <h1>Articles</h1>
  <a href="#" class="articlesButton js-open-evaluation-modal">Start a Free Evaluation Today <i class="fas fa-balance-scale"></i></a>
</section>
       
       
<!--End: About Image-->

<!-- content -->

<div class="content clearfix">
<div class="latest-post"><?php echo $postsTitle; ?></div>
<div class="main-content">  
    <?php foreach ($posts as $post): ?>
          <div class="post clearfix">
          <img src="<?php echo BASE_URL .
              '/assets/images/' .
              $post['image']; ?>" alt="" class="post-image">
        <div class="post-preview">
        <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post[
    'title'
]; ?></a></h2>
        <i class="fas fa-user"> KH Bamiwola & Co | Posted on </i>
        &nbsp;
        <i class="fas fa-calendar-day"> <?php echo date(
            'jS F, Y',
            strtotime($post['created_at'])
        ); ?></i>
    <p class="preview-text"> Share </p><div class="social-icons-share">
        <a target="_blank" class="me-4 text-decoration-none" href="http://www.facebook.com/sharer.php?u=<?php echo $baseUrl .
            $slug; ?>"> <i class="icofont-lg icofont-facebook"></i></a>
        <!-- <a target="_blank" class="me-4 text-decoration-none" href="http://www.twitter.com/sharer.php?u=<?php echo $baseUrl .
            $slug; ?>"> <i class="icofont-lg icofont-twitter"></i></a> -->
        <a target="_blank" class="me-4 text-decoration-none" href="http://www.linkedin.com/sharer.php?u=<?php echo $baseUrl .
            $slug; ?>"> <i class="icofont-lg icofont-linkedin"></i></a>
    </div>
    <a href="single.php?id=<?php echo $post[
        'id'
    ]; ?>"  class="btn read-more">Click to Read</a>
        </div>
</div>
<?php endforeach; ?>
</div>


<!-- End:first-section_about -->
  <!-- Begin: footer -->
  <?php include ROOT_PATH . '/app/includes/footer.php'; ?>

  <button id="btnScrollToTop">
  <i class="material-icons">arrow_upward</i>
  </button>


    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <!-- swiper js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/scroll.js"></script>
</body>
</html>

