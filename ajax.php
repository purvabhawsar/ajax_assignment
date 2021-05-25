

<html>
<head>
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
</head>
<body>
	<form>
		<div class="container">

			<h3 class="text-center">same city</h3>
			<br><br>
			<select class="form-control" name="test1"
			id="one">
			<option value="1" >Select 1</option>
			<option value="2">indore</option>
			<option value="3">mumbai</option>
			<option value="4">bhopal</option>
			<option value="5">pune</option>
			<option value="6">delhi</option>


		</select>
		<br><br>

		<select class="form-control"name="test2"
		id="two">
		<option value="1" >Select 2</option>
		<option value="2">indore </option>
		<option value="3">mumbai</option>
		<option value="4">bhopal</option>
		<option value="5">pune</option>
		<option value="6">delhi</option>


	</select>
	<br><br>

	<select class="form-control" name="test3"
	id="three">
	<option value="1">Select 3</option>
	<option value="2">indore</option>
	<option value="3">mumbai</option>
	<option value="4">bhopal</option>
	<option value="5">pune</option>
	<option value="6">delhi</option>

</select>
<br><br>
<script type="text/javascript">

	jQuery(function ($) {
			var $set = $('#one, #two , #three')
			$set.change(function () {
				$set.not(this).val(this.value)
			})
		})

	</script>

<center><button class="btn btn-primary">Submit</button></center>






</div>




</form>

</body>
</html>