<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Snap</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { width:300px; height:210px;}
    </style>
</head>

<body>
        <div id="my_camera"></div>
        <br/>
        <input class="btn btn-info" type=button value="Take Snapshot" onClick="take_snapshot()">
        <input name="image" class="image-tag" hidden>
        <div id="results"></div>

</body>

<script language="JavaScript">
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('image_input').value = data_uri;
            console.log(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>

</html>

