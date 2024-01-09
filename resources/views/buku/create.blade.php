<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <body>
    <div class="container mt-4">
        <a href="{{url('buku')}}" class="btn btn-secondary">Kembali</a>
        <h1 class="text-center">Formulir Data Buku</h1>

        @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>  
                    @endforeach
            </ul>
            </div>
        </div>
            
        @endif
        <form action='{{url('buku')}}' method='POST'>
            @csrf 
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">ID Buku</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun" class="form-control">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">ISBN</label>
                <input type="text" name="isbn" class="form-control">
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>