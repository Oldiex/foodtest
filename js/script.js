"use strict";
require('es6-promise').polyfill();
import 'nodelist-foreach-polyfill';

import tabs from './modules/tabs';
import modal from './modules/modals';
import timer from './modules/timer';
import cards from './modules/cards';
import calc from './modules/calc';
import forms from './modules/forms';
import slider from './modules/slider';
import {showModal} from './modules/modals';
import okok from './modules/addcash';

document.addEventListener('DOMContentLoaded', () => {


    tabs('.tabheader__item', '.tabcontent', '.tabheader__items', 'tabheader__item_active');
    modal('[data-modal]', '.modal');
    timer('.timer', '2022-08-12');
    cards();
    forms('form');
    slider({
        container: '.offer__slider',
        slide:'.offer__slide',
        nextArrow: '.offer__slider-next',
        prevArrow: '.offer__slider-prev',
        totalCount: '#total',
        currentCount:'#current',
        wrapper: '.offer__slider-wrapper',
        slideField:'.offer__slider-inner'
    });
    calc();
    okok();

});
