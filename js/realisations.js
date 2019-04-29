
$( document ).ready()
{
  var realisationMacon = $('#realisation-box-macon');
  var realisationEcrivain = $('#realisation-box-ecrivain');
  var realisationVelib = $('#realisation-box-velib');
  var realisationTherapeute = $('#realisation-box-therapeute');
  var timeRealisation = 2000;
  realisationMacon.hide();
  realisationEcrivain.hide();
  realisationVelib.hide();
  realisationTherapeute.hide();

  $(window).scroll(function ()
  {

      if ($(this).scrollTop() >= 500)
      {
        realisationMacon.show(timeRealisation);
        realisationEcrivain.show(timeRealisation);
      }

      if ($(this).scrollTop() >= 1000)
      {
        realisationVelib.show(timeRealisation);
        realisationTherapeute.show(timeRealisation);
      }

  });

}
