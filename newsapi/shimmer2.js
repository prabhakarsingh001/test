'use strict';

const cardImage = document.getElementById('card-img');
const cardTitle = document.getElementById('card-title');
const cardIntro = document.getElementById('card-intro');

setTimeout(() => {
    cardImage.classList.remove('skeleton');
    cardTitle.classList.remove('skeleton');
    cardIntro.classList.remove('skeleton');

    cardImage.innerHTML = '<';
    cardTitle.innerText = '';
    cardIntro.innerText = '';

}, 3000);