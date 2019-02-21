<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JBlock Dots</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/angular.min.js"></script>
  <style>
  .parallax {
    /* The image used */
    background-image: url('https://wallpapercave.com/wp/GmIk0Cb.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    
    ul{
    	padding: 15%;
    	background: rgba(0, 0, 0, .51);
    }
    
    li{
    	color: #fff;
    }
    
    
    
    
  </style>
</head>
<center>
<body class="parallax" style="height: 100vh;">
   <center>
   angular.fromJson(j.json);
   <script>
   angular.fromJson(j.json);
 	</script>
 <script>
function fromJson(j.json) {
  return isString(j.json)
      ? JSON.parse(j.json)
      : j.json;
}
 </script>
  <script>
   $.getJSON( "j.json", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
    items.push( "<li id='" + key + "'>" + val + "</li>" );
  });
 
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "body" );
});
  </script>
  <script>
  $(document).ready( function(){
 
        $.getJSON('j.json', function(data) {
        var items = [];
        $.each(data.items, function(i,f) {
          $("ul").append("<img src="+f.url+" id="image"/><li>Caption: "+f.caption+"</li><br />").appendTo( "body" );
      });
  });
});

</script>

  </center> 

 
  
</body>
</html>
 

