 <?php

    // Create connection
    function Arrancar(){
      $servername = "localhost";
      $username = "root";
      $password = "";
    try{
        $conn = new PDO('mysql:host=localhost;dbname=ataco;charset=utf8mb4', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
      }catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
        return false;
      }
    }

    function getResult($sql){
      $conn=Arrancar();
      try {
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (Exception $e) {

      }

    }

?>
