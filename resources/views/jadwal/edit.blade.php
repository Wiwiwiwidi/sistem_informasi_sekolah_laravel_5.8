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
<div class="table-responsive">
<div class="container">
  <div class="card mt-2">
    <div class="card-body">
      <form action="{{ route('jadwal.update', $jadwal->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="hari">HARI</label>
            <input type="text" name="hari" class="form-control"  value="{{ $jadwal->hari}}"required>
        </div>   

        <div class="form-group">
            <label for="dari_jam">DARI JAM</label>
            <input type="time" name="dari_jam" class="form-control" value="{{ $jadwal->dari_jam}}" required>
        </div>   
        
        <div class="form-group">
            <label for="sampai_jam">SAMPAI JAM</label>
            <input type="time" name="sampai_jam" class="form-control"  value="{{ $jadwal->sampai_jam}}"required>
        </div>   
        
        <div class="form-group">
            <label for="ruang">RUANG</label>
            <input type="text" name="ruang" class="form-control"  value="{{ $jadwal->ruang}}" required>
        </div>   

        <div class="form-group">
              <label for="mapel_id">MAPEL</label>
              <select class="form-control" name="mapel_id" >
                  <option value=""></option>
                  @foreach( $mapel as $mp )
                    <option value="{{ $mp->id}}" @if ($jadwal->mapel_id==$mp->id) selected @endif>{{ $mp->nama_mapel}}</option>
                  @endforeach
          </select>
              <p class="text-danger">{{ $errors->first('mapel_id') }}</p>
        </div>

        <div class="form-group">
              <label for="kelas_id">KELAS</label>
              <select class="form-control" name="kelas_id">
                  <option value=""></option>
                  @foreach( $kelas as $k )
                    <option value="{{ $k->id}}" @if ($jadwal->kelas_id==$k->id) selected @endif>{{ $k->nama_kelas}}</option>
                  @endforeach
          </select>
              <p class="text-danger">{{ $errors->first('kelas_id') }}</p>
        </div>

        <div class="form-group">
              <label for="guru_id">GURU</label>
              <select class="form-control" name="guru_id">
                  <option value=""></option>
                  @foreach( $guru as $g )
                    <option value="{{ $g->id}}" @if ($jadwal->guru_id==$g->id) selected @endif>{{ $g->nama_guru}}</option>
                  @endforeach
          </select>
              <p class="text-danger">{{ $errors->first('guru_id') }}</p>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Tambah</button>
            <a class="btn btn-primary" href="{{ route('jadwal.index') }}">Kembali</a>
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








