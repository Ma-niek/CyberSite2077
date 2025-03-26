<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSite 2077</title>
    <meta name="description" content="Logowanie do witryny internetowej CyberSite 2077.">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <link rel="icon" type="image/x-icon" href="favicon2.png">
    <style>
        a, h1 {
            color: black;
        }

        a{
            font-size: 25px;
        }
        footer > p{
            margin: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Rejestracja</h1>
    </header>
</body>
    <section id="logowanie">
        <form action="rejestracja.php" method="post">
            <label for="email">Podaj E-mail: </label><br>
            <input type="email" placeholder="E-mail" minlength="15" id="email" name="email" required>
            <br>
            <label for="nick">Podaj swój nick/nazwę użytkownika: </label> <br>
            <input type="text" placeholder="nick/nazwa użytkownika" minlength="3" id="nick" name="nick" required>
            <br>
            <label for="password">Podaj hasło: </label> <br>
            <input type="password" placeholder="hasło użytkownika" minlength="10" id="password" name="password" required>
            <br>
            <label for="password2">Powtórz hasło: </label> <br>
            <input type="password" placeholder="hasło użytkownika" minlength="10" id="password2" name="password2" required>
            <br><br>
            <input type="reset" value="Wyczyść dane" id="reset"> <input type="submit" name="submit" value="Wyślij" id="wyslij">
        </form>

        <?php
            $conn = mysqli_connect("localhost", "root", "", "cybersite2077");
            if(isset($_POST['submit'])) {

            $email = $_POST['email'];
            $nick = $_POST['nick'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

                if ($password === $password2) { 

                    $pyt1 = "INSERT INTO users(`email`, `nick`, `password`) VALUES ('$email', '$nick', '$password');";

                    $zapyt1 = mysqli_query($conn, $pyt1);

                    if ($zapyt1) {
                        echo "<h1>Gratulacje zarejestrowałeś/aś się na stronie CyberSite 2077.<br></h1> <a href='logowanie.php'>Zaloguj się</a>";
                        } else {
                            echo "<h1>Wystąpił błąd podczas rejestracji.</h1>";
                        }
                } else {
                    echo "<h1>Hasła są różne!</h1>";
            }
            }
            mysqli_close($conn);
          ?>
        </section>
    <footer>
        <p>CyberSite 2077 &copy Wszelkie prawa zastrzeżone</p>
    </footer>
</body>
</html>