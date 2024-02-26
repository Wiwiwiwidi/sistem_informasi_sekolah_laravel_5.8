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
    <div class="content">
      <div class="card card-info card-out-line">
      <div class="card-header">
        <div class="card-tools">
        <a href="{{ route('jadwal.create') }}"class="btn btn-success">TAMBAH jadwal</a>
        </div>
    </div>
  <div class="card-body">
  <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped" id="table-data">
        <thead>
        <tr>
          <th>NO</th>
          <th>HARI</th>
          <th>MATA PELAJARAN</th>
          <th>DARI JAM</th>
          <th>SAMPAI JAM</th>
          <th>KELAS</th>
          <th>RUANG</th>
          <th>GURU</th>
          <th>Aksi</th>
      </tr>
      </thead>
          <tbody>
          @foreach ($jadwal as $i => $v)
          <tr>
          <td>{{$i+1}}</td>
          <td>{{$v->hari}}</td>
          <td>{{$v->mapel->nama_mapel}}</td>
          <td>{{$v->dari_jam}}</td>
          <td>{{$v->sampai_jam}}</td>
          <td>{{$v->kelas->nama_kelas}}</td>
          <td>{{$v->ruang}}</td>
          <td>{{$v->guru->nama_guru}}</td>
      <td>
          <form action="{{ route('jadwal.destroy', $v->id) }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <a href="{{ route('jadwal.edit', $v->id) }}" class="btn btn-warning btn-sm">EDIT</a>
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







