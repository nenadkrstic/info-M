<div class="col-xs-12 col-lg-4">
    @if(isset($news))
        <a href="{{url('celaVest')}}/{{$news[1]->id}}"><h4>{{$news[1]->title}}</h4></a>
        <img src="../resources/images/novak.jpg" width="500px" class="img-thumbnail">
        <h5>{{$news[1]->description}}</h5>
        <h5>{{$news[1]->title}}</h5>
        <h4><strong>Objavljeno: </strong><br>{{$news[0]->created_at}}</h4>
        <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[1]->id}}" role="button">Više »</a></p>
    @endif
<!--Opicije za admin------------>
    @if(Auth::check())
        <div  class="col-md-5">

            @if(Auth::user()->status = 9)
                <span><button class="btn-xs btn-danger"><a class="link" href="{{url('obrisi_vest')}}/{{$news[0]->id}}">Obrisi vest</a></button></span>
                <span><button class="btn-xs btn-primary"><a class="link" href="{{url('izmeni_vest')}}/{{$news[0]->id}}">Izmeni vest</a></button></span>
            @endif


        </div>
@endif
<!--Kraj opicije za admin------------>
</div><!--/.col-xs-12.col-lg-4-->
<div class="col-xs-12 col-lg-4">
    @if(isset($news))

        <a href="{{url('celaVest')}}/{{$news[2]->id}}"><h4>{{$news[1]->title}}</h4></a>
        <img src="../resources/images/img2.jpg" width="500px" class="img-thumbnail">
        <h5>{{$news[2]->description}}</h5>
        <h5>{{$news[2]->title}}</h5>
        <h4><strong>Objavljeno: </strong><br>{{$news[2]->created_at}}</h4>
        <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[2]->id}}" role="button">više »</a></p>
    @endif
</div><!--/.col-xs-12.col-lg-4-->
<div class="col-xs-12 col-lg-4">
    @if(isset($news))

        <a href="{{url('celaVest')}}/{{$news[3]->id}}"><h4>{{$news[1]->title}}</h4></a>
        <img src="../resources/images/img1.jpg" width="500px" class="img-thumbnail">
        <h5>{{$news[3]->description}}</h5>
        <h5>{{$news[3]->title}}</h5>
        <h4><strong>Objavljeno: </strong><br>{{$news[3]->created_at}}</h4>
        <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[3]->id}}" role="button">Više »</a></p>
    @endif
</div><!--/.col-xs-12.col-lg-4-->
<div class="col-xs-12 col-lg-4">
    @if(isset($news))

        <a href="{{url('celaVest')}}/{{$news[4]->id}}"><h4>{{$news[4]->title}}</h4></a>
        <img src="../resources/images/img1.jpg" width="500px" class="img-thumbnail">
        <h5>{{$news[4]->description}}</h5>
        <h5>{{$news[4]->title}}</h5>
        <h4><strong>Objavljeno: </strong><br>{{$news[4]->created_at}}</h4>
        <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[4]->id}}" role="button">Više »</a></p>
    @endif
</div><!--/.col-xs-12.col-lg-4-->
<div class="col-xs-12 col-lg-4">
    @if(isset($news))

        <a href="{{url('celaVest')}}/{{$news[5]->id}}"><h4>{{$news[1]->title}}</h4></a>
        <img src="../resources/images/img1.jpg" width="500px" class="img-thumbnail">
        <h5>{{$news[5]->description}}</h5>
        <h5>{{$news[5]->title}}</h5>
        <h4><strong>Objavljeno: </strong><br>{{$news[5]->created_at}}</h4>
        <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[5]->id}}" role="button">Više »</a></p>
    @endif
</div><!--/.col-xs-12.col-lg-4-->
<div class="col-xs-12 col-lg-4">
    @if(isset($news))

        <a href="{{url('celaVest')}}/{{$news[6]->id}}"><h4>{{$news[1]->title}}</h4></a>
        <img src="../resources/images/img1.jpg" width="500px" class="img-thumbnail">
        <h5>{{$news[6]->description}}</h5>
        <h5>{{$news[6]->title}}</h5>
        <h4><strong>Objavljeno: </strong><br>{{$news[6]->created_at}}</h4>
        <p><a class="btn btn-default" href="{{url('celaVest')}}/{{$news[6]->id}}" role="button">Više »</a></p>
    @endif
</div><!--/.col-xs-6.col-lg-4-->