<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$person = explode(",", $_GET['person']);
		echo("<pre>");
		print_r($person);
		$contents = file("csv_new_user.csv");
		print_r($contents);
		echo("</pre>");

		foreach($contents as $line_num=>$line)
		{
			$details = explode(",", $line);
			echo("<pre>");
			print_r($details);
			echo("</pre>");
			if(strcmp($details[0],$person[0])==0)
			{
				if($details[3]==0 || $details[3] == '0')
				{
					$arduinofile = fopen("arduino.txt", "w+");
					fwrite($arduinofile, 1);
				}
				$file = fopen("csv_new_user.csv","w");
				for($i=0;$i<$line_num;$i++)
				{
					fwrite($file, $contents[$i]);
				}
				fwrite($file, $_GET['person'].",1\n");
				for($i=$line_num+1;$i<count($contents);$i++)
				{
					fwrite($file, $contents[$i]);
				}
			}
		
		}
	?>
		<script type="text/javascript">window.location.assign("transactioncomplete.php");</script>


</body>
</html>