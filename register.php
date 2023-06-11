<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Register</title>
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

   <!-- header include -->
   <?php include(ROOT_PATH . "/app/includes/header.php"); ?>


   <div class="auth-content" id="auth-content">
           <form action="register.php" method="post">
            <h2 class="form-title">Register | Dashboard</h2>
          <?php include ROOT_PATH . '/app/helpers/formErrors.php'; ?>
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
              <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            <div>
              <label>Password Confirmation</label>
              <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
            </div>
            <div class="btn">
              <button type="submit" name="register-btn" class="btn-sm">Sign Up</button>
              <button type="submit" class="btn-sm"><a href="<?php echo BASE_URL .
                '/login.php'; ?>">Login</button>
            </div>
            </div>
          </form>
        </div>

       

 



