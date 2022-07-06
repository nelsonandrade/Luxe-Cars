
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/luxe_cars.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" >
    <link rel="stylesheet" href="style.css">
    <title>topo</title>
</head>

<img class="logo" src="\luxe_cars02.2\img\android-chrome-192x192.png">
<h1>LUXE CARS</h1>
    <nav class="active">
        <a class="bt_menu" href="index.php">Acceuil</a>
        <a class="bt_menu" href="voitures.php">Voitures</a>
        <a class="bt_menu" href="contact.php">Contact</a>
        <a class="bt_menu" href="local.php">Trouvez</a>
        <a class="bt_menu" href="login.php">Connecter</a>
        </nav> 
        <div class="bar_menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.bar_menu').click(function(){
                $('nav').toggleClass('active')
            })
        })
    </script>
</html>

    
