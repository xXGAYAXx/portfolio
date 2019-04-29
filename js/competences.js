$( document ).ready()
{
  var row1 = $('#row-1');
  var row2 = $('#row-2');
  var row3 = $('#row-3');
  var row4 = $('#row-4');

  var timeCompetences = 1500;
  row1.hide();
  row2.hide();
  row3.hide();
  row4.hide();

  $(window).scroll(function ()
  {
      if ($(this).scrollTop() >= 400)
      {
        row1.show(timeCompetences);
      }
      if ($(this).scrollTop() >= 1000)
      {
        row2.show(timeCompetences);
      }
      if ($(this).scrollTop() >= 1600)
      {
        row3.show(timeCompetences);
      }
      if ($(this).scrollTop() >= 2200)
      {
        row4.show(timeCompetences);
      }

  });

}
