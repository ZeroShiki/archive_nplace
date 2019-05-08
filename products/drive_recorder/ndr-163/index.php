<?php
	define("title", "NDR-163");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">ドライブレコーダー</a></li>
			<li class="breadcrumb-item active" aria-current="page">NDR-163</li>
		</ol>
	</nav>
	<p class="">DIADORA NDR-163</p>
	<div id="carouselIndicators" class="carousel slide my-3" data-ride="carousel">
		<div class="carousel-inner">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-item active">
				<img class="w-100 d-block mx-auto" src="../../../img/drive_recorder/NDR-163_front.jpg" alt="正面">
			</div>
			<div class="carousel-item">
				<img class="w-100 d-block mx-auto" src="../../../img/drive_recorder/NDR-163_back.jpg" alt="背面">
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
		<a href="http://nplace.jp/wp-content/uploads/downloads/manuals/dr/NDR-163_manual_web_v5.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">取扱説明書</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#wdr"><button type="button" class="btn btn-outline-dark m-1 btn-sm">ワイドダイナミックレンジ</button></a>
		<a href="#recording"><button type="button" class="btn btn-outline-dark m-1 btn-sm">３つの録画モード</button></a>
		<a href="#quality"><button type="button" class="btn btn-outline-dark m-1 btn-sm">高画質録画</button></a>
		<a href="#playback"><button type="button" class="btn btn-outline-dark m-1 btn-sm">録画した映像を確認</button></a>
	</div>
	
	<h3 class="mb-4 mt-5 pb-2 border-bottom" id="wdr"><strong>ワイドダイナミックレンジ（WDR）搭載</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<p>暗い画像と明るい画像を処理して暗部を明るく、明部を暗くすることで、適切な明るさの画像を作り出す機能です。トンネルなどの暗い場所→明るい場所の「白飛び」、夜間走行での「黒つぶれ」（真っ暗な状態）などを防ぎ、より鮮明で確実な映像を記録できます。</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/wdr.jpg" alt="WDR" class="img-fluid">
			<p class="small">（※画像は白飛びのイメージです。）</p>
		</div>
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="recording"><strong>３つの録画モード</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>常時録画モード</h4>
			<p>起動してから終了するまで録画する通常の録画モードです。<br>microSDカードが挿入されている状態で電源がONになると、録画モードが作動します。また、ACC電源連動なので、車のACC ON/OFFにしたがって、ドライブレコーダーの電源もON/OFFされます。</p>
			<ul class="explanation border-top">
				<li>１ファイルあたりの録画時間は1分、2分、3分に設定できます。</li>
				<li>FILE［日付-時刻］.MOVという形式で、microSDカード内の「Normal」フォルダに保存されます。</li>
				<li>microSDカードの容量が不足すると、一番古いファイルから上書きして保存します。保護されたファイルは上書きされません。</li>
				<li>OKボタンを押すか、電源を切ると、録画が停止します。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/NDR-163_165_auto_recording.jpg" alt="常時録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>イベント録画モード</h4>
			<p>Gセンサーが一定以上の衝撃・急停止・急発進を感知すると、イベント録画モードに切り替わります。<br>万が一を記録することで、交通事故処理の迅速化など、メリットにつながることがあります。</p>
			<ul class="explanation border-top">
				<li>イベントが発生した前後の動画が「Event」フォルダに保存されます。（計３つの動画ファイルを同時保存しますが、状況により異なります。）</li>
				<li>録画単位時間は、常時録画に連動します。</li>
				<li>EMER［日付-時刻］.MOVという形式で保存されます。</li>
				<li>ファイルを削除したい場合、一般設定で録画タイプを「イベント」に切り替えてから操作を行ってください。</li>
				<li>これらのファイルは上書きされませんが、microSDカードのフォーマットを行うと削除されます。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/NDR-163_165_event_recording.jpg" alt="イベント録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>手動録画モード</h4>
			<p>残しておきたい映像がある場合、手動録画モードを使うと、上書きされずにイベント録画のフォルダに保存されます。（※状況により異なります。）</p>
			<ul class="explanation border-top">
				<li>基本的な機能はイベント録画モードと同じです。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/NDR-163_165_manual_recording.jpg" alt="手動録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="quality"><strong>高画質録画</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<p>200万画素の高画質で精細な映像を記録し、昼間や夜間でも鮮明な映像を残すことができます。</p>
		</div>
		<div class="col-md-6 mb-4">
			<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ca-c5COFJ3k" allowfullscreen></iframe></div>
		</div>	
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="playback"><strong>録画した映像を確認を本体でもパソコンでも確認</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<p>録画／撮影したファイルは車内その場で確認することができます。<br>また、microSDカードを取り外して、パソコンに接続して映像／画像を閲覧することもできます。<br>（拡張子：MOVが再生可能な動画プレーヤー、JPGが表示できるフォトビューワーが必要です。）</p>
			<p class="small mb-0">※再生メニューを操作している場合、録画はできません。</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/NDR-163_LCD_off.jpg" alt="本体 – その場で確認" class="img-fluid">
		</div>
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="quality"><strong>自動LCDオフ機能</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<p>録画開始から時間が経過すると、LCDを自動的にオフにします。オフ、1分、3分から設定することができます。</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/NDR-163_kakunin.jpg" alt="自動LCDオフ" class="img-fluid">
		</div>
	</div>
	

	<h3 class="mt-3 mb-3"><strong>仕様</strong></h3>
	<table class="table table-sm">
		<tbody>
			<tr>
				<th scope="row" width="35%">サイズ</th>
				<td>約(W) 74 ×(H) 63 ×(D) 33 mm</td>
			</tr>
			<tr>
				<th scope="row">重量</th>
				<td>約 65 g</td>
			</tr>
			<tr>
				<th scope="row">メモリーカード</th>
				<td>8〜32GBまでのmicroSD／SDHCカード（Class6以上）に対応</td>
			</tr>
			<tr>
				<th scope="row">カメラ</th>
				<td>200万画素 FullHD<br>WDR（ワイドダイナミックレンジ）搭載<br>対角130°／水平100°／垂直80°</td>
			</tr>
			<tr>
				<th scope="row">解像度</th>
				<td>FHD 1920×1080／HD 1280×720</td>
			</tr>
			<tr>
				<th scope="row">フレームレート</th>
				<td>30fps</td>
			</tr>
			<tr>
				<th scope="row">デジタルズーム</th>
				<td>1倍〜4倍（静止画のみ）</td>
			</tr>
			<tr>
				<th scope="row">音声</th>
				<td>マイク、スピーカー内蔵</td>
			</tr>
			<tr>
				<th scope="row">Gセンサー</th>
				<td>3軸Gセンサー</td>
			</tr>
			<tr>
				<th scope="row">入力電源</th>
				<td>DC12V / 24V</td>
			</tr>
			<tr>
				<th scope="row">シガー電源<br>アダプターヒューズ</th>
				<td>ガラス管ヒューズ（5mm×20mm）1A</td>
			</tr>
			<tr>
				<th scope="row">消費電流</th>
				<td>最大 500mA（5V）</td>
			</tr>
			<tr>
				<th scope="row">動作温度</th>
				<td>-10℃ 〜 60℃</td>
			</tr>
			<tr>
				<th scope="row">録画</th>
				<td>常時録画（1分、2分、3分） <br>イベント録画（録画時間は常時録画に連動）<br>エンジンON/OFFに連動して記録</td>
			</tr>
			<tr>
				<th scope="row">映像ファイル形式</th>
				<td>MOV（ビデオ：H.264、オーディオ：ADPCM）※</td>
			</tr>
			<tr>
				<th scope="row">静止画ファイル形式</th>
				<td>JPG（3M、2M、1.2M、VGA）</td>
			</tr>
			<tr>
				<th scope="row">モニター</th>
				<td>2.7インチ液晶ディスプレイ</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-5">※パソコンで再生する場合、MOV（ビデオ：H.264、オーディオ：ADPCM）が再生可能なプレーヤーが必要です。</p>
	
	
	<h3 class="mt-3 mb-3"><strong>録画時間の目安</strong></h3>
	<table class="table mb-3 table-sm">
		<tbody>
			<tr>
				<th scope="row" width="35%">解像度</th>
				<th>8GB</th>
				<th>16GB</th>
				<th>32GB</th>
			</tr>
			<tr>
				<td>FHD（1920×1080）</td>
				<td>約65分</td>
				<td>約130分</td>
				<td>約270分</td>
			</tr>
			<tr>
				<td>HD（1280×720）</td>
				<td>約142分</td>
				<td>約284分</td>
				<td>約568分</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-0">※スピードクラス：Class6を使用</p>
	<p class="small">※上記の録画時間は、常時録画、イベント録画（Gセンサー、手動）の全ての録画時間の合計です。</p>
</div>
<?php require_once '../../../footer.php'; ?> 