<?php 
  include 'navbar.php';
  include 'config.php';
  $query = "SELECT * FROM `pengurus`";

$result = mysqli_query($conn, $query);
  ?>

         <!-- TPQ -->
         <section class="pengurus">
            <h1 style="margin-top: 50px;">SUSUNAN PENGURUS</h1>
            <div class="row">
              <div class="pengurus-col">
                <h3>KETUA PENGURUS</h3>
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
      