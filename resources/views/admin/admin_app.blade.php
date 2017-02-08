@extends('../app')

@section('content')
    <div class="container">
        <div id="admin" class="col-md-9">
                <div class = "jumbotron">
                     @yield('welcome')
                     @yield('ubaci_vest')
                </div>
            </div>
        <div class="col-md-3">


            <div class="list-group">
                <a href="#" class="list-group-item active">Navigacija</a>
                <ul class="nav">
                    <li><a href="{{url('ubaci_vest')}}" >Ubaci vest</a></li>
                    <li><a href="{{url('obrisi_vest')}}" >Obrisi Vest</a></li>
                    <li><a href="{{url('izmeni_vest')}}" >Izmeni vest</a></li>
                    <li><a href="{{url('poruka')}}" >Poruke sa forme</a></li>
                </ul>
            </div>

        </div>
    </div>



@stop