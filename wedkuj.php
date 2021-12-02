<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div class="middle">
    <div class="left">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
            
                $db = new mysqli('localhost', 'root', '', 'wedkowanie');

                $sql = "SELECT nazwa, wystepowanie FROM `ryby` where styl_zycia = 1";

                $result = $db->query($sql);
                while($row = $result->fetch_assoc()) 
                {
                    $name = $row['nazwa'];
                    $wystepowanie = $row['wystepowanie'];
                    echo "<li>$name, występowanie: $wystepowanie</li>";
                    
                }
                $db->close();
            ?>
        </ul>
    </div>
    <div class="right">
        <img src="ryba1.jpg" alt="Sum"> <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    </div>
    <footer>
        <p>Stronę wykonała: Yana Khorolska</p>
    </footer>
   
</body>
</html>