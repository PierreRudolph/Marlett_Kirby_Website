let scrollPosition = 0;
let dotPos = 1;

function slidePicsForward() {
    let picDiv = document.getElementById('comp-pic-wrapper');
    divWidth = picDiv.offsetWidth;
    if (scrollPosition <= -2208) {
        scrollPosition = -2208;
        picDiv.style = `transform: translateX(${scrollPosition}px);`;
    } else {
        deactivateLastDot();
        dotPos++;
        scrollPosition = scrollPosition - 368;
        picDiv.style = `transform: translateX(${scrollPosition}px);`;
        deactivateLastDot(dotPos - 1);
        activateNewDot();
    }

    console.log(scrollPosition);
}

function slidePicsBackward() {
    let picDiv = document.getElementById('comp-pic-wrapper');
    if (scrollPosition >= 0) {
        scrollPosition = 0;
        picDiv.style = `transform: translateX(${scrollPosition}px);`;
    } else {
        deactivateLastDot();
        dotPos--;
        scrollPosition = scrollPosition + 368;
        picDiv.style = `transform: translateX(${scrollPosition}px);`;
        activateNewDot();
    }
    console.log(scrollPosition);

}

function activateNewDot() {
    let dot = document.getElementById(`blue-dot-${dotPos}`);
    dot.classList.add('blue-dot-active');
}

function deactivateLastDot() {
    let dot = document.getElementById(`blue-dot-${dotPos}`);
    dot.classList.remove('blue-dot-active');
}