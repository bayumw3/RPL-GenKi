<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Client 2</title>
</head>
<body>
    <!-- ========================================== navbar ==========================================  -->
    <div class="navbar">
        <img src="asst/logo.png" alt="">
        <div class="items">
            <a href="#top-page">Home</a>
            <a href="#about">About</a>
            <a href="#gallery">Gallery</a>
            <a href="#tabel">Data Listrik</a>
            <a href="">Contact</a>
        </div>
        <div class="left-nav">
            <img src="asst/search.png" alt="">
            <a href="{{ route('login') }}">Sign in</a>
        </div>
    </div>
    <!-- ========================================== top ==========================================  -->
    <div class="top-page" id="top-page">
        <div class="items">
            <div class="top-text">
                <h1>Introducing Our Embedded system Product GenKi.</h1>
                <p>Teknologi Terbaru yang Mengubah Gerakan Menjadi Energi, Ramah Lingkungan untuk Masa Depan yang Lebih Hijau.</p>
                <div class="learn-more">
                    <a href="">Learn More<i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
            <img class="mid" src="asst/atas.png" alt="">
            <div class="top-left">
                <div class="first satu">
                    <div class="bubble">
                        <img src="asst/1.png" alt="">
                    </div>
                    <p>Green Energy</p>
                </div>
                <div class="first dua">
                    <div class="bubble">
                        <img src="asst/2.png" alt="">
                    </div>
                    <p>Listrik Berkelanjutan</p>
                </div>
                <div class="first tiga">
                    <div class="bubble">
                        <img src="asst/3.png" alt="">
                    </div>
                    <p>Inovatif & Efisien</p>
                </div>
                <div class="first empat">
                    <div class="bubble">
                        <img src="asst/4.png" alt="">
                    </div>
                    <p>Ramah Lingkungan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================================== about ==========================================  -->
    <div class="about">
        <div class="text">
            <h1>About GenKi</h1>
            <p>GenKi adalah inovasi teknologi memanfaatkan gerakan osilasi pendulum untuk menghasilkan listrik. Prinsip kerjanya berlandaskan hukum fisika, yaitu huku kekekalan energi, energi kinetik dari ayunan pendulum diubah menjadi energi listrik. Dalam meningkatkan penggunaan energi terbarukan, pemanfaatan GenKi menjadi salah satu solusi alternatif yang menjanjikan.</p>
        </div>
    </div>
    <!-- ========================================== about ==========================================  -->
    <section class="py-5" id="about">
        <div class="container">
            <div class="row text-center">
                <!-- Service Item 1 -->
                <div class="col-md-3 mb-4 ourservice">
                    <div class="card border-0 p-3">
                        <div class="d-flex mb-3" style="gap: 10px !important; justify-content: center; align-items: center;">
                            <div class="icon-box">
                                <span class="hugeicons--bio-energy"></span>
                            </div>
                            <h5 class="service-title" style="width: 137px;">Energi Bersih dan Hijau</h5>
                        </div>
                        <p class="service-text">Menghasilkan listrik tanpa emisi gas rumah kaca atau polusi, memanfaatkan energi terbarukan yang tidak merusak lingkungan dan mendukung pengurangan jejak karbon.</p>
                    </div>
                </div>
                <!-- Service Item 2 -->
                <div class="col-md-3 mb-4 ourservice">
                    <div class="card border-0 p-3">
                        <div class="d-flex mb-3" style="gap: 10px !important; justify-content: center; align-items: center;">
                            <div class="icon-box">
                                <span class="hugeicons--renewable-energy"></span>
                            </div>
                            <h5 class="service-title" style="width: 137px;">Listrik yang Berkelanjutan</h5>
                        </div>
                        <p class="service-text">Dengan mengandalkan gravitasi dan gerakan pendulum, GenKi mampu menghasilkan listrik secara kontinu tanpa perlu bahan bakar tambahan, cocok untuk penggunaan jangka panjang.</p>
                    </div>
                </div>
                <!-- Service Item 3 -->
                <div class="col-md-3 mb-4 ourservice">
                    <div class="card border-0 p-3">
                        <div class="d-flex align-items-center justify-content-center mb-3" style="gap: 10px !important;">
                            <div class="icon-box">
                                <span class="material-symbols--energy-program-time-used-outline"></span>
                            </div>
                            <h5 class="service-title">Inovatif dan Efisien</h5>
                        </div>
                        <p class="service-text">GenKi mampu mengubah energi gerak menjadi listrik dengan biaya dan energi input minimal, menawarkan solusi efisien bagi banyak orang.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 ourservice">
                    <div class="card border-0 p-3">
                        <div class="d-flex align-items-center justify-content-center mb-3" style="gap: 10px !important;">
                            <div class="icon-box">
                                <span class="hugeicons--save-energy-01"></span>
                            </div>
                            <h5 class="service-title">Ramah Lingkungan</h5>
                        </div>
                        <p class="service-text">tidak menghasilkan limbah atau polusi, dirancang untuk berdampak minimal pada ekosistem, menjadikannya pilihan yang selaras dengan kelestarian alam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================================== cara kerja ==========================================  -->
    <div class="cara-kerja" id="cara-kerja">
        <div class="items1">
            <h1>Cara Kerja GenKi</h1>
            <div class="foto">
                <div class="item-foto">
                    <img src="asst/gambar alat udh rmv bg/6-removebg-preview.png" alt="">
                </div>
                <div class="item-foto">
                    <img src="asst/gambar alat udh rmv bg/4.png" alt="">
                </div>
                <div class="item-foto" style="width: 238px;">
                    <img src="asst/gambar alat udh rmv bg/7-removebg-preview.png" alt="">
                </div>
            </div>
            <p>Pendulum bekerja berdasarkan prinsip gravitasi dan momentum. Saat bandul diayunkan, gaya gravitasi menyebabkan bandul bergerak bolak-balik dalam gerakan periodik. Energi kinetik yang dihasilkan dari ayunan ini kemudian dikonversi menjadi energi listrik melalui sistem roda gigi (gear system). Roda gigi berfungsi untuk meningkatkan kecepatan rotasi dari gerakan lambat bandul menjadi kecepatan yang lebih tinggi, sehingga lebih efisien dalam menghasilkan listrik. Selanjutnya, roda gigi terhubung dengan generator motor, yang akan mengubah energi mekanik dari gerakan rotasi menjadi energi listrik.</p>
            <div class="more-information">
                <a href="">More Information</a>
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
    </div>
    <!-- ========================================== gallery ==========================================  -->
    <div class="gallery" id="gallery">
        <h1>Gallery</h1>
        <p>Galeri ini menampilkan berbagai sudut dan desain alat GenKi, sebuah generator listrik berbasis energi kinetik. Dengan memanfaatkan prinsip gravitasi dan momentum, alat ini dirancang untuk mengonversi gerakan pendulum menjadi energi listrik secara efisien. Setiap gambar memperlihatkan detail komponen dan mekanisme alat, mulai dari desain 3D hingga bagian-bagian alat saat berayun.</p>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <div class="slide-img">
                        <img src="asst/gambar alat udh rmv bg/3.png" alt="3D Design dari sisi atas">
                    </div>
                    <div class="slide-caption">3D Design dari sisi atas</div>
                </div>
                <div class="slide">
                    <div class="slide-img">
                        <img src="asst/gambar alat udh rmv bg/6-removebg-preview.png" alt="3D Design dari sisi atas">
                    </div>
                    <div class="slide-caption">Gambar Alat bagian belakang</div>
                </div>
                <div class="slide">
                    <div class="slide-img">
                        <img src="asst/gambar alat udh rmv bg/7-removebg-preview.png" alt="3D Design dari sisi atas">
                    </div>
                    <div class="slide-caption">Gambar Alat Bagian depan Swing</div>
                </div>
                <div class="slide">
                    <div class="slide-img">
                        <img src="asst/gambar alat udh rmv bg/5.png" alt="3D Design dari sisi atas">
                    </div>
                    <div class="slide-caption">Bagian atas saat swing</div>
                </div>
            </div>
            <button class="arrow left" onclick="moveSlide(-1)">&#10094;</button>
            <button class="arrow right" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>
    <!-- ========================================== data lsitrik ==========================================  -->
    <div class="listrik" id="listrik">
        <div class="left-listrik">
            <h1>Data Listrik GenKi</h1>
            <p>Data daya Listrik yang dihasilkan oleh GenKi akan diupdate secara berkala oleh admin dalam bentuk tabel daya listrik</p>
            <div class="lihat">
                <a href="">Lihat Tabel</a>
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
        <img class="blue" src="asst/blue.png" alt="">
    </div>
    <!-- ========================================== tabel lsitrik ==========================================  -->
    <div class="table-listrik" id="tabel">
        <h1>Tabel Data Listrik</h1>
        <table class="table table-bordered">
            <thead class="table text-center">
                <tr style="background-color: #3498DB; color: white;">
                    <th>No</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Daya Listrik</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="table text-center">
                @foreach($dataListriks as $index => $data)
                <tr class="{{ $index % 2 == 0 ? '' : 'table-secondary' }}">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->date }}</td>
                    <td>{{ $data->time }}</td>
                    <td>{{ $data->daya_listrik }}</td>
                    <td>{{ $data->status }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

    <!-- ========================================== footer ==========================================  -->
    <div class="p-footer">
    <div class="container footer-section" style="background-color: white;">
        <div class="row">
            <!-- Contact Us Section -->
            <div class="col-md-4" style="display: flex !important; flex-direction: column;">
                <h5 class="footer-title" style="font-size: 23px;">Contact Us</h5>
                <div class="contact-item"><i class="bi bi-geo-alt-fill"></i>SV IPB, Bogor</div>
                <div class="contact-item"><i class="bi bi-telephone-fill"></i>+62 858 8732 221 (Admin)</div>
                <div class="contact-item"><i class="bi bi-envelope-fill"></i>genkiwebsite@gmail.com</div>
            </div>
            <!-- Social Handles Section -->
            <div class="col-md-4" style="display: flex !important; flex-direction: column;">
                <h5 class="footer-title">Social Handles</h5>
                <div class="social-item">
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter-x"></i>
                    <i class="bi bi-facebook"></i>
                </div>
                <h5 class="footer-title mt-4">Customer Service</h5>
                <div class="sss">
                    <div class="service-item">Terms of Use</div>
                    <div class="service-item">FAQ</div>
                    <div class="service-item">Report Issues</div>
                </div>
            </div>
    
            <!-- Subscribe Section -->
            <div class="col-md-4">
                <h5 class="footer-title">Subscribe to our News Letter</h5>
                <p class="ppp">Sign up to be the first to receive latest news about our products.</p>
                <input type="email" class="subscribe-input" placeholder="Enter Your Email Address">
                <button class="btn subscribe-button">Subscribe<i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mendapatkan navbar
const navbar = document.querySelector('.navbar');

// Menambahkan event listener untuk scroll
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled'); // Tambahkan kelas scrolled jika scroll lebih dari 50px
    } else {
        navbar.classList.remove('scrolled'); // Hapus kelas scrolled jika scroll kembali ke atas
    }
});

    </script>
</body>
</html>