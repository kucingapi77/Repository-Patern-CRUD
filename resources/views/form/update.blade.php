<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK BOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index">BELAJAR LARAVEL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Input</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
      <form action="{{ url('tampil/update/'.$result[0]['id']) }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="buku" class="form-label">JUDUL VIDEO</label>
        <input type="text" name="title" id="buku" placeholder="Roasting sesuka hati" class="form-control" value="{{ $result[0]['title'] }}">
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="form-label">DESKRIPSI</label>
        <textarea class="form-control" name="description" id="deskripsi" placeholder="isi buku tersebut" rows="3">{{ $result[0]['description'] }}</textarea>
      </div>
      
      <input type="submit" value="Tambah" class="btn btn-warning">
      <a href="/index" class="btn btn-primary">KEMBALI</a>
    </form>
    <!--LINK BOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>












{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>KOMENAN BUKU TERBARU</h1>
    <form action="/store" method="get">
        @csrf
        <label for="buku">NAMA BUKU : </label>
        <input type="text" name="title" id="buku" placeholder="isi buku tersebut">
        <br>
        <label for="deskripsi">DESKRIPSI BUKU : </label>
        <input type="text" name="description" id="deskripsi" placeholder="isi buku tersebut">
        <br>
        <input type="submit" value="Tambah">
    </form>

    
</body>
</html> --}}



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <form action="/update">
        <label for="buku">NAMA BUKU :</label>
        <input type="text" name="title" id="" placeholder="isi judul buku">
        <br>
        <label for="description">DESKRIPSI BUKU :</label>
        <input type="text" name="description" id="description" placeholder="isi judul buku">

        <input type="submit" value="edit">
    </form>
</body>
</html> --}}