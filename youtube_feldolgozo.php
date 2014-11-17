<?php
header('Content-type: text/plain');
header('Content-disposition: attachment; filename="file.html"');
$b = $_POST["youtubelink"]; // ez az egyik változó paraméter
$a = $_POST["youtubeposter"]; // ez meg a másik
$c = $_POST["youtubefelirat_magyar"];
$d = $_POST["youtubefelirat_angol"];
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
  
   <script src="http://neocsatblog.mblx.hu/videojs-youtube/src/youtube.js"></script>
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
  
.vjs-big-play-button:hover{
 background: rgba(192, 40, 40, 0.97)!important;
}
</style>
</head>
<body>

<div>
  <video poster="'.$a.'" id="vid1" src="" class="video-js vjs-default-skin" controls preload="auto" width="640" height="360">
    <source src="'.$b.'" type="video/youtube" />
    <track kind="captions" src="'.$d.'" srclang="en" label="English"></track>;
	<track kind="captions" src="'.$c.'" srclang="hun" label="Magyar"></track>
  </video>
  </div>
  <script>
    videojs("vid1", {
            techOrder: ["youtube"],
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
<script src="http://neocsatblog.mblx.hu/embeds/videojs.urlparams.js"></script>
</body>
</html>';

print $html;

?>
