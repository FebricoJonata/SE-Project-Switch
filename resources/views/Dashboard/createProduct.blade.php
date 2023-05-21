@extends('/Dashboard/dashboard')

@section('tittle', 'Create Product')

@section('content')
        <div class="container ">
                <form action="/dashboard/insert" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="col-8">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="col-8">
                        <label for="Harga" class="form-label">Harga Barang</label>
                        <input type="text" class="form-control" name="harga">
                    </div>
                    <div class="col-8">
                        <label for="nama" class="form-label">Jumlah Barang</label>
                        <input type="number" class="form-control" name="jumlah">
                    </div>
                    <div class="mb-3 col-8">
                        <label for="formFile" class="form-label">Foto Barang</label>
                        <input class="form-control" type="file" id="formFile" name="foto">
                    </div>
                    <button class="btn btn-primary" type="submit">submit</button>
                </form>
        </div>

@endsection