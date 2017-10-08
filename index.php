<html>
<head>

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
      @import url('https://fonts.googleapis.com/css?family=Pacifico'
);

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
  animation: blink .3s infinite alternate;
}

.lasvegas span.delay{
  animation-duration:6s;
  animation-delay: 2s;
  animation-direction: alternate;
  cubic-bezier(0.5, 0.2, 0.3, 1.0)
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    
</head>

<title>
Diwali Greetings
</title>
        
<body style="overflow: hidden">
    
    <!--Automatic Fireworks --> 
    <canvas id="canvas" style="position: absolute ">Canvas is not supported in your browser.</canvas>
    <script  src="js/index.js"></script>
    
    <!-- Automatic Fireworks Ends-->
    <table style="margin-top: auto; margin-bottom: auto; width:100%; height: 100%;">
        <tr>
            <td>
                <div class="lasvegas">
                    Wishing you a very<br>
                    HAPPY DEEPAWALI<br>
                     in advance from<br>
                     <?php if(isset($_GET['n']))            
                            {        
                                echo $_GET['n'];
                            }
                            else
                            {
                                echo "me";
                            } ?>
                </div>
            </td>
        </tr>
<!--
        <tr>
            <td>
                <div style="position: relative" id="div1">
                    <form method="get" action="http://127.0.0.1/diwali/index.php" style="text-align: center">
                        <input type="button" name="button" value="Your Name">
                    </form>
                </div>
            </td>
        </tr>
-->
        <tr>
            <td>
                <div style="position: relative; text-align: center;" id="div2">
                    <form method="get">
                        <input type="text" name="n" style="height:50px; border: 4px solid #2D6525; border-radius: 5px; font-size:25px; font-weight:bold;" placeholder="Enter your name">
                        <button type="submit" id="button1" style="height: 50px; background-color: #4CAF50; color: white; border-style: solid; border-width: 5px; border-radius: 10px; border-color: #2D6525; font-size:25px; font-weight:bold;">Create</button>
                    </form>
                </div>
                <div style="position: relative; text-align: center; width:100%;" id="div3">
                    <form method="get" action="" >
                        <button type="submit" style="height: 50px; widht: 100%; background-color: #4CAF50; color: white; border-style: solid; border-width: 5px; border-radius: 10px; border-color: #2D6525; font-size:25px; font-weight:bold;"><a href="whatsapp://send?text=diwaligreetings.tk/?n=<?php echo $_GET['n']?>" style="text-decoration: none; color: white;">Share on Whatsapp</a></button>
                    </form>
                </div>
                <script>
                    var x= document.getElementById("div3");
                    var y= document.getElementById("div2");
                    //x.style.display = 'none';
                    function myFunction() {
//                              x.style.display = 'block';
//                              y.style.display = 'none';
                    }
                </script>
                <?php if(isset($_GET['n']))
                    {
                        echo '<script type="text/javascript">',
                             'myFunction();',
                             '</script>';
                    }?>
            </td>
        </tr>
    </table>
    
    
    
    
    <!--Touch fireworks-->
    
<!--
    <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="fireworks.js"></script>
-->

    <!--Touch fireworks Ends-->
</body>
</html>