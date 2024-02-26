<form action="{{ route('mapel.store') }}" method="post"  autocomplate="off">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama_mapel">NAMA MAPEL</label>
            <input type="text" name="nama_mapel" class="form-control" required>
        </div>   
        <div class="form-group">
            <button class="btn btn-success">Tambah</button>
            <a class="btn btn-primary" href="{{ route('mapel.index') }}">Kembali</a>
        </div>
    </form>