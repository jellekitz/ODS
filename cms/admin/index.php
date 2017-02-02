<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up/Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="../css/login.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="../../index.php">Terug<br></a>
           
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right" id="lol">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <!-- Dit is je profiel -->    
                <h1>U bent ingelogd</h1>
                <a href="../../cms/admin/pagina.php"><span class="tooltip" title="Pagina Link">Klik hier om naar uw pagina te gaan!</span></a>
                <?php } else { ?>
                <div id="bar">
                 <h1>Login en Registreren</h1>
                </div>
                
                <div id="register">
                    <a href="register.php">Sign Up</a>
                </div>
                <div id="login">
                    <a href="login.php">Login</a>
                </div>
                
                     <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
