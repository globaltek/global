(function(){
  function callforpapersHandler($) {
    var content = $('.content .marquee'),
        height = content.height(),
        active = true,
        timer = true;

    setInterval(function(){
      if(timer && active) {
          active = false;
          if(content.position().top <= -height) { content.css({ 'top': height }); }
          content.animate({ 'top': content.position().top-10 });
		  active = true;
        }
    }, 500);

    $('.marquee').on('mouseover', function(){ timer = false; });
    $('.marquee').on('mouseout', function(){ timer = true; });
  }

  jQuery(document).ready(function(){ callforpapersHandler(jQuery); });
}());
