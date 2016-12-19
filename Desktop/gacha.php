<?php
	if(count($argv)===1)
	$loop=1;

	else if(1<=$argv[1] && $argv[1]<=10)
	{
		$loop = $argv[1];
	}
	else
	{
	print "erro \n";
	exit();
	}
	
	
	$chara=[
	["SR","Baha","ID101"],
	["NR","choko","ID201"],
	["NR","drg","ID301"]
	];
	
	
	for($i=0;$i<$loop;$i++)
	{
		$rand = mt_rand(0, count($chara)-1);
		$cur = $chara[$rand];
		print $i+1 . '回目' . $cur[0].' '.$cur[1].' '.$cur[2]."\n";
		
	}
?>
