$(document).ready(function() {
    var $text1 = $('#text1');
    var $text2 = $('#text2');
  
    setInterval(function() {
      $text1.fadeOut(1000, function() {
        $text2.fadeIn(1000);
      });
  
      setTimeout(function() {
        $text2.fadeOut(1000, function() {
          $text1.fadeIn(1000);
        });
      }, 5000);
    }, 10000);
  });