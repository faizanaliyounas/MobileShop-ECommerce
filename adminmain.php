<?php  
include('connection.php');
session_start();
if(!isset($_SESSION['username']))
{
  header('Location:adminlogin.php');
  exit();
} 
$sql = "SELECT * FROM record";
$result = $con->query($sql); // $con
?>
<!DOCTYPE html>

<head>
  <title>ADMIN MAIN PAGE</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
  <div class="container-fluid">
  
  
 
  <div class="row">
    <div class="col-lg-11 "><h2>ADMIN PAGE </h2></div>
    <div class="col-lg-1" style="padding-top:10px ;padding-left:67px"><button class="btn btn-danger"><a href="logout.php" style="color:white">Logout</a></button></div>
  
  </div>
  <!-- <div class="pull-right">
      <button class="btn btn-danger"><a href="logout.php" style="color:white">Logout</a></button>
    </div><br>    -->
    <div class="row"></div>
  <div class="pull-right">
      <button class="btn btn-primary"><a href="adminadd.php" style="color:white">Add New</a></button>
    </div><br>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NAME</th>
        <th>PRICE</th>
        <th>AVAILIBILITY</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php while($res = mysqli_fetch_array($result)){ ?>
      <tr>
        <td><?php echo $res['name'] ?></td>
        <td><?php echo $res['price']?></td>
        <td><?php 
        if($res['available']) 
        {
          echo "In Stock";
        }
        else 
        {
          echo "Out of Stock";
        }
        ?></td>
        <td><button class="btn btn-warning"><a href="adminedit.php?id=<?php echo 
        $res['id']?>" style="color:white">Update</a></button>
          <button class="btn btn-danger" onclick="delete_row(<?php  echo $res['id']   ?>)">Delete</button></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<script>
  function delete_row(id)
  {
    //console.log($id);
    //return false;
    if(confirm("Are you sure you want to delete?"))
    {
      window.location.href="admindelete.php?id="+id+"";
    }
  }
</script>
</body>
</html>
