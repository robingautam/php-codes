<?php
$db = mysqli_connect("localhost", "root", "", "gym");
include("connection.php");
?>
 <?php
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$db = mysqli_connect("localhost","root", "", "gym");
	$query = "SELECT * FROM employee WHERE id = '$id'";
	$result = mysqli_query($db, $query);
	$rob = mysqli_fetch_assoc($result);
	$name = $rob['name'];
	$email = $rob['email'];
	$gender = $rob['gender'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuts &amp; Curve</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link href="css/jquery.bxslider.css" rel="stylesheet" />

    <link href="style.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="http://www.w3newbie.com/wp-content/uploads/yoga_favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Kavivanar|Monoton" rel="stylesheet">

</head>

<body>



    <div class="wrapper">
        <header class="clearfix" id="header">
            <div class="logo left">
                <h2>Cuts &amp; Curve</h2>
            </div>

        </header>
        <div id="person">
        	<p><?php  echo  "<img src='' width='200px' height='200px'>"; ?></p>
        	<?php  echo $name;?>

        </div>

</div>
</body>
</html>