<?php
$judul_halaman = 'Beranda';
$halaman_aktif = 'home';
$base_url = '';
include '../src/includes/header.php';
?>

<!-- ═══ HERO ══════════════════════════════════════════ -->
<section class="hero">
    <!-- Foto bus di background hero dengan overlay -->
    <div style="position:absolute;inset:0;z-index:0;">
        <img src="assets/images/galeri/janitra_merah_hitam.jpg"
             alt="Bus Pariwisata"
             style="width:100%;height:100%;object-fit:cover;opacity:0.13;">
    </div>
    <!-- Pola kotak-kotak seperti di proposal -->
    <div style="position:absolute;bottom:0;right:0;z-index:1;opacity:0.18;
                background-image:repeating-linear-gradient(45deg,white 0,white 8px,transparent 8px,transparent 20px);
                background-size:28px 28px;width:280px;height:120px;"></div>
    <!-- Diagonal merah gelap kanan -->
    <div style="position:absolute;top:0;right:0;z-index:1;
                width:42%;height:100%;
                background:rgba(0,0,0,0.2);
                clip-path:polygon(18% 0,100% 0,100% 100%,0% 100%);"></div>

    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-5">

            <!-- Konten -->
            <div class="col-lg-6 hero-content">
                <h1 class="hero-title">
                    <span class="brand-name">JANITRA SURYA</span>
                    <span class="outline-text">TRANS</span>
                </h1>
                <p class="hero-tagline">
                    "Anda Puas Beritahu Relasi, Anda Kecewa Beritahu Kami"
                </p>
                <p class="hero-desc">
                    Sewa bus pariwisata premium <strong style="color:white;">Jetbus 3++ SHD Air Suspension</strong> — 50 seat reclining, AC dingin,
                    Android TV, USB Charger, Bantal & Selimut. Crew berpengalaman, sopan, dan profesional.
                </p>
                <div class="hero-btn-group">
                    <a href="booking.php" class="btn-merah-putih">
                        <i class="fas fa-calendar-check"></i>
                        Booking Sekarang
                    </a>
                    <a href="https://wa.me/6281233624797" target="_blank" class="btn-outline-putih">
                        <i class="fab fa-whatsapp"></i>
                        Hubungi Kami
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="num" data-counter="2" data-suffix=" Bus">0</div>
                        <div class="lbl">Armada</div>
                    </div>
                    <div class="hero-divider"></div>
                    <div class="hero-stat">
                        <div class="num">Jetbus</div>
                        <div class="lbl">3++ SHD</div>
                    </div>
                    <div class="hero-divider"></div>
                    <div class="hero-stat">
                        <div class="num">Air</div>
                        <div class="lbl">Suspension</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ PROFIL SINGKAT (Seperti halaman 2 proposal) ══ -->
<section style="padding:90px 0;background:white;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 fade-in">
                <div class="section-label">Profil Singkat</div>
                <h2 class="section-title">PT Janitra Surya <span class="red">Trans</span></h2>
                <p style="color:var(--abu-teks);line-height:1.85;margin-bottom:18px;font-size:0.97rem; text-align: justify;">
                    PT Janitra Surya Trans adalah perusahaan layanan transportasi bus pariwisata berdiri sejak
                    <strong>24 April 2025</strong> dengan Office dan Pool sendiri di
                    <strong>Jl. Boro Terong Dowo No.29, Tirtomoyo Pakis, Kabupaten Malang.</strong>
                </p>
                <p style="color:var(--abu-teks);line-height:1.85;margin-bottom:18px;font-size:0.97rem; text-align: justify;">
                    Kami berkomitmen memberikan pelayanan perjalanan yang <strong>aman, nyaman, dan menyenangkan</strong>
                    dengan armada terbaik serta Driver & Crew yang berpengalaman, ramah, sopan & profesional di bidang transportasi.
                </p>
                <p style="color:var(--abu-teks);line-height:1.85;margin-bottom:28px;font-size:0.97rem; text-align: justify;">
                    Kami siap melayani study tour, study kampus, ziarah Wali, wisata keluarga, gathering perusahaan, serta perjalanan wisata lainnya.
                    Percayakan perjalanan Anda bersama <strong style="color:var(--merah);">PT Janitra Surya Trans</strong>.
                </p>

                <!-- 3 keunggulan utama (persis dari proposal hal.2) -->
                <div class="row g-3">

                    <div class="col-4 col-md-4 fade-in">
                        <div style="background:var(--abu);border-radius:var(--radius-sm);padding:20px;text-align:center;border-top:3px solid var(--merah); height:100%;align-items:justify;">
                            <div style="margin-bottom:8px;">
                                <img src="assets/images/icon/travel.png" alt="Kelayakan Jalan" style="width:40px;height:40px;" />
                            </div>
                            <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:0.78rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--hitam);margin-bottom:6px;">Kelayakan Jalan</div>
                            <p style="font-size:0.78rem;color:var(--abu-teks);margin:0;line-height:1.6;">Bus selalu dalam kondisi prima dengan perawatan rutin berkala.</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 fade-in" data-delay="80">
                        <div style="background:var(--abu);border-radius:var(--radius-sm);padding:20px;text-align:center;border-top:3px solid var(--merah); height:100%;align-items: justify;">
                            <div style="margin-bottom:8px;">
                                <img src="assets/images/icon/money-bag.png" alt="Ramah Kantong" style="width:40px;height:40px;" />
                            </div>
                            <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:0.78rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--hitam);margin-bottom:6px;">Ramah Kantong</div>
                            <p style="font-size:0.78rem;color:var(--abu-teks);margin:0;line-height:1.6;">Harga terjangkau dengan fasilitas lengkap dan pelayanan prima.</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 fade-in" data-delay="160">
                        <div style="background:var(--abu);border-radius:var(--radius-sm);padding:20px;text-align:center;border-top:3px solid var(--merah); height:100%;align-items: justify;">
                            <div style="margin-bottom:8px;">
                                <img src="assets/images/icon/steward.png" alt="Crew Profesional" style="width:40px;height:40px;" />
                            </div>
                            <div style="font-family:'Montserrat',sans-serif;font-weight:800;font-size:0.78rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--hitam);margin-bottom:6px;">Crew Profesional</div>
                            <p style="font-size:0.78rem;color:var(--abu-teks);margin:0;line-height:1.6;">Crew ramah, sopan, berpengalaman & bertanggung jawab.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Foto bus tampak depan/samping dari proposal -->
            <div class="col-lg-6 fade-in">
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
                    <div style="grid-column:1/-1;border-radius:var(--radius);overflow:hidden;position:relative;">
                        <img src="assets/images/galeri/janitra_merah_hitam.jpg"
                             alt="Bus Janitra Surya Tampak Samping"
                             style="width:100%;height:300px;object-fit:cover;">
                        <div style="position:absolute;top:14px;left:14px;background:var(--merah);color:white;padding:5px 14px;border-radius:4px;font-family:'Montserrat',sans-serif;font-weight:800;font-size:0.72rem;text-transform:uppercase;letter-spacing:1px;">
                            ⭐ Jetbus 3++ SHD
                        </div>
                    </div>
                    <div style="border-radius:var(--radius-sm);overflow:hidden;">
                        <img src="assets/images/janitra_hitam2.jpg"
                             alt="Interior Bus"
                             style="width:100%;height:260px;object-fit:cover;">
                    </div>
                    <div style="border-radius:var(--radius-sm);overflow:hidden;">
                        <img src="assets/images/janitra1.jpg"
                             alt="Bus Pariwisata"
                             style="width:100%;height:260px;object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ KEUNGGULAN ════════════════════════════════════ -->
<section class="keunggulan-section">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-label" style="justify-content:center;">Mengapa Memilih Kami</div>
            <h2 class="section-title">Keunggulan <span class="red">Janitra Surya</span></h2>
            <p class="section-subtitle mx-auto">Kenyamanan dan keselamatan Anda adalah prioritas kami dalam setiap perjalanan.</p>
        </div>
        <div class="row g-4">
            <?php
            $keung = [
                ['../assets/images/icon/travel.png','Kelayakan Jalan Terjamin','Bus selalu dalam kondisi prima dengan perawatan rutin berkala. Surat kelayakan jalan lengkap dan sesuai peruntukan.'],
                ['../assets/images/icon/air-conditioner.png','AC Dingin Merata','AC berkualitas tinggi memastikan kabin tetap sejuk dan nyaman sepanjang perjalanan, berapapun jumlah penumpang.'],
                ['../assets/images/icon/business.png','Asuransi Perjalanan','Setiap perjalanan dilindungi asuransi (APAR & palu pemecah kaca standar K3). Keselamatan Anda nomor satu.'],
                ['../assets/images/icon/driver.png','Driver & Crew Profesional','Pengemudi berpengalaman, sopan, ramah, dan bertanggung jawab. Siap mengantarkan Anda ke tujuan dengan selamat.'],
                ['../assets/images/icon/hand.png','Harga Ramah di Kantong','Fasilitas premium dengan harga terjangkau dan transparan. Tidak ada biaya tersembunyi dalam setiap penawaran.'],
                ['../assets/images/icon/booking.png','Booking Mudah','Pesan via website atau WhatsApp. Konfirmasi cepat, proses mudah, dan layanan responsif 7 hari seminggu.'],
            ];
                foreach ($keung as $i => $k): ?>
                <div class="col-6 col-md-6 col-lg-4 fade-in" data-delay="<?= $i*60 ?>">
                <div class="keung-card">
                    <div class="keung-icon">
                    <img src="<?= $k[0] ?>" alt="<?= $k[1] ?>" class="keung-icon-img">
                </div>
                    <h5><?= $k[1] ?></h5>
                    <p><?= $k[2] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ═══ LAYANAN ════════════════════════════════════════ -->
<section class="layanan-section" style="background:var(--abu);">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-label" style="justify-content:center;">Jenis Layanan</div>
            <h2 class="section-title">Kami Siap <span class="red">Melayani</span></h2>
            <p class="section-subtitle mx-auto">Dari wisata keluarga hingga perjalanan korporat, kami siap hadir untuk Anda.</p>
        </div>
        <div class="row g-4 justify-content-center  ">
            <?php
            $layanan = [
                ['emoji'=>'🏖️','judul'=>'Wisata Keluarga','desc'=>'Perjalanan wisata ke pantai, pegunungan, dan berbagai destinasi menarik di Jawa Timur & sekitarnya.',
                 'img'=>'assets/images/wisata.jpg'],
                ['emoji'=>'🎓','judul'=>'Study Tour','desc'=>'Layanan study tour dan study kampus untuk SD, SMP, SMA, dan perguruan tinggi. Ratusan sekolah telah mempercayai kami.',
                 'img'=>'assets/images/study-tour.jpeg'],
                ['emoji'=>'🏢','judul'=>'Gathering Perusahaan','desc'=>'Transportasi gathering kantor, outing, team building, dan berbagai acara perusahaan dengan pelayanan profesional.',
                 'img'=>'assets/images/gathering.jpeg'],
            ];
            foreach ($layanan as $i => $l): ?>
            <div class="col-lg-3 col-md-6 fade-in" data-delay="<?= $i*80 ?>">
                <div class="lay-card">
                    <div class="lay-img">
                        <img src="<?= $l['img'] ?>" alt="<?= $l['judul'] ?>">
                        <div class="lay-overlay"></div>
                        <div style="position:absolute;bottom:14px;left:16px;font-size:1.6rem;filter:drop-shadow(0 2px 6px rgba(0,0,0,0.5));"><?= $l['emoji'] ?></div>
                    </div>
                    <div class="lay-body">
                        <h5><?= $l['judul'] ?></h5>
                        <p><?= $l['desc'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ PENAWARAN HARGA (dari proposal hal.6) ═══════ -->
<section class="harga-section">
    <div class="container" style="position:relative;z-index:1;">
        <div class="text-center mb-5">
        <div class="row g-4 justify-content-center">
        </div>
        <!-- Syarat dari proposal hal.6 -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div style="background:rgba(0,0,0,0.25);border-radius:var(--radius);padding:28px;">
                    <h5 style="font-family:'Montserrat',sans-serif;font-weight:800;color:white;text-transform:uppercase;letter-spacing:1px;margin-bottom:18px;font-size:0.92rem;">
                        📋 Syarat & Ketentuan Sewa
                    </h5>
                    <ul class="syarat-list">
                        <?php
                        $syarat = [
                            'Uang muka minimum 35% dari total sewa. Sisa harus lunas 3 hari sebelum keberangkatan.',
                            'Pembatalan oleh penyewa min. 14 hari sebelum keberangkatan. Ganti rugi 45% dari biaya sewa.',
                            'Force Majeur di tengah perjalanan: penggantian bus lain atau uang sewa hari yang belum dijalani.',
                            'Rute harus sesuai perjanjian. Penambahan rute dikenakan biaya tambahan.',
                            'Biaya parkir, tol, penginapan, dan makan driver/co-driver ditanggung penyewa.',
                            'Apabila harga BBM naik, harga sewa menyesuaikan.',
                        ];
                        foreach ($syarat as $i => $s): ?>
                        <li>
                            <div class="syarat-num"><?= $i+1 ?></div>
                            <span><?= $s ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ FASILITAS LENGKAP ════════════════════════════ -->
<section class="fas-grid">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-label" style="justify-content:center;">Fasilitas Bus</div>
            <h2 class="section-title">Fasilitas <span class="red">Lengkap</span> di Dalam Bus</h2>
            <p class="section-subtitle mx-auto">Semua fasilitas dari tersedia untuk kenyamanan perjalanan Anda.</p>
        </div>
        <div class="row g-4">
            <?php
            $fas = [
                ['❄️','AC Dingin & Lampu Baca','AC berkualitas tinggi dengan pendinginan merata di seluruh kabin. Serta lampu baca individual untuk kenyamanan membaca tanpa mengganggu penumpang lain.',
                 'assets/images/fasilitas/ac.jpg'],
                ['🛏️','Bantal & Selimut','Setiap penumpang mendapat bantal dan selimut untuk kenyamanan istirahat selama perjalanan panjang.',
                 'assets/images/fasilitas/bantal.jpeg'],
                ['💧','Dispenser & Welcome Drink','Tersedia dispenser air minum dan welcome drink untuk menyambut penumpang di awal perjalanan.',
                 'assets/images/fasilitas/dispenser.jpg'],
                ['📺','Android TV & Mic Wireless','Android TV layar besar dengan mic wireless untuk hiburan, karaoke, dan presentasi selama perjalanan.',
                 'assets/images/fasilitas/tv.jpeg'],
                ['🔌','USB Charger Setiap Kursi','Port USB charger tersedia di setiap kursi. Smartphone dan gadget Anda selalu siap digunakan.',
                 'assets/images/fasilitas/usb.jpeg'],
                ['🧳','Bagasi Dalam','Ruang bagasi dalam bus, cukup untuk koper dan barang bawaan seluruh rombongan.',
                 'assets/images/fasilitas/Bagasi_dalam.jpg'],
                ['🛡️','APAR & Palu Pemecah Kaca','Standar K3 terpenuhi: APAR dan palu pemecah kaca tersedia di setiap bus untuk keselamatan penumpang.',
                 'assets/images/fasilitas/apar.jpeg'],
                ['🌬️','Air Suspension','Sistem air suspension memberikan kenyamanan maksimal. Guncangan di jalan diminimalisir untuk perjalanan halus.',
                 'assets/images/fasilitas/suspensi.jpg'],
                ['💺','Leg Rest','Kursi dapat direbahkan hingga posisi selonjor untuk kenyamanan maksimal selama perjalanan jauh.',
                 'assets/images/fasilitas/legrest.jpeg'],
            ];
            foreach ($fas as $i => $f): ?>
            <div class="col-lg-4 col-md-6 fade-in" data-delay="<?= $i*50 ?>">
                <div class="fas-card">
                    <div class="fas-img">
                        <img src="<?= $f[3] ?>" alt="<?= $f[1] ?>">
                        <div class="fas-emoji"><?= $f[0] ?></div>
                    </div>
                    <div class="fas-body">
                        <h6><?= $f[1] ?></h6>
                        <p><?= $f[2] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ LOKASI KAMI ═══════════════════════════════════ -->
<section style="padding:90px 0;background:#fff;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-label" style="justify-content:center;">Lokasi Kami</div>
            <h2 class="section-title">Kantor & Pool <span class="red">Janitra Surya Trans</span></h2>
            <p class="section-subtitle mx-auto">
                Kunjungi kantor kami atau hubungi tim kami untuk konsultasi perjalanan dan reservasi armada.
            </p>
        </div>

        <div style="
            position:relative;
            overflow:hidden;
            border-radius:24px;
            box-shadow:0 25px 60px rgba(0,0,0,.12);
        ">

            <!-- Google Maps -->
            <iframe
                src="https://maps.google.com/maps?q=-7.9244014,112.692255&t=&z=17&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="520"
                style="border:0;display:block;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

            <!-- Floating Card -->
            <div class="lokasi-card" style="
                position:absolute;
                top:30px;
                left:30px;
                max-width:380px;
                background:#fff;
                border-radius:20px;
                padding:28px;
                box-shadow:0 15px 40px rgba(0,0,0,.15);
                z-index:10;
            ">

                <h4 style="
                    font-weight:800;
                    margin-bottom:18px;
                    color:#111827;
                ">
                    PT Janitra Surya Trans
                </h4>

                <div style="display:flex;gap:12px;margin-bottom:18px;">
                    <i class="fas fa-map-marker-alt"
                       style="color:#DC2626;font-size:1.1rem;margin-top:4px;"></i>
                    <span style="color:#4B5563;line-height:1.7;">
                        Jl. Boro Terong Dowo No.29,
                        Ulesari, Tirtomoyo,
                        Kec. Pakis,
                        Kabupaten Malang,
                        Jawa Timur 65154
                    </span>
                </div>

                <div style="display:flex;gap:12px;margin-bottom:18px;">
                    <i class="fas fa-phone"
                       style="color:#DC2626;"></i>
                    <span>0812-3362-4797</span>
                </div>

                <div style="display:flex;gap:12px;margin-bottom:25px;">
                    <i class="fas fa-clock"
                       style="color:#DC2626;"></i>
                    <span>Senin - Minggu • 24 Jam</span>
                </div>

                <div style="
                    display:flex;
                    gap:10px;
                    flex-wrap:wrap;
                ">
                    <a href="https://wa.me/6281233624797"
                       target="_blank"
                       class="btn-merah-putih">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp
                    </a>

                    <a href="https://www.google.com/maps/place/Jl.+Boro+Terong+Dowo+No.29,+Ulesari,+Tirtomoyo,+Kec.+Pakis,+Kabupaten+Malang,+Jawa+Timur+65154/"
                       target="_blank"
                       class="btn-outline-merah">
                        <i class="fas fa-directions"></i>
                        Maps
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ═══ CTA ════════════════════════════════════════════ -->
<section class="cta-section">
    <div style="position:absolute;inset:0;">
        <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=1920&q=60"
             alt="bg" style="width:100%;height:100%;object-fit:cover;opacity:0.08;">
    </div>
    <!-- Pola kotak seperti proposal -->
    <div style="position:absolute;bottom:0;right:0;opacity:0.1;
                background-image:repeating-linear-gradient(45deg,white 0,white 8px,transparent 8px,transparent 20px);
                background-size:28px 28px;width:300px;height:130px;"></div>
    <div class="container" style="position:relative;z-index:1;">
        <div class="section-label" style="justify-content:center;color:rgba(255,255,255,0.5);margin-bottom:14px;">Hubungi Kami</div>
        <h2>BOOKING BUS SEKARANG!</h2>
        <p>Percayakan perjalanan Anda bersama PT Janitra Surya Trans.<br>Kenyamanan dan keselamatan Anda adalah prioritas kami.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="booking.php" class="btn-merah-putih">
                <i class="fas fa-calendar-check"></i> Form Booking Online
            </a>
        </div>
    </div>
</section>

<?php include '../src/includes/footer.php'; ?>
