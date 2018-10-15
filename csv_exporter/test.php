<?php  // this is test example 

//import class
require_once('data_exporter.php');

//create your data array to export need to respect this models
$export_array = array("cols"=>["test","test2"], "raws"=>["testcol1"]);

//instance the Exporter params is $data=null, $src="src/export", $mod="csv"
$exporter = new DataExporter($export_array,"src/export_test");

//launch export function make sure your directory is create before 
$exporter->export();// params $delimiter = ";"