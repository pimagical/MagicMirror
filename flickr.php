<html>
<head>
<!-- page refresh -->
<?php header( "refresh:30;" ); ?>
</head>
<body>
<!-- change id with own flickr username (use http://idgettr.com/) -->			
	<div id="flickrImages">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.flickrush.js"></script>
	<script type="text/javascript">  
		$(function() {
			$('div#flickrImages').flickrush({
				limit:1,
				id:'34079519@N07',
				random:true,
				ssl:true,
				size:''
			}); 
		});
		</script>	
	</div>	
	
</body>
</html>
