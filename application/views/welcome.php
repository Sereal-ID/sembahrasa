<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        
    <section id="welcome">
        <audio src="<?= base_url('assets/audio/sembah.mp3') ?>" id="audioPlayer" autoplay loop></audio>
        <img src="<?= base_url('assets/img/sound_on.png') ?>" alt="" id="audioControl" style="margin-top: 10px;">

        <img src="<?= base_url('assets/img/gif-sembah-rasa2.gif') ?>" alt="" class="img-fluid bg-abs" style="height: 100vh;">
        <img src="<?= base_url('assets/img/gif-sembah-rasa2_flipped.gif') ?>" class="img-fluid bg-abs-right" alt="" style="height: 100vh;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <img src="<?= base_url('assets/img/sereal_logo.png') ?>" alt="" class="mx-auto" style="display: block; margin-top: 20px;">
                    <img src="<?= base_url('assets/img/gif-sembah-rasa.gif') ?>" alt="" class="mx-auto" style="display: block; margin-top: 40px;">
                    <div class="form-container">
                        <form action="<?= site_url('welcome/auth')?> " method="POST">
                            <div class="row">
                                <div class="col-3 align-self-end">
                                    <div class="helper">
                                        <a href="">**UPDATES</a>
                                        <p>5 Juli 1983</p>
                                        <p>Selamat Datang</p>
                                    </div>
                                </div>
                                <div class="col-6" style="text-align: center">
                                    <div class="form-group">
                                        <input type="text" name="code" id="accessCode" class="mx-auto form-control" style="display: block">
                                    </div>
                                    <input type="submit" class="main-link" value="ENTER">
                                    <p class="description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, repudiandae! Beatae voluptatum quas
                                    </p>
                                </div>
                                <div class="col-3 align-self-end">
                                    <div class="helper-right">
                                        <a href="" id="errorClick">CLICK HERE</a>
                                        <p>Para Penyembah</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <canvas id="canvas"></canvas>
    </section>