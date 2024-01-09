<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <body>
    @if (Session::has('success'))
    <div class="pt-3">
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    </div>
        
    @endif
    <div class="container">
        <h1 class="text-center">Data Buku</h1>
        <div class="card">
            <div class="card-body">
            <a href="{{url('buku/create')}}" class="btn btn-primary">+ Tambah Data</a>
                <table class="table">
                    <tr>
                        <td>NO</td>
                        <td>Judul</td>
                        <td>Penulis</td>
                        <td>Tahun</td>
                        <td>ISBN</td>
                        <td>Aksi</td>
                    </tr>
                    <tbody>
                        <?php $no = $data->firstItem()?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->penulis}}</td>
                            <td>{{$item->tahun}}</td>
                            <td>{{$item->isbn}}</td>
                            <td>
                                <a href="{{url('buku/'.$item->id.'/edit')}}" class="btn btn-Warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('yakin akan menghapus data?')" class="d-inline" action="{{url('buku/'.$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php $no++ ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>