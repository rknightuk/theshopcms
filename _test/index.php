<!DOCTYPE HTML>
<html>

	<head>
	
		<title></title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<style type="text/css">

		body	{
			font-family: "Helvetica", Arial, sans-serif;
			margin: 0 auto;
			width: 730px;
					}

		</style>
		
	</head>
	
	<body>

		<script type="text/javascript">

			function validate()
			{
				if (this.elements['name'].value === "")
				{
					alert("Fuck off!"); return false;
				}

				if ((this.elements['email'].value.indexOf("@") === -1)
					|| (this.elements['email'].value.indexOf(".") === -1))
				{
					alert("Email incorrect"); return false;
				}

			}

			function init()
			{
				var panel = document.getElementById("feedback");
				panel.innerHTML = "Please enter your email address";
				var form = document.getElementById("contact");
				form.onsubmit = validate;
			}
		</script>

		<h2>Testing validation</h2>
		<form id="contact" action="whateever.php" method="post">
			<input type="text" name="name"><br/>
			<input type="text" name="email"><br/>
			<input type="submit" value="Go!">
		</form>

		<div id="feedback"></div>

	</body>
	
</html>