<?php session_start(); ?>

<head>
    
    <script>
function red()
{
document.body.style.backgroundColor="red"
}

function blue()
{
document.body.style.backgroundColor="blue"
}

function fuchsia()
{
document.body.style.backgroundColor="fuchsia"
}

function yellow()
{
document.body.style.backgroundColor="yellow"
}

function white()
{
document.body.style.backgroundColor="white"
}
        
function green()
{
document.body.style.backgroundColor="green"
}


// -->
    </script>
</head>

<a class="navbar-brand" href="../../index.php">Terug<br></a>

<div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <!-- Dit is je profiel -->    
                <h1 class="navbar-text">welkom <?php echo $_SESSION['usr_name']; ?></h1>
                
                
<table border="0" cellpadding="5"
       

cellspacing="0">
    
<h4>Kies uw achtergrond kleur</h4>

<tr>

<td style="background-color:red"><a href="#" onclick="red()">red</a></td>

<td style="background-color:#9595FF"><a href="#" onclick="blue()">blue</a></td>

</tr>

<tr>

<td style="background-color:#ff00ff"><a href="#" onclick="fuchsia()">fuchsia</a></td>

<td style="background-color:yellow"><a href="#" onclick="yellow()">yellow</a></td>

</tr>
    
<tr>

<td style="background-color:white"><a href="#" onclick="white()">white</a></td>

<td style="background-color:green"><a href="#" onclick="green()">green</a></td>

</tr>

</table>

</center></div><p>&nbsp;</p>

<form>



</form>
                <?php } else { ?>
                
                 <h1>U bent niet ingelogd</h1>
<?php } ?>
                