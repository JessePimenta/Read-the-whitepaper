$(function(){

  var element = $('.projects');
  var url     = element.data('page') + '.json';
  var limit   = parseInt(element.data('limit'));
  var offset  = limit;

  $('.load-more').on('click', function(e) {

    $.get(url, {limit: limit, offset: offset}, function(data) {

      if(data.more === false) {
        $('.load-more').hide();
      }

      element.children().last().after(data.html);

      offset += limit;

    });

  });


  // init Isotope
  var $grid = $('.grid').isotope({
    getSortData: {
      name: '.name',
      trending: '.trending',
      category: '[data-category]',
    }
  });

  $('.sort-by-button-group').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});


});
