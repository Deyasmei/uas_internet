<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <body>
    <div class="container">
        <h1 class="text-center">Formulir Data Buku</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">ID Buku</label>
                <input type="text" name="id" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">ISBN</label>
                <input type="text" name="isbn" class="form-control" placeholder="Disabled input">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>