<!DOCTYPE html>
<?php
	// test conversion
	?>
<html lang="en">
  <head>
    <title>Page contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/text_anim.css">
    <link rel="stylesheet" href="css/titre.css">
	
<style>
.h2{
	color:green;
}

/* Styles de liens non visités */
      a:link {
        color: blue;
        text-decoration: none;
      }

      /* Styles de liens visités */
      a:visited {
        color: purple;
      }

      /* État survolé */
      a:hover {
        color: red;
        text-decoration: underline;
      }

      /* État actif (lors du clic) */
      a:active {
        color: green;
      }

      nav ul{
        width: 920px;
        padding: 0px;
        margin: 0px;
        list-style: none;
      }
	
</style>
  </head>



<body>
    <section id="global".style.display="white">
        <header>
          <?php echo require_once("header.inc") ?>



        </header>

<div class="text-changer">
        <p class="intro-text">J'ai travaill&eacute; pour</p> <br>
        <div class="roles-container">
            <span class="role">VALUE IT</span>
            <span class="role">ECONOCOM pour THALES</span>
            <span class="role">TESSI INFORMATIQUE</span>
            <span class="role">LYCEE FAURIEL</span>
            <span class="role">GROUPE CASINO</span>
        </div>
        </div>

            <h1>pour me contacter</h1>

    <div class="wrapper">
                <div class="static-txt">Je suis</div>
                <ul class="dynamic-txts">
                    <li><span>Webdev</span></li>
                    <li><span>Administrateur Réseau</span></li>
                    <li><span>technicien informatique</span></li>
                    <li><span>Runner</span></li>
                </ul>
                </div>

    
    

        </header>

        <hr>
            
        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">	          
            <li class="nav-item"><a href="exp_pro.html" class="nav-link"><span>Experiences professionnelles</span></a></li>
            <li class="nav-item"><a href="formation.html" class="nav-link"><span>Formations</span></a></li>
            <li class="nav-item"><a href="loisirs.html" class="nav-link"><span>course à pied</span></a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link"><span>me contacter</span></a></li>
	        </ul>
	      </div>
        <nav>
        <ul>
          <li><a href="exp_pro.php"><p class="text-white">Vie professionnelle</p></a></li>
          <li><a href="loisir.php"><p class="text-white">un peu de sport</p></a></li>
          <li><a href="formation.php"><p class="text-white">Formations</p></a></li>
          <li><a href="Contact.php"><p class="text-white">Me contacter</p></a></li>
        </ul>
	  </nav>
	    </div>
      
        <article>
            <h2></h2>
            <p class="text-white">En cours de formation Webdev, je suis à la recherche d'un emploi. N'hésitez pas à me contacter via le formulaire ! </p>
            <form action="mail.php" class="p-5 bg-dark">
                  <div class="form-group">
                    <label for="name"><p class="text-white">Votre nom : </p></label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email"><p class="text-white">Votre mail : </p></label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website"><p class="text-white">site internet : </p></label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message"><p class="text-white">Message : </p></label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Envoyez votre message..." class="btn py-3 px-4 btn-primary">
                  </div>

</form>
        </article>
        <article>
            
        </article>

        
        <footer>

        </footer>

    </section>

</body>
</html>
