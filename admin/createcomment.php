<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tonny's pizza reviews and more</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--importeert css -->

    <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body id='body' class='fonts'>
    <!-- start tempplate-->
    <div class="header"></div>
    <div class="logo">
        <img src="assets/fotos/logo.png" alt="logo tonny's">
    </div>
    <div class="sidebar">
        <ul>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='dominos-sidebar'>Dominos<br><br></a></li>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='papajones-sidebar'>Papa Jones<br><br></a></li>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="new-york-sidebar">New York pizza<br><br></a></li>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id='il-forono-sidebar'>Il-forno<br><br></a></li>
            <li><a href="https://www.youtube.com/watch?v=oEOwbuwI4bY" id="mehtap-sidebar">Mehtap<br><br></a></li>
        </ul>
    </div>
    <!--einde template -->
    <div id="artikelen">
        <div id="artikel1">

            <h1>comment is geplaats</h1>
            <a href="../tonnys.html">ga terug naar artikelen</a>
            <br>


            
            <?php
            // var_dump($_POST);
            // why doesnt shit work why just why https://www.youtube.com/watch?v=k238XpMMn38 


            $username = htmlspecialchars($_POST['gebruikersnaam']);
            $comment = htmlspecialchars($_POST['comment']);
            $wachtwoord = htmlspecialchars($_POST['wachtwoord']);
            echo($username . $comment . $wachtwoord);
            
            $servername = "83.162.165.175";
            include'../login.php';
            $dbname = "comments";
            
            // maakt die connectie
            $conn = new mysqli($servername, $username, $password, $dbname);
            // error debugging like als eht domein ofline is dan krijg je dit wss 
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "INSERT INTO `comments` (`gebruikersnaam`, `datum`, `id_comment`, `id_artikel`, `comment`, `score`) 
            VALUES (\'gebruikersnaam\', \'2020-12-22\', \'1\', \'200\', \'comment\', \'696969\')";
            
            if ($conn->query($sql) === TRUE) {
              echo "comment is geplaats";
            } else {
              echo "fout: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
	 ?>

        </div>


    </div>

</body>

</html>
