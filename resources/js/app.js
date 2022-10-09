// noinspection JSCheckFunctionSignatures
import Alpine from 'alpinejs';
import GLightbox from 'glightbox';

import './bootstrap';


window.Alpine = Alpine;

Alpine.start();

const initSlider = () => {
    const elm = document.querySelector('.slider');
    if (!elm) return;

    const container = elm.querySelector('.slider-content-list');
    if (!container) return;

    Array.from(container.children).forEach((target) => target.addEventListener('click', () => {
        Array.from(container.children).forEach((item) => item.classList.remove('active'));

        target.classList.add('active');
    }));
};


initSlider();

GLightbox({
    selector: '.glightbox',
});
