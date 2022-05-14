<?php 
  include 'navbar.php';
  include 'config.php';
  $query = "SELECT * FROM `profil`";

$result = mysqli_query($conn, $query);
  ?>


  <!-- Profil -->
  <section id="sambutan">
    <div class="container">
      <h2>Profil Masjid An-Nuur Minomartani</h2>
      <div class="row">
        <div class="col-md-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8CBD9KVNa8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
          <h3>Video Profil Masjid An-Nuur Minomartani</h3>
          <?php 
                    while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      echo $data['roles'];
                     }
          ?>

        </div>
      </div>
    </div>
  </section>
  <!-- akhir profil -->
</html>

<?php 
    include 'footer.php';
    ?>