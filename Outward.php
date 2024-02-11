<?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $JSK = $_POST['JSK'];
        $JSD = $_POST['JSD'];
        $KP = $_POST['KP'];
        $SKVN = $_POST['SKVN'];
        $V = $_POST['V'];
        $ATK = $_POST['ATK'];
        $VAR = $_POST['VAR'];
        $TK = $_POST['TK'];
        $SHERA = $_POST['SHERA'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "task_management";
        $conn = mysqli_connect($servername, $username, $password, $database);
        $sql="INSERT INTO `outward_record` (`Outward_ref_no`, `Outward_ref_date`, `Send_to_whom`, `Collection_no_name`, `Subject`, `Incoming_check_no`, `Classification`, `Postage_cost`, `Shera`) VALUES ('".$JSK."','".$JSD."','".$KP."','".$SKVN."','".$V."','".$ATK."','".$VAR."','".$TK."','".$SHERA."')";
        // $sql = "INSERT INTO `inward_record` (`Office_Roll_Number`, `Inword_reference_no`, `Incoming_date`, `Date_of_incoming_reference`, `Comes_from`, `Number_name_collection`, `Subject`, `Outward_check_no`, `Classification`, `Shera`) VALUES ('06', '1235', '2023-04-20', '2023-04-6', 'Nagpur', 'Ganesh', 'Black Marketing', '0789', 'Group A', 'Please help me')";
        $result = mysqli_query($conn, $sql);
    }

    include './includes/admin_header.php';
    include './includes/data_base_save_update.php';
?>
<!-- INSERT INTO `outward_record` (`Outward_ref_no`, `Outward_ref_date`, `Send_to_whom`, `Collection_no_name`, `Subject`, `Incoming_check_no`, `Classification`, `Postage_cost`, `Shera`) VALUES ('01', '2023-04-12', 'Nitin', 'Nitin Bhau', 'hello', '789452', 'Group ji', '784512 RS', 'Shera') -->
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
	<title>Outward</title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">


<title>Outward Report </title>
<meta charset="windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

</head>
<body>

<br>
<br>
    <div class="inword">जावक नोंदवही</div>
<div class="forms">
	<div class="formLeft">
			<form  action="Outward.php" method="POST">
				<label > जावक संदर्भ क्रमांक :</label>
				<input type="text" name="JSK" id="JSK"  required><br/><br/>

				<label >जावक संदर्भ दिनांक :</label>
				<input type="date" name="JSD" id="JSD" required/><br/><br/>
     
				<label >कोणास पाठवले : :</label>
				<input type="text" name="KP" id="KP"  required/><br/><br>
       
				<label >संकलनाचा क्रमांक व नाव :</label>
				<input type="text" name="SKVN" id="SKVN" required/><br/><br>
       
				<label >विषय :</label>
				<input type="text" name="V" id="V" required/><br/><br>
        
				<label >आवक तपासणी क्रमांक :</label>
				<input type="text" name="ATK" id="ATK" required /><br/><br>
       
				<label >वर्गीकरण :</label>
				<input type="text" name="VAR" id="VAR" required/><br/><br>
       
                <label >टपाल खर्च :</label>
				<input type="text" name="TK" id="TK" required/><br/><br>
       
				<label >शेरा :</label>
				<input type="text" name="SHERA" id="SHERA" required/><br/><br>
       
				
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