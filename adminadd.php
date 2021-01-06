<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('Location:adminlogin.php');
  exit();
}
if(isset($_POST['submit']))
{
    include('connection.php');
 
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
        $query="INSERT INTO record VALUES('','$name','$price','$ram','$rom','$frontcam','$backcam','$avail','$dom','$des','$image')";
        $res=mysqli_query($con,$query);
       if($res)
       {
        //    echo 'inserted';
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
					<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> NAME</label>
                                <input type="text" class="form-control"  name="name" maxlength="50" >
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> PRICE in pkr</label>
                                <input type="text" class="form-control" name="price" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> RAM</label>
                                <input type="text" class="form-control"  name="ram" maxlength="10" >
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> ROM:</label>
                                <input type="text" class="form-control"  name="rom" maxlength="10">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> FRONT CAMERA:</label>
                                <input type="text" class="form-control"  name="fcam" maxlength="10">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> BACK CAMERA:</label>
                                <input type="tel" class="form-control"  name="bcam" required maxlength="10">
                            </div>
						</div>
						<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> DOMINANT FEATURE</label>
                                <input type="text" class="form-control"  name="dom" maxlength="50" >
                            </div>
                            <div class="col-sm-6 form-group">
							

								<input class="form-check-input" type="radio" name="stock"  value="1" checked>
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
                                <textarea class="form-control" type="textarea"  name="desc" placeholder="Enter more spesificatios of mobile phone here" maxlength="6000" rows="7"></textarea>
                            </div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlFile1">SELECT IMAGE</label>
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