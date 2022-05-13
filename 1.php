<!DOCTYPE html>
<?php
include 'config.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>User</title>
</head>

<body>
    <table cellpadding="10px" id="add_update_data">
        <form id= "showupdateddata"  method="POST"> 

            <tr>
                <td> <label for="name">Name</label></td>
                <td><input type="text" id="name" name="name" placeholder="Enter Your Name">
                </td>
               <td><input type="text" id="id" name="edit-id" hidden=""></td>

            </tr>
            <tr>
                <td> <label for="name">email</label></td>
                <td> <input type="text" id="email" name="email" placeholder="Enter Your Email">
                </td>
            </tr>
            <tr>
                <td> <label for="name">Password</label></td>
                <td> <input type="text" id="password" name="password" placeholder="Enter Your Password"></td>
            </tr>

            <tr>
                <td > <button type="submit" id ="insert" name="insert" onclick="location.href = '2.php'"> Submit </a></button>
                
            </tr>
        </form> 
        </table>
        
    <div id="error-message" class="messages"></div>
    <div id="success-message" class="messages"></div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>