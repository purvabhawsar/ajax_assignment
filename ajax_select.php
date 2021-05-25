

<html>
<head>
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script type="text/javascript">
    
jQuery(function ($) {
    var $set = $('#one, #two , #three')
    $set.change(function () {
        $set.not(this).val(this.value)
    })
})
	</script>

</head>
<body>
<form>
<div class="container">

<h3 class="text-center">Dropdown Select</h3>
<br><br>
<select class="form-control" name="test1"
                id="one">
                <option >Select 1</option>
                <option>indore</option>
                <option>mumbai</option>
                <option>bhopal</option>
                <option>pune</option>
                <option>delhi</option>
          

</select>
<br><br>

<select class="form-control"name="test2"
                id="two">
                <option value >Select 2</option>
                <option>indore </option>
                <option>mumbai</option>
                <option>bhopal</option>
                <option>pune</option>
                <option>delhi</option>
          

            </select>
<br><br>

<select class="form-control" name="test3"
                id="three">
                <option value="">Select 3</option>
                <option>indore</option>
                <option>mumbai</option>
                <option>bhopal</option>
                <option>pune</option>
                <option>delhi</option>
          
            </select>
<br><br>
<center><button class="btn btn-primary">Submit</button></center>
	





</div>
	



</form>

</body>
</html>