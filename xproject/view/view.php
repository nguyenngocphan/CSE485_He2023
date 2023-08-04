<?php
    require 'db/dbcon.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>List of employees</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    .action-buttons {
        display: flex;
        justify-content: center;
    }
</style>
</head>
<body>
    <h1>List of employees</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>

    </table>
</body>
</html>