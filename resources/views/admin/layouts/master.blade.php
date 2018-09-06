<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Welcome')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
@section('scripts')
    <script type="text/javascript">
        alert('footer script is loaded!');
    </script>
@show
</body>
</html>