<?php
header('Content-type: text/plain');
header('Content-disposition: attachment; filename="file.html"');
$a = $_POST["a"]; // ez az egyik változó paraméter
$b = $_POST["b"]; // ez meg a másik
$c = $_POST["felirat_magyar"]; // ez meg a másik
$d = $_POST["felirat_angol"]; // ez meg a másik
$html = '
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Ördög fióka</title>

  <!-- Base Player -->
  <link href="http://neocsatblog.mblx.hu/embeds/video-js.min.css" rel="stylesheet" />
  <script src="http://neocsatblog.mblx.hu/embeds/video.dev.js"></script>

  <!-- Plugins -->
  <link href="http://neocsatblog.mblx.hu/embeds/videojs.addThis.css" rel="stylesheet" />
  <script src="http://neocsatblog.mblx.hu/embeds/videojs.addThis.js"></script>
  <script src="http://cdn.sc.gl/videojs-hotkeys/latest/videojs.hotkeys.min.js"></script>
  <script src="videojs.loopbutton.js"></script> 
  <link rel="stylesheet" type="text/css" href="videojs.loopbutton.css" />

  <script>
     var elem = document.getElementById("vid3");
     if (elem.requestFullscreen) {
       elem.requestFullscreen();
     } else if (elem.msRequestFullscreen) {
       elem.msRequestFullscreen();
     } else if (elem.mozRequestFullScreen) {
       elem.mozRequestFullScreen();
     } else if (elem.webkitRequestFullscreen) {
       elem.webkitRequestFullscreen();
     }
    </script>
<style type="text/css">
  .vjs-default-skin { color: #d9d0d0; }
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #ff0000 }
  .vjs-default-skin .vjs-control-bar,
  .vjs-default-skin .vjs-big-play-button { background: rgba(0,0,0,0.51) }
  .vjs-default-skin .vjs-slider { background: rgba(0,0,0,0.17) }
  .vjs-big-play-button {
  margin-left: 236px;
  margin-top: 66px;
  background: rgba(0, 0, 0, 1) !important;
  width: 93px!important;
height: 72px!important;
}
  }
.vjs-big-play-button:hover{
 background: rgba(192, 40, 40, 0.97)!important;
}
</style>
</head>
<body>

<video id="vid3" controls preload="auto" poster="'.$b.'" class="video-js vjs-default-skin" >
  <source src="'.$a.'" type="video/mp4">
   <track kind="captions" "'.$c.'" srclang="Eng" label="English"></track>
	  <track kind="captions" "'.$d.'" srclang="Hun" label="Magyar"></track>
  </video>
<script>
    videojs("vid3", {
            height: 267,
            width: 640,
            plugins: {
                addThis: {
                  reddit: false,
                  delecious: false,
                  website_url: "http://www.neocsatblog.mblx.hu",
                  embed: true
                }
            }
        }, function(){
        // Player (this) is initialized and ready.
    });
  </script>
  <script>
    videojs("vid3").ready(function() {
      this.hotkeys();
    });
  </script>
<script src="http://neocsatblog.mblx.hu/embeds/videojs.urlparams.js"></script>
<script>
// initialize video.js
var video = videojs("vid3");

// read in URL parameters and apply them
video.urlparams();

</script>
<script>
videojs("vid3", { plugins: { loopbutton: true } });
</script>
</body>
</html>'; // ez egy példa html

print $html;

?>
