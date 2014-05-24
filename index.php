<html>

<head></head>

<body>



	<div id="first"></div>
	<div id="second"></div>
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