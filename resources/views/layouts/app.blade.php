<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>
    Argon Ecom
  </title>
  @include('libraries.styles')
</head>
<body class="g-sidenav-show   bg-gray-100">
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  {{-- Sidenav bar --}}
  @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">

    {{-- navbar --}}
    @include('components.navbar')

    <div class="container-fluid py-4">
        {{ $header ?? "" }}
        {{ $content ?? "" }}

      {{-- footer --}}
      @include('components.footer')
    </div>
  </main>
  @include('libraries.scripts')
</body>
</html>
