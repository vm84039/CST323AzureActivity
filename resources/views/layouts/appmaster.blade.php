<!DOCTYPE html>
<html>
    <head>
       @include('includes.head')
        <title>Activity</title>
    </head>
<body min-height="100vh" style="position: relative;">
    <header>
       @include('includes.header')
    </header>
    <main style="margin-top:100px; padding-bottom: 5rem;min-height:800px" >
            @yield('content')
    </main>
       <footer class="page-footer dark">
           @include('includes.footer')
       </footer>
</body>
</html>

