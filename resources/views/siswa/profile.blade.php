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
                        <li class="list-group-item">
                          <a href="/siswa" class="btn btn-sm btn-outline-primary">Back</a>
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