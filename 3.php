<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"vcaps");

if($_POST['id']){
$id=$_POST['id'];
if($id==0){
	echo "<option>Select city</option>";
}else{
	$sql = mysqli_query($con,"SELECT * FROM `city_tbl` WHERE sid='$id'");
	while($row = mysqli_fetch_array($sql)){
		echo '<option value="'.$row['id'].'">'.$row['city_name'].'</option>';
		}
	}
}
?>
