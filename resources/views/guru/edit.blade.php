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
    <div class="table-responsive">
      <form action="{{ route('guru.update', $guru->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control"value="{{ $guru->nip}}" required>
            <p class="text-danger">{{ $errors->first('nip') }}</p>
        </div>

        <div class="form-group">
            <label for="nama_guru">NAMA GURU</label>
            <input type="text" name="nama_guru" class="form-control" value="{{ $guru->nama_guru}}" required>
            <p class="text-danger">{{ $errors->first('nama_guru') }}</p>

        </div>   
        
        <div class="form-group">
            <label for="jenkel">JENIS KELAMIN</label>
            <input type="radio" name="jenkel" value="laki-laki" class="form-control" value="laki-laki" {{ $guru->jenkel == 'laki-laki' ? 'checked' : '' }}>Laki-Laki
            <input type="radio" name="jenkel" value="perempuan" class="form-control"value="laki-laki" {{ $guru->jenkel == 'perempuan' ? 'checked' : '' }}>Perempuan
            <p class="text-danger">{{ $errors->first('jenkel') }}</p>
        </div>   

        <div class="form-group">
            <label for="telp">NO TELEPON</label>
            <input type="text" name="telp" class="form-control" value="{{ $guru->telp}}"required>
            <p class="text-danger">{{ $errors->first('telp') }}</p>
        </div>   
        
        <div class="form-group">
            <label for="alamat">ALAMAT</label>
            <textarea name="alamat" class="form-control"value="{{ $guru->alamat}}" required></textarea>
            <p class="text-danger">{{ $errors->first('alamat') }}</p>
        </div>
       
        <div class="form-group">
            <label for="foto">FOTO</label>
            <input type="file" name="foto" class="form-control" value="{{ $guru->foto}}"required>
            <p class="text-danger">{{ $errors->first('foto') }}</p>
        </div>

        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="text" name="email" class="form-control" value="{{ $guru->email}}"required>
            <p class="text-danger">{{ $errors->first('email') }}</p>
        </div>   
        <div class="form-group">
            <button class="btn btn-warning btn-sm">UBAH</button>
            <a class="btn btn-danger btn-sm" href="{{ route('guru.index') }}"> Kembali</a>
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








