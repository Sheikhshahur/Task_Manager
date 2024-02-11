<!DOCTYPE html>
<html>
<head>
    <title>Outward Report</title>
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
<div class="inword">जावक नोंदवही</div>
<br>
<br><br>
</div>
    <table>
        <thead>
            <tr>
                <th>जावक संदर्भ क्रमांक</th>
                <th>जावक संदर्भ दिनांक</th>
                <th>कोणास पाठवले</th>
                <th>संकलनाचा क्रमांक व नाव</th>
                <th>विषय</th>
                <th>आवक तपासणी क्रमांक</th>
                <th>वर्गीकरण</th>
                <th>टपाल खर्च</th>
                <th>शेरा</th>
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
                $query = "SELECT Outward_ref_no, Outward_ref_date, Send_to_whom, Collection_no_name, Subject, Incoming_check_no, Classification, Postage_cost, Shera FROM outward_record";
                $stmt = $db->query($query);
                
                // Display data in table rows
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['Outward_ref_no'] . "</td>";
                    echo "<td>" . $row['Outward_ref_date'] . "</td>";
                    echo "<td>" . $row['Send_to_whom'] . "</td>";
                    echo "<td>" . $row['Collection_no_name'] . "</td>";
                    echo "<td>" . $row['Subject'] . "</td>";
                    echo "<td>" . $row['Incoming_check_no'] . "</td>";
                    echo "<td>" . $row['Classification'] . "</td>";
                    echo "<td>" . $row['Postage_cost'] . "</td>";
                    echo "<td>" . $row['Shera'] . "</td>";

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
</html>
