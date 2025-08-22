@extends('guess.components.app')

@section('content')

    <!-- Header Detail Pengumuman -->
    <section class="detail-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    {{-- Tipe Pengumuman --}}
                    <span class="badge bg-penting rounded-pill px-3 py-2 mb-3 fs-6" data-aos="fade-up">Penting</span>
                    {{-- Judul Pengumuman --}}
                    <h1 class="display-5 fw-bold text-del-dark" data-aos="fade-up" data-aos-delay="100">Pengambilan dapat dilakukan di Sekretariat BEM mulai tanggal
                                10-15 Agustus 2024.</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Konten & Sidebar -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <!-- Kolom Konten Utama -->
                <div class="col-lg-7">
                    <article class="detail-content" data-aos="fade-up">
                        {{-- Deskripsi dari database --}}
                        <p>Diberitahukan kepada seluruh mahasiswa Institut Teknologi Del angkatan 2024, bahwa pengambilan Jas Almamater akan dilaksanakan sesuai dengan jadwal yang telah ditentukan. Mohon untuk memperhatikan detail berikut agar proses pengambilan berjalan dengan lancar.</p>
                        <h3>Jadwal & Lokasi</h3>
                        <ul>
                            <li><strong>Tanggal:</strong> 25 - 30 Agustus 2024</li>
                            <li><strong>Waktu:</strong> 10:00 - 15:00 WIB (Jam Kerja)</li>
                            <li><strong>Lokasi:</strong> Sekretariat Badan Eksekutif Mahasiswa (BEM), Gedung GSG Lt. 1</li>
                        </ul>
                        <h3>Persyaratan</h3>
                        <p>Mahasiswa yang akan mengambil jas almamater diwajibkan untuk membawa persyaratan sebagai berikut:</p>
                        <ol>
                            <li>Kartu Tanda Mahasiswa (KTM) yang masih berlaku.</li>
                            <li>Bukti pembayaran registrasi ulang semester berjalan.</li>
                        </ol>
                        <p>Demikian pengumuman ini kami sampaikan agar menjadi perhatian. Atas kerja sama yang baik, kami ucapkan terima kasih.</p>
                    </article>
                </div>

                <!-- Kolom Sidebar Info -->
                <div class="col-lg-4">
                    <div class="info-box" data-aos="fade-left">
                        <h5 class="info-title">Detail Informasi</h5>

                        <!-- Kategori -->
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-tag-fill"></i></div>
                            <div class="text">
                                <span class="label">Kategori</span>
                                <span class="value">Kemahasiswaan</span>
                            </div>
                        </div>

                        <!-- Diterbitkan oleh -->
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-person-check-fill"></i></div>
                            <div class="text">
                                <span class="label">Diterbitkan oleh</span>
                                <span class="value">John Doe (Admin)</span>
                            </div>
                        </div>

                        <!-- Pihak Terkait -->
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-building"></i></div>
                            <div class="text">
                                <span class="label">Pihak Terkait</span>
                                <span class="value">Departemen PSDM</span>
                            </div>
                        </div>

                        <!-- Tanggal Berlaku -->
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-calendar-range"></i></div>
                            <div class="text">
                                <span class="label">Tanggal Berlaku</span>
                                <span class="value">25 Agu 2024 - 30 Agu 2024</span>
                            </div>
                        </div>

                        <!-- Lampiran (file_paths) -->
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-paperclip"></i></div>
                            <div class="text">
                                <span class="label">Lampiran</span>
                                <a href="#" class="value d-block">Panduan_Pengambilan.pdf</a>
                                <a href="#" class="value d-block">Formulir_Kuasa.docx</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
