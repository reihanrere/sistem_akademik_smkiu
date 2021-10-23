<div class="left-side-bar">
  <div class="brand-logo" style="border: none;">
    <a href="!#">
      <img class="mr-3" src="{{ asset('admin/image/logo-smk.jpg') }}" alt="" style="width:65px; height: 65px; " >
      <h5>SMKIU</h5>
    </a>
    <div class="close-sidebar" data-toggle="left-sidebar-close">
      <i class="ion-close-round"></i>
    </div>
  </div>
  <div class="menu-block customscroll">
    <div class="sidebar-menu">
      <ul id="accordion-menu">
        @if(auth()->user()->role == 'admin' || auth()->user()->role == 'guru' || auth()->user()->role == 'siswa')
        <li>
          <a href="/dashboard" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
          </a>
        </li>
        @endif
        @if(auth()->user()->role == 'admin')
        <li>
          <a href="/siswa" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-user1"></span><span class="mtext">Data Siswa</span>
          </a>
        </li>
        <li>
          <a href="/guru" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-user-1"></span><span class="mtext">Data Guru</span>
          </a>
        </li>
        <li>
          <a href="/mapel" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-file"></span><span class="mtext">Mata Pelajaran</span>
          </a>
        </li>
        @endif
        @if (auth()->user()->role == 'guru' || auth()->user()->role == 'admin')
        <li>
          <a href="/siakad" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-books"></span><span class="mtext">Rangkuman Nilai</span>
          </a>
        </li>
        @endif
        @if(auth()->user()->role == 'siswa')
        <li>
          <a href="/profileSiswa" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-user1"></span><span class="mtext">Profile</span>
          </a>
        </li>
        <li>
          <a href="/rangkuman" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-books"></span><span class="mtext">Rangkuman Nilai</span>
          </a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</div>
{{-- <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('admin/assets/img/logo.jpeg') }}" width="130" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            @if(auth()->user()->role == 'admin')
            <li class="nav-item">
              <a class="nav-link active" href="/dashboard">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="!#">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/siswa">
                <i class="ni ni-single-02 text-green"></i>
                <span class="nav-link-text">Data Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/guru">
                <i class="ni ni-single-02 text-lightgrey"></i>
                <span class="nav-link-text">Guru</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/mapel">
                <i class="ni ni-map-big text-red"></i>
                <span class="nav-link-text">Mata Pelajaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/siakad">
                <i class="ni ni-ruler-pencil text-green"></i>
                <span class="nav-link-text">Rangkuman Nilai</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">
                <i class="ni ni-user-run text-black"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
            @endif
            @if(auth()->user()->role == 'siswa')
            <li class="nav-item">
              <a class="nav-link active" href="/dashboard">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profileSiswa">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/rangkuman">
                <i class="ni ni-ruler-pencil text-red"></i>
                <span class="nav-link-text">Rangkuman Nilai</span>
              </a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </nav> --}}