@extends('layouts.main')

@section('section')
    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1
    text-white flex-column">
            <h1>Welcome to</h1>
            <h2>SDN 5 Sukasari Tangerang</h2>
        </div>
    </section>

    <section class="container">

        <section class="profil">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <h4>PROFIL SDN 5 SUKASARI <br>TANGERANG</h4>
                    <div class="ratio ratio-16x9 mt-3"
                        style="padding:5px;background:#000;webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;width:540px;margin:0 0 0 0;overflow:hidden;">
                        <iframe src="https://www.youtube.com/embed/bH1pHeeyuPw" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 sambutan">
                    <h4>
                        Sambutan Kepala Sekolah
                    </h4>
                    <p class="ms-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis in nisi veniam laudantium,
                        laboriosam, dicta rem modi eos aperiam, a voluptates sint ex consequatur expedita maxime pariatur
                        tenetur inventore commodi!
                    </p>
                    <p class="ms-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis in nisi veniam laudantium,
                        laboriosam, dicta rem modi eos aperiam, a voluptates sint ex consequatur expedita maxime pariatur
                        tenetur inventore commodi!
                    </p>
                    <a href="#" class="btn btn-danger ms-2">Read More</a>
                </div>
            </div>
        </section>

        <section class="prestasi">
            <div class="row">
                <div class="section-title">
                    <h2>Prestasi Terbaru</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="card mt-4 mx-auto mb-2" style="max-width: 1200px;">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="{{ asset('winner.jpg') }}" class="img-fluid rounded my-2" alt="Juara 1" style="height: 300px; width:600px;">
                      </div>
                      <div class="col-md-6 mt-5">
                        <div class="card-body">
                          <h5 class="card-title">Juara 1 Lomba</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row text-center">
                <div class="card mt-4 mx-auto mb-3" style="max-width: 1200px;">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="{{ asset('winner.jpg') }}" class="img-fluid rounded my-2" alt="Juara 1" style="height: 300px; width:600px;">
                      </div>
                      <div class="col-md-6 mt-5">
                        <div class="card-body">
                          <h5 class="card-title">Juara 2 Lomba</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row text-center">
              <div class="card mt-4 mx-auto mb-3" style="max-width: 1200px;">
                  <div class="row g-0">
                    <div class="col-md-6">
                      <img src="{{ asset('winner.jpg') }}" class="img-fluid rounded my-2" alt="Juara 1" style="height: 300px; width:600px;">
                    </div>
                    <div class="col-md-6 mt-5">
                      <div class="card-body">
                        <h5 class="card-title">Juara 3 Lomba</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
            <div class="text-center mb-3">
                <a href="#" class="btn btn-danger " style="margin-top: 10px; width:250px; padding: 8px; font-size:18px">Prestasi Lainnya</a>
            </div>  
        </section>

        <section>
          <div class="row">
            <div class="section-title">
              <h2>Berita Terbaru</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100">
                  <img src="{{ asset('heroImage.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="btn btn-danger">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="{{ asset('heroImage.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">This is a short card.</p>
                    <a href="" class="btn btn-danger">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="{{ asset('heroImage.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="" class="btn btn-danger">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="{{ asset('heroImage.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="btn btn-danger">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="{{ asset('heroImage.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="btn btn-danger">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="{{ asset('heroImage.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="btn btn-danger">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mb-3">
            <a href="#" class="btn btn-danger " style="margin-top: 30px; width:250px; padding: 8px; font-size:18px">Berita Lainnya</a>
        </div>  
        </section>

        <section class="mb-5">
          <div class="row">
            <div class="section-title">
              <h2>Layanan Sekolah</h2>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
            <div class="col">
              <div class="card mx-auto" style="width: 350px; ">
                <img src="{{ asset('Logo.jpg') }}" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card mx-auto" style="width: 350px; ">
                <img src="{{ asset('Logo.jpg') }}" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card mx-auto" style="width: 350px; ">
                <img src="{{ asset('Logo.jpg') }}" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
        </section>

    </section>
@endsection
