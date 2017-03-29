<?php include("header.php"); ?>

			<section id="content" class="contact" >
				<h1 class="visually-hidden">Liz Burton's Home Page</h1>
	 			<h2>Contact Info:</h2>
		 			<ul>
						<li id="email"><a href="mailto:liz.burton147@gmail.com"><span>liz.burton147@gmail.com</span></a></li>
						<li id="linkedin"><a href="https://www.linkedin.com/in/burtonux" target="_blank"><span>www.linkedin.com/in/burtonux</span></a></li>
						<li id="phone"><span>(773) 710-8686</span></li>
					</ul>
			</section>

<?php include("footer.php"); ?>
	<script>
			// function to set the height on fly
			var body = document.body,
		    html = document.documentElement;

			var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );

			 function autoHeight() {
			   $('#content').css('min-height', 0);
			   $('#content').css('min-height', (
			     height 
			     - $('#header').outerHeight( true ) 
			     - $('#footer').outerHeight( true )
			   ));
			 }

			 // onDocumentReady function bind
			 $(document).ready(function() {
			   autoHeight();
			 });

			 // onResize bind of the function
			 $(window).resize(function() {
			   autoHeight();
			 });
		</script>
