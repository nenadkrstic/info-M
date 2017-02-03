@extends('app')
@section('content')
    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
                <p class="pull-right visible-xs">

                </p>
                <div class="jumbotron">
                    @if($news)

                            <h2>{{$news[0]->title}}</h2>
                               <img src="../resources/images/novak1.jpg" width="800" class="img-thumbnail">
                            <h5>{{$news[0]->description}}</h5>
                            <h5>{{$news[0]->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$news[0]->created_at}}</h4>
                        <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[0]->id}}" role="button">Više »</a></p>
                        @endif
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        @if(isset($news))
                            <h4>{{$news[1]->title}}</h4>
                            <img src="../resources/images/novak.jpg" width="500px" class="img-thumbnail">
                            <h5>{{$news[1]->description}}</h5>
                            <h5>{{$news[1]->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$news[0]->created_at}}</h4>
                            <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[1]->id}}" role="button">Više »</a></p>
                        @endif
                    </div><!--/.col-xs-12.col-lg-4-->
                    <div class="col-xs-12 col-lg-4">
                        @if(isset($news))

                            <h4>{{$news[2]->title}}</h4>
                            <img src="../resources/images/img2.jpg" width="500px" class="img-thumbnail">
                            <h5>{{$news[2]->description}}</h5>
                            <h5>{{$news[2]->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$news[2]->created_at}}</h4>
                            <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[2]->id}}" role="button">više »</a></p>
                        @endif
                    </div><!--/.col-xs-12.col-lg-4-->
                    <div class="col-xs-12 col-lg-4">
                        @if(isset($news))

                            <h4>{{$news[3]->title}}</h4>
                            <img src="../resources/images/img1.jpg" width="500px" class="img-thumbnail">
                            <h5>{{$news[3]->description}}</h5>
                            <h5>{{$news[3]->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$news[3]->created_at}}</h4>
                            <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[3]->id}}" role="button">Više »</a></p>
                        @endif
                    </div><!--/.col-xs-12.col-lg-4-->
                    <div class="col-xs-12 col-lg-4">
                        @if(isset($news))

                            <h4>{{$news[4]->title}}</h4>
                            <img src="../resources/images/img1.jpg" width="500px" class="img-thumbnail">
                            <h5>{{$news[4]->description}}</h5>
                            <h5>{{$news[4]->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$news[4]->created_at}}</h4>
                            <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[4]->id}}" role="button">Više »</a></p>
                        @endif
                    </div><!--/.col-xs-12.col-lg-4-->
                    <div class="col-xs-12 col-lg-4">
                        @if(isset($news))

                            <h4>{{$news[5]->title}}</h4>
                            <img src="../resources/images/img1.jpg" width="500px" class="img-thumbnail">
                            <h5>{{$news[5]->description}}</h5>
                            <h5>{{$news[5]->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$news[5]->created_at}}</h4>
                            <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[5]->id}}" role="button">Više »</a></p>
                        @endif
                    </div><!--/.col-xs-12.col-lg-4-->
                    <div class="col-xs-12 col-lg-4">
                        @if(isset($news))

                            <h4>{{$news[6]->title}}</h4>
                            <img src="../resources/images/img1.jpg" width="500px" class="img-thumbnail">
                            <h5>{{$news[6]->description}}</h5>
                            <h5>{{$news[6]->title}}</h5>
                            <h4><strong>Objavljeno: </strong><br>{{$news[6]->created_at}}</h4>
                            <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[6]->id}}" role="button">Više »</a></p>
                        @endif
                    </div><!--/.col-xs-6.col-lg-4-->
                </div><!--/row-->
            </div><!--/.col-xs-12.col-sm-9-->

            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
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
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Najčitanije vesti</a>
                    @if($news)
                        @foreach($news as $n)
                            <a href="{{url('celaVest')}}/{{$lastNews->id}}" class="list-group-item ">{{$n->title}}</a>
                        @endforeach
                    @endif
                </div>
            </div><!--/.sidebar-offcanvas-->

            <!-- Sidebar sa komentarima-->
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Komentari</a>
                    @if($comments)
                        @foreach($comments as $comment)
                            <a href="#" class="list-group-item ">{{$comment->comment}}</a>
                        @endforeach
                    @endif
                </div>
            </div><!--/.sidebar-offcanvas-->
        </div><!--/row-->

       </div>
    </div>

    @stop