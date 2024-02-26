<!DOCTYPE html>
<html>
@include('tampilan.head')



<body>
  <!-- Sidenav -->
  @include('tampilan.sidebar')

          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('tampilan.navbar')
    <div class="table-responsive">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-16">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">JADWAL</h6>
              </div>
            </div>
    <div class="container">
        <div class="card mt-2">
          <div class="card-body">
                <table class="table align-items-center mb-0">
        </div>
    </div>
    <form action="{{ route('jadwal.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="hari">HARI</label>
            <input type="text" name="hari" class="form-control" required>
        </div>   

        <div class="form-group">
            <label for="dari_jam">DARI JAM</label>
            <input type="time" name="dari_jam" class="form-control" required>
        </div>   
        
        <div class="form-group">
            <label for="sampai_jam">SAMPAI JAM</label>
            <input type="time" name="sampai_jam" class="form-control" required>
        </div>   
        
        <div class="form-group">
            <label for="ruang">RUANG</label>
            <input type="text" name="ruang" class="form-control" required>
        </div>   

        <div class="form-group">
              <label for="mapel_id">MAPEL</label>
              <select class="form-control" name="mapel_id">
                  <option value=""></option>
                  @foreach( $mapel as $mp )
                    <option value="{{ $mp->id}}">{{ $mp->nama_mapel}}
                  @endforeach
          </select>
              <p class="text-danger">{{ $errors->first('mapel_id') }}</p>
        </div>

        <div class="form-group">
              <label for="kelas_id">KELAS</label>
              <select class="form-control" name="kelas_id">
                  <option value=""></option>
                  @foreach( $kelas as $k )
                    <option value="{{ $k->id}}">{{ $k->nama_kelas}}
                  @endforeach
          </select>
              <p class="text-danger">{{ $errors->first('kelas_id') }}</p>
        </div>

        <div class="form-group">
              <label for="guru_id">GURU</label>
              <select class="form-control" name="guru_id">
                  <option value=""></option>
                  @foreach( $guru as $g )
                    <option value="{{ $g->id}}">{{ $g->nama_guru}}
                  @endforeach
          </select>
              <p class="text-danger">{{ $errors->first('guru_id') }}</p>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Tambah</button>
            <a class="btn btn-primary" href="{{ route('jadwal.index') }}">Kembali</a>
        </div>
    </form>
    <!-- Header -->
    <!-- Header -->
    
          <!-- Card stats -->
          
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
               
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
               
                   
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
   
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
              </div>
            </div>
          </div>
        </div>
        
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
              </div>
            </div>
          </div>
        </div>
      </div>
     
            <div class="table-responsive">
              <!-- Projects table -->
             
            </div>
          </div>
        </div>
        
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
             
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      @include('tampilan.footer')

    </div>
  </div>
  @include('tampilan.script')

</body>

</html>






