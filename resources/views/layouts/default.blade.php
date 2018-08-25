<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Sample App')</title>
  <link rel="stylesheet" href="{{ url('/css/app.css')}}">
</head>
<body>
	@include('layouts._header')
  	<div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('common._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>

    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>