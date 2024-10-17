<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Dziennik</h1>
    </header>

    <main>
        <H1>J.Polski</H1>
        <section>
            <?php
            $polaczenie = mysqli_connect('localhost','root','','szkola');

            $dane = "SELECT * FROM uczen";

            $wynik = mysqli_query($polaczenie, $dane);

            while ($uczen = mysqli_fetch_assoc($wynik))

            echo "<div class= 'bloczki'> Nr. " .$uczen['ID']. "<br>Imie: " .$uczen['Imie']. "<br>Nazwisko: " .$uczen['Nazwisko']. "<br>Ocena: " .$uczen['Ocena']. "</div>";

            mysqli_close($polaczenie);
           ?>
           </section>
        </table>
    </main>

    <aside>
            <ul>
            <li><a href="index.php">Matematyka</a></li>
            <li><a href="polski.php">J.Polski</a></li>
            <li><a href="angielski.php">J.Angielski</a></li>
            </ul>
    </aside>

    <footer>
        <a href="https://zsz.bobowa.pl/">ZSZBobowa</a>
    </footer>
</body>
</body>
</html>