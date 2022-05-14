<?php 
  include 'navbar.php';
  include 'config.php';
  $query = "SELECT * FROM `berita`";

$result = mysqli_query($conn, $query);
  ?>


<!-- Berita -->
  <div class="col-md-9 recent-posts" style="margin: auto;">
    <div class="section-title">
      <h2 style="margin-top: 30px ;">Berita Terbaru</h2>
    </div>
<div class="row">                                          
  <div class="col-md-12">
      <div class="row">
            <div class="col-md-6 mr-none">
              <article class="post" style="text-align:justify">
                  <div class="post-image single mb-lg">
                    <img class="img-thumbnail">
                    <?php 
                      while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo $data['gambar'];
                       }
                    ?>
                  </div>
                    <h4 style="margin-top: 15px;"><a href=""></a>
                    
                    <?php 
                      while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo $data['judul'];
                       }
                    ?></h4>
                  <div class="post-meta pl-none">
                    <span><i class="fa fa-calendar"></i>
                    <?php 
                      while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo $data['status'];
                       }
                    ?></span>
                  </div>
                    <p>
                    <?php 
                      while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo $data['isi'];
                       }
                    ?>
                    </p>
                      <a href="profil.html" class="btn btn-utama" style="margin-bottom: 30px;">Baca Selengkapnya</a>
              </article>
            </div>			

            <div class="col-md-6 mr-none">
              <article class="post" style="text-align:justify">
                <div class="post-image single mb-lg">
                  <img class="img-thumbnail" src="https://uin-suka.ac.id/media/gambar/100_20220422_IMG_2267.JPG" alt="">
                </div>                        
                  <h4 style="margin-top: 15px;"><a>NU MU  cuma puasa 29 hari looo !!!!</a></h4>
                <div class="post-meta pl-none">
                  <span><i class="fa fa-calendar"></i> Jumat, 22 April 2022</span>
                </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus possimus voluptatum recusandae cupiditate dolorum ipsum quia consequuntur inventore, maiores magni!</p>
                <a href="profil.html" class="btn btn-utama" style="margin-bottom: 30px;">Baca Selengkapnya</a>
              </article>
            </div>
            
            <div class="col-md-6 mr-none">
              <article class="post" style="text-align:justify">
                  <div class="post-image single mb-lg">
                    <img class="img-thumbnail" src="https://uin-suka.ac.id/media/gambar/100_20220426_IMG_2442.JPG" alt="">
                  </div>
                    <h4 style="margin-top: 15px;"><a href=""></a>Al-Barokah Bersholawat Bersama Al-Habibb Achmad Ismail</h4>
                  <div class="post-meta pl-none">
                    <span><i class="fa fa-calendar"></i> Selasa, 26 April 2022</span>
                  </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus possimus voluptatum recusandae cupiditate dolorum ipsum quia consequuntur inventore, maiores magni!</p>
                      <a href="profil.html" class="btn btn-utama" style="margin-bottom: 30px;">Baca Selengkapnya</a>
              </article>
            </div>			

            <div class="col-md-6 mr-none">
              <article class="post" style="text-align:justify">
                <div class="post-image single mb-lg">
                  <img class="img-thumbnail" src="https://uin-suka.ac.id/media/gambar/100_20220422_IMG_2267.JPG" alt="">
                </div>                        
                  <h4 style="margin-top: 15px;"><a>Teraweh setiap malam dapat unag 50.000</a></h4>
                <div class="post-meta pl-none">
                  <span><i class="fa fa-calendar"></i> Jumat, 22 April 2022</span>
                </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus possimus voluptatum recusandae cupiditate dolorum ipsum quia consequuntur inventore, maiores magni!</p>
                <a href="profil.html" class="btn btn-utama" style="margin-bottom: 30px;">Baca Selengkapnya</a>
              </article>
            </div>							
            
      </div>
      </div>
  </div>																							
</div> 

<?php 
    include 'footer.php';
    ?>