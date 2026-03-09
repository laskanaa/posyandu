@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- ================= SLIDER ================= --}}

    @if ($sliders->count() > 0)

        <section id="beranda" class="relative overflow-hidden">

            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">

                <div class="carousel-inner">

                    @foreach ($sliders as $key => $slider)

                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">

                            <img src="{{ asset('storage/sliders/' . $slider->gambar) }}" class="d-block w-100"
                                style="height:90vh; object-fit:cover;">

                            <div class="carousel-caption text-center">

                                <h2 style="font-size:50px; font-weight:bold;">
                                    {{ $slider->judul }}
                                </h2>

                                <p style="font-size:20px;">
                                    {{ $slider->deskripsi }}
                                </p>

                            </div>

                        </div>

                    @endforeach

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">

                    <span class="carousel-control-prev-icon"></span>

                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">

                    <span class="carousel-control-next-icon"></span>

                </button>

            </div>

        </section>

    @endif



    {{-- ================= STYLE SECTION ================= --}}

    <style>
        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            color: #1e3a8a;
        }

        .section-subtitle {
            color: #64748b;
            margin-top: 10px;
        }

        .layanan-section {
            background: linear-gradient(to bottom, #ffffff, #f3f7ff);
            padding: 80px 0;
        }

        .layanan-card {
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            transition: 0.3s;
            height: 100%;
        }

        .layanan-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.1);
        }

        .card-kesehatan {
            background: #ffe4ec;
        }

        .card-pendidikan {
            background: #fffbe6;
        }

        .card-pu {
            background: #e8f8ec;
        }

        .card-perumahan {
            background: #e8f1ff;
        }

        .card-keamanan {
            background: #f3e8ff;
        }

        .card-sosial {
            background: #ffeede;
        }

        .layanan-icon {
            font-size: 32px;
            margin-bottom: 12px;
        }

        .layanan-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .layanan-desc {
            font-size: 14px;
            color: #555;
        }
    </style>



    {{-- ================= TENTANG POSYANDU ================= --}}

    <section class="section-padding">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h2 class="section-title">
                        Tentang Posyandu
                    </h2>

                    <p style="line-height:1.8; color:#555;">

                        Posyandu (Pos Pelayanan Terpadu) merupakan salah satu bentuk
                        upaya kesehatan berbasis masyarakat yang diselenggarakan
                        untuk memberikan kemudahan kepada masyarakat dalam
                        memperoleh pelayanan kesehatan dasar.

                    </p>

                    <p style="line-height:1.8; color:#555;">

                        Melalui Posyandu masyarakat dapat memperoleh pelayanan
                        kesehatan ibu dan anak, pemantauan pertumbuhan balita,
                        imunisasi, pelayanan gizi, serta berbagai program kesehatan
                        lainnya secara terpadu.

                    </p>

                </div>

                <div class="col-md-6 text-center">

                    <img src="{{ asset('images/posyandu.png') }}" style="max-width:80%;">

                </div>

            </div>

        </div>

    </section>



    {{-- ================= 6 SPM ================= --}}

    <section style="background:#f8fafc;" class="section-padding">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">
                    6 Standar Pelayanan Minimal
                </h2>

                <p class="section-subtitle">
                    Program pelayanan dasar untuk meningkatkan kesejahteraan masyarakat
                </p>

            </div>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="layanan-card card-kesehatan">

                        <div class="layanan-icon">🩺</div>

                        <div class="layanan-title">Kesehatan</div>

                        <p class="layanan-desc">
                            Pelayanan kesehatan ibu dan anak, imunisasi,
                            serta pemantauan gizi balita.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="layanan-card card-pendidikan">

                        <div class="layanan-icon">📚</div>

                        <div class="layanan-title">Pendidikan</div>

                        <p class="layanan-desc">
                            Peningkatan pendidikan masyarakat
                            dan pendidikan anak usia dini.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="layanan-card card-pu">

                        <div class="layanan-icon">🚰</div>

                        <div class="layanan-title">Pekerjaan Umum</div>

                        <p class="layanan-desc">
                            Penyediaan air bersih dan sanitasi
                            untuk lingkungan sehat.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="layanan-card card-perumahan">

                        <div class="layanan-icon">🏠</div>

                        <div class="layanan-title">Perumahan</div>

                        <p class="layanan-desc">
                            Mendorong rumah layak huni
                            dan lingkungan sehat.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="layanan-card card-keamanan">

                        <div class="layanan-icon">🛡️</div>

                        <div class="layanan-title">Ketertiban</div>

                        <p class="layanan-desc">
                            Mewujudkan keamanan dan ketertiban
                            masyarakat.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="layanan-card card-sosial">

                        <div class="layanan-icon">🤝</div>

                        <div class="layanan-title">Sosial</div>

                        <p class="layanan-desc">
                            Perlindungan sosial bagi masyarakat
                            dan keluarga rentan.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- ================= LAYANAN POSYANDU ================= --}}

    <section class="layanan-section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">
                    Layanan Posyandu
                </h2>

                <p class="section-subtitle">
                    Beberapa layanan utama yang tersedia pada sistem Posyandu
                </p>

            </div>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="layanan-card card-kesehatan">

                        <div class="layanan-icon">👶</div>

                        <div class="layanan-title">Data Balita</div>

                        <p class="layanan-desc">
                            Pencatatan data balita secara digital
                            untuk memudahkan pemantauan kesehatan.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="layanan-card card-pendidikan">

                        <div class="layanan-icon">⚖️</div>

                        <div class="layanan-title">Penimbangan</div>

                        <p class="layanan-desc">
                            Pencatatan hasil penimbangan berat
                            dan tinggi badan balita.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="layanan-card card-pu">

                        <div class="layanan-icon">💉</div>

                        <div class="layanan-title">Imunisasi</div>

                        <p class="layanan-desc">
                            Pendataan imunisasi yang diterima
                            oleh balita.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- ================= WELCOME ================= --}}

    <div class="container text-center mt-5">

        <h1>Selamat Datang</h1>

        <p>
            Ini halaman home sistem informasi Posyandu.
        </p>

    </div>

@endsection