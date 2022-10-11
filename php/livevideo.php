<div id="my_camera"></div>
    <br/>
    
    <input name="image" class="image-tag" hidden>
       


<script language="JavaScript">
    Webcam.set({
        width: 280,
        height: 210,
        image_format: 'jpeg',
        jpeg_quality: 150
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


