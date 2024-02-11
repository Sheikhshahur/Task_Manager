<?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $KA = $_POST['KA'];
        $ASK = $_POST['ASK'];
        $ASD = $_POST['ASD'];
        $ASMD = $_POST['ASMD'];
        $KA1 = $_POST['KA1'];
        $PSKM = $_POST['PSKM'];
        $V = $_POST['V'];
        $JTK = $_POST['JTK'];
        $VAR = $_POST['VAR'];
        $SHERA = $_POST['SHERA'];
		$task = $_POST['task'];
		$assEmp=$_POST['empid'];
		$EmpID;
		$EmpName;

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "task_management";
        $conn = mysqli_connect($servername, $username, $password, $database);
        $sql = "INSERT INTO `inward_record` (`Office_Roll_Number`, `Inword_reference_no`, `Incoming_date`, `Date_of_incoming_reference`, `Comes_from`, `Number_name_collection`, `Subject`, `Outward_check_no`, `Classification`, `Shera`) VALUES ('".$KA."','".$ASK."','".$ASD."','".$ASMD."','".$KA1."','".$PSKM."','".$V."','".$JTK."','".$VAR."','".$SHERA."' )";
        // $sql = "INSERT INTO `inward_record` (`Office_Roll_Number`, `Inword_reference_no`, `Incoming_date`, `Date_of_incoming_reference`, `Comes_from`, `Number_name_collection`, `Subject`, `Outward_check_no`, `Classification`, `Shera`) VALUES ('06', '1235', '2023-04-20', '2023-04-6', 'Nagpur', 'Ganesh', 'Black Marketing', '0789', 'Group A', 'Please help me')";
        $result = mysqli_query($conn, $sql);
		// to get information the employee 
		$sql1 ="SELECT `id`,`emp_name` FROM `emp_login` where id='$assEmp'";
		$result2 = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result2) > 0) {
    	$row = mysqli_fetch_assoc($result2);
    	$EmpID = $row['id'];
		$EmpName =$row['emp_name'];
		} else {
		    echo "No results found.";
		}

		// insert the row in assign table
		$sql2 = "INSERT INTO `assign_task` (`emp_id`, `task`, `assignto`,`work_assign_date`,`status`, `remark`) VALUES ('".$EmpID."','".$task."','".$EmpName."','".$ASD."','Assigned','none')";
		$result1 = mysqli_query($conn, $sql2);
    }

    // Assign Task database connection...
include './includes/admin_header.php';
include './includes/data_base_save_update.php';


?>






<!DOCTYPE html>
<html>
<head>
	<!-- MARATHI TEXT  -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- SPECIFYING THE PARTICULAR MARATHI FONT -->
	<style>
   	 input[type="text"], input[type="email"]
	 	{
       	 font-family: "Your Marathi Font", Arial, sans-serif;
    	}
	</style>
    
    <title>Inward</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
        

</head>
<body>

<br>
<br>
    <div class="inword">आवक नोंदवही</div>
<div class="forms">
	<div class="formLeft">
			<form action="inward.php" method="POST">
				<label > कार्यालयीन अनुक्रमांक :</label>
				<input type="text" name="KA" id="KA" required ><br><br>
				
				<label >आवक संदर्भ क्रमांक :</label>
				<input type="text" name="ASK" id="ASK"  required><br><br>
				
				<label >आवक संदर्भ दिनांक :</label>
				<input type="date" name="ASD" id="ASD" required/><br><br>

				<label >आवक संदर्भ मिळाल्याचा दिनांक :</label>
				<input type="date" name="ASMD" id="ASMD"  required><br><br>

				<label >कोणाकडून आले :</label>
				<input type="text" name="KA1" id="KA1" required><br><br>

				<label >पाठवलेल्या संकलनाचा क्रमांक व नाव :</label>
				<input type="text" name="PSKM" id="PSKM" required><br><br>

				<label >विषय :</label>
				<input type="text" name="V" id="V" required><br><br>

				<label >जावक तपासणी क्रमांक :</label>
				<input type="text" name="JTK" id="JTK" required ><br><br>

				<label >वर्गीकरण :</label>
				<input type="text" name="VAR" id="VAR" required><br><br>

				<label >शेरा :</label>
				<input type="text" name="SHERA" id="SHERA" required><br><br>

				<label>Task : </label>
				<input class="form-control" name="task" placeholder="Enter Task" type="text"><br><br>

				<label for="Employee">Employee : </label>
				<select id="emp_id" name="empid" class="form-control">
					<option value="">None</option> 
					
					<?php
                                                     
							$qry = mysqli_query($connection, "SELECT * FROM emp_login where user_role='employee' and status='1'") or die("select query fail" . mysqli_error());
							$count = 0;
							while ($row = mysqli_fetch_assoc($qry)) 
						{
							$count = $count + 1;
							
							$id = $row['id'];
							$emp_code = $row['emp_code'];
							$emp_name = $row['emp_name'];
					
							echo "<option value=".$id.">".$emp_code."/".$emp_name."</option>";
						}

					?>

				</select>
				<br>
				<br>

				
				<button type="submit">Submit</button>
				

			</form>
		</div>
</div>

<br>
<br>



</body>
</html>