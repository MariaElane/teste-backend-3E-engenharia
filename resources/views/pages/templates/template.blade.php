<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{url('assets/materialize/css/materialize.min.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{url('assets/css/style.css')}}" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<header>
        <nav class=" yellow darken-4">
            <div class="nav-wrapper">
                <a  class="brand-logo center">Gerenciador</a>
                <ul id="nav-mobile" class="right">
                    <li>
                        <a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    
</header>

<main>
    <body>
        <ul id="slide-out"  class="sidenav sidenav-fixed estilo-side-nav">
            <li>
                <div class="user-view">
                    <a href="{{url('/')}}"><img class="responsive-img logo-side-nav" src="{{url('assets/img/logo.png')}}" alt="logo"></a>
                </div>
            </li>


            <li>
                <a href="{{route('categories.index')}}">
                    <i class="s-icon material-icons">ballot</i>
                    <span>Categorias</span>
                </a>
            </li>

            <li>
                <a href="{{route('products.index')}}">
                    <i class="s-icon material-icons">fastfood</i>
                    <span>Produtos</span>
                </a>
            </li>
        </ul>


        {{--content--}}
        <div class="container">
        @yield('content')

        {{--end content--}}
        </div>
    </body>
</main>

<footer class="page-footer yellow darken-4">
    <div class="footer-copyright">
        <div class="container">
            © <?php echo date('Y')  ?> Desenvolvido Por: Maria Elane Gomes​ - Todos os direitos reservados
        </div>
    </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="{{url('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{url('assets/materialize/js/materialize.min.js')}}"></script>


<script>
    $(document).ready(function(){

        $('.sidenav').sidenav();
       
    });

</script>


    <script>
    $(function () {
        setTimeout("$('.alerta').fadeOut();",3000)
    });

    

</script>

@stack('scripts')


</body>
</html>