<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJS Is Fun</title>

    <!-- CSS (load bootstrap from a CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="http://localhost/stylesheets/main.css" />
    <script type="text/javascript" src="http://localhost/javascripts/main.js"></script>

</head>

<body class="container">

    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Logo</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog/index.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog/contact.php">Contact</a>
      </li>
    </ul>
  </nav>
    </header>

    <main>
        <div class="jumbotron">
            <?php echo '<h1>Welcome PHP Blog Page</h1>'; ?>
            <img src="http://localhost/images/01.jpg" />
        </div>
    </main>

    <footer>
    <p class="text-center text-muted">© Copyright 2020</p>
    </footer>

</body>

</html>