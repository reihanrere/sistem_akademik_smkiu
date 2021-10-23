@extends('layouts.master')

@section('content')

<div class="pd-ltr-20 xs-pd-20-10">
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
      <div class="pd-20 card-box height-50-p">
        <div class="profile-photo">
          <img src="{{ asset('admin/vendors/images/photo1.jpg') }}" alt="" class="avatar-photo">
          <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body pd-5">
                  <div class="img-container">
                    <img id="image" src="{{ asset('admin/vendors/images/photo2.jpg') }}" alt="Picture">
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="submit" value="Update" class="btn btn-primary">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h5 class="text-center h5 mb-0">{{ $siswa->nama_siswa }}</h5>
        <div class="profile-info">
          <h5 class="mb-20 h5 text-blue">Contact Information</h5>
          <ul>
            <li>
              <span>Email Address:</span>
                {{ $siswa->email }}
            </li>
            <li>
              <span>Phone Number:</span>
              {{ $siswa->no_telp }}
            </li>
            <li>
              <span>Country:</span>
              Indonesia
            </li>
            <li>
              <span>Address:</span>
              {{ $siswa->alamat }}
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
      <div class="card-box height-100-p overflow-hidden">
        <div class="profile-tab height-100-p">
          <div class="tab height-100-p">
            <div class="tab-content">
              <!-- Timeline Tab start -->
              <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                <div class="pd-20">
                  <div class="profile-timeline">
                    <div class="pd-20 card-box height-100-p">
                      <h4 class="mb-20 h4 text-blue">Data Diri Siswa</h4>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <label class="col-sm-12 col-md-5 col-form-label">NIS</label>: {{ $siswa->nis }}
                        </li>
                        <li class="list-group-item">
                          <label class="col-sm-12 col-md-5 col-form-label">Nama</label>: {{ $siswa->nama_siswa }}
                        </li>
                        <li class="list-group-item">
                          <label class="col-sm-12 col-md-5 col-form-label">Kelas</label>: {{ $siswa->kelas->kelas }}
                        </li>
                        <li class="list-group-item">
                          <label class="col-sm-12 col-md-5 col-form-label">Agama</label>: {{ $siswa->agama }}
                        </li>
                        <li class="list-group-item">
                          <label class="col-sm-12 col-md-5 col-form-label">Jenis Kelamin</label>: {{ $siswa->jenis_kelamin }}
                        </li>
                        <li class="list-group-item">
                          <label class="col-sm-12 col-md-5 col-form-label">TTL</label>: {{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }}
                        </li>
                        <li class="list-group-item">
                          <label class="col-sm-12 col-md-5 col-form-label">Tahun Awal Sekolah</label>: {{ $siswa->tahunawal_sekolah }}
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
@section('content')

    <div class="header pb-6 d-flex align-items-center" style="min-height: 350px; background-image: url({{ asset('admin/assets/img/social-media-3846597.png') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Students</h1>
            </div>
        </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-3 order-xl-1">
                
            </div>
            <div class="col-xl-6 order-xl-1">
                <div class="card card-profile">
                  <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                      <div class="card-profile-image">
                        <a href="#">
                          <img src="{{ asset('admin/assets/img/download.png') }}" class="rounded-circle">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                      <a href="/detailProfile" class="btn btn-sm btn-success  mr-4 ">Detail Siswa</a>
                      <a href="#" class="btn btn-sm btn-danger float-right">Ganti Password</a>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col">
                        <div class="card-profile-stats d-flex justify-content-center">
                          <div>
                            <span class="heading">22</span>
                            <span class="description">Friends</span>
                          </div>
                          <div>
                            <span class="heading">10</span>
                            <span class="description">Photos</span>
                          </div>
                          <div>
                            <span class="heading">89</span>
                            <span class="description">Comments</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <h5 class="h2">
                        {{ $siswa->nama_siswa }}<span class="font-weight-light"></span>
                      </h5>
                      <div class="h3 font-weight-300">
                        <i class="ni location_pin mr-2"></i>{{ $siswa->nis }}
                      </div>
                      <div class="h5 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>Rekayasa Perangkat Lunak
                      </div>
                      <div>
                        <i class="ni education_hat mr-2"></i>SMK Informatika Utama
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-xl-3 order-xl-1">
                
            </div>
        </div>
    </div>
@stop