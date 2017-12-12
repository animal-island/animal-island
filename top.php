<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>home</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
    @font-face {
        font-family: 'MyWebFont';
        src: url('./font/FriendsFu.woff') format('woff');
    }
        
  html body {
        margin: 0px;
        padding: 0px;
        
        
    }
        
    .map{
          background-size: cover;
    }
      .map .rect{
        position:absolute;
        width: 200px;
      }
      .map #main {
        width: 100%;
        height: 100%;
      }
      .map .sub {
        width: 30px;
      }

      .s-balloon {
        /*バルーンのスタイル*/

        /*表示位置を指定*/
        position: absolute;
        bottom: 0px;
        left: 0px;

        /*非表示*/
        display: none;
        opacity: 0;

        /*表示スタイル*/
        padding: 5px;
        border-radius: 5px;
        color: white;
        background-color: #38b48b;
        /*影をつける*/
        /*box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.5),
          inset 0 1px 0 rgba(255, 255, 255, 0.8),
          inset 1px 0 0 rgba(255, 255, 255, 0.3),
          inset -1px 0 0 rgba(255, 255, 255, 0.3),
          inset 0 -1px 0 rgba(255, 255, 255, 0.2);*/

        /*アニメーション*/
        animation-duration: 0.3s;
        animation-name: show-balloon;
      }

      .s:hover .s-balloon {
        /*ホバー時のバルーン表示*/
        display: inline-block;
        opacity: 1;
        bottom: 50px;
      }

      .s-balloon::before {
        /*吹き出し部分の三角形*/
        content: "";
        position: absolute;
        top: 97%;
        left: 10px;
        border: 6px solid transparent;
        border-top: 6px solid #38b48b;
      }

      @keyframes show-balloon {
        /*バルーンアニメーション*/
        0% {
          display: none;
          opacity: 0;
          bottom: 0px;
        }
        1% {
          display: inline-block;
          opacity: 0;
          bottom: 0px;
        }
        100% {
          display: inline-block;
          opacity: 1;
          bottom: 50px;
        }
      }
        
        .tgt {opacity: 0;}
        .tgt span{opacity: 0;}
        
        h1{
            font-size: 40px;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            margin: auto;
        }

    ul {
  margin: 0;
  padding: 0;
	list-style: none;
}

/* contents */
.contents {
    display: table;
    width: 100%;
   
    padding: 0;
    margin: 0;
    background: #f6bc60;
    box-shadow: 0 0 50px 0 rgba(0,0,0,.8);
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transition-delay: .3s;
    transition-delay: .3s;
    -webkit-transition-duration: .5s;
    transition-duration: .5s;
}

.contents__inner {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.contents__inner h1 {
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 40px;
    font-family: Futura, "Century Gothic", "helvetica neue", arial, sans-serif !important;
    font-style: italic;
}

.contents__inner p {
    margin-top: 20px;
    color: #fff;
    font-size: 20px;
}

.contents__inner p span {
    border-bottom: 1px solid #fff;
}

/* drawer menu */
.drawer-menu {
    box-sizing: border-box;
    position: fixed;
    top: 0;
    right: 0;
    width: 300px;
    height: 100%;
    padding: 120px 0;
    background: #222;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transition-duration: .5s;
    transition-duration: .5s;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform-origin: right center;
    -ms-transform-origin: right center;
    transform-origin: right center;
    -webkit-transform: perspective(500px) rotateY(-90deg);
    transform: perspective(500px) rotateY(-90deg);
    opacity: 0;
}

.drawer-menu li {
    text-align: center;
}

.drawer-menu li a {
    display: block;
    height: 50px;
    line-height: 50px;
    font-size: 14px;
    color: #fff;
    -webkit-transition: all .8s;
    transition: all .8s;
}

.drawer-menu li a:hover {
    color: #1a1e24;
    background: #fff;
}

/* checkbox */
.check {
    display: none;
}

/* menu button - label tag */
.menu-btn {
    position: fixed;
    display: block;
    top: 40px;
    right: 40px;
    display: block;
    width: 40px;
    height: 40px;
    font-size: 10px;
    text-align: center;
    cursor: pointer;
    z-index: 3;
}

.bar {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 40px;
    height: 1px;
    background: #fff;
    -webkit-transition: all .5s;
    transition: all .5s;
    -webkit-transform-origin: left top;
    -ms-transform-origin: left top;
    transform-origin: left top;
}

.bar.middle {
    top: 15px;
    opacity: 1;
}

.bar.bottom {
    top: 30px;
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
}

.menu-btn__text {
    position: absolute;
    bottom: -15px;
    left: 0;
    right: 0;
    margin: auto;
    color: #fff;
    -webkit-transition: all .5s;
    transition: all .5s;
    display: block;
    visibility: visible;
    opacity: 1;
}

.menu-btn:hover .bar {
    background: #999;
}

.menu-btn:hover .menu-btn__text {
    color: #999;
}

.close-menu {
    position: fixed;
    top: 0;
    right: 300px;
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,0);
    cursor: url(http://theorthodoxworks.com/demo/images/cross.svg),auto;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    visibility: hidden;
    opacity: 0;
}

/* checked */
.check:checked ~ .drawer-menu {
    -webkit-transition-delay: .3s;
    transition-delay: .3s;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1;
    z-index: 2;
}

.check:checked ~ .contents {
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: translateX(-300px);
    -ms-transform: translateX(-300px);
    transform: translateX(-300px);
}

.check:checked ~ .menu-btn .menu-btn__text {
    visibility: hidden;
    opacity: 0;
}

.check:checked ~ .menu-btn .bar.top {
    width: 56px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.check:checked ~ .menu-btn .bar.middle {
    opacity: 0;
}

.check:checked ~ .menu-btn .bar.bottom {
    width: 56px;
    top: 40px;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.check:checked ~ .close-menu {
    -webkit-transition-duration: 1s;
    transition-duration: 1s;
    -webkit-transition-delay: .3s;
    transition-delay: .3s;
    background: rgba(0,0,0,.5);
    visibility: visible;
    opacity: 1;
    z-index: 3;
}
        
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #2f6833;
    font-family: "MyWebFont" !important;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 19px 16px 14px 16px;
    text-decoration: none;
    margin-bottom: -6px;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
        
        .r{
      float:right;
      }
        
        
    input[type="checkbox"].on-off{
    display: none;
}

.menu ul {
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    margin: 0;
    padding: 0;
    list-style: none;
}

.menu li {
    padding: 5px;
   

}

input[type="checkbox"].on-off + ul{
    height: 0;
    overflow: hidden;
}

input[type="checkbox"].on-off:checked + ul{
    height: 200px;
}
        h1{
            font-family: "MyWebFont" !important;
        }

  </style>

  </head>


  <body class="drawer drawer--left">

        <?php
            //DSN(Data Source Name)
            $dsn = "mysql:host=localhost;dbname=gp41;charset=utf8";
            $dbuser = "root";
            $dbpass = "";
            $arrayList = array();
            $array2 = array();
           

            try{
                $pdo = new PDO($dsn, $dbuser, $dbpass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                //DefaultはERRMODE_SILENT
                $sql = "select * from ani_data";
                $preStmt = $pdo->prepare($sql);
                $preStmt->execute();
                $arrayList = $preStmt->fetchAll();
                
            //foreach($preStmt as $row){ 
                //$array = array(array('id'=>$row["id"], 'name'=>$row["name"], 'url'=>"./".$row["url"]));
              //  $arrayList = array_merge($arrayList,array('id'=>$row["id"], 'name'=>$row["name"], 'url'=>"./".$row["url"]));
            //}
               
               ?>
	
	<main role="main">
        <header>
            <ul class="menu">
              <li><a class="active" href="#">ほーむ</a></li>
              <li><a href="./confirm.php">とうろく</a></li>
              <li><a href="./list.php">いちらん</a></li>
              <li><a href="./update.php">こうしん</a></li>
              <li><a href="./logout.php">ろぐあうと</a></li>
              <li class="r"><a href="./island.php">地図切替</a></li>
            
            </ul>
        </header>
        
		<div class="map">
            <div class="contents">
      <img src="./images/layout.jpg" id="main">
                <h1 class="tgt" style="position:absolute; top:12%; left:10%; width: 530px; font-size:5">
                かいじょうぜんたいず
                </h1>
       <?php
                    foreach ($arrayList as $key) {
                          $table = "
                          <table>
                            <tr>
                              <th>名前</th>
                              <td>".$key['name']."</td>
                            </tr>
                            <tr>
                              <th>コメント</th>
                              <td>".$key['id']."</td>
                            </tr>
                          </table>";
                          echo "<div class='rect ".$key['id']."'>
                          <a href='result.php?id=".$key['id']."' class='s'>";
                          echo "<img src='".$key['url']."' class='sub'>";
                          echo "<span class='s-balloon'>".$table."</span>";
                          echo "</a></div>";
                    }

                    }catch(Exception $e){
                        echo $e->getMessage();
                    }
                    //切断
                    $pdo = null;             

                ?>
          </div>   
    </div>

    <script type="text/javascript">
      var array = <?php echo json_encode($arrayList, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
      var size = [];
      console.log(array); // Object { hoge: "fuga" }
      // ジャバスクリプト記述
      $(function () {
        //setTimeout(rect('cat')); //アニメーション実行
        for (var i = 0; i < array.length; i++) {
          size[array[i]['id']] = {
            "width": Math.floor(Math.random() * (window.parent.screen.width + 1 - 600))+300,
            "height": Math.floor(Math.random() * (window.parent.screen.height + 1 - 200))+200,
          };
          $('.' + array[i]['id']).css('top', size[array[i]['id']]["height"] + 'px');
          $('.' + array[i]['id']).css('left', size[array[i]['id']]["width"] +'px');
          setTimeout(movement(array[i]['id']));
          console.log(array[i]['id']);
        }
      });

      function movement(type) {
         console.log(size);
        var point = 2;
        var probability = 3;
        var speed = 300;

        var left = 0;

        var wp = 300; // 左
        var wm = 300; // 右
        var hp = 300; // 上制限
        var hm = 200; // 下制限

        // 上
        if (Math.floor(Math.random() * probability) == 1) {
          var pp = 0;
          if (window.parent.screen.height - hm < size[type]["height"]) {
            console.log("上に戻す");
          } else {
            pp = Math.random() * point;
            size[type]["height"] += pp;
          }

          $('.' + type).animate({
            top: size[type]["height"] + 'px'
          }, speed);
        }

        // 右方向
        if (Math.floor(Math.random() * probability) == 1) {
          var pp = 0;
          if (window.parent.screen.width - 250 - wm < size[type]["width"] || left < 0) {
            left += 10;
            console.log("左に戻す");
          } else {
            left--;
            pp = Math.random() * point;
            size[type]["width"] += pp;
          }

          $('.' + type).animate({
            left: size[type]["width"] + 'px'
          }, speed);
        }

        // 下
        if (Math.floor(Math.random() * probability) == 1) {
          // $('.' + type).animate({
          //   top: '-=' + Math.random() * point + 'px'
          // }, speed);

          var pp = 0;
          if (hp > size[type]["height"]) {
            console.log("下に戻す");
          } else {
            pp = Math.random() * point;
            size[type]["height"] -= pp;
          }

          $('.' + type).animate({
            top: size[type]["height"] + 'px'
          }, speed);
        }

        // 左方向
        if (Math.floor(Math.random() * probability) == 1) {
          var pp = 0;
          if (wp > size[type]["width"]) {
            console.log("右に戻す！");
          } else {
            pp = Math.random() * point;
            size[type]["width"] -= pp;
          }
          $('.' + type).animate({
            left: size[type]["width"] + 'px'
          }, speed, function() { // callbackによりコールスタック解決
            setTimeout(movement(type));
          });
        }else {
          setTimeout(movement(type));
        }
        //setTimeout(rect(type), 1000); //アニメーションを繰り返す間隔
      }


        $(document).ready(function() {
             $('.drawer').drawer();
        });
        
         $(function(){
            $('.container:not(body.drawer drawer--left .container)').css({display:'block',marginLeft:$(window).width(),opacity:'0'});
            $('.container:not(body.drawer drawer--left .container)').animate({marginLeft:'0px',opacity:'1'},500);

            $('body.drawer drawer--left #container').css({display:'block',opacity:'0'});
            $('body.drawer drawer--left .container').animate({opacity:'1'},500);

            $('a').click(function(){
                var pass = $(this).attr("href");
                $('.container').animate({marginLeft:'-=' + $(window).width() + 'px',opacity:'0'},500,function(){
                    location.href = pass;
                });
                return false;
            });
        });
        
        $(window).bind('load',function(){
        // ここで文字を<span></span>で囲む
        $('.tgt').children().andSelf().contents().each(function() {
        if (this.nodeType == 3) {
        $(this).replaceWith($(this).text().replace(/(\S)/g, '<span>$1</span>'));
        }
        });
        // 一文字ずつフェードインさせる
        $('.tgt').css({'opacity':1});
        for (var i = 0; i <= $('.tgt').children().size(); i++) {
        $('.tgt').children('span:eq('+i+')').delay(i).animate({'opacity':1},50);
        };
        });

    </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>


</main>
</body>

</html>
