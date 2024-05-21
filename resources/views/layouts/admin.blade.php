<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- FONTAWESOME -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css'
    integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ=='
    crossorigin='anonymous' />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
  {{-- @include('admin.partials.header') --}}
  <main>
    <!-- DP-CONTAINER CON SIDEBAR -->
    <div class="dp-container debug d-flex ">

      {{-- SIDEBAR --}}
      @include('admin.partials.sidebar')
      {{-- //SIDEBAR --}}

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <!-- content header -->
        @include('admin.partials.content-header')
        <!-- /content header -->


        <!-- CONTENT BODY -->
        <div class="content-body">

          <div class="row  debug">

            @include('admin.partials.content-body-left')

          </div>
          <!-- chiusura row -->

        </div>
        <!-- /CONTENT BODY -->

      </div>
      <!-- /MAIN CONTENT -->

    </div>
    <!-- /DP-CONTAINER CON SIDEBAR -->
  </main>

  @yield('content')
</body>

</html>
