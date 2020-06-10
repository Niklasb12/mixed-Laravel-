<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> M|XED </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="Nav">
        <a class="Nav_Link" href="/"> HOME </a>
        <a class="Nav_Link" href="/menu"> MENU </a>
        <a class="Nav_Link" href="/reviews"> REVIEWS </a>
        @guest
        <a class="Nav_Link" href="/login"> LOGIN </a>
        @else
        <a class="Nav_Link" href="/reservations"> RESERVATIONS </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="Nav_Link Btn_Logout" type="submit"> LOGOUT </button>
        </form>   
        @endguest
    </nav>
    <main class="Main">
        @yield('content')
    </main>
    <footer class="Footer"> 
        <div class="Footer_Contact">
            <h1 class="Footer_Contact-Headline"> CONTACT </h>
            <p class="Footer_Contact-Paragraph"> Engelbrektsplan 1 <br> 114 34 Stockholm </p>
            <p class="Footer_Contact-Paragraph"> Tel: 072 389 38 51 <br> Email: mixed@hotmail.com </p>
        </div>
        <div class="Footer_Copy">
            <a href="/"><h1 class="Footer_Copy-Headline"> M | X E D</h1></a>
            <p class="Footer_Copy-Paragraph">© MIXED 2020. ALL RIGHTS RESERVED</p> 
        </div>
        <div class="Footer_Follow">
            <h1 class="Footer_Contact-Headline"> FOLLOW </h>
            <p class="Footer_Contact-Paragraph"> Instagram <br> Facebook <br> Twitter </p>  
        </div>
    </footer>
</body>
</html>