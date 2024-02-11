<!DOCTYPE html>
<html>
<head>
    <title>Worksheet</title>
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
<div class="inword">कार्यविवरण पंजी</div>
<br>
<br><br>
</div>

    <table>
        <thead>
            <tr>
                <th>आवक क्रमांक</th>
                <th>आवक दिनांक</th>
                <th>जावक क्रमांक</th>
                <th>विषय</th>
                <th>निपटारा दिनांक</th>
                <th>निपटारा केल्याबद्दल थोडक्यात तपशील</th>
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
                $query = "SELECT inward_ref_no, inward_date, outward_ref_no, subject, complition_date, info FROM workseet";
                $stmt = $db->query($query);
                
                // Display data in table rows
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['inward_ref_no'] . "</td>";
                    echo "<td>" . $row['inward_date'] . "</td>";
                    echo "<td>" . $row['outward_ref_no'] . "</td>";
                    echo "<td>" . $row['subject'] . "</td>";
                    echo "<td>" . $row['complition_date'] . "</td>";
                    echo "<td>" . $row['info'] . "</td>";
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
