
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
			//alert(str);
			//str ="<b>Long URL:</b>"+longUrl+"<br>";
			//str +="<b>Short URL:</b> <a href='"+response.id+"'>"+response.id+"</a><br>";
			//document.getElementById("output").innerHTML = str;
			temp = "whatsapp://send?text=" + "Checkout this innovative diwali greetings from me. Click the below given link and enjoy the fireworks by touching at different points on screen. !!🎆🎆🎆🎆🎆🎆🎆🎆\n" + str;	
			//alert(temp);
			document.getElementById("mylink").setAttribute("href",temp);
		}
		else
		{
			str = longUrl;
			temp = "whatsapp://send?text=" + str;
			//alert(temp);
			document.getElementById("mylink").setAttribute("href",temp);
			//alert("error: creating short url");
		}
		
    });
	
	//return str;
 }

function load()
{
	gapi.client.setApiKey('AIzaSyDRnpKnZQiM0igaLOUKthxK1ublSSAJ0QI'); //get your ownn Browser API KEY
	gapi.client.load('urlshortener', 'v1',function(){});
}



// once the window loads, we are ready for some fireworks!
window.onload = load;