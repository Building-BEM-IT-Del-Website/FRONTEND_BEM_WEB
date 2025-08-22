<footer id="footer" class="bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/bem.png') }}" alt="Logo BEM IT Del" style="height: 40px;" class="me-2">
                    <h5 class="mb-0 fw-bold">BEM IT Del</h5>
                </div>
                <p class="text-white-50 small">Badan Eksekutif Mahasiswa Institut Teknologi Del. Sinergi dalam Aksi, Unggul dalam Karya.</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-del-primary-blue mb-3">Tautan Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/#beranda" class="text-white-50 text-decoration-none">Beranda</a></li>
                    <li class="mb-2"><a href="/#visi-misi" class="text-white-50 text-decoration-none">Visi & Misi</a></li>
                    <li class="mb-2"><a href="/#proker" class="text-white-50 text-decoration-none">Program Kerja</a></li>
                    <li class="mb-2"><a href="/#aspirasi" class="text-white-50 text-decoration-none">Aspirasi</a></li>
                    <li><a href="/#kalender" class="text-white-50 text-decoration-none">Agenda</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-del-primary-blue mb-3">Hubungi Kami</h5>
                <ul class="list-unstyled text-white-50 small">
                    <li class="d-flex mb-2"><i class="bi bi-geo-alt-fill me-2 mt-1"></i><span>Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba, Sumatera Utara</span></li>
                    <li class="d-flex"><i class="bi bi-envelope-fill me-2"></i><span>bem@del.ac.id</span></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-del-primary-blue mb-3">Ikuti Kami</h5>
                <div class="d-flex">
                    <a href="#" class="text-white-50 me-3 fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white-50 me-3 fs-4"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white-50 me-3 fs-4"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <hr class="border-secondary">
        <div class="text-center text-white-50 small" x-data="{ year: new Date().getFullYear() }">
            &copy; <span x-text="year"></span> BEM Institut Teknologi Del. All Rights Reserved.
        </div>
    </div>
</footer>