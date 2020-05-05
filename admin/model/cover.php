<?php
    function loadcover () {
        include '/opt/lampp/htdocs/WebSites/OwnPlayer/model/conection.php';
        $conection = establish();
        $parameter = 'Seiken no Blacksmith';
        $consult="SELECT `path` FROM `cover` WHERE `name` = '$parameter'";
        $result = mysqli_query( $conection, $consult ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        while ($colum = mysqli_fetch_array( $result ))
        {
            // echo "<td>" . $colum['name'] . "</td><td>" . $colum['path'] . "</td>";
            echo $colum['path'];
        }
        return false;
    }
?>