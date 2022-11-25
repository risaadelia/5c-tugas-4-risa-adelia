<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Praktikum 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2 class="mt-5">Daftar Mata Kuliah</h2>
        <div class="content">
            <div class="row">
                @foreach ($matkul as $mk)
                <div class="col-sm-6 mb-3">
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5 class="card-title">{{ $mk->nama_mk }} (<span style="color: red">{{ $mk->kode_mk }}</span>)</h5>
                            </div>
                            <div class="col-sm-2 d-flex justify-content-end">
                                <p>{{ $mk->sks }} SKS</p>
                            </div>
                        </div>
                      <p class="card-text">{{ $mk->nama_dosen }}</p>
                    </div>
                  </div>
                </div>
                @endforeach
                <div class="col-sm-6 mb-3">
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5 class="card-title">{{ $mk->nama_mk }} (<span style="color: red">{{ $mk->kode_mk }}</span>)</h5>
                            </div>
                            <div class="col-sm-2 d-flex justify-content-end">
                                <p>3 SKS</p>
                            </div>
                        </div>
                      <p class="card-text">{{ $mk->nama_dosen }}</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
