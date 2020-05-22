'use strict';

$(function(){
  $('.header-sp__menu').on('click', function() {
    $('.header-sp__menu').toggleClass("header-sp__menu--open");
    $('.overlay-area').toggleClass("overlay-area--open");
  });
});