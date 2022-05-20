<?php 
  include 'navbar.php';
  include 'config.php';
  $query = "SELECT * FROM `berita`";

$result = mysqli_query($conn, $query);
  ?>
  <!-- edit running text -->
  <body>
	<div class="container">
		<h1 style="text-align: center ;"> Edit running text </h1>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Isi Running Text</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
			</div>
			<br> </br>
			<a href="" class="btn btn-utama" style="margin-bottom: 30px;">Submit</a>
</div>

</body>