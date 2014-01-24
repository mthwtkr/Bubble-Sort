<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<title>Selection Sort</title>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/dark-hive/jquery-ui.css"/>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
	<script>
	$(document).ready(function(){
	
	});
	</script>
</head>
<!-- PHP DECLARE FUNCTIONS AND VARIABLES -->
<?php
	// Generate random array
	function random_array($size, $min, $max)
	{
		for ($index = 0; $index < $size; $index++) 
		{
			$rand_value = rand($min, $max);
			$array[] = $rand_value;	
		}
		return $array;
	}

	function bubble_sort($array)
	{
		// Declare Variables
		$array_length = count($array);

		// Sort the random array
		while ($array_length != -1)
		{
			// Push largest value to the end of array
			for ($left=0, $right = $left + 1; $right < $array_length; $left++, $right++) 
			{ 
				// left val is greater than right val
				if ($array[$left] > $array[$right])
				{
					// Shift left val to the right
					$temp = $array[$right];
					$array[$right] = $array[$left];
					$array[$left] = $temp;
				}
			}
			$array_length--;
		}
		return $array;
	}

	// Declare Variables
	$array_size = 100;
	$min = 0;
	$max = 10000;
?>
<!-- END OF PHP DECLARATIONS -->
<body>
	<div class="container">
	    <?php
	    	$time_start = microtime(true);

	    	$random_array = random_array($array_size, $min, $max);
	    	var_dump($random_array);

	    	$sorted_array = bubble_sort($random_array);
	    	var_dump($sorted_array);

	    	$time_end = microtime(true);
			$time = $time_end - $time_start;
			echo "Ran scirpt in $time seconds\n";
	    ?>
	</div> <!--End of #container -->
</body>
</html>