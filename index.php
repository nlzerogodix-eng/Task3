<?php
include 'connection.php';   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>SQL Function Demonstration</title>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f4f4f4; }
        code { background: #eee; padding: 2px 5px; }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>SQL Function</th>
                <th>Description</th>
                <th>Example Code</th>
                <th>Example Output</th>
            </tr>
        </thead>
        <tbody>
            <td>String Function</td>
            <tr>
                <td>ASCII()</td>
                <td>function returns the ASCII value for the specific character.</td>
                <td><code>SELECT name, ASCII(UserName) AS NumCodeOfFirstChar FROM usertbl;</code></td>
                <td><a href="func_ascii.php" target="_blank">View Result</a></td>
            </tr>
            <tr>
                <td>UPPER()</td>
                <td>Converts a string to upper-case</td>
                <td><code>SELECT UPPER(name) FROM usertbl;</code></td>
                <td><a href="func_upper.php" target="_blank">View Result</a></td>
            </tr>
            <tr>
                <td>CONCAT()</td>
                <td>function adds two or more expressions together.</td>
                <td><code>SELECT CONCAT(name, ' - Email: ', email) AS UserInfo FROM usertbl"</code></td>
                <td><a href="func_upper.php" target="_blank">View Result</a></td>
            </tr>
            <td>Numeric Function</td>
            <tr>
                <td>COUNT()</td>
                <td>Returns the number of rows</td>
                <td><code>SELECT COUNT(*) FROM usertbl;</code></td>
                <td><a href="func_count.php" target="_blank">View Result</a></td>
            </tr>
            <tr>
                <td>SUM()</td>
                <td>Calculates the sum of a numeric column</td>
                <td><code>SELECT SUM(points) FROM user_points;</code></td>
                <td><a href="func_sum.php" target="_blank">View Result</a></td>
            </tr>
    <td>Date Function</td>
            <tr>
                <td>DATE_FORMAT()</td>
                <td>function formats a date as specified.</td>
                <td><code>SELECT name, DATE_FORMAT(created_at, '%M %e, %Y') AS joined_date FROM usertbl</code></td>
                <td><a href="func_dateformat.php" target="_blank">View Result</a></td>
            </tr>
       </tbody>
    </table>
</body>
</html>