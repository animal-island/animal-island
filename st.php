<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="css/style1.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.scrollshow.js"></script>
<script type="text/javascript" src="js/jquery.rollover.js"></script>
<script type="text/javascript" src="js/jquery.slidewide.js"></script>
<script>
$(function($){
	if ($('#spMenu').css('display') == 'block') {
		$('html').smoothscroll({easing : 'swing', speed : 1000, margintop : 10, headerfix : $('header')});
	} else {
		$('html').smoothscroll({easing : 'swing', speed : 1000, margintop : 10, headerfix : $('nav')});
	}
	$('.totop').scrollshow({position : 500});
	$('.slide').slidewide({
		touch         : true,
		touchDistance : '80',
		autoSlide     : true,
		repeat        : true,
		interval      : 3000,
		duration      : 500,
		easing        : 'swing',
		imgHoverStop  : true,
		navHoverStop  : true,
		prevPosition  : 0,
		nextPosition  : 0,
		viewSlide     : 1,
		baseWidth     : 980,
		navImg        : false,
		navImgCustom  : false,
		navImgSuffix  : ''
	});
	$('.slidePrev img').rollover();
	$('.slideNext img').rollover();
	});
</script>
<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
    <style>
        #main{
            width:100%;
        }
        #sub{
            width:30%;
        }
        div.sample {
                        width:250px; height:70vh;
                         padding:10px; border:1px solid black;
                        background-color:lightgray;
                        float: right;
                        
                        margin-right: 11%;
                        margin-bottom: -200px;
                       } 
            .st{
                padding: 100px,0,0,0;
                width: 896px;
                height: 503px;
                margin-left: 11%;
                
            }
    </style>
</head>
<body>
    <?php $id = $_GET["id"];?>

<header>
	<div class="inner">
		<h1>ろご</a></h1>
		<p class="summary">
		ストリーミングページ
		</p>
	</div><!-- /.inner -->
</header>

<div id="spMenu"><span id="navBtn"><span id="navBtnIcon"></span></span></div>
<nav>
	<div class="inner">
		<ul class="gnav">
			<li><a href="index.html">ホーム</a></li>
					<li><a href="island.php">topへ</a></li>
					 <?php
                         echo "<li><a href='result.php?id=".$id. "'>";
                            echo "結果へ";
                            echo "</a>";
                      ?>
            </li>
		</ul>
	</div><!-- /.inner -->
</nav>



<div id="contents">
	<div id="main">
         
        <video src="./7902.t.mp4"  class="st"></video>
        <div class="sample" >でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br>でーた<br></div>
	
	</div><!-- /#main -->
    <div id="sub">
		
	</div><!-- /#sub -->
	
</div><!-- /#contents -->

<footer>
	<div class="copyright">Copyright &#169; 20XX - 20XX SITENAME All Rights Reserved.</div><!-- /.copyright -->
</footer>

<div class="totop"><a href="#"><img src="images/totop.png" alt="ページのトップへ戻る"></a></div><!-- /.totop -->
</body>
</html>