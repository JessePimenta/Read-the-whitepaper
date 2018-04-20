$(function(){

  // init Isotope
  var qsRegex;

  var $grid = $('.grid').isotope({
  itemSelector: '.showcase-item',
  // layoutMode: 'fitRows',
  getSortData: {
    name: '.name'
  },
  filter: function() {
  return qsRegex ? $(this).text().match( qsRegex ) : true;
}
});

// use value of search field to filter
var $quicksearch = $('.quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
  $grid.isotope();
}, 200 ) );

function debounce( fn, threshold ) {
  var timeout;
  threshold = threshold || 100;
  return function debounced() {
    clearTimeout( timeout );
    var args = arguments;
    var _this = this;
    function delayed() {
      fn.apply( _this, args );
    }
    timeout = setTimeout( delayed, threshold );
  };
}


var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  ing: function() {
    var tags = $(this).find('.tags').text();
    return tags.match( /ing$/ );
  },
  scam: function() {
    var tags = $(this).find('.tags').text();
    return tags.match( /cam$/ );
  },
  topTwelve: function() {
    var tags = $(this).find('.tags').text();
    return tags.match( /lve$/ );
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
