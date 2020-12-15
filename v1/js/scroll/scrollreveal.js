var custom = {
    distance: '150%',
    origin: 'bottom',
    opacity: null,
    duration: 1300
};
var customimg = {
    distance: '160%',
    origin: 'bottom',
    opacity: .2,
    delay:1000,
    duration:1000
};

ScrollReveal().reveal('.enc', custom);
ScrollReveal().reveal('p', custom);
ScrollReveal().reveal('.unoimg', customimg);
ScrollReveal().reveal('.dosimg', customimg);
ScrollReveal().reveal('.tresimg', customimg);
