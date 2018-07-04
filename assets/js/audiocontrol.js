var isPlaying = true

function playAudio() {
    document.getElementById("audioControl").src = playImgSrc
    document.getElementById("audioPlayer").muted = false
}

function pauseAudio() {
    document.getElementById("audioControl").src = pauseImgSrc
    document.getElementById("audioPlayer").muted = true
}

document.getElementById("audioControl").addEventListener('click', function(event) {
    if (isPlaying) {
        pauseAudio()
    } else {
        playAudio()
    }

    isPlaying = !isPlaying
})