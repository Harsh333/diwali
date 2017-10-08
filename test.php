<html>
<head>

<meta property="og:title" content="Diwali Greetings" />
<meta property="og:description" content="Celebrate eco friendly diwali with us." />
<meta property="og:url" content="http://diwaligreetings.ga" />
<meta property="og:image" content="http://diwaligreetings.ga/src/image/diwali.jpg" />

<script type="text/javascript">
function makeShort(longUrl) 
{
   
	var request = gapi.client.urlshortener.url.insert({
    'resource': {
      'longUrl': longUrl
	}
    });
    request.execute(function(response) 
	{
		
		if(response.id != null)
		{
			str = response.id;
			alert(str);
			//str ="<b>Long URL:</b>"+longUrl+"<br>";
			//str +="<b>Short URL:</b> <a href='"+response.id+"'>"+response.id+"</a><br>";
			//document.getElementById("output").innerHTML = str;
		}
		else
		{
			str = longUrl;
			alert("error: creating short url");
		}
	
    });
 }

function load()
{
	gapi.client.setApiKey('AIzaSyDRnpKnZQiM0igaLOUKthxK1ublSSAJ0QI'); //get your ownn Browser API KEY
	gapi.client.load('urlshortener', 'v1',function(){});

}
window.onload = load;

</script>
<script src="https://apis.google.com/js/client.js"> </script>
    
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107492937-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107492937-1');
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3940007982960442",
    enable_page_level_ads: true
  });
</script>
    
    <link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>
    <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url('https://fonts.googleapis.com/css?family=Pacifico');

body{background:#000; overflow: hidden;}

.lasvegas {
  font-family: 'Pacifico', cursive;
  font-size:80px;
  border: none;
  color: transparent;
  text-align: center;
  text-shadow: 
    0 0 2px rgba(255,255,255,1), 
    0 0 3px rgba(255,255,255,1), 
    0 0 5px rgba(255,255,255,1),  
    0 0 20px rgba(255,0,0,1), 
    0 0 40px rgba(255,0,0,1),
    0 0 60px rgba(255,0,0,1);
}


.lasvegas span{
  animation: blink .9s infinite alternate;
}

.lasvegas span.delay{
  animation-duration:10s;
  animation-delay: 10s;
  animation-direction: alternate;
  cubic-bezier: (0.5, 0.2, 0.3, 1.0);
}


@keyframes blink {
  0%   {}
  50%  {}
  60%{
    text-shadow: 
      0 0 2px rgba(255, 255, 255, .1), 
      0 0 10px rgba(255, 255, 255, .4);
    
    text-stroke: 2px rgba(255,255,255,0.05);
  }
  70%{
    text-shadow: 
      0 0 2px rgba(255,255,255,1), 
      0 0 10px rgba(255,255,255,1), 
      0 0 20px rgba(255,255,255,1), 
      0 0 30px rgba(255,255,255,1), 
      0 0 40px #ff00de, 
      0 0 70px #ff00de, 
      0 0 80px #ff00de,
      0 0 100px #ff00de;
  }
  80%{
    text-shadow: 
      0 0 2px rgba(255, 255, 255, .1), 
      0 0 10px rgba(255, 255, 255, .4);
    
    text-stroke: 2px rgba(255,255,255,0.05);
  }
  100% { 
    text-shadow: 
      0 0 2px rgba(255,255,255,1), 
      0 0 10px rgba(255,255,255,1), 
      0 0 20px rgba(255,255,255,1), 
      0 0 30px rgba(255,255,255,1), 
      0 0 40px rgba(255,0,0,1), 
      0 0 70px rgba(255,0,0,1),
      0 0 80px rgba(255,0,0,1),
      0 0 100px rgba(255,0,0,1);    
  }
}
    </style>

  
    
</head>

<title>
Diwali Greetings
</title>
        
<body style="overflow: hidden">
    
<input type="button" value="Create Short" onclick="makeShort('http://diwaligreetings.tk');" /> <br/> <br/>    
</body>
</html>
