@extends('beranda.master')
@section('master')
<section  class="contact">
  <div class="container" data-aos="fade-up">
     
      <div class="row mt-5">


          <div class="col-lg-4">
              <div class="info">
                  <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Location:</h4>
                      <p>JL. RAYA PEKULO NO. 34 SRONO, Kebaman, Kec. Srono, Kab. Banyuwangi Prov. Jawa Timur</p>
                  </div>

                  <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>smktarunamandirisrono@gmail.com.com</p>
                  </div>

                  <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>+62 821-4035-4765</p>
                  </div>

              </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">


              <div class="section-title">
                  <h2>Edit</h2>
                  <p>Saran</p>
              </div>
              <form action="{{ route('edit_saran',$editData->id) }}" method="POST" class="php-email-form">
                  @csrf
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <input value="{{$editData->nama}}" type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <input value="{{$editData->email}}" type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                  </div>
                  <div class="form-group mt-3">
                    <select type="text" class="form-control" name="tipe" id="subject" required>
                        <option value="">Pilih Data</option>
                        <option value="siswa" {{ $editData->tipe == 'siswa' ? 'selected' : '' }}>siswa</option>
                        <option value="alumni" {{ $editData->tipe == 'alumni' ? 'selected' : '' }}>alumni</option>
                        <option value="umum" {{ $editData->tipe == 'umum' ? 'selected' : '' }}>umum</option>
                    </select>
                </div>
                  <div class="form-group mt-3">
                      <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required>{{$editData->pesan}}</textarea>
                  </div>
                  <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                      <button type="submit" name="submit">Send Message</button>
                  </div>
              </form>

          </div>

      </div>

  </div>
</section><!-- End Contact Section -->
@endsection