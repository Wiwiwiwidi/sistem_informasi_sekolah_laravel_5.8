<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          SiSFO 
          <img src="{{asset('Gambar/Logo_SMKI_Utama1.jpg')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/dashboard">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kelas">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Kelas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/siswa">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/guru">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Guru</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mapel">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Mapel</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/jadwal">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Jadwal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profile">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}" onclick="return confirm('Yakin ingin Keluar?')" class="nav-link">

                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>