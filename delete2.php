<?php
    include_once 'demos/demo1.php';
    include 'cwindex.php';

    if(isset($_GET['delete'])){ //if we pressed insert

        $key = $_GET["primKey"];
        $inssql = "'" . $key . "'";
        //echo "$key";

        $sql = "DELETE FROM country WHERE Country_abb=($inssql)";

        if(mysqli_query($conn,$sql)){
            echo "Row deleted";
        }
        else
            echo "Row not deleted";

        echo "<br>";

    }


?>
