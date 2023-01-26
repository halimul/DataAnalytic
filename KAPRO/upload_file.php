<?php
session_start();
    if ( !isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	
	<style type="text/css">
		body{
			font-family: sans-serif;
			text-align: center;
		}
	</style>
    <a href="registrasi.php">Registrasi</a>
    <a href="logout.php">Log Out</a>

    <br><br><br><br>
	<h2>UPLOAD FILE</h2>

	<br><br>
	
    <div style="margin:auto;width:600px;padding:20px">
        <?php include("aksi.php")?>
        <form action="" method="post" enctype="multipart/form-data" class="row g-2">
            <div class="col-auto">
                <input class="form-control" type="file" name="filexls" id="formFile">
            </div>

            <div class="col-auto">
                <input type="submit" name="submit" class="btn btn-primary" value="Upload File XLS/XLSX">
            </div> 
	    </form>
    </div>
</body>
</html>