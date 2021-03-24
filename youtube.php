<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Youtube-player test</title> 
    <style>
        .youtube-player iframe {
            display: none;
        }

        .youtube-player.active iframe {
            display: block;
        }
    </style>
</head>
<body>
<a href="#" data-reveal-id="myModal">Click Me For A Modal</a>

  <div id="myModal" class="reveal-modal" data-reveal>
    <h2>Awesome</h2>
    <div id="player"></div>
    <a class="close-reveal-modal">&#215;</a>
  </div>

    <script>

var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '315',
        width: '560',
        videoId: 'l-gQLqv9f4o',
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}


function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {
      //player is playing
    } else {
      //player is paused
    }
}
function stopVideo() {
    player.stopVideo();
}

function playVideo() {
  player.playVideo();
}

function pauseVideo() {
  player.pauseVideo();
}


$(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
    playVideo();
      