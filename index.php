<html>
<head></head>

<style>
#first {width: 100px; height: 100px; background-color: #D9A441; display: inline-block; line-height: 100px; }
</style>

<body>
	<div id="first"></div>
	<span> Winners </span>

	<script src="jquery.js"> </script>
	<script>
		$.ajax({
			url: "http://hacker-olympics-london.herokuapp.com/leaderboard.json",
			method: "get",
			async: false,
			success: function(result) {
				console.log(result[4]);
				$('#first').html(result[12].name + "-" + result[12].points);
			}
		});
	</script>

</body>

</html>
