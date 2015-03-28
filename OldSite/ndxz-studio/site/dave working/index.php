<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>

<title>Dave Folley: Graphic Designer >> Idea Salesman</title>

 

<link rel='stylesheet' href='<%baseurl%><%basename%>/site/<%obj_theme%>/style.css' type='text/css' />
<!--[if lte IE 6]>
<link rel='stylesheet' href='<%baseurl%><%basename%>/site/<%obj_theme%>/ie.css' type='text/css' />
<![endif]-->
<plug:front_lib_css />
<plug:front_dyn_css />
<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/jquery.js'></script>
<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/cookie.js'></script>
<plug:front_lib_js />
<script type='text/javascript'>
path = '<%baseurl%>/files/gimgs/';

$(document).ready(function()
{
	setTimeout('move_up()', 1);
});
</script>
<plug:front_dyn_js />
<plug:backgrounder color='<%color%>', img='<%bgimg%>', tile='<%tiling%>' />
<link href='http://fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
</head>

<body class='section-<%section_id%>'>
	<div class='container'>
		<div id='menu'>


		<%obj_itop%>
		<plug:front_index />
		<%obj_ibot%>

<!-- you must provide a link to Indexhibit on your site someplace - thank you -->
			<div id='bottom-menu'>
				<ul>
				<li>&#169; 2012 David Folley</li>
				<li>Built with <a href='http://www.indexhibit.org/'>Indexhibit</a></li>
				</ul>
			</div>
		</div>	
		<div id='content'>

			<div class='img-container'>
				<!-- text and image -->
				<plug:front_exhibit />
				<!-- end text and image -->


			</div>
		</div>
	</div>

</body>
</html>