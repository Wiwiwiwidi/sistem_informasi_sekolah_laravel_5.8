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
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('tampilan.navbar')
<div class="table-responsive">
<div class="container">
  <div class="card mt-2">
    <div class="card-body">
      <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="nis">NIP</label>
            <input type="text" name="nis" class="form-control" value="{{ $siswa->nis}}" required>
            <p class="text-danger">{{ $errors->first('nis') }}</p>
        </div>

        <div class="form-group">
            <label for="nama_siswa">NAMA siswa</label>
            <input type="text" name="nama_siswa" class="form-control" value="{{ $siswa->nama_siswa}}" required>
            <p class="text-danger">{{ $errors->first('nama_siswa') }}</p>

        </div>     

        <div class="form-group">
              <label for="kelas_id">KELAS</label>
              <select class="form-control" name="kelas_id">
                  <option value="">pilih Kelas</option>
                  @foreach( $kelas as $k )
                  <option value="{{ $k->id}}" @if ($siswa->kelas_id==$k->id) selected @endif>{{ $k->nama_kelas}}</option>
                  @endforeach
              </select>
              <p class="text-danger">{{ $errors->first('kelas_id') }}</p>
        </div>

        <div class="form-group">
            <label for="jenkel">JENIS KELAMIN</label>
            <input type="radio" name="jenkel" value="laki-laki" class="form-control" value="laki-laki" {{ $siswa->jenkel == 'laki-laki' ? 'checked' : '' }}>Laki-Laki
            <input type="radio" name="jenkel" value="perempuan" class="form-control"value="laki-laki" {{ $siswa->jenkel == 'perempuan' ? 'checked' : '' }}>Perempuan
            <p class="text-danger">{{ $errors->first('jenkel') }}</p>
        </div>   

        <div class="form-group">
            <label for="agama">AGAMA</label>
            <select class="form-select" name="agama" value="{{ $siswa->agama}}" aria-label="Default select example">
            <option selected>-Pilih-</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Protestan">Protestan</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
          <p class="text-danger">{{ $errors->first('agama') }}</p>
        </div>   

        <div class="form-group">
            <label for="telp">telp</label>
            <input type="text"  name="telp" class="form-control" value="{{ $siswa->telp}}" required>
            <p class="text-danger">{{ $errors->first('telp') }}</p>
        </div>
        
        <div class="form-group">
            <label for="tmp_lahir">TEMPAT LAHIR</label>
            <input type="text" name="tmp_lahir" class="form-control" value="{{ $siswa->tmp_lahir}}"  required>
            <p class="text-danger">{{ $errors->first('tmp_lahir') }}</p>

          </div>   
        
        <div class="form-group">
            <label for="tgl_lahir">TANGGAL LAHIR</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ $siswa->tgl_lahir}}"  required>
            <p class="text-danger">{{ $errors->first('tgl_lahir') }}</p>
          </div>   
        
        <div class="form-group">
            <label for="alamat">ALAMAT</label>
            <textarea name="alamat" class="form-control" value="{{ $siswa->alamat}}" required></textarea>
            <p class="text-danger">{{ $errors->first('alamat') }}</p>
          </div>
       
        <div class="form-group">
            <label for="foto">FOTO</label>
            <input type="file" name="foto" class="form-control" value="{{ $siswa->foto}}"  required>
            <p class="text-danger">{{ $errors->first('foto') }}</p>
          </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control" value="{{ $siswa->email}}"  required>
            <p class="text-danger">{{ $errors->first('email') }}</p>
          </div>

        <div class="form-group">
            <button class="btn btn-warning btn-sm">UBAH</button>
            <a class="btn btn-danger btn-sm" href="{{ route('siswa.index') }}"> Kembali</a>
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








