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
<div class="container">
  <div class="card mt-2">
    <div class="card-body">
      <form action="{{ route('kelas.update', $kelas->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="nama_kelas">nama_kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas}}" required>
            <p class="text-danger">{{ $errors->first('nama_kelas') }}</p>
        </div>

        <div class="form-group">
            <label for="tingkat_kelas">Tingkat Kelas</label>
            <input type="text" name="tingkat_kelas" class="form-control" value="{{ $kelas->tingkat_kelas}}" required>
            <p class="text-danger">{{ $errors->first('tingkat_kelas') }}</p>

        </div>   
        
        <div class="form-group">
            <label for="jurusan">JURUSAN</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $kelas->jurusan}}"required>
            <p class="text-danger">{{ $errors->first('jurusan') }}</p>
        </div>   
        
        <div class="form-group">
            <label for="jumlah_siswa">jumlah siswa</label>
            <input type="text" name="jumlah_siswa" class="form-control" value="{{ $kelas->jumlah_siswa}}" required></textarea>
            <p class="text-danger">{{ $errors->first('jumlah_siswa') }}</p>
        </div>
       
        <div class="form-group">
        <label for="guru_id">guru </label>
            <select class="form-control" name="guru_id">
                <option value="">--pilih guru--</option>
                @foreach( $guru as $g )
                <option value="{{ $g->id}}" @if ($kelas->guru_id==$g->id) selected @endif>{{ $g->nama_guru}}</option>
                @endforeach
                </select>
            <p class="text-danger">{{ $errors->first('guru_id') }}</p>
        </div>

         
        <div class="form-group">
            <button class="btn btn-warning btn-sm">UBAH</button>
            <a class="btn btn-danger btn-sm" href="{{ route('kelas.index') }}"> Kembali</a>
        </div>
      </form>
  </div>
</div>
</div>
</br>
</div>
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








