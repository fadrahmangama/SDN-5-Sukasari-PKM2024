@extends('layouts.main')

@section('section')
    <section class="hero-section-2">
        <div class="container d-flex align-items-center justify-content-center fs-1
text-white flex-column">
            <h1>Get to know about us!</h1>
            <h2>SDN 5 Sukasari Tangerang</h2>
        </div>
    </section>
    <section class="container">
        <div class="ratio ratio-16x9 mt-3 virtualTour justify-content-center "
            style="box-sizing:border-box; position:relative; background:#000;webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;;margin:0 0 10 0;overflow:hidden;">
            <iframe src="https://www.youtube.com/embed/oFShv5S3ld8" title="YouTube video" allowfullscreen></iframe>
        </div>
        <div class="alasanMemilih">
            <h1>Mengapa SDN 5 Sukasari ?</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, sunt minus. Earum aut possimus
                necessitatibus molestias odio vitae dolorum nam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quod!</p>
        </div>
    </section>
    <section class="diffBackground">
        <div class="row text-center">
            <div class="col-md-6 pt-5">
                <div class="visiMisi">
                    <div class="title">
                        <h1>
                            Visi
                        </h1>
                    </div>
                    <div class="body mt-5" style="width: 75%; margin:auto;">
                        <h5>“ Maju bersama dalam mewujudkan Profil Pelajar Pancasila yang berkualitas dan peduli lingkungan”
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-5">
                <div class="visiMisi">
                    <div class="title">
                        <h1>
                            Misi
                        </h1>
                    </div>
                    <div class="body text-start mt-5">
                        <ol>
                            <li>
                                <h6>Menyelenggarakan sistem pembelajaran yang aktif, inovatif, kreatif, efektif, dan
                                    menyenangkan, serta menanamkan nilai-nilai Pancasila;</h6>
                            </li>
                            <li>
                                <h6>Membekali siswa dengan pengetahuan dan keterampilan, baik akademik maupun non akademik
                                    sesuai dengan potensi yang dimilikinya;</h6>
                            </li>
                            <li>
                                <h6>Membekali dan membiasakan tenaga pendidik dan tenaga kependidikan untuk bekerja
                                    profesional serta mengembangkan wawasan, rasa cinta, dan peduli lingkungan;</h6>
                            </li>
                            <li>
                                <h6>Menggali potensi diri peserta didik untuk dikembangkan secara maksimal</h6>
                            </li>
                            <li>
                                <h6>
                                    Menanamkan kebiasaan warga sekolah untuk selalu hidup bersih, sehat, peduli, cinta
                                    lingkungan melalui proses pembelajaran;
                                </h6>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container text-center my-4">
        <h2>SDN 5 SUKASARI HIGHLIGHT</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
            <div class="col">
                <div class="card mx-auto" style="width: 350px; ">
                    <iframe src="https://www.youtube.com/embed/oFShv5S3ld8" title="YouTube video" allowfullscreen
                        style="height: 250px;"></iframe>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto" style="width: 350px; ">
                    <iframe src="https://www.youtube.com/embed/oFShv5S3ld8" title="YouTube video" allowfullscreen
                        style="height: 250px;"></iframe>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto" style="width: 350px; ">
                    <iframe src="https://www.youtube.com/embed/oFShv5S3ld8" title="YouTube video" allowfullscreen
                        style="height: 250px;"></iframe>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto" style="width: 350px; ">
                    <iframe src="https://www.youtube.com/embed/oFShv5S3ld8" title="YouTube video" allowfullscreen
                        style="height: 250px;"></iframe>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto" style="width: 350px; ">
                    <iframe src="https://www.youtube.com/embed/oFShv5S3ld8" title="YouTube video" allowfullscreen
                        style="height: 250px;"></iframe>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto" style="width: 350px; ">
                    <iframe src="https://www.youtube.com/embed/oFShv5S3ld8" title="YouTube video" allowfullscreen
                        style="height: 250px;"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="diffBackground-1 mt-5">
        <h2>
            Pendaftaran Siswa Baru
        </h2>
        <h2>
            SDN 5 Sukasari Tangerang
        </h2>

        <a href="#"><i class="fas fa-graduation-cap"></i> Pendaftaran Siswa Baru</a>
    </section>
    <section class="container mb-5">
        <h1 class="text-center my-5">Partnership</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
            <div class="col">
              <div class="card mx-auto" style="width: 350px; ">
                <img src="{{ asset('Logo-1.jpg') }}" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card mx-auto" style="width: 350px; ">
                <img src="{{ asset('Logo-1.jpg') }}" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card mx-auto" style="width: 350px; ">
                <img src="{{ asset('Logo-1.jpg') }}" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
    </section>
@endsection
