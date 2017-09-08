
<!-- hr footer -->
<div class="container">
    <div class="footer">
        <hr>
    </div>
</div>
<!-- / hr footer -->


<!-- site-footer -->
    <div class="img-footer">
        <center>
            <img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/DonSepe_Logo.png" alt="Logo" class="footer-responsive">
            <p class="footer-text">COPYRIGHT <?php echo date('Y'); ?>. ALL RIGHTS RESERVED.</p>
        </center>
    </div>
<!-- /site-footer -->



<script>

// Navigation Bar
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

new WOW().init();

</script>
<?php wp_footer();?>
</body>
</html>