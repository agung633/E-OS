<!doctype html>
<html lang="en">
    <link rel="shortcut icon" href="img/osis.png">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type= "text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type= "text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type= "text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type= "text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type= "text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
	<link rel="stylesheet" href="css/styles1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(function(){
			$(".icon-1").click(function(){
			  $(".input").toggleClass("active");
			  $(".container1").toggleClass("active");
			})
		});
	</script>
    <style>
        body{
            background-image: url("img/bg.jpg");
            background-size: cover;
        }
    </style>

    <title>Osis SMA Ibrahimy</title>
  </head>
  <body>

     <!--Top Navbar-->

     <section>
            <nav class="navbar navbar-expand-lg navbar-dark bg-green">
                    <div class="container">
                      
                        <img src="img/home.png" width="4%">
                        <a id="hi" class="navbar-brand" href="#">OSIS SMA Ibrahimy</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                          
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <!--<li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>-->
              <li class="nav-item">
                <a id="ho" class="nav-link" href="home.html">Home</a>
             </li>
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="#">Tes Online</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="#">Daftar</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="voting.php">Vote</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="#">Profil</a>
              </li>
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="agenda.php" >Agenda</a> <!--disini saya menggunakan #section1 agar langsung menuju ke div id section1-->
              </li>
              </ul>
            </div>
                          <div class="container1">
                                    
                                      
                              <div class="search-box">
                                <input type="text" class="input">
                              </div>
                              <div class="icon-items icon-1">
                                  <i class="fas fa-search"></i>
                              </div>
                              
                            </div>
                        <li id="aman" class="nav-item dropdown">
                        <img class="profile dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" src="img/profile.png" width="15%">
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a id="he" class="dropdown-item" href="login.php">Login</a>
                        </li>
                          
                        </div>
                        </div>
                      </div>
                    </div>
                  </nav>
       </section>

       <!--Login Form-->
       <section>
       <form action="proses.php" method="POST">
           <div class="login-form">
               <h4>Harap</h4>
               <h7>Silahkan Login Terlebih Dahulu</h7>
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" id="username">
                </div>
                <div class="password">
                    <input type="password" placeholder="Password" name="password" id="password" >
                </div>
                <div class="login-btn">
                    <input class="btn2" type="submit" name="login" value="LOGIN">
                </div>
           </div>
      </form>
       </section>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/item.js"></script>
  </body>
</html>