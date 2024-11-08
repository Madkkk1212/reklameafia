<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reklame Afia</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="{{ asset('/images/logo.jpg') }}" alt="Home Image"></i>REKLAME AFIA
        </div>
        <nav>
            <a href="#home" class="active">Home</a>
            <a href="#toko">Toko</a>
            <a href="#produk">Produk</a>
            <a href="#lokasi">Lokasi</a>
            <a href="#contact">Kontak</a>
        </nav>

        <div class="search-cart">
            <div class="search">
                <input type="text" placeholder="Search">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="cart">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <div class="container" style="">

        <!-- Responsive navigation menu -->
        <div id="responsiveNav" class="responsive-nav">
            <a href="#home">Home</a>
            <a href="#toko">Toko</a>
            <a href="#produk">Produk</a>
            <a href="#lokasi">Lokasi</a>
            <a href="#contact">Kontak</a>
        </div>

        <main>
            <section class="home-section" id="home">
                <div class="home-content">
                    <div class="home-text">
                        <h1>Selamat Datang Reklame Afia</h1>
                        <p>Selamat Datang dan Selamat Berbelanja!
                            Beragam Pilihan Produk Terbaik Menunggu Anda.
                            Nikmati Kualitas dan Layanan Istimewa dari Kami!.</p>
                    </div>
                    <div class="home-image">
                        <img src="{{ asset('/images/bannerdepan.jpg') }}" alt="Home Image">

                    </div>
                </div>
            </section>

            <section class="toko-section" id="toko">
                <!-- Left Column: Description -->
                <div class="description">
                    <h2></h2>
                    <p>
                        "Halo! Selamat datang di toko kami! Di sini, kamu bisa nemuin berbagai barang keren yang udah
                        kami pilih khusus buat kamu. Kami nggak cuma jual produk, tapi juga kasih pengalaman belanja
                        yang asyik dan nyaman. Mau cari barang kebutuhan harian, barang unik, atau sekadar lihat-lihat,
                        semuanya ada! Kualitas dan kepuasan kamu nomor satu buat kami, jadi nggak perlu khawatir deh!
                        Yuk, buruan cek koleksi kami dan rasain sendiri serunya belanja di sini. Makasih udah mampir,
                        semoga kamu betah dan nemuin yang kamu cari!"</p>
                </div>

                <!-- Right Column: Card Section -->
                <div class="card-section">
                    <div class="card">
                        <h3>KAMI MENYEDIAKAN</h3>
                        <p>PRASASTI/NISAN(MARMER/GRANIT), CUTTING STIKER, STAMPEL, MERK, SPANDUK, PLAKAT, PAPAN NAMA, PIAGAM,
                            RAPOR, PIALA/TROPHY, MEDALI, ID.CARD/NAMETAG, BORDIR, TOGA, KAOS OLAHRAGA,
                            YASIN,UNDANGAN, KARTU NAMA, NOTA, DAN LAIN LAINNYA UNTUK INFORMASI SELANJUTNYA BISA HUBUNGI KONTAK KAMI TINGGAL KLIK DIBAWAH INI.
                        </p>
                        <a href="#contact" class="button">HUBUNGI KAMI </a>
                    </div>
                </div>
            </section>

            <section class="products-section" id="produk">
                <h2>Produk Kami & ini hanya sebagian contoh </h2>
                <div class="products-grid">
                    <div class="product-item">
                        <img src="{{ asset('/images/batunisan.jpg') }}" alt="Home Image" onclick="openModal(this)">

                    </div>
                    <div class="product-item">
                        <img src="{{ asset('/images/batunisan2.jpg') }}" alt="Home Image" onclick="openModal(this)">

                    </div>
                    <div class="product-item">
                        <img src="{{ asset('/images/piagam1.jpg') }}" alt="Home Image" onclick="openModal(this)">

                    </div>
                    <div class="product-item">
                        <img src="{{ asset('/images/piala.jpg') }}" alt="Home Image" onclick="openModal(this)">

                    </div>
                    <div class="product-item">
                        <img src="{{ asset('/images/plakat akrelik.jpg') }}" alt="Home Image" onclick="openModal(this)">

                    </div>
                    <div class="product-item">
                        <img src="{{ asset('/images/plakat akrelik2.jpg') }}" alt="Home Image"
                            onclick="openModal(this)">
                    </div>
                    <div class="product-item">
                        <img src="{{ asset('/images/plakat akrelik3.jpg') }}" alt="Home Image"
                            onclick="openModal(this)">
                    </div>
                    <div class="product-item">
                        <img src="{{ asset('/images/stampel.jpg') }}" alt="Home Image"onclick="openModal(this)">
                    </div>
                </div>

                <!-- Modal untuk menampilkan gambar penuh -->
                <div id="imageModal" class="modal">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <img class="modal-content" id="fullImage">
                </div>

                <!-- Map Embed -->

                <div class="map-container" id="lokasi">
                    <h1>LOKASI KAMI</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31876.28801726581!2d103.5741485!3d-1.6130529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e258992e89ab79b%3A0x355942b56d70a5b2!2sAfia%20Reklame!5e0!3m2!1sen!2sid!4v1698998765!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </section>

            <section class="contact-section" id="contact">
                <h2>HUBUNGI KAMI</h2>
                <p>Kami siap mendengarkan dan membantu Anda! Jika Anda memiliki pertanyaan atau masukan, silakan hubungi
                    kami melalui email atau media sosial. Setiap pesan Anda sangat berarti, dan kami berkomitmen untuk
                    memberikan respon cepat.</p>
                <div class="contact-icons">
                    <a href="https://web.facebook.com/marketplace/profile/61552495208895/" class="contact-icon">
                        <i class="fab fa-facebook-f"></i>Facebook
                    </a>
                    <a href="https://www.instagram.com/afia_reklame/" class="contact-icon">
                        <i class="fab fa-instagram"></i>Instagram
                    </a>
                    <a href="https://wa.me/6289620968989" class="contact-icon">
    <i class="fab fa-whatsapp"></i> WhatsApp 1
</a>

                    <a href="https://wa.me/6281274956429" class="contact-icon">
                        <i class="fab fa-whatsapp"></i>whatsapp 2
                    </a>
                    <a href="mailto:afiareklame77@gmail.com" class="contact-icon">
    <i class="fas fa-envelope"></i> Email
</a>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Afia. All rights reserved.</p>
        </footer>

        <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
