<!DOCTYPE html>
<html lang="en">
<?php

include 'config.php';

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <title>Display data</title>
</head>
<body>
    <button id="add" onclick="add" > <a href="1.php">ADD</a></button>

    <table>
        <tbody id="tabledata">
                <table  cellpadding="10px">
                    <tr >
                       <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tbody id= "showtable">
                    
                    </tbody>
             </table>
        </tbody>

    </table>
<script type="text/javascript" src="script.js"></script>
</body>
</html>