<div class="header">
  <div class="header-left">
  </div>
  <div class="header-right">
    <div class="user-info-dropdown">
      <div class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
          <span class="user-icon">
            <img src="{{ asset('admin/vendors/images/photo6.jpg') }}" alt="">
          </span>
          <span class="user-name">{{ auth()->user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
          <a class="dropdown-item" href="/logout"><i class="dw dw-logout"></i> Log Out</a>
        </div>
      </div>
    </div>
    <div class="github-link">
      <a href="https://github.com/dropways/deskapp" target="_blank"><img src="" alt=""></a>
    </div>
  </div>
</div>