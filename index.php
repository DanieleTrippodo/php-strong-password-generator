<!-- Sezione PHP iniziale -->
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>







<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Sessioni</title>
</head>




<body>


                                                                                                                                                                                   
<!--      ____                                    
        ,'  , `.                                  
     ,-+-,.' _ |              ,--,                
  ,-+-. ;   , ||            ,--.'|         ,---,  
 ,--.'|'   |  ;|            |  |,      ,-+-. /  | 
|   |  ,', |  ':  ,--.--.   `--'_     ,--.'|'   | 
|   | /  | |  || /       \  ,' ,'|   |   |  ,"' | 
'   | :  | :  |,.--.  .-. | '  | |   |   | /  | | 
;   . |  ; |--'  \__\/: . . |  | :   |   | |  | | 
|   : |  | ,     ," .--.; | '  : |__ |   | |  |/  
|   : '  |/     /  /  ,.  | |  | '.'||   | |--'   
;   | |`-'     ;  :   .'   \;  :    ;|   |/       
|   ;/         |  ,     .-./|  ,   / '---'        
'---'           `--`---'     ---`-'               -->
<!-- -main-------------------------------------------------- -->
<main>
    
    <div class="container">
        <h2 class="my-4">Benvenuto, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>


</main>                                                                
<!-- -main-------------------FINE--------------------------- -->







</body>
</html>