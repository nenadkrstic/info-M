<body>

<div class="container">
    <h1 class="text-center"><span>Info</span> blog Mladenovac</h1>
    </divclass>


<!-- Fixed navbar -->
<nav id="header" class="navbar navbar-fixed-top">
    <div id="header-container" class="container navbar-container">
        <div  class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <p>---</p>

            </button>
            <a id="brand" class="navbar-brand" href="{{url('/')}}">InfoMladenovac</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse ">
            <ul id class="nav navbar-nav text-center">
                <li class="active text-center"><a href="{{url('/')}}">Home</a></li>

                <!--Padajuci meni info -->

                <ul class="nav navbar-nav navbar-left">

                    <li class="dropdown text-center">
                        <a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mladenovac <span class="caret"></span></a>
                        <ul id="info" class="dropdown-menu text-center">
                            <li><a href="{{url('vesti')}}" >Vesti</a></li>
                            <li><a href="{{url('hronika')}}" >Hronika</a></li>
                            <li><a href="{{url('servisneInformacije')}}" >Servisne infomacije</a></li>
                            <li><a href="{{url('vodič')}}" >Vodič</a></li>
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
                            <li><a href="{{url('zanimljivost')}}">Zanimljivosti</a></li>
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
                            <li><a href="{{url('ostaliSportovi')}}">Ostali sportovi</a></li>

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
            </ul>

            <!--Padajuci meni Korisnik -->

            <ul class="nav navbar-nav navbar-right ">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Korisnik <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" >Ime:</a></li>
                        <li><a href="#" >Prezime:</a></li>
                        <li><a href="#" >E-mail:</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->