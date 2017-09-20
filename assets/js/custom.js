/**
 * Created by reidbrownell on 9/19/17.
 */

(function( window, document) {
    var video = document.getElementsByTagName('video')[0],
        videoControls = document.getElementById('videoControls'),
        play = document.getElementById('play'),
        progressContainer = document.getElementById("progress"),
        progressHolder = document.getElementById("progressBox"),
        playProgressBar = document.getElementById("playProgress"),
        fullScreenToggleButton =  document.getElementById("fullScreen"),
        isVideoFullScreen = false;

    var videoPlayer;
    videoPlayer = {
        init: function () {
            // this is equal to the videoPlayer object.
            var that = this;

            // Helpful CSS trigger for JS.
            document.documentElement.className = 'js';

            // Get rid of the default controls, because we'll use our own.
            video.removeAttribute('controls');

            // When meta data is ready, show the controls
            video.addEventListener('loadeddata', this.initializeControls, false);

            // When play, pause buttons are pressed.
            this.handleButtonPresses();

            // When the full screen button is pressed...
            fullScreenToggleButton.addEventListener("click", function () {
                isVideoFullScreen ? that.fullScreenOff() : that.fullScreenOn();
            }, true);


        }
    };
    function initializeControls() {
        //When all meta information has loaded, show controls
        videoPlayer.showHideControls();
    } //End initializeControls function

    function showHideControls() {
        // Shows and hides the video player.
        video.addEventListener('mouseover', function() {
            videoControls.style.opacity = 1;
        }, false);

        videoControls.addEventListener('mouseover', function() {
            videoControls.style.opacity = 1;
        }, false);

        video.addEventListener('mouseout', function() {
            videoControls.style.opacity = 0;
        }, false);

        videoControls.addEventListener('mouseout', function() {
            videoControls.style.opacity = 0;
        }, false);
    } //End showHideControls function

    function handleButtonPresses() {
        // When the video or play button is clicked, play/pause the video.
        video.addEventListener('click', this.playPause, false);
        play.addEventListener('click', this.playPause, false);

        // When the play button is pressed,
        // switch to the "Pause" symbol.
        video.addEventListener('play', function() {
            play.title = 'Pause';
            play.innerHTML = '<span id="pauseButton">&#x2590;&#x2590;</span>';
        }, false);


        // When the pause button is pressed,
        // switch to the "Play" symbol.
        video.addEventListener('pause', function() {
            play.title = 'Play';
            play.innerHTML = '&#x25BA;';
        }, false);


        // When the video has concluded, pause it.
        video.addEventListener('ended', function() {
            this.currentTime = 0;
            this.pause();
        }, false);
    } // End handleButtonPresses function

    function playPause() {
        if ( video.paused || video.ended ) {
            if ( video.ended ) { video.currentTime = 0; }
            video.play();
        }
        else { video.pause(); }
    } // End playPause function

    function fullScreenOn() {
        isVideoFullScreen = true;

        // Set new width according to window width
        video.style.cssText = 'position: fixed; width:' + window.innerWidth + 'px; height: ' + window.innerHeight + 'px;';

        // Apply a classname to the video and controls, if the designer needs it...
        video.className = 'fullsizeVideo';
        videoControls.className = 'fs-control';
        fullScreenToggleButton.className = "fs-active control";

        // Listen for escape key. If pressed, close fullscreen.
        document.addEventListener('keydown', this.checkKeyCode, false);
    }// End fullScreenOn function

    function fullScreenOff() {
        isVideoFullScreen = false;

        video.style.position = 'static';

        video.className = '';
        fullScreenToggleButton.className = "control";
        videoControls.className = '';
    }// End fullScreenOff function

    videoPlayer.init();

}(this, document));