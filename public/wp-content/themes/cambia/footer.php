<?php /**
 * @package wordpress
 *
 @subpackage Cambia Information Group
  */
?>


<?php  if( ! (is_front_page() || is_page( 'research-in-action' ) || is_page( 'full-service-solutions' ))) {?>
	<!-- Cambia Business -->
	<section id="cambia-business">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
			<div class="cambia-business-text">
			<h2>What can Cambia do for your business?</h2>
			<ul class="business-links">
			<li><a href="<?php echo home_url();?>/research-in-action/" class="col-md-12 green-btn">Research in Action</a></li>
			<li><a href="<?php echo home_url();?>/contact-us/" class="col-md-12 blue-btn">Contact Us</a></li>
			</ul>
			</div>
			</div>
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- Cambia Business -->
<?php } ?>
	
	<!-- Footer -->
		<section id="footer">
		<div class="container">
		
		<?php /*?><?php if(is_front_page()) { ?>
		<div class="row">
		<div class="col-md-8">
		<div class="subscribe-text">
		<h3>Regular updates from Cambia Information Group.</h3>
		<p>Subscribe for all latest news, events and offers.</p>
		</div>
		</div>
		
		<div class="col-md-4">
			<a data-toggle="modal" href="#my-modal" class="subscribe-btn green-btn">Subscribe</a>
		</div>
		
		</div>
		
		
		
		<div class="row">
		<div class="col-md-12">
		<hr>
		</div>
		</div>
		<?php } ?><?php */?>
		
		
			<div class="row">
			
			<div class="col-md-4">
			<a href="<?php echo home_url();?>" class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/cambia-information-logo.png" alt=""></a>
			</div>
			
			<div class="col-md-8">
<?php wp_nav_menu( array( 'menu' => 'Footer Menu','items_wrap'  => '<ul class="footer-links" id="jsddm">%3$s</ul>' ) ); ?>
		    </div>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- Footer -->
	
	
	<!-- Copyright -->
	<section id="copyright">
		<div class="container">
			
			<div class="row">
				<div>
									<p class="copyright-text">
	<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer_esomar_content') ) ?>				
						<?php /*?><img src="https://www.webii.net/cambia/wp-content/uploads/2018/06/logo-esomar.png" alt="ESOMAR Member" style="float:left;padding:5px;" />As an ESOMAR Member, I comply with the <a href="http://www.esomar.org/knowledge-and-standards/codes-and-guidelines.php" target="_blank"></a>ICC/ESOMAR Code on Market and Social Research and ESOMAR World Research Guidelines</a>.
					Cambia Information Group is committed to GDPR compliance, and we provide GDPR related assurances in our contractual commitments.<?php */?>
				</p>
				</div>
				
				
				
		<div style="clear:both;"></div>
			<div class="col-md-6 col-sm-12">
				
			<p class="copyright-text">&copy; Cambia Information Group <?php echo date('Y');?>. All right reserved.</p>
			</div>
			
			<div class="col-md-6 col-sm-12">
			<?php wp_nav_menu( array( 'menu' => 'Footer Bottom Links','items_wrap'  => '<ul class="privacy-links" id="jsddm">%3$s</ul>' ) ); ?>			
		    </div>
		
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- Copyright -->

	
	<!-- Newsletters Modal -->
	
<div class="modal fade subscribe-modal" id="my-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		
		<img class="email-icon" src="<?php echo get_template_directory_uri(); ?>/img/email-icon.png" alt="">
        <h4 class="modal-title">Subscribe Our Newsletter</h4>
		<p>Register for all latest news, events and offers.</p>
      </div>
      <div class="modal-body">
        <input type="text" class="subscribe-input" name="user" placeholder="Enter your email here">
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="green-btn">Subscribe</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	
	
	
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js"></script>
<script>
	jQuery(document).ready(function () {
	    jQuery('.mobile_menu .menu_nav').meanmenu();
	});
</script>

 <script>
 $(window).scroll(function(){
  if ($(window).scrollTop() >= 150) {
    $('.mean-bar ').addClass('is-sticky');
	  $('.mobile_logo ').addClass('is-sticky');
	    $('.mean-nav ').addClass('is-sticky');
	  
	  
   }
   else {
    $('.mean-bar ').removeClass('is-sticky');
	 $('.mobile_logo  ').removeClass('is-sticky');
	   $('.mean-nav ').removeClass('is-sticky');
	   
   }
});


 </script>   
 
 
 
 <?php if(is_front_page()) { ?>
   <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


  <!-- FlexSlider -->
  <script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

<?php } ?>

 
<?php /*?>	<?php if(is_front_page()) { ?>
	<script>
	// Grab data attributes from video-wrapper
var videoID = $(".video-wrapper").data("video-id");
var videoYouTubeLink = $(".video-wrapper").data("video-youtube-link");
var videoStart = $(".video-wrapper").data("video-start");
var videoEnd = $(".video-wrapper").data("video-end");
var videoWidthAdd = $(".video-wrapper").data("video-width-add");
var videoHeightAdd = $(".video-wrapper").data("video-height-add");

// Create video script element
var tag = document.createElement('script');
  tag.src = 'https://www.youtube.com/player_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Prepend expander if data attr is yes
//if (videoYouTubeLink === 'y') {
// $(".video-wrapper").prepend('<a href="https://www.youtube.com/watch?v=' + videoID + '" class="video-expand" target="_blank">View on Youtube</a>');
//}

// Setup the Youtube TV with player defaults
var tv,
  playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 1, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
var vid = {'videoId': videoID, 'startSeconds': videoStart, 'endSeconds': videoEnd, 'suggestedQuality': 'hd720'};

function onYouTubePlayerAPIReady(){
  tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
}

function onPlayerReady(){
  tv.loadVideoById(vid);
  tv.mute();
}

function onPlayerStateChange(e) {
  if (e.data === 1){
    $('#tv').addClass('active');
  } else if (e.data === 0){
    tv.seekTo(vid.startSeconds)
  }
}

function vidRescale(){
  var w = $(window).width() + videoWidthAdd,
    h = $(window).height() + videoHeightAdd;
  if (w/h > 16/9){
    tv.setSize(w, w/16*9);
    $('.tv .screen').css({'left': '0px'});
  } else {
    tv.setSize(h/9*16, h);
    $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
  }
}

$(window).on('load resize', function(){
  vidRescale();
});
</script>

<?php } ?>
<?php */?>
<?php wp_footer();?>	

</body>
</html>


