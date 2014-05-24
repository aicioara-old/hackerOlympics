<html>

<head></head>

<style>

#first {
	width: 100px;
	height: 100px;
	background-color: yellow;
	display: inline-block;
	line-height: 100px;
}

#second {
	width: 100px;
	height: 100px;
	background-color: blue;
	display: inline-block;
	line-height: 100px;
}

#third {
	width: 100px;
	height: 100px;
	background-color: green;
	display: inline-block;
	line-height: 100px;

}

</style>

<body>



	<div id="second"></div>
	<div id="first"></div>
	<div id="third"></div>

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
					$('#first').html(result[1].name + "-" + result[1].points);
					$('#second').html(result[2].name + "-" + result[2].points);
					$('#third').html(result[3].name + "-" + result[3].points);
				}
			});
		}


		doIt();
	</script>

</body>

</html>