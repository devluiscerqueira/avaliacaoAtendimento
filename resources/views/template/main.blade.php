<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>
<body>
    <div class="full-height"> <!-- 001 - Visando footer no final da página -->

    @include('template/nav')
    @yield('content')
    @include('template/footer')

    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>

    </div> <!-- 001 -->
</body>
</html>
