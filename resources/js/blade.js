function scrollToTop() {
    window.scrollTo(0, 0);
}

function scrollToProject() {
    const id = 'project';
    const yOffset = -70;
    const element = document.getElementById(id);
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: 'smooth'});
}

function scrollToContact() {
    const id = 'contact';
    const yOffset = -100;
    const element = document.getElementById(id);
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: 'smooth'});
}

function scrollToAbout() {
    const id = 'about';
    const yOffset = -70;
    const element = document.getElementById(id);
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: 'smooth'});
}
