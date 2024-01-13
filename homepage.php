<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <header id="home">
        <nav>
            <ul>
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#kontak">Contact</a>
                </li>
                <li>
                <a href="logout.php" onclick="if (confirm('Apakah Anda yakin ingin keluar?')) {hapusData()} else {return false;}">Logout</a>

                </li>
                <li>
                    <?php
                    session_start();
                    $username = $_SESSION['username'];
                    echo '<a href="detail-user.php?id=' . $_SESSION['id'] . '">' . $username . '</a>';
                    ?>
                </li>
            </ul>
        </nav>

        <div class="perkenalan">
            <h2>MobiSync</h2>
            <button class="btn"><a href="Customer.php" class="btn-link">Lihat Mobil</a></button>
        </div>
    </header>
    <section>
    <div class="judul">
        <h2>Apa yang anda cari?</h2><br>
        <div class="produk">
            <div class="mobil">
                <img src="ferrari.jpg" alt="bugati">
                <h2>Pembelian Mobil</h2>
                <p>Anda dapat membeli mobil yang anda inginkan disini</p>
                <button class="btn_produk"><a href="Customer.php" class="btn-link">Lihat Mobil</a></button>
            </div>
        <div class="tren">
            <div class="mobil">
                <img src="evo.png" alt="lambo">
                <h2>Perentalan Mobil</h2>
                <p>Kami juga menyediakan jasa rental/sewa mobil disini.</p>
                <button class="btn_produk"><a href="Customer.php" class="btn-link">Lihat Mobil</a></button>
            </div>
        </div>
    </div>
    </section>
    <div class="content">
        <div class="tawaran">
            <h2>Rekomendasi untuk Anda!</h2>
       </div>
       <div class="konten">
           <div class="slider-container">
               <div class="cards" id="cards">
                   <div class="card">
                       <img src="bmw.png" alt="bmw" class="gambar">
                       
                       <button class="kunjungi"><a href=""></a>Lihat</button>
                   </div>
                   <div class="card">
                       <img src="porsche.png" alt="honda" class="gambar">
                       
                     
                   </div>
                   <div class="card">
                       <img src="Nismo.png" alt="toyota" class="gambar">
                       
                       
                   </div>
                   <div class="card">
                       <img src="nsx.png" alt="ferrari" class="gambar">
                      
                       
                   </div>
                   <div class="card">
                       <img src="evo.png" alt="lambo" class="gambar">
                   
                   </div>
                   <div class="card">
                    <img src="Nismo.png" alt="toyota" class="gambar">
                   
                  
                </div>
               </div>
               <div class="controls">
                   <button class="prev" onclick="prevCard()">❮</button>
                   <button class="next" onclick="nextCard()">❯</button>
               </div>
               <div class="list-mobil">
                    <button class="list">
                        <a href="Customer.php"></a>Tampilkan List Mobil
                    </button>
               </div>
           </div>
       </div>
    </div>

    <div class="promosi">
        <div class="iklan">
            <div class="judul-iklan">
                <h2>Penawaran Terbaik untuk Anda</h2>
                <p>Mudah, Cepat dan Praktis</p>
            </div>
            <div class="alur-iklan">
                <div class="nomor1">
                    <h2 class="nomor">1</h2>
                    <div class="deskripsi-alur">
                        <h3 class="keterangan">Tentukan mobil baru idaman anda</h3>
                        <p class="penjelasan">Kami memiliki semua informasi yang dibutuhkan termasuk gambar, ulasan & harga!</p>
                    </div>
                </div>
                <div class="nomor2">
                    <h2 class="nomor">2</h2>
                    <div class="deskripsi-alur">
                        <h3 class="keterangan">Ajukan Penawaran</h3>
                        <p class="penjelasan"> Anda dapat menerima beberapa tawaran sekaligus & memilih yang terbaik!</p>
                    </div>
                </div>
                <div class="nomor3">
                    <h2 class="nomor">3</h2>
                    <div class="deskripsi-alur">
                        <h3 class="keterangan">Kesepakatan</h3>
                        <p class="penjelasan">Tetapkan pilihan, selesaikan proses transaksi dan nantikan mobil baru idaman anda tiba!</p>
                    </div>
                </div>
            </div>
            <div class="btn-list-mobil">
                <button><a href="Customer.php"></a>Beli Mobil</button>
            </div>
        </div>
    </div>

    <footer id="kontak">
        <div class="container">
    
          <div class="corporate_office">
            <div class="judulfoot">
              <h2>MOBISYNC</h2>
            </div>
            <div class="sampingfoot">
              <p> &copy 2023 Mobisync. All right reserved</p>
            </div>
            
          </div>      
            <div class="footer_bottom_inner">
              <ul class="f_socile">
                <li>
                  <a target="_blank" href="https://www.facebook.com/profile.php?id=61554093407719&mibextid=LQQJ4d">
                      <span>
                          <img src="https://www.greatwesterntrailer.com/wp-content/uploads/2022/07/facebook_icon_red-2.svg" alt="">
                          <img src="https://www.greatwesterntrailer.com/wp-content/uploads/2022/07/facebook_icon_hover-2.svg" alt="" class="hover_img">
                      </span>
                  </a>
              </li>
                <li>
                  <a target="_blank" href="https://www.instagram.com/mobisync05/">
                    <span>
                      <img src="https://www.greatwesterntrailer.com/wp-content/uploads/2022/07/insta_icon_red-2.svg" alt="">
                      <img src="https://www.greatwesterntrailer.com/wp-content/uploads/2022/07/insta_icon_hover-2.svg" alt="" class="hover_img">
                    </span>
                  </a>
                </li>
                <li>
                  <a target="_blank" href="https://youtube.com/@MobiSyncLogistics?si=xQAxEoGaBweZc9eB">
                    <span>
                      <img src="https://www.greatwesterntrailer.com/wp-content/uploads/2022/07/social-youtube-2.svg" alt="">
                      <img src="https://www.greatwesterntrailer.com/wp-content/uploads/2022/07/social-youtube-hover-2.svg" alt="" class="hover_img">
                    </span>
                  </a>
                </li>
              </ul>
              <div class="bawahikon">
                <p>Tel. (+62) </p>
              <p><link rel="" href="mobisynclogistics@gmail.com">Support : mobisynclogistics@gmail.com</p>
              </div>
              
              </div>
          </div>
        </div>
      </footer>
        

    <script src="Homepage.js"></script>

</body>
</html>