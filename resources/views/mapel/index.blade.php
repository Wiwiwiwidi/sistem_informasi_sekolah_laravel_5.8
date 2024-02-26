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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">MAPEL</h6>
              </div>
            </div>
            <div class="content">
    <div class="card card-info card-out-line">
      <div class="card-header">
        <div class="card-tools">
                <table class="table align-items-center mb-0">
            <a href="{{ route('mapel.create') }}"class="btn btn-success">TAMBAH MAPEL</a>
    </div>
  </div>
  <div class="card-body">
      <table class="table table-bordered table-hover table-striped" id="table-data">
        <thead>
        <tr>
          <th>NO</th>
          <th>NAMA MAPEL</th>
          <th>Aksi</th>
      </tr>
      </thead>
          <tbody>
          @foreach ($mapel as $i => $v)
          <tr>
          <td>{{$i+1}}</td>
          <td>{{$v->nama_mapel}}</td> 
      <td>
          <form action="{{ route('mapel.destroy', $v->id) }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <a href="{{ route('mapel.edit', $v->id) }}" class="btn btn-warning btn-sm">EDIT</a>
          <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">HAPUS</button>
      </form>
    </td>
  </tr>
      @endforeach
  </tbody>
    </table>
    </tr>
  </div>
  </div>
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


