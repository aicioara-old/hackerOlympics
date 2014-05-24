<html>

<head></head>

<body>



	<div id="data"></div>



	<script src="jquery.js"> </script>

	<script>

		function doIt(to, from, text) {

			$.ajax({
				url: "http://hacker-olympics-london.herokuapp.com/leaderboard.json",
				method: "get",
				async: false,
				success: function(result) {
				}
			});
		}

	</script>

</body>

</html>