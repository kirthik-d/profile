

// ===== Scroll to Top ==== 
$(window).scroll(function() {
  if ($(this).scrollTop() > 50) {        // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
    scrollTop: 0                       // Scroll to top of body
  }, 500);
});

/*
 <?php
  // the message
  $msg = "First line of text\nSecond line of text";
 
  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);
 
  // send email
  mail("someone@example.com","My subject",$msg);
  ?>
*/