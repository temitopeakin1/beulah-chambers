<?php include '../../path.php'; ?>
<?php include ROOT_PATH . '/app/controllers/posts.php';
// adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Posts | Articles</title>
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

   <!--===== HEADER =====-->
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
          <?php include ROOT_PATH . '/app/includes/adminSidebar.php'; ?>
        <!--End: left sidebar---->

        <div class="admin__content">
            <div class="button-group">
                <a href="create.php" class="btn">Add Post</a>
                <a href="articles.php" class="btn">Manage Posts</a>
            </div>
            
            <div class="content">
                <h2 class="page-title">Manage Posts</h2>

                <?php include ROOT_PATH . '/app/includes/messages.php'; ?>
                <table>
                    <thead>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                            <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td>temi</td>
                            <td><a href="edit.php?id=<?php echo $post[
                                'id'
                            ]; ?>" class="edit">Edit</a></td>
                            <td><a href="edit.php?delete_id=<?php echo $post[
                                'id'
                            ]; ?>" class="delete">Delete</a></td>
                            <?php if ($post['published']): ?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post[
                                    'id'
                                ]; ?>" class="unpublish">unpublish</a></td>
                                <?php else: ?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post[
                                    'id'
                                ]; ?>" class="publish">publish</a></td>
                                <?php endif; ?>

                                </tr>
                        <?php endforeach; ?>
                     
                     </tbody>
                </table>
            </div>
        </div>
  </section>
 <!-- Scripts -->
 <script src="assets/js/main.js"></script>
</body>
</html>



