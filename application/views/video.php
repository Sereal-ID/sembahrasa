<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <section id="main">
        <img src="<?= base_url('assets/img/gif-sembah-rasa2.gif') ?>" alt="" class="img-fluid bg-abs d-none d-lg-block d-xl-block" style="height: 100vh;">
        <img src="<?= base_url('assets/img/gif-sembah-rasa2_flipped.gif') ?>" class="img-fluid bg-abs-right d-none d-lg-block d-xl-block" alt="" style="height: 100vh;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 align-items-center">
                    <div class="main-content-container" style="margin-top: 10px; text-align: center;">
                        <a href="<?= site_url() ?>">
                            <img src="<?= base_url('assets/img/logo_komplit_resize.png') ?>" alt="" class="mx-auto" style="display: block; margin-top: 15px;">
                        </a>
                        <div class="embed-responsive embed-responsive-16by9">
                            <div id="player" class="mx-auto embed-responsive-item" style="display: block;"></div>
                        </div>
                        <p class="description">simak baik baik video ini sampai selesai!!!!!!!!1!!!!!!!!!!1</p>
                        <a href="<?= site_url('video') ?>" class="main-link">SKIP</a>
                    </div>
                </div>
            </div>
            <img src="<?= base_url('assets/img/sereal_logo.png') ?>" alt="" class="mx-auto" style="display: block; margin-top: 20px; width: 60px;">
        </div>
    </section>

    <script>
        var tag = document.createElement('script')
        tag.src = "https://www.youtube.com/iframe_api"
        
        var firstScriptTag = document.getElementsByTagName('script')[0]
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag)

        var player
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                width: '640',
                height: '390',
                videoId: 'oHR2utwwAcY',
                playerVars: {
                    'controls': 0,
                    'rel': 0,
                    'showinfo': 0,
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange,
                }
            })
        }

        function onPlayerReady(event) {
            event.target.playVideo()
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.ENDED) {
                window.location.replace("<?= site_url('reception') ?>")
            }
        }
    </script>
