let scrollPositionPics = 0;
let scrollPositionReviews = 0;
let dotPosPics = 1;
let dotPosReviews = 1;


function slidePicsForward() {
    let picDiv = document.getElementById('comp-pic-wrapper');
    if (scrollPositionPics <= -2208)
        return;
    deactivateLastDot('pic');
    dotPosPics++;
    scrollPositionPics = scrollPositionPics - 368;
    picDiv.style = `transform: translateX(${scrollPositionPics}px);`;
    activateNewDot('pic');
}


function slideReviewsForward() {
    let reviewDiv = document.getElementById('gog-rev-wrapper');
    if (scrollPositionReviews <= -3498)
        return;
    deactivateLastDot('rev');
    dotPosReviews++;
    scrollPositionReviews = scrollPositionReviews - 583;
    reviewDiv.style = `transform: translateX(${scrollPositionReviews}px);`;
    activateNewDot('rev');
}


function slideReviewsBackward() {
    let reviewDiv = document.getElementById('gog-rev-wrapper');
    if (scrollPositionReviews >= 0)
        return;
    deactivateLastDot('rev');
    dotPosReviews--;
    scrollPositionReviews = scrollPositionReviews + 583;
    reviewDiv.style = `transform: translateX(${scrollPositionReviews}px);`;
    activateNewDot('rev');
}


function slidePicsBackward() {
    let picDiv = document.getElementById('comp-pic-wrapper');
    if (scrollPositionPics >= 0)
        return;
    deactivateLastDot('pic');
    dotPosPics--;
    scrollPositionPics = scrollPositionPics + 368;
    picDiv.style = `transform: translateX(${scrollPositionPics}px);`;
    activateNewDot('pic');
}


function activateNewDot(gogOrRev) {
    if (gogOrRev == 'pic') {
        let dot = document.getElementById(`blue-dot-${dotPosPics}`);
        dot.classList.add('blue-dot-active');
        return;
    }

    if (gogOrRev == 'rev') {
        let dot = document.getElementById(`blue-dot-rev-${dotPosReviews}`);
        dot.classList.add('blue-dot-active');
    }
}


function deactivateLastDot(gogOrRev) {
    if (gogOrRev == 'pic') {
        let dot = document.getElementById(`blue-dot-${dotPosPics}`);
        dot.classList.remove('blue-dot-active');
        return;
    }

    if (gogOrRev == 'rev') {
        let dot = document.getElementById(`blue-dot-rev-${dotPosReviews}`);
        dot.classList.remove('blue-dot-active');
    }
}