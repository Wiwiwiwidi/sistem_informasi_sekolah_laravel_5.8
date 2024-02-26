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
    <div class="card card-dark card-out-line">
      <div class="card-header">
        <div class="card-tools">
        <a href="{{ route('siswa.create') }}"class="btn btn-success">TAMBAH SISWA</a>
        </div>
    </div>
  <div class="card-body">
  <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped" id="table-data">
        <thead>
        <tr>
          <th>NO</th>
          <th>NIS</th>
          <th>NAMA SISWA</th>
          <th>KELAS</th>
          <th>JENIS KELAMIN</th>
          <th>AGAMA</th>
          <th>NO TELEPON</th>
          <th>TEMPAT LAHIR</th>
          <th>TANGGAL LAHIR</th>
          <th>ALAMAT</th>
          <th>FOTO</th>
          <th>EMAIL</th>
          <th>Aksi</th>
      </tr>
      </thead>
          <tbody>
          @foreach ($siswa as $i => $v)
          <tr>
          <td>{{$i+1}}</td>
          <td>{{$v->nis}}</td>
          <td>{{$v->nama_siswa}}</td>
          <td>{{$v->kelas->nama_kelas}}</td>
          <td>{{$v->jenkel}}</td>
          <td>{{$v->agama}}</td>
          <td>{{$v->telp}}</td>
          <td>{{$v->tmp_lahir}}</td>
          <td>{{$v->tgl_lahir}}</td>
          <td>{{$v->alamat}}</td>
          <td><img width="100px"src="{{ asset('Gambar/'. $v->foto ) }}"  ></td>
          <td>{{$v->email}}</td>
      <td>
          <form action="{{ route('siswa.destroy', $v->id) }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <a href="{{ route('siswa.edit', $v->id) }}" class="btn btn-warning btn-sm">EDIT</a>
          <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">HAPUS</button>
      </form>
    </td>
  </tr>
      @endforeach
  </tbody>
    </table>
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





