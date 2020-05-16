$(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    var $sections = $('.form-section');
    $sections
    .removeClass('current')
    .eq(index)
    .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    var $sections = $('.form-section');
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
    var body = $("html, body");
    body.stop().animate({scrollTop:0}, 1000, 'swing');
  });

  // Next button goes forward iff current block validates
  $('.form-navigation .next').click(function() {
    $('form').parsley().whenValidate({
      group: 'block-' + curIndex()
    }).done(function() {
      navigateTo(curIndex() + 1);
      var body = $("html, body");
      body.stop().animate({scrollTop:0}, 1000, 'swing');
    });
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });

  navigateTo(0); // Start at the beginning

});