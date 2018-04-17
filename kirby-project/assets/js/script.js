$(function(){

  // init Isotope
  var $grid = $('.grid').isotope({
    layoutMode: 'fitRows',
    itemSelector: '.showcase-item',
    getSortData: {
      name: '.name',
      category: '[data-category]',
    },
    filterTrending: function() {
    // _this_ is the item element. Get text of element's .tags
    var tags = $(this).find('.tags').text();
    // return true to show, false to hide
    return name.match( /trending$/ );
  }

  });

  var filterFns = {
  // show if tags contains trending
  filterTrending: function() {
    var tags = $(this).find('tags').text();
    return tags.match( /trending$/ );
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


});
