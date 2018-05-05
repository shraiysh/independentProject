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
		$flag = 0;
		foreach($contents as $line_num=>$line)
		{
			$details = explode(",", $line);
			echo("<pre>");
			print_r($details);
			echo("</pre>");
			if(strcmp($details[0],$person[0])==0)
			{
				$flag = 1;
				
				?><script type="text/javascript">window.location.assign("transactioncomplete.php");</script>
				<?php
			}
		}
		if($flag == 0)
		{
			$csvfile = fopen("csv_new_user.csv", "a+");
			fwrite($csvfile, $_GET['person'].",1\n");
			$arduinofile = fopen("arduino.txt","w");
			fwrite($arduinofile, '1');
		}
	?>
	<script type="text/javascript">window.location.assign("transactioncomplete.php");</script>

</body>
</html>
