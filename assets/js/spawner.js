var imageRepository = new function() {
    this.errorDialog = new Image()
    this.errorDialog.src = errorImgSrc
}

var canvas = document.getElementById("canvas")
var context = canvas.getContext("2d")

canvas.width = window.innerWidth
canvas.height = window.innerHeight

window.addEventListener('resize', function(e) {
    canvas.width = window.innerWidth
    canvas.height = window.innerHeight
});

var counter = 0

var refreshInterval

document.getElementById("errorClick").addEventListener('click', function(e) {
    e.preventDefault()
    activateSpawnError()
})

function activateSpawnError() {
    canvas.style.display = "block"
    refreshInterval = setInterval(spawnErrorOnRandomPlaces, 100)

    return false
}

function spawnErrorOnRandomPlaces() {
    let x = Math.random() * canvas.width
    let y = Math.random() * canvas.height
    console.log(x + "+" + y)
    context.drawImage(imageRepository.errorDialog, x, y)
    counter++

    if (counter > 10) {
        clearInterval(refreshInterval)
    }
}
