<?php
$mobile_id=$_GET['id']; 
include('connection.php');
session_start();
if(!isset($_SESSION['username']))
{
  header('Location:adminlogin.php');
  exit();
} 
// echo $mobile_id;
$data=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM record where id=".$mobile_id.""));

if(isset($_POST['submit']))
{

        //update the data
        $name=$_POST['name'];
        $price=$_POST['price'];
        $ram=$_POST['ram'];
        $rom=$_POST['rom'];
        $frontcam=$_POST['fcam'];
        $backcam=$_POST['bcam'];
        $avail=$_POST['stock'];
        $dom=$_POST['dom'];
        $des=$_POST['desc'];
        $image=$_FILES['file']['name'];
        $target="upload/".basename($image);
		$id=$_POST['mobile_ID'];
		$res=mysqli_query($con,"UPDATE record SET name = '$name',price='$price',ram='$ram',rom='$rom',frontcam='$frontcam',backcam='$backcam',available='$avail',dom='$dom',des='$des',img='$image' WHERE id = '$id'");
        if($res)
        {
            move_uploaded_file($_FILES['file']['tmp_name'], $target);
            header('Location:adminmain.php');
        }
	
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WELCOME ADMIN</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>ADMIN PANEL</h2> 
                    <p> ENTER THE SPESIFICATIONS OF THE MOBILE PHONE </p>
                    <form role="form" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="mobile_ID" value="<?php echo $_GET['id'] ?>">
					<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> NAME</label>
                                <input type="text" class="form-control"  name="name" maxlength="50" value="<?php echo $data['name']; ?>" >
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> PRICE in pkr</label>
                                <input type="text" class="form-control" name="price" maxlength="50" value="<?php echo $data['price']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> RAM</label>
                                <input type="text" class="form-control"  name="ram" maxlength="10" value="<?php echo $data['ram']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> ROM:</label>
                                <input type="text" class="form-control"  name="rom" maxlength="10" value="<?php echo $data['rom']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> FRONT CAMERA:</label>
                                <input type="text" class="form-control"  name="fcam" maxlength="10" value="<?php echo $data['frontcam']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> BACK CAMERA:</label>
                                <input type="tel" class="form-control"  name="bcam" required maxlength="10" value="<?php echo $data['backcam']; ?>">
                            </div>
						</div>
						<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> DOMINANT FEATURE</label>
                                <input type="text" class="form-control"  name="dom" maxlength="50" value="<?php echo $data['dom']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
							

								<input class="form-check-input" type="radio" name="stock"  value="1" >
								<label class="form-check-label" for="exampleRadios1">
									Instock
								</label>
								
								<br>
								<input class="form-check-input" type="radio" name="stock" value="0">
								<label class="form-check-label" for="exampleRadios2">
									Out of stock
								</label>
							</div>	
							
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> DESCRIPTION:</label>
                                <textarea class="form-control" type="textarea"  name="desc"  maxlength="6000" rows="7" ><?php echo $data['des']; ?></textarea>
                            </div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlFile1" >SELECT IMAGE</label>
							<input type="file"  name='file'>
						</div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <input type="submit"  name='submit'>
                            </div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>