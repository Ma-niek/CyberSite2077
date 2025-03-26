<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>CyberSite 2077</title>
    <meta name="description" content="Logowanie do witryny internetowej CyberSite 2077.">
    <link rel="stylesheet" type="text/css" href="styl3.css">
    <link rel="icon" type="image/x-icon" href="favicon2.png">
</head>
<body>
    <header>
        <h1>Logowanie</h1>
    </header>

    <main>
        <form action="logowanie.php" method="post">
            <label for="email">Podaj E-mail: </label><br>
            <input type="email" placeholder="E-mail" minlength="15" id="email" name="email" required>
            <br>
            <label for="nick">Podaj swój nick/nazwę użytkownika: </label> <br>
            <input type="text" placeholder="nick/nazwa użytkownika" minlength="3" id="nick" name="nick" required>
            <br>
            <label for="password">Podaj hasło: </label> <br>
            <input type="password" placeholder="hasło użytkownika" minlength="10" id="password" name="password" required>
            <br>
            <input type="submit" name="submit" value="Zaloguj się" id="wyslij2">
        </form>

        <?php
            session_start();
            $conn = mysqli_connect("localhost", "root", "", "cybersite2077");
            if(isset($_POST['submit'])) {

            $email = $_POST['email'];
            $nick = $_POST['nick'];
            $password = $_POST['password'];

            $pyt2 = "SELECT `nick`, `email`, `password` FROM `users` WHERE `nick` = '$nick' AND `email` = '$email' AND `password` = '$password';";

            $zapyt2 = mysqli_query($conn, $pyt2);

            if($zapyt2) {
                echo "<section id='komunikat'>Użytkownik poprawnie zalogowany</section>";
                echo "<a href='wiadomosci.html'><button>Przejdź do wiadomości</button> </a>";
                echo "<a href='index.html'><button>Wyloguj</button> </a>";
            } else{
                echo "<h1>Użytkownik nie istnieje.</h1>";
            }

        }
        mysqli_close($conn);
    ?>
    </main>
    <footer>
        <p>CyberSite 2077 &copy Wszelkie prawa zastrzeżone</p>
    </footer>
    </body>
</html>