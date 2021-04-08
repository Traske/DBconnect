<?php
include('db_connect.php');

$q_select = "SELECT * FROM employees WHERE start_year BETWEEN 2006 AND 2009";

$stmt = $conn->query($q_select);

$q_select2 = "SELECT * FROM employees";

$stmt2 =$conn->query($q_select2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<li>" . $row['id'] . ' ' . $row['firstname'] . ' ' . $row['lastname'] . '</li>';
        }
        ?>
    </ul>
        <?php 
        
        echo 
        '<table style="width:100%"><tr><th>Firstname</th><th>Lastname</th><th>title</th><th>Start year</th><th>Work phone</th><th>Email</th><th>Street Adress</th><th>Postal code</th><th>City</th></tr>';
        while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) 
        {
          echo "<tr>"."<td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["title"]."</td><td>".$row["start_year"]."</td><td>".$row["phone_work"]."</td><td>".$row["email"]."</td><td>".$row["street_adress"]."</td><td>".$row["postal_code"]."</td><td>".$row["city"]."</td></tr>";
        }
        echo
        "</table>";
        ?>
</body>
</html>