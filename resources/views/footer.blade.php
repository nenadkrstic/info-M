




</div>
        <div id="footer" class="row">
            <!--footer Mladenovac-->
                <div id="footerMladenovac" class="col-xs-12 col-md-2">
                    <h3 class="text-center">Mladenovac</h3><hr>
                        <ul>
                            <li><a href="#" >Vesti</a></li>
                            <li><a href="#" >Hronika</a></li>
                            <li><a href="#" >Servisne informacije</a></li>
                            <li><a href="#" >Vodič</a></li>
                            <li><a href="#" >Vreme</a></li>
                        </ul>

                </div>
             <!--Kraj Mladenovac-->

            <!--Info-->


                <div id="footerInfo" class="col-xs-12 col-md-2">
                    <h3 class="text-center">Info</h3><hr>
                    <ul>
                        <li><a href="#" >Beograd</a></li>
                        <li><a href="#" >Srbija</a></li>
                        <li><a href="#" >Svet</a></li>
                        <li><a href="#" >Nauka i tehnologija</a></li>
                        <li><a href="#" >Biznis i ekononija</a></li>
                        <li><a href="#" >Kultura i umetnost</a></li>
                        <li><a href="#" >Zanimljivosti</a></li>
                        <li><a href="#" >Mišljenja i intervjui</a></li>
                    </ul>

                </div>


            <!--Kraj Info-->
            <div class="col-xs-12 col-md-2">
                <h3 class="text-center">Sport</h3><hr>
                <ul>
                    <li><a href="#" >Fudbal</a></li>
                    <li><a href="#" >Košarka</a></li>
                    <li><a href="#" >Odbojka</a></li>
                    <li><a href="#" >Ostali sportovi</a></li>

                </ul>

            </div>

            <div class="col-xs-12 col-md-2">
                <h3 class="text-center">Zabava</h3><hr>
                <ul>
                    <li><a href="#" >Film</a></li>
                    <li><a href="#" >Muzika</a></li>
                    <li><a href="#" >Dešavanja</a></li>

                </ul>

            </div>





            <div class="col-xs-12 col-md-3">
                 <div class="form-group">
                     <h3 class="text-center">Pišite nam</h3><hr>
                        {!!Form::open(['method'=>'post'])!!}

                            {!! Form::label('Ime') !!}<br>
                            {!! Form::text('ime',null,['class'=>'form-control']) !!}<br>
                            {!! Form::label('Poruka') !!}<br>
                            {!! Form::textarea('poruka',null,['class'=>'form-control','rows'=>'4']) !!}<br>
                            {!! Form::submit('Pošalji',['class'=>'btn btn-primary']) !!}

                        {!!Form::close()!!}
                  </div>

            </div>


        </div>

</body>

</html>