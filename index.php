<html>

<head></head>

<body>



	<script src="jquery.js"> </script>

	<script>

		function doIt(to, from, text) {

			$.ajax({
				url: "https://api.sendgrid.com/api/mail.send.json",
				method: "post",
				data : {
					"api_user" : "andreifirst",
					"api_key" : "andreici7",
					"subject": "hacker",
					"to" : to,
					"from": from,
					"text" : text
				},
				async: false,
				success: function(result) {
				}
			});
		}

	</script>

</body>

</html>