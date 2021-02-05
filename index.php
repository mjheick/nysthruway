<!DOCTYPE html>
<html>
  <head>
    <title>NYS Thruway Cams [49, 48A, 48, 47]</title>
  </head>
  <style>
  </style>
  <script>
function getImages()
{
  let i = [];
  for (let x = 0; x < 4; x++) {
    i.push(new Image());
  }
  i[0].src = "remoteImage.php?i=<?php echo urlencode("https://www.thruway.ny.gov/webcams/captures/img4ml41691w.jpg?"); ?>" + Math.random();
  i[1].src = "remoteImage.php?i=<?php echo urlencode("https://www.thruway.ny.gov/webcams/captures/img4ml40170e.jpg?"); ?>" + Math.random();
  i[2].src = "remoteImage.php?i=<?php echo urlencode("https://www.thruway.ny.gov/webcams/captures/img4ml39013e.jpg?"); ?>" + Math.random();
  i[3].src = "remoteImage.php?i=<?php echo urlencode("https://www.thruway.ny.gov/webcams/captures/img4ml37860w.jpg?"); ?>" + Math.random();

  for (let x = 0; x < 4; x++) {
    document.getElementById("i" + x).src = i[x].src;
  }
  setTimeout(getImages, 10000);
}
function getEventFeed()
{
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if ((xhr.readyState == 4) && (xhr.status == 200)) {
      document.getElementById("eventFeed").innerHTML = xhr.responseText;
      setTimeout(getEventFeed, 31000);
    }
  }
  xhr.open("GET", "eventFeed.php", true);
  xhr.send();
}
  </script>
  <body>
   <div><a target="_blank" href="https://www.thruway.ny.gov/travelers/map/index.html?layer=cameras">NYS Thruway Cameras</a></div>
   <div>
     <div style="float:left;">
<div>I-90 at Transit Road</div>
<div><img id="i0" src="remoteImage.php?i=<?php echo urlencode("https://www.thruway.ny.gov/webcams/captures/img4ml41691w.jpg?" . mt_rand(1, 999999999)); ?>"></div>
     </div>

     <div style="float:left;">
<div>I-90 at Interchange 48A (Pembroke)</div>
<div><img id="i1" src="remoteImage.php?i=<?php echo urlencode("https://www.thruway.ny.gov/webcams/captures/img4ml40170e.jpg?" . mt_rand(1, 999999999)); ?>"></div>
     </div>

     <div style="float:left;">
<div>I-90 at Interchange 48 (Batavia)</div>
<div><img id="i2" src="remoteImage.php?i=<?php echo urlencode("https://www.thruway.ny.gov/webcams/captures/img4ml39013e.jpg?" . mt_rand(1, 999999999)); ?>"></div>
     </div>

     <div style="float:left;">
<div>I-90 at Interchange 47 (Leroy)</div>
<div><img id="i3" src="remoteImage.php?i=<?php echo urlencode("https://www.thruway.ny.gov/webcams/captures/img4ml37860w.jpg?" . mt_rand(1, 999999999)); ?>"></div>
     </div>

     <div style="clear:both;"></div>
   </div>
   <hr>
   <div>
     <div><a target="_blank" href="https://www.thruway.ny.gov/xml/netdata/events.xml">Thruway Events XML</a></div>
     <div>
       <pre id="eventFeed"></pre>
     </div>
   </div>
  </body>
  <script>
  getImages();
  getEventFeed();
  </script>
</html>
