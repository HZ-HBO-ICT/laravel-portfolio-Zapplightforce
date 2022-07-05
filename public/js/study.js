/* study progressbar*/

var i = 0;
var width = 0;
function move(progress) {
    if (i == 0) {
        i = 1;
        var elem = document.getElementById("myBar");

        var id = setInterval(frame, 0);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
                i = 0;
            } else if (width < progress){
                width = progress;
                elem.style.width = width + "%";
                elem.innerHTML = width + "%";
                i = 0;
            }

        }
    }
}


