<?php
$file="terms.csv";
$fp=fopen($file,"r");
$data=array();
while($line = trim(fgets($fp)))
{
	if ($line!="")
	{
		$parts=explode(",",$line,2);
		if ($parts[1][0]=="\"")
		{
			$parts[1]=substr($parts[1],1,strlen($parts[1])-2);
		}

		$data[$parts[0]]=$parts[1];
	}
}
asort($data);

foreach($data as $key => $val)
{
	echo "\\noindent \\textbf{".$key."} ".$val."\n\\newline \\newline\n";
}

?>