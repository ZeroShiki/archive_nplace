<?php
	define("title", "DNK-7636J");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
			<li class="breadcrumb-item active" aria-current="page">DNK-7636J</li>
		</ol>
	</nav>
	<p>DIANAVI DNK-7636J</p>
	
	<div class="justify-content-center">
		<img class="w-75 d-block mx-auto" src="../../../img/carnavi/DNK-7636J_front.jpg" alt="正面">
	</div>
	
	<div class="row justify-content-center">
		<a href="options.php"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">オプション</button></a>
		<a href="http://nplace.jp//wp-content/uploads/downloads/manuals/navigation/DNK-7636J_manual_web_v2.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">取扱説明書</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#map-2016aut"><button type="button" class="btn btn-outline-dark m-1 btn-sm">2016年度版マップ秋</button></a>
		<a href="#rurubu2016-book"><button type="button" class="btn btn-outline-dark m-1 btn-sm">2017年度版るるぶDATA</button></a>
		<a href="#fullseg"><button type="button" class="btn btn-outline-dark m-1 btn-sm">フルセグチューナー内蔵</button></a>
		<a href="#menu_btn"><button type="button" class="btn btn-outline-dark m-1 btn-sm">押しやすいメニューボタン</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">エンジンキー電源連動</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">マルチメディア機能</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">準天頂衛星「みちびき」対応</button></a>
	</div>

	<?php
		require_once '../details/map-2016aut.html';
		require_once '../details/detail-2016aut.html';
		require_once '../details/rurubu2016-book.html';
		require_once '../details/fullseg.html';
	?>
	
	<h3 class="mb-4 pb-2 border-bottom" id="menu_btn"><strong>大きなボタンで更に押しやすい「メニュー画面」に</strong></h3>
	<div class="row mb-5">
		<div class="col-md-6">
			<p>メニュー画面でよく目にする「アイコン」を見直し、押しやすい「ボタン」型に変更しました。タッチ感が増し、より見やすく、押しやすくなりました。</p>
			<p class="small">（※画像は開発中のものです。）</p>
		</div>
		<div class="col-md-6">
			<img src="../../../img/carnavi/DNK-7636J_UI_btn.jpg" alt="大きなボタン" class="img-fluid">
		</div>
	</div>
	

	<h3 class="mb-4 pb-2 border-bottom" id="others"><strong>その他の機能</strong></h3>
	<div>
		<h4>エンジンキー電源連動</h4>
		<p>車のエンジンON/OFFに合わせて、カーナビの電源もON/OFF連動します。目的地を記憶して、ルート走行を再スタートすることができます。</p>
		<h4>マルチメディア機能</h4>
		<p>パソコンに保存されている音楽／動画／画像データファイルを、市販のmicroSDカードに保存して、再生・表示することができます。</p>
		<h4>準天頂衛星　みちびき対応</h4>
		<p>山間部やビルの間でGPS信号を受信しづらい場所でも、準天頂衛星「みちびき」を受信することで、より正確な自車位置を測位できます。</p>
	</div>

	<?php
		require_once '../details/nk06f15_rurubu.html';
		require_once '../details/map-2016aut-db.html';
		require_once '../details/rurubu2016-db.html';
		require_once '../details/media7inch_k.html';
	?>
</div>
<?php require_once '../../../footer.php'; ?>