
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>jQuery hide and seek</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
    body{
      padding-top: 100px;
    }
    #content{
      margin:0 auto;
      text-align: center;
    }
    
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">create a product sheet </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <!--
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    <h2>Super promo car</h2>
    <div id="photo">
    <a href="img/image.jpg"><img id="large" src="img/image.jpg" width="538" height="538"></a>
    <br><br>
    <img class="img-thumbnail" src="img/image1.jpg" width="140" height="140">
    <img class="img-thumbnail" src="img/image2.jpg" width="140" height="140">
    <img class="img-thumbnail" src="img/image3.jpg" width="140" height="140">
    <img class="img-thumbnail" src="img/image.jpg" width="140" height="140">
    </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>
