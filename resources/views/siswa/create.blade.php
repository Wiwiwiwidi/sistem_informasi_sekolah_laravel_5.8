<!DOCTYPE html>
<html>
@include('tampilan.head')



<body>
  <!-- Sidenav -->
  @include('tampilan.sidebar')

          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <!-- Navigation -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('tampilan.navbar')
    <div class="content">
      <div class="card card-info card-out-line">
      <div class="card-header">
        <div class="card-tools">
        <div class="card-body">
    <div class="table-responsive">
    <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="nis" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama_siswa">NAMA SISWA</label>
            <input type="text" name="nama_siswa" class="form-control" required>
        </div>   
        
        <div class="form-group">
              <label for="kelas_id">KELAS</label>
              <select class="form-control" name="kelas_id">
                  <option value="">pilih kelas</option>
                  @foreach( $kelas as $k )
                    <option value="{{ $k->id}}">{{ $k->nama_kelas}}
                  @endforeach
          </select>
              <p class="text-danger">{{ $errors->first('kelas_id') }}</p>
        </div>

        <div class="form-group">
            <label for="jenkel">JENIS KELAMIN</label>
            <input type="radio" name="jenkel" value="laki-laki" class="form-control" required>Laki-Laki
            <input type="radio" name="jenkel" value="perempuan" class="form-control" required>Perempuan
        </div>   

        <div class="form-group">
            <label for="agama">AGAMA</label>
            <select class="form-select" name="agama" aria-label="Default select example">
            <option selected>-Pilih-</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Protestan">Protestan</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </div>   

        <div class="form-group">
            <label for="telp">NO TELEPON</label>
            <input type="text" name="telp" class="form-control" required>
        </div>   
        
        <div class="form-group">
            <label for="tmp_lahir">TEMPAT LAHIR</label>
            <input type="text" name="tmp_lahir" class="form-control" required>
        </div>   
        
        <div class="form-group">
            <label for="tgl_lahir">TANGGAL LAHIR</label>
            <input type="date" name="tgl_lahir" class="form-control" required>
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
            <label for="email">email</label>
            <input type="text" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Tambah</button>
            <a class="btn btn-primary" href="{{ route('siswa.index') }}">Kembali</a>
        </div>
    </form>
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









