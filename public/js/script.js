// Resizeable textarea
function calcHeight(value) {
    let numberOfLineBreaks = (value.match(/\n/g) || []).length;
    // min-height + lines x line-height + padding + border
    let newHeight = 20 + numberOfLineBreaks * 22;
    return newHeight;
}

const textarea = document.querySelectorAll(".resize-ta");

textarea.forEach(textfield => {
    textfield.addEventListener("keyup", () => textfield.style.height = calcHeight(textfield.value) + "px");

});

