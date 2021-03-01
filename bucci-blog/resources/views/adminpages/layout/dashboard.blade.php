<!DOCTYPE html>
<html>

@include('adminpages.partials.header')
<body id="page-top">
@include('adminpages.partials.navbar')
   @yield('content')

   @include('adminpages.partials.script')
</body>

</html>
