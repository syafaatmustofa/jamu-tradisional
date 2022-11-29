<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 align="center">Rekomendasi Jamu</h3>
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Keluhan</label>
                        <input type="text" class="form-control" name="keluhan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Lahir</label>
                        <input type="number" class="form-control" name="tahunLahir">
                    </div>
                    <button type="submit" class="btn btn-primary">Klik</button>
                </form>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nama Jamu</th>
                            <th scope="col">Khasiat</th>
                            <th scope="col">Keluhan</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Saran Penggunaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @isset($data)
                            <td>{{ $data['namajamu']}}</td>
                            <td>{{ $data['khasiat']}}</td>
                            <td>{{ $data['keluhan']}}</td>
                            <td>{{ $data['umur']}}</td>
                            <td>{{ $data['saranpenggunaan']}}</td>
                            @endisset
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

