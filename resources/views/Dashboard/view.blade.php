@extends('/Dashboard/dashboard')

@section('tittle', 'view')

@section('content')

<h2>Product List</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Product</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$barang->nama}}</td>
                    <td>{{$barang->harga}}</td>
                    <td>{{ $barang->jumlah }}</td>
                    <td>
                        <a href="/dashboard/{{ $barang->id }}/edit" class="btn bg-warning"><i class="bi bi-pencil"></i></span></a>
                        <form action="/dashboard/{{ $barang->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn bg-danger border-0" onclick="return confirm('Are you sure to delete?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>  
                @endforeach
            </tbody>
            </table>
        </div>
        </main>
    </div>
    </div>
@endsection