@extends('../app')

@section('content')
    <div class="container text-center">

        <a href="http://www.accuweather.com/sr/rs/mladenovac/298161/current-weather/298161" class="aw-widget-legal text-center">
            <!--
            By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
            -->
        </a><div id="awtd1486103690408" class="aw-widget-36hour"  data-locationkey="298161" data-unit="c" data-language="sr" data-useip="false" data-uid="awtd1486103690408" data-editlocation="true"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>

    </div>
@stop