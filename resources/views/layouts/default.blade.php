
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    {{-- Add a section for content --}}
    <div class="container">
        @include('components.navbar') 
        <div id="main" class="row">
            @yield('content') <!-- Yield content here -->
        </div>
        {{-- <footer class="row">
            @include('includes.footer')
        </footer>
    </div> --}}
</body>
</html>
