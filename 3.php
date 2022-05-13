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
    <table cellpadding="10px">
        <form id= "updatep" method="POST">

            <tr>
                <td> <label for="name">Name</label></td>
                <td><input type="text" id="edit-name" name="edit" placeholder="Enter Your Name"></td>
                <td><input type="text" id="edit-id" name="edit-id" hidden="">
                </td>
            </tr>
            <tr>
                <td> <label for="name">email</label></td>
                <td> <input type="text" id="edit-email" name="edit-email" placeholder="Enter Your Email">
                </td>
            </tr>
            <tr>
                <td> <label for="name">Password</label></td>
                <td> <input type="text" id="edit-password" name="edit-password" placeholder="Enter Your Password"></td>
            </tr>

            <tr>
                <td > <button type="submit" id ="update" name="update" onclick="location.href = '2.php'"> Update </a></button>
                
            </tr>
        </form> 
        </table>
        
    <div id="error-message" class="messages"></div>
    <div id="success-message" class="messages"></div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>