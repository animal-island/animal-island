<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="css/style3.css">
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
        @font-face {
        font-family: 'MyWebFont';
        src: url('./font/FriendsFu.woff') format('woff');
    }
  body
        {
            background-image: url("http://livedoor.blogimg.jp/panda_translator/imgs/6/2/621609aa.jpg");
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0px;
            padding: 0px;

        }
        .a{
                width:100%;
                height:100vh;
                margin-top: -10%;
                position:relative;
                background-color:rgba(0,0,0,0.5);
            }

        .box1{
            padding: 1em 1em 1.5em 1em;
            top:-3%;
            bottom: 0;
            right: 0;
            left: 0;
            margin: 2% auto 0;
            color: #5d627b;
            background: white;
            border-top: solid 5px #5d627b;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.22);
            text-align: center;
            width: auto;
            height: auto;
            position: absolute;
            float: left;
            width: 475px;
            height: 76vh;

        }

        .box1 p {
            margin: 0;
            padding: 0;

        }

        .box1 table {
            top: 0;
            left 0;
            right: 0;
            bottom 0;
           margin: auto;

        }
        #contents {
            overflow:hidden;
            width:auto;
            height: auto;
            margin: 10% 0 0 0;
            background:#fff;
        }


        a{
            top:10%;
            bottom: 0;
            right: 0;
            left: 0;

        }
        table{
            top:10%;
            bottom:0;
            right:0;
            left:20%;
            font-size: 15px;
            border-collapse: collapse;
        }

        td{
             border-bottom: dotted 1px;
        }
        ul{
            list-style-type:none;
            text-align: center;
        }
        li{
         text-align: center;
            width: 500px;

        }
        li.1{
            padding-left: 10px;
        }
        li.2{
           padding-left: 10px;
        }
        tr{
            border-bottom: 1px #000 dotted;
        }
          .s{
            font-family: "MyWebFont" !important;
        }



    </style>
</head>
<body>

<header>
	<div class="inner">
		<h1><a href="index.html">ろご</a></h1>
		<p class="summary">
		結果ページ
		</p>
	</div><!-- /.inner -->
</header>

<div id="spMenu"><span id="navBtn"><span id="navBtnIcon"></span></span></div>
<main role="main">
<nav>
	<div class="inner">
		<ul class="gnav">
              <li class="s"><a class="active" href="island.php">ほーむ</a></li>
              <li class="s"><a href="./confirm.php">とうろく</a></li>
              <li class="s"><a href="./list.php">いちらん</a></li>
              <li class="s"><a href="./update.php">こうしん</a></li>
              <li class="s"><a href="./logout.php">ろぐあうと</a></li>


		</ul>
	</div><!-- /.inner -->
</nav>


    <div class="a">
    <div id="contents">
           <?php $id = $_GET["id"];?>
          <div class="box1">

            <?php
            //DSN(Data Source Name)
            $dsn = "mysql:host=localhost;dbname=test;charset=utf8";
            $dbuser = "root";
            $dbpass = "";


            try{
                $pdo = new PDO($dsn, $dbuser, $dbpass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                //DefaultはERRMODE_SILENT
                $sql = "select * from ani_data where id = ?";
                $preStmt = $pdo->prepare($sql);
                $preStmt->bindValue(1,$id);
                $preStmt->execute();
                foreach($preStmt as $row){
            ?>

              <p>データ</p>
             <img src="<?php echo "./images/".$id.".jpg"; ?>" width="475px" height="300px">



              <table cellpadding="5">
                    <tr>
                        <th width="150px">ID:</th>
                       <?php echo "<td width='150px'>".$row['id']."</td>"; ?>

                    </tr>
                    <tr>
                        <th>名前:</th>
                        <?php echo "<td>".$row['name']."</td>"; ?>
                    </tr>
                    <tr>
                        <th>種類</th>
                        <?php echo "<td>".$row['ani_kind']."</td>"; ?>
                    </tr>
                   <tr>
                        <th>性別</th>
                        <?php echo "<td>".$row['sex']."</td>"; ?>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <?php echo "<td>".$row['age']."</td>"; ?>
                    </tr>
                    <tr>
                        <th>健康状態</th>
                        <?php echo "<td>".$row['health']."</td>"; }?>
                    </tr>

                </table>

              <ul>
             <?php
                 echo "<li class='ss'><a href='st.php?id=".$id. "'                        style= margin-left:-23% padding:10px list-style:none>";
                    echo "ストリーミング";
                    echo "</a>";
              ?>
                  <a href="list.php" style="margin-left:20px; padding:10px;">一覧へ</a>
                  <a href="island.php" style="margin-left:20px; padding:10px;">島全体図へ</a></li>

             </ul>

          </div>
        </div>
        </div>

          <?php
            }catch(Exception $e){
                echo $e->getMessage();
            }

            //切断
            $pdo = null;
            ?>


    </body>
</html>
