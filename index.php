<html>

<head></head>

<style>

#first {
	width: 100px;
	height: 100px;
	background-color: #D9A441;
	display: inline-block;
	line-height: 100px;
}

#second {
	width: 100px;
	height: 100px;
	background-color: #CCC2C2;
	display: inline-block;
	line-height: 100px;
}

#third {
	width: 100px;
	height: 100px;
	background-color: #965A38;
	display: inline-block;
	line-height: 100px;

}

</style>

<body>



	<div id="first"></div> Winners

	<div id="data"></div>



	<script src="jquery.js"> </script>

	<script>

		function doIt(to, from, text) {

			$.ajax({
				url: "http://hacker-olympics-london.herokuapp.com/leaderboard.json",
				method: "get",
				async: false,
				success: function(result) {
					console.log(result[4]);
					$('#first').html(result[12].name + "-" + result[12].points);
				}
			});
		}

		//I was here

		doIt();
	</script>

</body>

</html>
