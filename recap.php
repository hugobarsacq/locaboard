<?php

$nomclient = $_POST['nomclient'];
$prenomclient = $_POST['prenomclient'];
$mailclient = $_POST['mailclient'];
$mdpclient = $_POST['mdpclient'];
$date_naissclient = $_POST['date_naissclient'] ;       ;
$villeclient = $_POST['villeclient'];
$adrC = $_POST['adrC'] ;      
$CP = $_POST['CP'];        

        

?> 
<html>
    <center>
        <h2>Merci pour votre inscription: </h2><br/><br/>
        <h3>Vous ètes bien <?php echo "$nomclient $prenomclient";?><br/>
        Votre adresse mail est : <?php echo"$mailclient" ?><br/>
        Né le <?php echo "$date_naissclient"?><br/>
        Code postale:<?php echo"$CP"?><br/>
        Vous habité à <?php echo"$villeclient"?> à l'adresse <?php echo"$adrC"?><br/></h3>
        
        
        <a href='Accueil.html'>Revenir a l'Accueil</a>
        
        
        
        
        
    </center>
    
    
    
    
    
</html>