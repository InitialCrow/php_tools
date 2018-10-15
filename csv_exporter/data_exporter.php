<?php
/** 
	class to export csv from data 
**/
class DataExporter
{
	private $data;
	private $mod;
	private $src;

	function __construct($data= null,$src="src/export",$mod="csv") // respect data["col"] = ['colname', 'colname2', ... ], data["raws"] = [["raw -> col1","raw2 -> col1" ],[] ]
	{
		$this->data = $data;
		$this->mod = $mod;
		$this->src = $src.".".$this->mod;
	}
	public function export($delimiter = ";"){ // open and write csv
		
		if($this->mod == "csv"){

			$data = $this->data;
			$raws = $data["raws"];
			$headers = $data["cols"];
			$fp = fopen($this->src, 'w');
			
			fputcsv($fp, $headers, $delimiter);

			fputcsv($fp, $raws, $delimiter);
				
			fclose($fp);

		}

	}
}