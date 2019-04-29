$( document ).ready()
{
  // DOM
  var navbar = $('#nav-box');
  var navList = $('.nav-list');
  var showMenu = $('#show-menu');
  var showMenuBtn = $('.show-menu-btn');
  var hideMenuBtn = $('.hide-menu-btn');
  var nav = $('nav');
  var logo = $('#logo');

  // VARIABLES
  var time = 1500;

  // HIDE ALL ELEMENTS
  logo.hide();
  nav.hide();
  showMenu.hide();
  hideMenuBtn.hide();

  // SHOW menu btn
  showMenu.fadeIn(time);

  // NAV CLICK EVENT (show nav, hide the "showMenu Btn" and show the "hideMenu Btn")
  showMenuBtn.on('click', function(){
    navbar.css({backgroundColor: 'white'});
    showMenu.hide();
    logo.fadeIn(time);
    nav.fadeIn(time);
    hideMenuBtn.show(time);
  });
  // NAV CLICK EVENT (show the "showMenu Btn" and hide nav + the "hideMenu Btn")
  navList.on('click', function(){
    navbar.css({backgroundColor: 'rgba(255, 255, 255, 0.3)'});
    showMenu.fadeIn();
    nav.hide();
    logo.hide();
    hideMenuBtn.hide(time);
  });
  // NAV CLICK EVENT (show nav and hide the "hideMenu Btn" to show the "showMenu Btn")
  hideMenuBtn.on('click', function(){
    navbar.css({backgroundColor: 'rgba(255, 255, 255, 0.3)'});
    showMenu.fadeIn();
    nav.hide();
    logo.hide();
    hideMenuBtn.hide(time);
  });


}
