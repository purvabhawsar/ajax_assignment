

<html>
<head>
<title> Ajax</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 class="text-center m-5">Dropdown Selection</h2>
<select name="country" class="country form-control">
<option value="0">Select Country</option>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"vcaps");

$sql = mysqli_query($con,"SELECT * FROM country_tbl");
while($row=mysqli_fetch_array($sql))
{
	echo '<option value="'.$row['id'].'">'.$row['country_name'].'</option>';
} ?>
</select><br/><br/>
<select name="state" class="state form-control ">
	<option>Select state</option>
</select><br><br>

<select name="city" class="city form-control">
	<option>Select City</option>
</select><br><br>
<center><button class="btn btn-primary">submit</button></center>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$(".country").change(function()
		{
			var id=$(this).val();
			var post_id = 'id='+ id;

			$.ajax
			({
				type: "POST",
				url: "2.php",
				data: post_id,
				cache: false,
				success: function(data)
				{
					$(".state").html(data);
				} 
			});

		});




		$(".state").change(function()
		{
			var id=$(this).val();
			var post_id = 'id='+ id;

			$.ajax
			({
				type: "POST",
				url: "3.php",
				data: post_id,
				cache: false,
				success: function(data)
				{
					$(".city").html(data);
				} 
			});

		});








	});
</script>
</body>
</html>
