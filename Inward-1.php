<!DOCTYPE html>
<html>
<head>
    <title>Inward Report - 2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .print-button {
            margin-top: 10px;
        }
        
        /* Hide print button when printing */
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
    <!-- Marathi font -->
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
<div class="inword">आवक नोंदवही</div>
<br>
<br><br>
</div>

    <table>
        <thead>
            <tr>
                <th>कार्यालयीन अनुक्रमांक</th>
                <th>आवक संदर्भ क्रमांक</th>
                <th>आवक संदर्भ दिनांक</th>
                <th>आवक संदर्भ मिळाल्याचा दिनांक</th>
                <th>कोणाकडून आले</th>
                <th>पाठवलेल्या संकलनाचा क्रमांक व नाव</th>
                <th>विषय</th>
                <th>जावक तपासणी क्रमांक</th>
                <th>वर्गीकरण</th>
                <th>शेरा</th>
                <th>Assign to</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connect to the database
            $host = 'localhost';
            $dbname = 'task_management';
            $username = 'root';
            $password = '';
            
            try {
                // Retrieve data from the inward_record table
                $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $query1 = "SELECT Office_Roll_Number, Inword_reference_no, Incoming_date, Date_of_incoming_reference, Comes_from, Number_name_collection, Subject, Outward_check_no, Classification, Shera FROM inward_record";
                $stmt1 = $db->query($query1);
                
                // Retrieve data from the assign_task table
                $query2 = "SELECT assignto FROM assign_task";
                $stmt2 = $db->query($query2);
                
                // Display data from both tables in table rows

                while (($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) && ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)))
                 {
                    echo "<tr>";
                    echo "<td>" . $row1['Office_Roll_Number'] . "</td>";   //datbase k table ka name dalana h isme

                    echo "<td>" . $row1['Inword_reference_no'] . "</td>";   
                    echo "<td>" . $row1['Incoming_date'] . "</td>";
                    echo "<td>" . $row1['Date_of_incoming_reference'] . "</td>";
                    echo "<td>" . $row1['Comes_from'] . "</td>";
                    echo "<td>" . $row1['Number_name_collection'] . "</td>";
                    echo "<td>" . $row1['Subject'] . "</td>";
                    echo "<td>" . $row1['Outward_check_no'] . "</td>";
                    echo "<td>" . $row1['Classification'] . "</td>";
                    echo "<td>" . $row1['Shera'] . "</td>";
                    echo "<td>" . $row2['assignto'] . "</td>";
                    echo "</tr>";
                }
            } catch (PDOException $e) {
                echo "Database Error: " . $e->getMessage();
            }
            ?>
        </tbody>
    </table>
    
    <button type="submit" class="print-button" onclick="window.print()">Print</button>
</body>
