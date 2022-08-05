<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
<script>


$(function() {
    var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});








</script>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="adminprofile.css">
<div class="container">
	<div class="row">
    <h1><font color="#7dff7d"><b>Admin Profile </b></font></h1>
	<!-- Contenedor -->
	<ul id="accordion" class="accordion">
    <li>
<div class="col col_4 iamgurdeep-pic">
<img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="imagesprofile.jpg">
<div class="edit-pic">
<a href="https://web.facebook.com/anshuman.singh.963434" target="_blank" class="fa fa-facebook"></a>
<a href="https://www.instagram.com/anshuman_singh05/" target="_blank" class="fa fa-instagram"></a>
</div>
<div class="username">
    Anshuman Singh  
    <p><i class="fa fa-briefcase"></i> Web Developer</p>
    <a href="https://web.facebook.com/anshuman.singh.963434" target="_blank" class="btn-o"> <i class="fa fa-user-plus"></i> Add Friend </a>
    <a href="https://www.instagram.com/anshuman_singh05/" target="_blank"  class="btn-o"> <i class="fa fa-plus"></i> Follow </a>
     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-ellipsis-v pull-right"></span></a>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Video Call <i class="fa fa-video-camera"></i></a></li>
            <li><a href="#">Poke <i class="fa fa-hand-o-right"></i></a></li>
            <li><a href="#">Report <i class="fa fa-bug"></i></a></li>
            <li><a href="#">Block <i class="fa fa-lock"></i></a></li>
          </ul>
        </li>
      </ul>
</div>
</div>
    </li>
		<li>
			<div class="link"><i class="fa fa-globe"></i>About<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#"><i class="fa fa-calendar left-none"></i> Date of Birth : 23/09/1996</a></li>
				<li><a href="#">Address : Faizabad,Uttar Pardesh</a></li>
				<li><a href="mailto:anshuman.as05@gmail.com">Email : anshuman.as05@gmail.com</a></li>[[
				<li><a href="#">Phone : 8188816041</a></li>
			</ul>
		</li>
		<li class="default open">
			<div class="link"><i class="fa fa-code"></i>Professional Skills<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#"><span class="tags">Adobe Photoshop</span> <span class="tags">Corel Draw</span> <span class="tags">CSS</span> <span class="tags">Css 3</span> 
                <span class="tags">Graphic Design</span> <span class="tags">HTML</span> <span class="tags">HTML5</span> <span class="tags">JavaScript</span> 
                <span class="tags">Twitter bootstrap</span> <span class="tags">bootstrap</span> <span class="tags">User Interface Design</span> <span class="tags">Wordpress</span></li></a>
			</ul>
		</li>
	</ul>
	</div>    
</div>