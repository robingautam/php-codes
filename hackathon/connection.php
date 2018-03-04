<?php
session_start();

?>
<?php
  function getemployee(){
  $db = mysqli_connect("localhost","root", "", "gym");
      $query = "SELECT * FROM employee";
      $result = mysqli_query($db, $query);
      
      while($row = mysqli_fetch_assoc($result)){
       
          echo "<h3>"."<a href='information.php?id=".$row['id']."'>".$row['id'].". ".$row['name']."</a>"."</h3>"; 
          echo "<p>Lorem impsum, ipsa praesentium, illo deserunt mollitia hic, suscipit laboriosam perspiciatis tempore animi. Odio fuga ad, modi, praesentium accusamus beatae quam.o deserunt mollitia hic, susciprem ipsum dolor sit amet, consectetur adipisicing elit. Architecto rem illum, ipsa praesentium, illo deserunt mollitia hic, </p>";

      } 
  }
  //$db = mysqli_query("localhost","root","","gym");
  //$query = "SELECT * FROM "
function setemployee($db){
    if (isset($_POST['post'])){
      $trainer = $_POST['text'];
        $query = "INSERT INTO useremp (user, trainer) VALUES ('".$_SESSION['email']."', '$trainer')";
        $result = mysqli_query($db, $query);
        $rob = mysqli_fetch_assoc($result);
        
        
    }
}
function getInformation($db){
   global $id;
   $query = "SELECT * FROM employee WHERE id = '".$id."'";
   $result = mysqli_query($db, $query);
   $emp = mysqli_fetch_assoc($result);
     echo "<h1>welcome".$emp['name']."</h1>";

   }
?>
