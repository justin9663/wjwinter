<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Weather Forecaster</title>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/weatherStyles.css" rel="stylesheet">

</head>

<body>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#home" class="navbar-brand">Weather App</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="topContainer">
		<div class="container">
			<div class="jumbotron jumboTransparency">
				<h1>Weather Forecaster</h1>
				<p class="lead">Get a weather forecast for any city in the world</p>
				<p>Enter your search below</p>
				<form>
					<div class="form-group">
						<input type="text" class="form-control input-lg" placeholder="Ex. Tucson, London, San Diego, etc." title="Search Area" id="searchArea">
					</div>
					<div class="alert alert-danger alert-dismissable" id="needCity" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<strong>Oh no!!</strong> We couldn't get your forecast because there was no city entered above!
					</div>
					<div class="alert alert-danger alert-dismissable" id="noCityFound" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<strong>Oh no!!</strong> We couldn't get your forecast! Might want to check your spelling.
					</div>
					<button type="button" class="btn btn-success btn-lg" id="findWeather">
						<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp; Search
					</button>
				</form>
				<div class="alert alert-success" id="cityForecast">
					<p>This is some demo text</p>
				</div>
				
			</div>
		</div>
	</div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script>
	$("#topContainer").css("min-height", $(window).height());
	
	/*$(document).keypress(function(e){
		if(e.which == 13){
			$("#findWeather").click(function(event) {
				event.preventDefault();
				$(".alert").hide();
				if($("#searchArea").val() == ""){
					$("#needCity").fadeIn();	
				}else{
					$.get("scraper.php?city=").$("#searchArea").val(), function(data) {
						if (data == "") {
							$("#noCityFound").fadeIn();
						}else{
							$("#cityForecast").html(data).fadeIn();
							$("#searchArea").val() = "";
						}
					}
					
				}
			});
		}
	});*/
	
	$("#findWeather").click(function(event) {
		event.preventDefault();
		$(".alert").hide();
		$searchArea = $("#searchArea").val();
		if($("#searchArea").val() == ""){
			$("#needCity").fadeIn();
		}else{
			$.get("scraper.php?city=" + $("#searchArea").val(), function(data){
				if(data == ""){
					$("#noCityFound").fadeIn();
					//$("#searchArea").val("");
				}else{
					$("#cityForecast").html("<h2>"+$searchArea+" Forecast for next 3 days: </h2>"+data).fadeIn();
					//$("#searchArea").val("");
				}
			});
		}
		$("#searchArea").val("");
	});
	
</script>
</body>
</html>