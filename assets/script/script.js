///////////VIDEO SEKTION
function hideVideoLayers(videoIndex) {
    let layerOne = document.getElementById(`blue-video-layer-${videoIndex}`);
    let layerTwo = document.getElementById(`poster-video-layer-${videoIndex}`);
    let sectionVideo = document.getElementById(`section-video-${videoIndex}`);
    layerOne.classList.add('hide-layer');
    layerTwo.classList.add('hide-layer');
    sectionVideo.classList.add('show-video');
    if (sectionVideo.paused == true) {
        sectionVideo.play();
    }
}

///////////////ACCORDION
let allAccordionsClosed = true;

document.addEventListener('click', e => {
    if (allAccordionsClosed)
        return;
    let classList = e.target.classList;
    let includesAccordion;
    console.log(classList)
    for (let i = 0; i < classList.length; i++) {
        includesAccordion = classList[i].includes('accordion');
        if (includesAccordion)
            return;
    }
    if (!includesAccordion) {
        closeOpenAccordions()
    }
});

function openCloseAccordion(accordionIndex) {
    if (accordionIsOpen(accordionIndex)) {
        closeAccordion(accordionIndex);
        return;
    }
    closeOpenAccordions();
    openAccordion(accordionIndex);
}

function openAccordion(accordionIndex) {
    let accordion = document.getElementById(`accordion-${accordionIndex}`);
    accordion.classList.add('open');
    allAccordionsClosed = false;
}

function closeAccordion(accordionIndex) {
    let accordion = document.getElementById(`accordion-${accordionIndex}`);
    accordion.classList.remove('open');
}

function closeOpenAccordions() {
    let accordion;
    for (let i = 0; i <= 5; i++) {
        accordion = document.getElementById(`accordion-${i}`);
        if (accordion.classList.contains('open')) {
            accordion.classList.remove('open');
        }
    }
    allAccordionsClosed = true;
}

function accordionIsOpen(accordionIndex) {
    let accordion = document.getElementById(`accordion-${accordionIndex}`);
    return accordion.classList.contains('open');
}


/////////////PIC SLIDER
let scrollPositionPics = 0;
let scrollPositionReviews = 0;
let dotPosPics = 1;
let dotPosReviews = 1;


function slidePicsForward() {
    let picDiv = document.getElementById('comp-pic-wrapper');
    if (scrollPositionPics <= -2172)
        return;
    deactivateLastDot('pic');
    dotPosPics++;
    scrollPositionPics = scrollPositionPics - 362;
    picDiv.style = `transform: translateX(${scrollPositionPics}px);`;
    activateNewDot('pic');
}


function slidePicsBackward() {
    let picDiv = document.getElementById('comp-pic-wrapper');
    if (scrollPositionPics >= 0)
        return;
    deactivateLastDot('pic');
    dotPosPics--;
    scrollPositionPics = scrollPositionPics + 362;
    picDiv.style = `transform: translateX(${scrollPositionPics}px);`;
    activateNewDot('pic');
}

/////GOOGLE REVIEW SLIDER
function slideReviewsForward() {
    let reviewDiv = document.getElementById('gog-rev-wrapper');
    if (scrollPositionReviews <= -3498)
        return;
    deactivateLastDot('rev');
    dotPosReviews++;
    if (window.screen.width <= 603) {
        scrollPositionReviews = scrollPositionReviews - 361;
    } else {
        scrollPositionReviews = scrollPositionReviews - 583;
    }
    reviewDiv.style = `transform: translateX(${scrollPositionReviews}px);`;
    activateNewDot('rev');
}


function slideReviewsBackward() {
    let reviewDiv = document.getElementById('gog-rev-wrapper');
    if (scrollPositionReviews >= 0)
        return;
    deactivateLastDot('rev');
    dotPosReviews--;
    if (window.screen.width <= 603) {
        scrollPositionReviews = scrollPositionReviews + 361;

    } else {
        scrollPositionReviews = scrollPositionReviews + 583;

    }
    reviewDiv.style = `transform: translateX(${scrollPositionReviews}px);`;
    activateNewDot('rev');
}


function activateNewDot(gogOrRev) {
    if (gogOrRev == 'pic') {
        let dot = document.getElementById(`blue-dot-${dotPosPics}`);
        if (dot == null)
            return;
        dot.classList.add('blue-dot-active');
        return;
    }

    if (gogOrRev == 'rev') {
        let dot = document.getElementById(`blue-dot-rev-${dotPosReviews}`);
        if (dot == null)
            return;
        dot.classList.add('blue-dot-active');
    }
}


function deactivateLastDot(gogOrRev) {
    if (gogOrRev == 'pic') {
        let dot = document.getElementById(`blue-dot-${dotPosPics}`);
        if (dot == null)
            return;
        dot.classList.remove('blue-dot-active');
        return;
    }

    if (gogOrRev == 'rev') {
        let dot = document.getElementById(`blue-dot-rev-${dotPosReviews}`);
        if (dot == null)
            return;
        dot.classList.remove('blue-dot-active');
    }
}