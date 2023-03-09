<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel #20 : Eloquent Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Data Pegawai</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <section>
            <div>
                {{-- <table class="data">
                    <ul style="border: 2px">
                        @foreach ($pegawai as $p)
                            <li>{{ 'Nama : ' . $p->nama . ' | Alamat : ' . $p->alamat }}</li>
                        @endforeach
                    </ul>
                </table> --}}

                <table class="data">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                    @foreach ($pegawai as $p)
                        <tr>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->alamat}}</td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
