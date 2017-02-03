<?php
    require_once("conection.php");

    $con = Conectar();

    $sql = "select * from inscricao order by oid_inscrito desc;";

    $select = mysqli_query($con, $sql);

    $lista = array();

    while($rs = mysqli_fetch_array($select)){
        $lista[] = $rs;
    }
    echo(json_encode($lista));

?>