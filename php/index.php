<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<p> This is text before code</p>

<button onClick="clickMe()">Click this button to get the date</button>
<p id="demo">This text will change to the date</p>

<script>
function clickMe(){
	var demo = document.getElementById("demo");
	demo.innerHTML = "This is the date <br>" + Date();
	demo.style.backgroundColor = "#223344";
	demo.style.color = "#FFFFFF";
}

</script>
	<?php
	
		class Car {
			function Car(){
				$this->modal = "VW";
					
			}
			
		}
		$herbie = new Car();
		echo $herbie-> modal;
		echo "<br>";
		
		$myArray = array("hello", 44, 55, 79);
		echo $myArray[1];
		$x = 15;
		$y = 22;
		echo "<br>";
		function aTest(){
			global $x;
			global $y;
			$y = $x + $y;
			echo $y;
		}
		aTest();
		echo "<br>";
		function aTest2($b, $c){
			$a = $b + $c;
			echo "This is test2 ", $a;
		}
		atest2($x, $y);
			
//		Get the parameters passed in the URL
//		print_r($_GET);
		
		
	/* 
	
	***  Setting varibles and sending an email below ***
	
		$emailTo = "justin9663@hotmail.com";
		$subject = "I hope this works!";
		$body = "I really do hope that this works.....";
		$headers = "From: justin@wjwinter.com";
		if (mail($emailTo, $subject, $body, $headers)){
			echo "Mail sent successfully!";	
		}else{
			echo "Mail not sent";	
		}
	*/
	?>
<p> Text after code</p>

</body>
</html>