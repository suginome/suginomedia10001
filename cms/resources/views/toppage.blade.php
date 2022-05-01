@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="ja">

<!--<head>-->
<!--  <meta charset="UTF-8">-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--  <title>スギノメディア｜日本一買わせてくれないECサイト</title>-->
<!--  <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Zen+Old+Mincho&display=swap" rel="stylesheet">-->
<!--  <link rel="stylesheet" href="css/reset.css">-->
<!--  <link rel="stylesheet" href="css/common.css">-->
<!--</head>-->

<body>

  <div class="hero">
    <div class="layer">
      <header>
        <p class="logo">スギノメディア</p>
        <div class="drawer">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </header>
      <div class="hero-item">
        <p class="hero-text">自ら理解、納得して選ぶ<br>楽しい食環境を日常に</p>
        <!--<h1 class="hero-heading">スギノメディア</h1>-->
      </div>
    </div>
  </div>

  <main>
    <section class="lead">
      <div class="inner">
      <!--<h2 class="heading">ササっと購入したい方は別の直販サイト等をご利用ください</h2>-->
      <p class="section-text">スギノメディアは、<p>
      <p class="section-text">1. 大量生産大量消費によって失った<br>食環境の大切さと実情</p>
      <p class="section-text">2. 文化的、自然的な食材を届けたい<br>生産者の価値観</p>
      <p class="section-text">に触れて消費者それぞれが食環境の未来を<br>考えるきっかけにするちょっと購入しずらい食の情報通販ページです</p>
      <!--<div class="images-wrap">-->
      <!--  <p class="section-image"><img src="images/imagesea.jpg" alt="大海原"></p>-->
      <!--  <p class="section-image"><img src="images/image3.png" alt="お肉"></p>-->
      <!--  <p class="section-image"><img src="images/image4.png" alt="お肉"></p>-->
      <!--</div>-->
      </div>
    </section>
    
    <section class="procedure">
          <p class="procedure-top">購入希望の方は以下の手順でお進みください。</p> <br>
          
          <p>①生産者紹介映像を視聴</p>　<br>
          <p>②動画の内容について感想、ご自分なりの理解要約文を投稿</p>　<br>
          <p>③購入金額入力（生産者を応援したい方は応援価格を設定できます。）</p>　<br>
          <p>④氏名、アドレス入力</p>　<br>
          
    </section>
    
    
    <section class="producer">
      <h2 class="heading">生産者紹介</h2>
      <div class="item">
        <a href="{{url('/')}}">
        <h3 class="sub-heading" >堀田農園</h3>
        <dl class="producer-info">
          <div class="wrap">
            <!--<dt>代表者</dt>-->
            <!--<dd>堀田夫妻</dd>-->
          </div>
          <div class="wrap">
            <dt>所在地</dt>
            <dd>北海道勇払郡厚真町</dd>
          </div>
          <div class="wrap">
            <dt>扱う食材</dt>
            <dd>原木しいたけ</dd>
          </div>
        </dl>
        <p class="section-image"><img src="images/top_horitafarm.png" alt="堀田農園（株式会社たのしいたけ）"></p>
        <!--<div class="point">-->
        <!--  <h4>こだわりポイント</h4>-->
        <!--  <p>私たちたのしいは、私たちが育て、私たちが収穫した、私たちの農作物をお届けしています。自然界のなか、さまざまな状況で成育する作物たちの声を聞き、困ったことはないか、つらい思いはしてないか、たのしく育っているか、いつも見守っています。<br>手が離れるそのときまで、作物に寄り添いながら皆さまのもとへと送り出したい。<br>自然の力を身につけたおいしさは、いつもの日常を豊かにしてくれるはず。そんなふうに食物の輝きを感じていただけたら幸せです。</dp>-->
        <!--</div>-->
      </a>  
      </div>
      
      <div class="item">
        <h3 class="sub-heading" ><a>石狩ひつじ牧場</a></h3>
        <dl class="producer-info">
          <div class="wrap">
            <!--<dt>代表者</dt>-->
            <!--<dd>堀田夫妻</dd>-->
          </div>
          <div class="wrap">
            <dt>所在地</dt>
            <dd>北海道石狩市</dd>
          </div>
          <div class="wrap">
            <dt>扱う食材</dt>
            <dd>羊乳チーズ、羊肉</dd>
          </div>
        </dl>
        <p class="section-image"><img src="images/top_ishikarihituji.jpeg" alt="石狩ひつじ牧場"></p>
        <!--<div class="point">-->
        <!--  <h4>こだわりポイント</h4>-->
        <!--  <p>私たちたのしいは、私たちが育て、私たちが収穫した、私たちの農作物をお届けしています。自然界のなか、さまざまな状況で成育する作物たちの声を聞き、困ったことはないか、つらい思いはしてないか、たのしく育っているか、いつも見守っています。<br>手が離れるそのときまで、作物に寄り添いながら皆さまのもとへと送り出したい。<br>自然の力を身につけたおいしさは、いつもの日常を豊かにしてくれるはず。そんなふうに食物の輝きを感じていただけたら幸せです。</dp>-->
        <!--</div>-->
        
      </div>
      
      
      <div class="item">
        <h3 class="sub-heading" ><a>うちやま農園</a></h3>
        <dl class="producer-info">
          <div class="wrap">
            <!--<dt>代表者</dt>-->
            <!--<dd>堀田夫妻</dd>-->
          </div>
          <div class="wrap">
            <dt>所在地</dt>
            <dd>北海道美唄市</dd>
          </div>
          <div class="wrap">
            <dt>扱う食材</dt>
            <dd>アスパラ</dd>
          </div>
        </dl>
        <p class="section-image"><img src="images/top_uchiyama.png" alt="内山農園"></p>
        <!--<div class="point">-->
        <!--  <h4>こだわりポイント</h4>-->
        <!--  <p>私たちたのしいは、私たちが育て、私たちが収穫した、私たちの農作物をお届けしています。自然界のなか、さまざまな状況で成育する作物たちの声を聞き、困ったことはないか、つらい思いはしてないか、たのしく育っているか、いつも見守っています。<br>手が離れるそのときまで、作物に寄り添いながら皆さまのもとへと送り出したい。<br>自然の力を身につけたおいしさは、いつもの日常を豊かにしてくれるはず。そんなふうに食物の輝きを感じていただけたら幸せです。</dp>-->
        <!--</div>-->
        
      </div>
      
      
      <div class="item">
        <h3 class="sub-heading" ><a>新篠津<br>つちから農場</a></h3>
        <dl class="producer-info">
          <div class="wrap">
            <!--<dt>代表者</dt>-->
            <!--<dd>堀田夫妻</dd>-->
          </div>
          <div class="wrap">
            <dt>所在地</dt>
            <dd>北海道石狩郡新篠津村</dd>
          </div>
          <div class="wrap">
            <dt>扱う食材</dt>
            <dd>玉ねぎ</dd>
          </div>
        </dl>
        <p class="section-image"><img src="images/top_shinshinotsu.jpeg" alt="新篠津つちから農場"></p>
        <!--<div class="point">-->
        <!--  <h4>こだわりポイント</h4>-->
        <!--  <p>私たちたのしいは、私たちが育て、私たちが収穫した、私たちの農作物をお届けしています。自然界のなか、さまざまな状況で成育する作物たちの声を聞き、困ったことはないか、つらい思いはしてないか、たのしく育っているか、いつも見守っています。<br>手が離れるそのときまで、作物に寄り添いながら皆さまのもとへと送り出したい。<br>自然の力を身につけたおいしさは、いつもの日常を豊かにしてくれるはず。そんなふうに食物の輝きを感じていただけたら幸せです。</dp>-->
        <!--</div>-->
        
      </div>
    </section>

  </main>

  <footer>
    <small>copyrights 2022 Suginomedia All Rights Reserved.</small>
  </footer>
  <!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑ ここから上に、ブラウザに表示したい内容を記述する ↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
</body>

</html>





@endsection