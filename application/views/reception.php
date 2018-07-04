<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <audio src="<?= base_url('assets/audio/sembah.mp3') ?>" id="audioPlayer" autoplay loop></audio>
    <img src="<?= base_url('assets/img/sound_on.png') ?>" alt="" id="audioControl">
    <img src="<?= base_url('assets/img/sereal_logo.png') ?>" alt="" class="mx-auto" style="display: block; margin-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12" style="text-align: center;">
                <div class="absolute-container">
                    <h1 class="display-code"><?= $code['code'] ?></h1>
                </div>
                <img src="<?= base_url('assets/img/gif_invitation.gif') ?>" alt="" class="mx-auto img-fluid" style="display: block; margin-top: 60px;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block d-xl-block">
                <img src="<?= base_url('assets/img/gif_cahaya_1.gif') ?>" alt="" class="img-fluid mx-auto" style="margin-top: 60px; display: block;">
            </div>
            <div class="col-lg-6 col-md-12" style="text-align: center">
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere fuga quae sit consectetur perspiciatis ab dolorem reprehenderit, beatae aut perferendis. Suscipit, sequi deleniti. Sequi adipisci a, sint molestias perspiciatis optio.</p>
                <img src="<?= base_url('assets/img/ayam.gif') ?>" alt="" class="img-fluid mx-auto" style="display: block; margin-top: 60px; margin-bottom: 60px;">
                <a href="" id="errorClick" class="main-link">CLICK HERE</a>
            </div>
            <div class="col-lg-3 d-none d-lg-block d-xl-block">
                <img src="<?= base_url('assets/img/gif_cahaya_2.gif') ?>" alt="" class="img-fluid mx-auto" style="margin-top: 60px; display: block;">
            </div>
        </div>
    </div>
    <canvas id="canvas"></canvas>
