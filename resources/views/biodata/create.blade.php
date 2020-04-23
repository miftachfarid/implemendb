@extends("layout")

@section("content")
    <form action="{{ route('biodata.store') }}" method="POST" class="form-horizontal"
        enctype="multipart/form-data">
        
        @csrf
        
        <div class="form-group">
            <label class="control-label">Nama</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label class="control-label">NIM</label>
            <input type="text" class="form-control" name="nim">
        </div>
        <div class="form-group">
            <label class="control-label">Alamat</label>
            <textarea name="address" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label class="control-label">Foto</label>
            <input type="file" name="photo">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="{{ route('biodata.index') }}" class="btn btn-danger">
                Batal
            </a>
        </div>
    </form>
@endsection