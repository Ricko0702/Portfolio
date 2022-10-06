function scrollToTop() {
    window.scrollTo(0,0);
}

function scrollToAbout(){
    // const id = 'about';
    const yOffset = -150;
    const element = document.getElementById('about');
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: "smooth"});
}

function scrollToProject(){
    const yOffset = -75;
    const element = document.getElementById('project');
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: "smooth"});
}

function scrollToContact(){
    const yOffset = -50;
    const element = document.getElementById('contact');
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: "smooth"});
}
