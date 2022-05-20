<?php 
  include 'navbar.php';
  include 'config.php';
  $query = "SELECT * FROM `profil`";

$result = mysqli_query($conn, $query);
  ?>
<body>
	<div class="container">
        <br></br>
		<h1 style="text-align: center ;"> Tambah Foto </h1>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Caption</label>
				<input type="email" class="form-control" id="exampleFormControlInput1">
			</div>		
			<div>
				<p>Upload Foto</p>
				<form action="" method="post" enctype="multipart/form-data">
					<input type="file" name="file">
				</form>
			</div>
			<br> </br>
			<a href="" class="btn btn-utama" style="margin-bottom: 30px;">Submit</a>
</div>
<?php 
include 'footer.php';
?>
</body>