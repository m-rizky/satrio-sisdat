<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>

    <div class="container d-flex m-auto">
        <div class="row m-auto">
            <div class="col-md-12 m-auto">
                <div class="card p-4 vh-50" style="margin-top: 50%">
                    <h3 class="text-center">Edit data barang</h3>
                    <div class="card-body">
                        <form action="/barang/{{ $barang->id }}" class="form-input" method="post">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama barang</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
                                    value="{{ $barang->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jumlah barang</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="jumlah"
                                    value="{{ $barang->jumlah }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Harga barang</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="harga"
                                    value="{{ $barang->harga }}">
                            </div>
                            <button class="btn btn-primary btn-md" type="submit">Simpan</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
