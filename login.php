<?php
session_start();
include __DIR__ . '/users.php';


// In caso l'utente digita il login sbagliato
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit;
        }
    }

    // la variabile si riempe solo se l'utente mette informazioni sbagliate
    $error_message = 'Dati non corretti! Riprova';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
    <!-- Collegamento CSS -->
     <link rel="stylesheet" href="./style.css">
</head>



<body>



        <div class="container">
        <h2 style="margin-bottom: 2.3rem;">Login</h2>

        <?php if ($error_message): ?>
            <div class="alert"><?php echo $error_message; ?></div>
        <?php endif; ?>


        <form method="POST" action="">
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" id="inputUsername" name="username" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        </div>

        <!-- ----------------------------------------------------------------------- -->



    </div>


</body>
</html>
