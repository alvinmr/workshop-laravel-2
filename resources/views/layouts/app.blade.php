<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <title>@yield('title')</title>
  </head>
  <div class="container mt-5">
    <div class="text-center">
      <h1 class="judul">BaksoMu</h1>
      <h2 class="cari-makan">Sudah makan bakso hari ini ?</h2>
      <h4 class="caption-cari-makan">Cari makanan mu yuk, silahkan dipilih</h4>
    </div>
    <div class="mt-5">
      <x-search></x-search>
    </div>
    <div class=" d-flex row">
      <div class="d-flex justify-content-center">
        <a class="p-5 link-kategori {{ request()->is('/') ? "aktip" : '' }}" href="{{ url('/') }}">Semua</a>
        @foreach ($categories as $category)
        <a class="p-5 link-kategori {{ request()->is('category/'.$category->id) ? "aktip" : '' }}"
          href="{{ url('/category/'.$category->id) }}">{{ $category->name }}</a>
        @endforeach
      </div>
    </div>
    @yield('content')
    <div class="mt-5 text-center">
      <p>Ini Bakso Copyright 2021</p>
    </div>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  @method('scripts')
  </body>

</html>

<style>
  .judul {
    font-size: 64px;
    margin-bottom: 3rem;
  }

  .link-kategori {
    font-family: 'Poppins';
    font-weight: bold;
    text-decoration: none;
    color: black;
    font-size: 26px;
  }

  .link-kategori:hover {
    color: #FFB800;
  }

  .aktip {
    color: #FFB800 !important;
  }

  .cari-makan {
    font-family: 'Poppins';
    font-weight: bold;
    font-size: 32px;
  }

  .caption-cari-makan {
    font-family: 'Poppins';
    font-weight: normal;
    font-size: 20px;
  }
</style>