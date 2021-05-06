<?php

function conexion(){

$con = mysql_connect("localhost","root","root");

if (!$con){

die('Could not connect: ' . mysql_error());
}

mysql_select_db("BD_NORMAL", $con);
mysql_query ("SET NAMES 'utf8'");

return($con);

}

?>