<h2>資料庫練習(0903)</h2>
<hr>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "...";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed!" . $conn->connect_error);
    } else {
        echo ("Connection successful!");
    }
    $conn->close();
?>