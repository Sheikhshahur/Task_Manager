<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
        $ASK = $_POST['ASK'];
        $AD = $_POST['AD'];
        $JK = $_POST['JK'];
        $V = $_POST['V'];
        $ASD = $_POST['ASD'];
        $ASMD = $_POST['ASMD'];
       

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "task_management";
		$conn = mysqli_connect($servername, $username, $password, $database);

		$sql="INSERT INTO `workseet` (`inward_ref_no`, `inward_date`, `outward_ref_no`, `Subject`, `complition_date`, `info`) VALUES ('".$ASK."','".$AD."','".$JK."','".$V."','".$ASD."','".$ASMD."')";
        // $sql = "INSERT INTO `inward_record` (`Office_Roll_Number`, `Inword_reference_no`, `Incoming_date`, `Date_of_incoming_reference`, `Comes_from`, `Number_name_collection`, `Subject`, `Outward_check_no`, `Classification`, `Shera`) VALUES ('06', '1235', '2023-04-20', '2023-04-6', 'Nagpur', 'Ganesh', 'Black Marketing', '0789', 'Group A', 'Please help me')";
        $result = mysqli_query($conn, $sql);

	}
	include './includes/admin_header.php';
    include './includes/data_base_save_update.php';
?>





<!DOCTYPE html>
<html>
<head>
    <!-- Marathi font -->
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- SPECIFYING THE PARTICULAR MARATHI FONT -->
	<style>
   	 input[type="text"], input[type="email"]
	 	{
       	 font-family: "Your Marathi Font", Arial, sans-serif;
    	}
	</style>

	<title>WorkSheet</title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">


<title>WorkSheet </title>
<meta charset="windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">


</head>
<body>

<br>
<br>
    <div class="inword">कार्यविवरण पंजी</div>
<div class="forms">
	<div class="formLeft">
			<form  action="Worksheet.php" method="POST">
				<label > आवक क्रमांक: </label>
                <input type="text" name="ASK" id="ASK"  required/><br/><br/>
        
				<label >आवक दिनांक:</label>
				<input type="date" name="AD" id="AD"  required/><br/><br/>
	
				<label >जावक क्रमांक :</label>
				<input type="text" name="JK" id="JK"  required/><br/><br/>
       
				<label >विषय:</label>
				<input type="text" name="V" id="V" required/><br/><br>
       
				<label >निपटारा दिनांक:</label>
				<input type="date" name="ASD" id="ASD" required/><br/><br/>
   
				<label >निपटारा केल्याबद्दल थोडक्यात तपशील :</label>
				<input type="text" name="ASMD" id="ASMD"  required/><br/><br>
      
				<br>
				<br>

				
				<button type="submit" onclick="submit">Submit</button>
				

			</form>
		</div>
</div>

<br>
<br>



</body>
</html>