
<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Users Dashboard</title>
    <link href="{{asset('build/assets/app-CoDpR7nl.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('build/assets/dashboard.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Laravel Ecommerce</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Ara" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Çıkış</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active text-black" href="#">
                            <span data-feather="home"></span>
                            Yönetim Paneli <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="/users">
                            <span data-feather="file"></span>
                            Kullanıcılar
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Yönetim Paneli</h1>

            </div>

            <h2 class="h3 d-flex justify-content-between align-items-center">Kullanıcılar
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="/users/create" class="btn btn-sm btn-outline-danger">Yeni Ekle</a>
                </div>
            </div>
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Sıra No</th>
                        <th>Ad Soyad</th>
                        <th>Eposta</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->is_active}}</td>
                                <td>
                                <ul class="nav float-start">
                                    <li class="nav-item">
                                        <a class="nav-link text-black" href="{{url("users/$user->user_id/edit")}}">
                                            <span data-feather="edit"></span>
                                            Güncelle
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav float-start">
                                    <li class="nav-item">
                                        <a class="nav-link text-black" href="{{url("users/$user->user_id")}}">
                                            <span data-feather="trash-2"></span>
                                            Sil
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav float-start">
                                    <li class="nav-item">
                                        <a class="nav-link text-black" href="/users">
                                            <span data-feather="lock"></span>
                                            Şifre Değiştir
                                        </a>
                                    </li>
                                </ul>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <p class="text-center">Herhangi bir kullanici bulunamadi</p>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="{{asset('build/assets/app-BwLHW01L.js')}}"></script>
<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

</body>
</html>
