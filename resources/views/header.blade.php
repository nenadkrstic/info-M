<body>




<!-- Fixed navbar -->
<nav id="header" class="navbar navbar-fixed-top">
    <div id="header-container" class="container navbar-container">
        <div  class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <p>---</p>

            </button>
            <a id="brand" class="navbar-brand" href="{{url('/pocetna')}}">InfoM</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse ">
            <ul  class="nav navbar-nav text-center">
                <li class="active text-center"><a href="{{url('/pocetna')}}">Home</a></li>

                <!--Padajuci meni info -->

                <ul class="nav navbar-nav navbar-left">

                    <li class="dropdown text-center">
                        <a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mladenovac <span class="caret"></span></a>
                        <ul id="info" class="dropdown-menu text-center">
                            <li><a href="{{url('vesti')}}" >Vesti</a></li>
                            <li><a href="{{url('hronika')}}" >Hronika</a></li>
                            <li><a href="{{url('sinfo')}}" >Servisne infomacije</a></li>
                            <li><a href="{{url('vodic')}}" >Vodič</a></li>
                            <li><a href="{{url('vreme')}}" >Vreme</a></li>
                        </ul>
                    </li>
                </ul>

                <!--Padajuci meni Beograd-->

                <ul class="nav navbar-nav navbar-left">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('beograd')}}">Beograd</a></li>
                            <li><a href="{{url('srbija')}}">Srbija</a></li>
                            <li><a href="{{url('svet')}}">Svet</a></li>
                            <li><a href="{{url('nauka')}}">Nauka i tehnolofija</a></li>
                            <li><a href="{{url('biznis')}}">Biznis i ekonomija</a></li>
                            <li><a href="{{url('kultura')}}">Kultura i umetnost</a></li>
                            <li><a href="{{url('zanimljivosti')}}">Zanimljivosti</a></li>
                            <li><a href="{{url('misljenja')}}">Mišljenja i intervjui</a></li>

                        </ul>
                    </li>
                </ul>

                <!--Padajuci meni sporte -->

                <ul class="nav navbar-nav navbar-left">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sport <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('fudbal')}}">Fudbal</a></li>
                            <li><a href="{{url('kosarka')}}">Košarka</a></li>
                            <li><a href="{{url('odbojka')}}">Odbojka</a></li>
                            <li><a href="{{url('ostalisportovi')}}">Ostali sportovi</a></li>

                        </ul>
                    </li>
                </ul>

                <!--Padajuci meni zabava -->

                <ul class="nav navbar-nav navbar-left">

                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zabava <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('film')}}">Film</a></li>
                            <li><a href="{{url('muzika')}}">Muzika</a></li>
                            <li><a href="{{url('desavanja')}}">Dešavanja</a></li>

                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-left text-center">

                    <li class="dropdown text-center">
                        <a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FSMladenovac <span class="caret"></span></a>
                        <ul class="dropdown-menu text-right">
                            <li><a href="{{url('manifestacije')}}">Manifestacije od znacaja</a></li>
                            <li><a href="{{url('ostale_manifestacije')}}">Ostale manifestacije</a></li>
                            <li><a href="{{url('programi')}}">Programi sportskog saveza</a></li>
                            <li><a href="{{url('konkursi')}}">Konkursi/javni pozivi</a></li>

                        </ul>
                    </li>
                </ul>




            </ul>

            <span class="col-sm-5 col-md-3">
                    <form class="navbar-form text-center" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </span>



            <!--Padajuci meni Korisnik -->

            <ul class="nav navbar-nav navbar-right ">
                @if(Auth::check())
                        <li class="dropdown text-center">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}  <span class="caret"></span></a>

                                <ul class="dropdown-menu text-center">
                                    <li><a href="#" >Ime: {{Auth::user()->name}}</a></li>
                                    <li><a href="#" >Prezime:{{Auth::user()->lname}}</a></li>
                                    <li><a href="#" >E-mail: {{Auth::user()->email}}</a></li><br>
                                    <li><a href="{{url('logout')}}">Logout</a>
                                        @if(Auth::user()->status = 9 && Auth::user()->name == 'Nenad')
                                            <li><a href="{{url('admin')}}">admin panel</a>
                                       @endif

                                </ul>

                        </li>
                    @else

                        <li class="dropdown">
                            <li><a href="{{url('register')}}">Registracija</a></li>
                            <li><a  href="{{url('login')}}" >LogIn</a></li>

                        </li>

                   @endif
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->