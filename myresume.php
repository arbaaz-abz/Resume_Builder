<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Professional Résumé Builder</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    	nav {
          background-image: linear-gradient(to right, #00bfa5 , #18ffff);
    	}

    	h2 {
          background: -webkit-linear-gradient(left top, red, yellow);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
      }
      	
  </style>
</head>
<body class="grey darken-2">

  <nav role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo" style="font-size: 150%;">Résumé Builder</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php">Templates</a></li>
				<li><a href="#">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav teal accent-4">
        <li><a href="home.php">Templates</a></li>
				<li><a href="#">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

	<center><h2>My Résumé's</h2></center>
     	
<div class="container">
      <div class="section">
        <!--   Icon Section   -->
        <div class="row">
          

          <div class="col s12 m4">
            <div class="card ">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="./templates/1/sc.jpg">
              </div>
              <div class="card-content teal accent-2">
                <span class="card-title activator grey-text text-darken-4">Doppio</span>
                <p><a href="./templates/1/doppio.html">Build Here!</a></p>
              </div>
              
        		</div>
          </div>
  
        </div>
    </div>  
	</div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
	<script>
		
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
	</script>
  </body>
</html>
