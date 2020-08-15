<!DOCTYPE html>
<html>
<head>

  <title>Laravel 6/7 CORS Middleware Tutorial</title>

  <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"  crossorigin="anonymous"></script>

</head>

<body>

<script  type="text/javascript">

  $.ajax({
    type:  "GET",
    dataType:  "json",
    url:  'http://localhost/v1/api/test1',
    success:  function(data){
        console.log(data);
        //alert(data);
    }
  });

</script>

<?php
echo date("d/m/Y H:i:s");
?>
</body>
</html>
