<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
   
    <a href="<?= site_url() ?>">
        <img src="<?= base_url('assets/img/logo_komplit_resize.png') ?>" alt="" class="mx-auto" style="display: block; margin-top: 15px;">
    </a>
    <audio src="<?= base_url('assets/audio/sembah.mp3') ?>" id="audioPlayer" autoplay loop></audio>
    <img src="<?= base_url('assets/img/sound_on.png') ?>" alt="" id="audioControl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12" style="text-align: center;">
                <img src="<?= base_url('assets/img/gif_tulisan1.gif') ?>" alt="" class="img-fluid" style="display: block; position: absolute; left: 0; top: 20%;">
                <img src="<?= base_url('assets/img/gif_tulisan2.gif') ?>" alt="" class="img-fluid" style="display: block; position: absolute; right: 0; top: 20%;">
                <div class="absolute-container">
                    <h1 class="display-code"><?= $code['code'] ?></h1>
                </div>
                <img src="<?= base_url('assets/img/gif_invitation.gif') ?>" alt="" class="mx-auto img-fluid" style="display: block; margin-top: 60px;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block d-xl-block align-self-end">
                <img src="<?= base_url('assets/img/gif_cahaya_1.gif') ?>" alt="" class="img-fluid mx-auto" style="margin-top: 60px; display: block;">
            </div>
            <div class="col-lg-6 col-md-12" style="text-align: center">
                <p class="description">
                    Rasanya, Aku memiliki ketertarikan dengan caramu memandang dunia ini. Kita pernah berpapasan jika kau ingat, di sebuah tempat di tahun 2015. <br>
                    Aku suka, caramu berpakaian siang itu, dan caramu memanggil pelayan di salah satu tempat makan pinggiran di kota ini. <br>
                    Kau terlihat lahap, saat menikmati nasi dan lauk pauk yang kamu makan secara bersamaan dengan Jari-jarimu yang membentuk segitiga. <br>
                    Bersamaan dengan cerita tadi, mari memaknai rasa lebih jauh, bersamaku.
                </p>
                <p class="description">JANGAN SAMPAI TIDAK DATANG!!!1!1!!</p>
                <p class="description magenta" style="font-size: 19px;">
                    Kamis, 5 Juli 2018<br>
                    Mulai pukul 19.30<br>
                    Mr. Guan Coffee & Books<br>
                    Jl. Tampomas No. 22, Bandung
                </p>
                <p class="description">Dr. Milton</p>
                <img src="<?= base_url('assets/img/ayam.gif') ?>" alt="" class="img-fluid mx-auto" style="display: block; margin-top: 60px; margin-bottom: 60px;">
                <a href="" id="errorClick" class="main-link">CLICK HERE</a>

                <img src="<?= base_url('assets/img/sereal_logo.png') ?>" alt="" class="mx-auto" style="display: block; margin-top: 20px; margin-bottom: 20px; width: 60px;">
            </div>
            <div class="col-lg-3 d-none d-lg-block d-xl-block align-self-end">
                <img src="<?= base_url('assets/img/gif_cahaya_2.gif') ?>" alt="" class="img-fluid mx-auto" style="margin-top: 60px; display: block;">
            </div>
        </div>
    </div>
    <canvas id="canvas"></canvas>
