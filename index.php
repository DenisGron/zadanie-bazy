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
        <H1>Matematyka</H1>
        <table border="1">
            <tr>
                <th>Nr</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Ocena</th>
            </tr>
            <?php
            $polaczenie = mysqli_connect('localhost','root','','szkola');

            $dane = "SELECT * FROM uczen";

            $wynik = mysqli_query($polaczenie, $dane);

            while ($uczen = mysqli_fetch_assoc($wynik))

            echo "<tr><td>" .$uczen['id']. "</td><td>" .$imie['Imie']. "</td><td>" .$nazwisko['Nazwisko']. "</td><td>" .$ocena['Ocena']. "</td></tr>";
            ?>
        </table>
    </main>

    <aside>
            <li><a href="">Matematyka</a></li>
            <li><a href="">J.Polski</a></li>
            <li><a href="">J.Angielski</a></li>
    </aside>

    <footer>
        <a href="https://zsz.bobowa.pl/">ZSZBobowa</a>
    </footer>
</body>
</body>
</html>