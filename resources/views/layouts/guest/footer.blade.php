<footer class="footer pt-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                <div class="footer-widget">
                    <div class="logo">
                        <a href="{{ route('dashboard') }}"> <img src="{{ asset('assets-guest/images/logo/unnamed.png') }}"
                                alt="logo" height="80" class="me-2"> </a>
                    </div>

                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 offset-xl-1">
                <div class="footer-widget">
                    <h3>Menu</h3>
                    <ul class="links">
                        <li><a href="{{ route('dashboard') }}">Tentang</a></li>
                        <li><a href="{{ route('kategoriAset.index') }}">Kategori Aset</a></li>
                        <li><a href="{{ route('aset.index') }}"> Aset</a></li>
                        <li><a href="{{ route('lokasi-aset.index') }}"> Lokasi Aset</a></li>
                        <li><a href="{{ route('pemeliharaan.index') }}"> Pemeliharaan Aset</a></li>
                        <li><a href="{{ route('mutasi.index') }}"> Mutasi Aset</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3>Fitur</h3>
                    <ul class="links">
                        <li><a href="{{ route('warga.index') }}">Lihat Data</a></li>
                        <li><a href="{{ route('warga.create') }}">Tambah Data</a></li>
                        <li><a href="{{ route('kategoriAset.index') }}">Lihat Kategori</a></li>
                        <li><a href="{{ route('kategoriAset.create') }}">Tambah Kategori</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                <div class="footer-widget">
                    <h3>Identitas Pengembang</h3>
                    <div class="developer-info" style="color: #ccc;">
                        <div style="display: flex; align-items: flex-start; margin-bottom: 5px;">

                            <img src="{{ asset('assets-guest/images/face/photo1.jpeg') }}" alt="Foto Pengembang"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 15px;">

                            <ul class="links" style="list-style: none; padding-left: 0; margin-top: 5px;">
                                <li><a href="#">Nama: Siti Amelia Larasati </a></li>
                                <li><a href="#">NIM: 2457301132</a></li>
                                <li><a href="#">Prodi: Sistem Informasi</a></li>
                            </ul>
                        </div>
                        <ul class="social-links">
                            <li><a href="https://www.linkedin.com/in/siti-amelia-larasati-979930322/"><i
                                        class="lni lni-linkedin"></i></a></li>
                            <li><a href="https://github.com/amell28"><i class="lni lni-github"></i></a></li>
                            <li><a href="https://www.instagram.com/s.ameeliaa_?igsh=a2w2b241bHIwcmk3"><i
                                        class="lni lni-instagram"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
