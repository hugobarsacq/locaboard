<?php

$mailclient= $_POST['mailclient'];
$mdpclient= $_POST['mdpclient'];

if($mailclient != "bryan03150@gmail.com" || $mdpclient != 123456){
   echo"Adresse ou mot de passe incorect <br/>" ;
   ?><html>
       <a href="connexion.html">Réessayer</a>
       
</html>
<?php
}
else{?>
    <html>
    
    <center>
        <div style="margin-top: 10%;">
        <h2>Heureux de vous revoir sur notre site</h2>
        </div>
        <a href="Accueil.html" style="text-decoration: none;">Accéder a notre site</a>
        
        
    </center>
    
</html>  
<?php
}
?>



