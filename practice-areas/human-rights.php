<?php include('../path.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Human Rights | Beulah Chambers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      type="text/javascript"
    ></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon-192.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
  </head>

<body>
  <?php include ROOT_PATH . '/app/includes/header.php'; ?>

  <!-- first section arbitration --> 
  <section class="link ptb--200" id="link">
    <div class="text"><a href="../index.php">Home</a> <i class="fa fa-long-arrow-right"></i> <a href="#">Practice-Areas</a> <i class="fa fa-long-arrow-right"></i> Human Rights</div>
</section>
<!-- End : first-section arbitration -->

 <section class="second-section_arbitration ptb--100" id="second-section_arbitration">
  <div class="container-fluid white section">
            <div class="row">
              <div class="col">
                <div class="container">
              <div class="left__arbitration">
                <h1 class="title">Practice Areas</h1>
                <h2><a href="../practice-areas/labour-law.php">Labour Law</a></h2>
                <h2><a href="../practice-areas/human-rights.php">Human Rights</a></h2>
                <h2><a href="../practice-areas/commercial-law.php">Commercial Law</a></h2>
                <h2><a href="../practice-areas/arbitration.php">Arbitration</a></h2>
                <h2><a href="../practice-areas/intellectual-property.php">Intellectual Property Law</a></h2>
                <h2><a href="../practice-areas/family-law.php">Family Law </a></h2>
                <h2><a href="../practice-areas/election-petitions.php">Election Petitions </a></h2>
                <h2><a href="../practice-areas/criminal-law.php">Criminal Law</a></h2>
                <h2><a href="../practice-areas/banking-and-debt-recovery.php">Banking & Debt Recovery </a></h2>
                <h2><a href="../practice-areas/real-estate-land.php">Real Estate % Land Matters</a></h2>
              </div>
              <div class="right__arbitration">
                <img src="../assets/images/human.jpg">
                <h1>Human Rights</h1>
                <p>
                   Human rights law is crucial for protecting the rights of vulnerable groups, such as minorities,
                   women, children, and refugees. It also plays an important role in promoting social justice, 
                   economic development, and democracy, by ensuring that individuals have access to basic needs and services, 
                  and by promoting participation and accountability in governance and decision-making.
                  These rights are inherent to all human beings and are protected by law, in order to ensure that every individual is 
                  able to live with dignity, freedom, equality, justice, and peace.
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact ptb--100">
    <button type="btn" class="btn"><a href="#" class="js-open-evaluation-modal">Get a Free Consultation Today <i class="fa fa-envelope-open-o"></i></a></button>
  </section>

<?php include ROOT_PATH . '/app/includes/footer.php'; ?>
<button id="btnScrollToTop">
  <i class="material-icons">arrow_upward</i>
</button>
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script src="../assets/js/reveal.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/scroll.js"></script>
</body>
</html>