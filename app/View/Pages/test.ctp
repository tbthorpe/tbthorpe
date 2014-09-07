<html>
<head>
	<title>this is just a test</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<style type="text/css">
		body{
			margin:0;
		}
		#header{
			position:fixed;
			top:0;
			left:0;
			height:100px;
			width:100%;
			background:AntiqueWhite;
			z-index: 1000;
		}
		.hp_section{height:900px;}
		.hp_section a{
			text-decoration:none;
			font-size:16pt;
			width:140px;
		}
		#section1{background:url(/img/bg2.jpg);;}
		#section2{background:url(/img/bg1.jpg);}
		#section3{background:url(/img/bg3.jpg);;}
		#section4{background:#b2b2b2;}
		#section5{background:#222222;}

	</style>
</head>
<body>
	<div id="header">
		<a href="#section1" data-section="one">section 1</a>
		<a href="#section2" data-section="two">section 2</a>
		<a href="#section3" data-section="three">section 3</a>
		<a href="#section4" data-section="four">section 4</a>
		<a href="#section5" data-section="five">section 5</a>
	</div>

	<div id="section1" class="hp_section">

	</div>
	<div id="section2" class="hp_section">

	</div>
	<div id="section3" class="hp_section">
		<div id="section2_bottom" style="background:url(/img/bg1-dash.jpg) bottom center repeat-x; padding-bottom:28px;"></div>
	</div>
	<div id="section4" class="hp_section">

	</div>
	<div id="section5" class="hp_section">

	</div>
<script type='text/javascript'>
/* <![CDATA[ */
var configs = {"scrolling_speed":"1200","scrolling_easing":"easeInOutExpo","scrolling_hash":"1","sticky_menu":"1"};
var header = $('#header');
var header_height = header.outerHeight() - 2;
var scrollpals = $("html, body");
/* ]]> */
</script>
	<script type="text/javascript">

		$("#header a, #top_logo a, a[href='#home_section']").click( function( e ) {
			scroll = $(this).attr('href');
			scroll_to( scroll );
			e.preventDefault();
		} );
		// if ( hash && $("[data-section=" + hash.substring( 1 ) + "]").length ) {
		// 	scroll_to("[data-section=" + hash.substring( 1 ) + "]");
		// }
		// else if ( hash && $( hash ).length && $( hash ).hasClass("section") ) {
		// scroll_to( hash );
		// }
		function scroll_to( location ) {
			scrollto = ( ! configs.sticky_menu && location == "#home_section" ? 0 : $( location ).offset().top );
			scrollto = scrollto - ( configs.sticky_menu ? header_height : 0 );
			// if ( $( location ).attr("data-section") && configs.scrolling_hash ) {
				if (configs.scrolling_hash ) {
				window.location.hash = "#" + $( location ).attr("data-section");
				}
					scrollpals.animate(
					{
						scrollTop: scrollto
					}, {
						duration: parseInt( configs.scrolling_speed ),
						easing: configs.scrolling_easing,
						queue: false
					}
				);
			} 
	</script>

</body>
</html>