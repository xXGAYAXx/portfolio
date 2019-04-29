$( document ).ready()
{
  // DOM
  var skills = $('.skills');
  var creationBoxVitrine = $('#creation-box-vitrine');
  var creationBoxApplication = $('#creation-box-application');
  var creationBoxDynamique = $('#creation-box-dynamique');
  var creationBoxBlog = $('#creation-box-blog');
  var refonteBoxDesign = $('#refonte-box-design');
  var refonteBoxFunctions = $('#refonte-box-functions');
  var refonteBoxSecurite = $('#refonte-box-securite');
  var refonteBoxAz = $('#refonte-box-az');

  // VARIABLES
  var time = 1500;

  // HIDE ALL ELEMENTS

  skills.hide();
  creationBoxVitrine.hide();
  creationBoxApplication.hide();
  creationBoxDynamique.hide();
  creationBoxBlog.hide();
  refonteBoxDesign.hide();
  refonteBoxFunctions.hide();
  refonteBoxSecurite.hide();
  refonteBoxAz.hide();

  $(window).scroll(function ()
  {

      if ($(this).scrollTop() >= 200)
      {
        skills.slideDown(time);
      }
  		if ($(this).scrollTop() >= 1050)
  		{
  			creationBoxVitrine.show(time);
  		}
      if ($(this).scrollTop() >= 1450)
  		{
  			creationBoxApplication.show(time);
  		}
      if ($(this).scrollTop() >= 1950)
  		{
  			creationBoxDynamique.show(time);
  		}
      if ($(this).scrollTop() >= 2450)
  		{
  			creationBoxBlog.show(time);
  		}
  		if ($(this).scrollTop() >= 3400)
  		{
  			refonteBoxSecurite.show(time);
        refonteBoxDesign.show(time);
  		}
      if ($(this).scrollTop() >= 3700)
  		{
  			refonteBoxFunctions.show(time);
        refonteBoxAz.show(time);
  		}
  });

}
