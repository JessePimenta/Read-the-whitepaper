$(function(){

  // init Isotope

  var $grid = $('.grid').isotope({
  itemSelector: '.showcase-item',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name'
  }
});

var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ing: function() {
    var tags = $(this).find('.tags').text();
    return tags.match( /ing$/ );
  },
  scam: function() {
    var tags = $(this).find('.tags').text();
    return tags.match( /cam$/ );
  }
};

  $('.sort-by-button-group').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});

$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  // use filter function if value matches
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});


});
