<?php
	define("title", "DNK-9608J");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
			<li class="breadcrumb-item active" aria-current="page">DNK-9608J</li>
		</ol>
	</nav>
	<p class="">DIANAVI DNK-9608J</p>
	<div id="carouselIndicators" class="carousel slide my-3" data-ride="carousel">
		<div class="carousel-inner">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
				<li data-target="#carouselIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-item active">
				<img class="w-100 d-block mx-auto" src="../../../img/carnavi/DNK-9608J_front.jpg" alt="正面">
			</div>
			<div class="carousel-item">
				<img class="w-100 d-block mx-auto" src="../../../img/carnavi/DNK-9608J_back.jpg" alt="背面">
			</div>
			<div class="carousel-item">
				<img class="w-100 d-block mx-auto" src="../../../img/carnavi/DNK-9608J_dashboard.jpg" alt="ダッシュボード">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="row justify-content-center">
		<a href="options.php"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">オプション</button></a>
		<a href="http://nplace.jp//wp-content/uploads/downloads/manuals/navigation/DNK-9608J_manual_web_v2.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">取扱説明書</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#udfont"><button type="button" class="btn btn-outline-dark m-1 btn-sm">UDフォント</button></a>
		<a href="#map-2018sp"><button type="button" class="btn btn-outline-dark m-1 btn-sm">2018年度版マップ秋</button></a>
		<a href="#fullseg"><button type="button" class="btn btn-outline-dark m-1 btn-sm">フルセグチューナー内蔵</button></a>
		<a href="#rurubu2018"><button type="button" class="btn btn-outline-dark m-1 btn-sm">2018年度版るるぶDATA</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">エンジンキー電源連動</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">マルチメディア機能</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">準天頂衛星「みちびき」対応</button></a>
	</div>

	<?php
		require_once '../details/udfont.html';
		require_once '../details/map-2018sp.html';
		require_once '../details/detail-2018sp.html';
		require_once '../details/fullseg.html';
		require_once '../details/rurubu2018.html';
	?>

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
		require_once '../details/nk09f17.html';
		require_once '../details/map-2018sp-db.html';
		require_once '../details/rurubu2018-db.html';
		require_once '../details/media7inch_k.html';
	?>
</div>
<?php require_once '../../../footer.php'; ?> 