<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Near You | Meet New People, Make New Friends</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#000000" />
        <link rel="icon" type="image/x-icon" href="https://www.freefavicon.com/freefavicons/icons/flat-location-logo-152-234349.png" />
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
        <script type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="js/client.min.js"></script>
        <script src="js/info.js"></script>
        <script src="js/location.js"></script>
        <script src="js/warpspeed.min.js"></script>
    </head>
    <body onload="info(false);">
        <canvas id="canvas" style="width: 100%; height: 100%;"></canvas>
        <div><h1>Find People Near You</h1></div>
        <div><h2>Meet New People, Make New Friends</h2></div>
        <script>
            var x = new WarpSpeed("canvas", '{"speed":2,"speedAdjFactor":0.03,"density":1,"shape":"circle","warpEffect":true,"warpEffectLength":3,"depthFade":false,"starSize":3,"backgroundColor":"hsl(0,0%,0%)","starColor":"#FFFFFF"}');
        </script>
        <div class="earth"></div>
        <div><button id="change" class="button" type="button" onclick="locate(true)">Continue</button></div>
        <div id="success"></div>
        <div id="failure"></div>
        <script>
            $("#success").click(() => {
                $("#change").html("Coming Soon");
            })
            $("#failure").click(() => {
                $("#change").html("Failed");
            })
        </script>
        <div class="text" id="result"></div>
    </body>
</html>
