function moveBar(){
    var bar = document.getElementById('myProgressBar');
    var width = 0;
    var timeInterval = setInterval(progress, 50);
    function progress(){
        if (width >= 80) {
            clearInterval(timeInterval);
        }
        else{
            width++;
            bar.style.width = width + '%';
            bar.innerHTML = width * 1 + '%';
        }
    }
}
document.addEventListener('DOMContentLoaded', moveBar);