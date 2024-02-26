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
            <span class="docs-normal"></span>
          </h6>
          <!-- Navigation -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('tampilan.navbar')
    <!-- <div class="table-responsive">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-16">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">KELAS</h6>
              </div>
            </div>
    <div class="container">
        <div class="card mt-2">
          <div class="card-body">
                <table class="table align-items-center mb-0">
        </div>
    </div> -->
    <div class="container">
    <div class="card">
        <div class="card-header">
    <form action="{{ route('guru.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama_guru">NAMA GURU</label>
            <input type="text" name="nama_guru" class="form-control" required>
        </div>   
        
        <div class="form-group">
            <label for="jenkel">JENIS KELAMIN</label>
            <input type="radio" name="jenkel" value="laki-laki" class="form-control" required>Laki-Laki
            <input type="radio" name="jenkel" value="perempuan" class="form-control" required>Perempuan
        </div>   


        <div class="form-group">
            <label for="telp">NO TELEPON</label>
            <input type="text" name="telp" class="form-control" required>
        </div>   
        
        <div class="form-group">
            <label for="alamat">ALAMAT</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
       
        <div class="form-group">
            <label for="foto">FOTO</label>
            <input type="file" name="foto" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="text" name="email" class="form-control" required>
        </div>   
        
        <div class="form-group">
            <button class="btn btn-success">Tambah</button>
            <a class="btn btn-primary" href="{{ route('guru.index') }}">Kembali</a>
        </div>
    </form>
</div>
</div>
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






