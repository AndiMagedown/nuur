<?php 
  include 'navbar.php';
  include 'config.php';
  $query = "SELECT * FROM `pengurus`";

$result = mysqli_query($conn, $query);
  ?>

         <!-- TPQ -->
         <section class="pengurus">
            <h1 style="margin-top: 50px;">SUSUNAN PENGURUS</h1>
            <a href="tambah-pengurus.php" class="btn btn-utama" style="margin-bottom: 30px;" >Tambah Pengurus</a>
            <br></br>
            <div class="row">
              <div class="pengurus-col">
                <h3>
                <?php 
                    while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      echo $data['jabatan_id'];
                     }
          ?>
                </h3>
                <img src="img/profil.png" alt="" style="height: 200px; width: 200px;">
                <p>
                <?php 
                    while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      echo $data['nama'];
                     }
          ?>
                </p>
              </div>
              <div class="pengurus-col">
                <h3>PENGURUS 1</h3>
                <img src="img/profil.png" alt="" style="height: 200px; width: 200px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolores doloribus nisi ea aut, tenetur id ex fugit quidem nesciunt minima! Quas ut obcaecati tempore!</p>
              </div>
              <div class="pengurus-col">
                <h3>PENGURUS 1</h3>
                <img src="img/profil.png" alt="" style="height: 200px; width: 200px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolores doloribus nisi ea aut, tenetur id ex fugit quidem nesciunt minima! Quas ut obcaecati tempore!</p>
              </div>
            </div>
            <div class="row">
              <div class="pengurus-col">
                <h3>PENGURUS 1</h3>
                <img src="img/profil.png" alt="" style="height: 200px; width: 200px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolores doloribus nisi ea aut, tenetur id ex fugit quidem nesciunt minima! Quas ut obcaecati tempore!</p>
              </div>
              <div class="pengurus-col">
                <h3>PENGURUS 1</h3>
                <img src="img/profil.png" alt="" style="height: 200px; width: 200px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolores doloribus nisi ea aut, tenetur id ex fugit quidem nesciunt minima! Quas ut obcaecati tempore!</p>
              </div>
              <div class="pengurus-col">
                <h3>PENGURUS 1</h3>
                <img src="img/profil.png" alt="" style="height: 200px; width: 200px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolores doloribus nisi ea aut, tenetur id ex fugit quidem nesciunt minima! Quas ut obcaecati tempore!</p>
              </div>
            </div>
         </section>

         <?php 
    include 'footer.php';
    ?>
      