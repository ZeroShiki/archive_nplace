<?php
	define("title", "DT-Y52");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
			<li class="breadcrumb-item active" aria-current="page">DT-Y52</li>
		</ol>
	</nav>
	<p>DIANAVI DT-Y52</p>
	
	<div class="justify-content-center">
		<img class="w-75 d-block mx-auto" src="../../../img/carnavi/DT-Y52_front.jpg" alt="正面">
	</div>
	
	<div class="row justify-content-center">
		<a href="options.php"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">オプション</button></a>
		<a href="http://nplace.jp/wp-content/uploads/downloads/manuals/navigation/DT-Y52_manual_web_v1.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">ハードマニュアル</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#map-2014sp"><button type="button" class="btn btn-outline-dark m-1 btn-sm">2014年度版マップ</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">エンジンキー電源連動</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">マルチメディア機能</button></a>
	</div>

	<?php require_once '../details/map-2014sp.html'; ?>

	<h3 class="mb-4 pb-2 border-bottom" id="others"><strong>その他の機能</strong></h3>
	<div>
		<h4>エンジンキー電源連動</h4>
		<p>車のエンジンON/OFFに合わせて、カーナビの電源もON/OFF連動します。目的地を記憶して、ルート走行を再スタートすることができます。</p>
		<h4>マルチメディア機能</h4>
		<p>パソコンに保存されている音楽／動画／画像データファイルを、市販のmicroSDカードに保存して、再生・表示することができます。</p>
	</div>

	<h3 class="mt-5 mb-3"><strong>仕様</strong></h3>
	<table class="table mb-5 table-sm spec">
		<tbody>
			<tr>
				<th scope="row" width="200px">マップソフト</th>
				<td>8GB microSDHCカード</td>
			</tr>
			<tr>
				<th scope="row">microSDスロット</th>
				<td>32GBまでのmicroSDカード・microSDHCカードに対応</td>
			</tr>
			<tr>
				<th scope="row">LEDバックライト液晶</th>
				<td>5.0インチTFT（WVGA）<br>解像度：480×272 pixelタッチパネル</td>
			</tr>
			<tr>
				<th scope="row">内蔵スピーカー</th>
				<td>モノラル</td>
			</tr>
			<tr>
				<th scope="row">イヤホン</th>
				<td>φ3.5mm ステレオミニジャック</td>
			</tr>
			<tr>
				<th scope="row">シガー電源</th>
				<td>DC 12/24V 車対応</td>
			</tr>
			<tr>
				<th scope="row">動作温度</th>
				<td>0 〜 60℃</td>
			</tr>
			<tr>
				<th scope="row">サイズ（約）</th>
				<td>(W) 138 ×(H) 87 ×(D) 12.5 mm</td>
			</tr>
			<tr>
				<th scope="row">重量（約）</th>
				<td>180 g</td>
			</tr>
			<tr>
				<th scope="row">生産国</th>
				<td>中国</td>
			</tr>
		</tbody>
	</table>
	<?php
		require_once '../details/map-2014sp-db.html';
		require_once '../details/media5inch_c.html';
	?>
</div>
<?php require_once '../../../footer.php'; ?> 