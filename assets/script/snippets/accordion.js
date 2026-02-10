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