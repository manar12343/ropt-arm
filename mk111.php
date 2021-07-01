<!DOCTYPE html>
<html>

<head>
    <style>
    #joa {}

    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: left;
        text-decoration: none;
        display: inline-block;
        fon-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <form action="tt.php" method="post">
        <p>1engine</p>
        <input type="range" min="0" max="180" name="1" />
        <p>engine2 </p>
        <input type="range" min="0" max="180" name="2" />
        <p>engine3</p>
        <input type="range" min="0" max="180" name="3" />
        <p>engine4</p>
        <input type="range" min="0" max="180" name="4" />
        <p>engine5</p>
        <input type="range" min="0" max="180" name="5" />
        <p>engine6</p>
        <input type="range" min="0" max="180" name="6" />

        <button name="run">run</button>
        <button name="save">save</button>

        </from>

        <?php

                $servername = "localhost";
                $username = "root";
                $password = ""
                $db ="newdatabae";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
-

if (isset($_POST['save'])) {
$sql = "INSERT INTO `engine` ('1engine`, `engine2`,
'engine3`, `engine4`, `engine5`, `engine6`) VALUES (".
$_POST['1'].",".$_POST['2']."',".$_POST['3'].",".
$_POST['4'].",".$_POST['5'].",".$_POST['6']."')";
$result = $conn->query($sql);
}
?>


</body>

</html>