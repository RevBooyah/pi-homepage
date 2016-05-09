<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="jquery.simpleWeather.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<style>


@font-face {
    font-family: 'weather';
    /*
    src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/artill_clean_icons-webfont.eot');
    src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/artill_clean_icons-webfont.eot?#iefix') format('embedded-opentype'),
     */
    src: url('artill_clean_icons-webfont.eot');
    src: url('artill_clean_icons-webfont.eot?#iefix') format('embedded-opentype'),
    url('artill_clean_icons-webfont.woff') format('woff'),
    url('artill_clean_icons-webfont.ttf') format('truetype'),
    url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/artill_clean_icons-webfont.svg#artill_clean_weather_iconsRg') format('svg');
    font-weight: normal;
    font-style: normal;
}

body {
    background: #222222;
    font: 13px 'Play','Open Sans', "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    color: #cccccc;
    width: 1420px;
}

#time-container {
    font-size: 170px;
    font-weight:400;
    float:left;
    width: 40%;
    margin-bottom:30px;
    color:#ffffff;
    margin: 0 auto 30px auto;
    text-align:center;
}

#weather {
    /*width: 425px; */
    width: 58%;
    margin: 0px auto;
    text-align: center;
    text-transform: uppercase;
    float:right;
    margin-bottom:30px;
}

#weather h2 {
    margin: 0 0 8px;
    color: #fff;
    font-size: 160px;
    font-weight: 300;
    text-align: center;
    text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
}

#weather ul {
    margin: 0;
    padding: 0;
}

#weather li {
    background: #fff;
    background: rgba(55,55,55,0.90);
    padding: 10px 20px;
    display: inline-block;
    border-radius: 5px;
}

#weather .currently {
    margin: 0 20px;
    font-weight: bold;
}

i {
    color: #fff;
    font-family: weather;
    font-size: 150px;
    font-weight: normal;
    font-style: normal;
    line-height: 0.8;
    text-transform: none;
}

.icon-0:before { content: ":"; }
.icon-1:before { content: "p"; }
.icon-2:before { content: "S"; }
.icon-3:before { content: "Q"; }
.icon-4:before { content: "S"; }
.icon-5:before { content: "W"; }
.icon-6:before { content: "W"; }
.icon-7:before { content: "W"; }
.icon-8:before { content: "W"; }
.icon-9:before { content: "I"; }
.icon-10:before { content: "W"; }
.icon-11:before { content: "I"; }
.icon-12:before { content: "I"; }
.icon-13:before { content: "I"; }
.icon-14:before { content: "I"; }
.icon-15:before { content: "W"; }
.icon-16:before { content: "I"; }
.icon-17:before { content: "W"; }
.icon-18:before { content: "U"; }
.icon-19:before { content: "Z"; }
.icon-20:before { content: "Z"; }
.icon-21:before { content: "Z"; }
.icon-22:before { content: "Z"; }
.icon-23:before { content: "Z"; }
.icon-24:before { content: "E"; }
.icon-25:before { content: "E"; }
.icon-26:before { content: "3"; }
.icon-27:before { content: "a"; }
.icon-28:before { content: "A"; }
.icon-29:before { content: "a"; }
.icon-30:before { content: "A"; }
.icon-31:before { content: "6"; }
.icon-32:before { content: "1"; }
.icon-33:before { content: "6"; }
.icon-34:before { content: "1"; }
.icon-35:before { content: "W"; }
.icon-36:before { content: "1"; }
.icon-37:before { content: "S"; }
.icon-38:before { content: "S"; }
.icon-39:before { content: "S"; }
.icon-40:before { content: "M"; }
.icon-41:before { content: "W"; }
.icon-42:before { content: "I"; }
.icon-43:before { content: "W"; }
.icon-44:before { content: "a"; }
.icon-45:before { content: "S"; }
.icon-46:before { content: "U"; }
.icon-47:before { content: "S"; }

#weather h2 {
    margin: 0 0 8px;
    color: #fff;
    font-size: 120px;
    font-weight: 300;
    text-align: center;
    text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
}

#weather .future {
    background-size: 150px;
    background-repeat:no-repeat;
    float:left;
    width: 19%; height: 100px;
    text-align:right;
    font-size: 14px;
    padding-right: 8px;
}
.fday {
    width: 100%;
    text-align: center;
    color: #cccccc;
    padding-left:20px;
    font-weight:600;
    margin-top:4px;
}
.high {
    font-size: 19px;
    color: #ff6666;
    font-weight:bold;
}
.low {
    font-size: 19px;
    color: #6666ff;
    font-weight:bold;
}

#weather .future img {
}
.datestring {
    font-size: 40px;
    font-weight:normal;
    font-style: italic;
}
.ampm {
    font-size: 80px;
    font-weight:normal;
}
</style>
</head> 


<div id='time-container'> </div>

<div id="weather"></div>

<div style='clear:both; width: 100%; margin:3px;'></div>

<div style='margin: 10px auto; width:1420px; height: 700px;'>
    <iframe name='frame' id='frame' src="https://calendar.google.com/calendar/embed?src=stevec%40s2media.com&ctz=America/Denver" style="border: 0" width="1420" height="700" frameborder="0"     scrolling="no" style='margin: 10px auto; width:1300px; height: 600px;'></iframe> 
</div>
<div id='second'></div> 


<script> 
$(document).ready(function() {

    updateTime();
    updateWeather();


    function updateWeather() {
        $.simpleWeather({
            //location: 'Albuquerque, NM',
            location: '87120',
            woeid: '',
            unit: 'f',
            success: function(weather) {
                html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+' <span>&deg;'+weather.units.temp+'</span></h2>';
                html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
                html += '<li class="currently">'+weather.currently+'</li>';
                html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';
                //html += weather.forecast;
                html += "<div style='clear:both; width:100%; margin: 8px;'></div>";
                for(var i=0;i<weather.forecast.length;i++) {
                    w = weather.forecast[i];
                    html+= "<div class='future' style=\"background-image: url('"+w.image+"');\">";
                    html += "<div class='fday'>&nbsp; &nbsp;"+w.day+"</div>"; 
                    html += "<div class='high'>"+w.high+"</div>"; 
                    html += "<div class='low'>"+w.low+"</div>"; 
                    html += "<div class='summary'>"+w.text+"</div>"; 
                    html += "</div>";
                    if(i>3)break;
                }
                $("#weather").html(html);
            },
            error: function(error) {
                $("#weather").html('<p>'+error+'</p>');
            }
        });
        setTimeout(updateWeather,6000000); // update every 10 minutes
    }



function updateTime() {
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    var d = new Date();

    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
            ampm = d.getHours() >= 12 ? '<span class="ampm">pm</span>' : '<span class="ampm">am</span>';

    var hours = d.getHours() > 12 ? d.getHours()-12 : d.getHours();
    //hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    //hours = hours.length == 1 ? '0'+d.getHours() : d.getHours(),

    months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
           days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    var tstr = hours+':'+minutes+ampm + '<div class="datestring">'+days[d.getDay()]+' '+months[d.getMonth()]+' '+d.getDate()+', '+d.getFullYear()+"</div>";


    $("#time-container").html(tstr);
    setTimeout(updateTime,5000); // update every 5 seconds
}


$("#second").load("https://calendar.google.com/calendar/embed?src=stevec%40s2media.com&ctz=America/Denver"); 
});
</script>

</html>
