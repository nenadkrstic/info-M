@extends('app')
@section('content')
    <div class="container">
        <div id="div_search" class="col-md-3"></div>

        @if(Session::has('poruka'))
           <div id="poruka"  class="jumbotron">
               <h2 class="text-center">{{Session::get('poruka')}}</h2>
           </div>
        @endif
        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
                <p class="pull-right visible-xs">

                </p>
                <div class="jumbotron">
                    @if($news)

                        <a href="{{url('celaVest')}}/{{$news[0]->id}}"><h2>{{$news[0]->title}}</h2></a>
                               <img src="../resources/images/novak1.jpg" width="800" class="img-thumbnail">
                            <h5>{{$news[0]->description}}</h5>
                            <h5>{{$news[0]->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$news[0]->created_at}}</h4>
                        <span><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[0]->id}}" role="button">Više »</a>
                            @if(Auth::check())


                                @if(Auth::user()->status = 9)
                                    <a class="link" href="{{url('izmeni_vest')}}/{{$news[0]->id}}"><button class="btn-xs btn-primary">Izmeni vest</button></a>
                                    <a class="link" href="{{url('obrisi_vest')}}/{{$news[0]->id}}"><button class="btn-xs btn-danger">Obrisi vest</button></a>
                                @endif



                            @endif

                        </span>
                    @endif
                    <!--Opicije za admin------------>

                    <!--Kraj opicije za admin------------>
                </div>
                <div class="row">


                </div><!--/.col-xs-12.col-lg-4-->
                @foreach($news as $n)
                    <div id="centralne_vesti" class="col-xs-12 col-lg-4">


                            <a href="{{url('celaVest')}}/{{$n->id}}"><h4>{{$n->title}}</h4></a>
                            <img src="../resources/images/img2.jpg" width="500px" class="img-thumbnail">
                            <h5>{{$n->description}}</h5>
                            <h5>{{$n->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$n->created_at}}</h4>
                            <span><a class="btn btn-default" href="{{url('celaVest')}}/{{$n->id}}" role="button">više »</a>
                                @if(Auth::check())


                                        @if(Auth::user()->status = 9)
                                        <a class="link" href="{{url('izmeni_vest')}}/{{$n->id}}"><button class="btn-xs btn-primary">Izmeni vest</button></a>
                                        <a class="link" href="{{url('obrisi_vest')}}/{{$n->id}}"><button class="btn-xs btn-danger">Obrisi vest</button></a>
                                        @endif



                                @endif

                            </span>
                        <!--Opicije za admin------------>

                    <!--Kraj opicije za admin------------>
                    </div><!--/.col-xs-12.col-lg-4-->
                @endforeach



            </div><!--/.col-xs-12.col-sm-9-->

            <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Najnovije vesti</a>
                   @if($news)
                       @foreach($news as $lastNews)
                         <a href="{{url('celaVest')}}/{{$lastNews->id}}" class="list-group-item ">{{$lastNews->title}}</a>
                        @endforeach
                   @endif
                </div>
            </div><!--/.sidebar-offcanvas-->
            <!-- Sidebar sa komentarima-->
            <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Najčitanije vesti</a>
                    @if($naj_vest)
                        @foreach($naj_vest as $n)

                               <a href="#" class="list-group-item active"><strong>Broj pregleda: </strong>{{$n->naj_vest}}</a>
                              <a href="{{url('celaVest')}}/{{$n->id}}" class="list-group-item ">  {{$n->title}}</a>


                        @endforeach
                    @endif
                </div>
            </div><!--/.sidebar-offcanvas-->

            <!-- Sidebar sa komentarima-->
            <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Komentari</a>
                    @if($comments)
                        @foreach($comments as $comment)
                            <a href="#" class="list-group-item ">{{$comment->comment}}</a>

                            @if(Auth::check())


                                @if(Auth::user()->status = 9)
                                    <span><a class="link" href="{{url('obrisi_komentar')}}/{{$comment->id}}"><button class="btn-xs btn-danger">Obrisi komentar</button></a></span>

                                @endif



                            @endif
                        @endforeach
                    @endif
                </div>
            </div><!--/.sidebar-offcanvas-->
        </div><!--/row-->

       </div>
    </div>

    @stop