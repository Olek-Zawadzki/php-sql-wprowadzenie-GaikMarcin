<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>
<div class="nav">
    <a class="nav_link" href="index.php">Strona Główna</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
</div>
</head>
<body>
    <h1>Marcin Gaik 2Ti</h1>
    <h3>Pracownicy i Organizacja</h3>
<?php
                echo("<hr />");
                echo("<h3>Pracownicy z nazwą działów</h3>");
                require_once('conn.php');
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org group by nazwa_dzial');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");
?>