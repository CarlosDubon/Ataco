 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysql_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysql_error());
    }
    mysql_set_charset('utf8');
    $db = mysql_select_db("Ataco", $conn);
    
    function getResult($query,$conn){
        return mysql_query($query,$conn);
    }
    function getRows($result){
        return mysql_fetch_row($result);
    }
?> 