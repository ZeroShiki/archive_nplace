<?php
	define("title", "ND-Y153");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">ドライブレコーダー</a></li>
			<li class="breadcrumb-item active" aria-current="page">ND-Y153</li>
		</ol>
	</nav>
	<p class="">DIANAVI ND-Y153</p>
	<div id="carouselIndicators" class="carousel slide my-3" data-ride="carousel">
		<div class="carousel-inner">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-item active">
				<img class="w-100 d-block mx-auto" src="../../../img/drive_recorder/ND-Y153_front.jpg" alt="正面">
			</div>
			<div class="carousel-item">
				<img class="w-100 d-block mx-auto" src="../../../img/drive_recorder/ND-Y153_back.jpg" alt="背面">
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
		<a href="http://nplace.jp/wp-content/uploads/downloads/manuals/dr/ND_Y153_manual_web.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">取扱説明書</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#recording"><button type="button" class="btn btn-outline-dark m-1 btn-sm">３つの録画モード</button></a>
		<a href="#quality"><button type="button" class="btn btn-outline-dark m-1 btn-sm">高画質録画</button></a>
		<a href="#playback"><button type="button" class="btn btn-outline-dark m-1 btn-sm">録画した映像</button></a>
	</div>
	
	<h3 class="mb-4 mt-5 pb-2 border-bottom" id="recording"><strong>３つの録画モード</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>常時録画モード</h4>
			<p>起動してから終了するまで録画する通常の録画モードです。microSDカードが挿入されている状態で電源がONになると、録画モードが作動します。また、ACC電源連動なので、車のACC ON/OFFにしたがって、ドライブレコーダーの電源もON/OFFされます。</p>
			<ul class="explanation border-top">
				<li>１ファイルあたりの録画時間は1分、3分、5分に設定できます。</li>
				<li>再生メニューまたは設定メニューに入ると、録画が中断されます。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y153_auto_recording.jpg" alt="常時録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>イベント録画モード</h4>
			<p>Gセンサーが一定以上の衝撃・急停止・急発進を感知すると、イベント録画モードに切り替わります。<br>万が一を記録することで、交通事故処理の迅速化など、メリットにつながることがあります。<br>イベント録画専用のフォルダに保存されるので、上書きの心配はありません。</p>
			<ul class="explanation border-top">
				<li>再生メニューまたは設定メニューで操作している場合、イベント録画は発生しません。</li>
				<li>容量が不足すると、SDカードのフォーマットを促すメッセージが表示されます。フォーマットするまでイベント録画ができなくなりますので、本製品かパソコンにてフォーマットを行うか、別のMicro SDカードに取り替えてください。また、大事なデータはパソコン等にバックアップすることをお勧めします。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y153_event_recording.jpg" alt="イベント録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>手動録画モード</h4>
			<p>残しておきたい映像がある場合、手動録画モードを使うと、上書きされずにイベント録画のフォルダに保存されます。（※状況により異なります。）</p>
			<ul class="explanation border-top">
				<li>再生メニューまたは設定メニューで操作している場合、手動録画はできません。</li>
				<li>容量が不足すると、SDカードのフォーマットを促すメッセージが表示されます。フォーマットするまで手動録画ができなくなりますので、本製品かパソコンにてフォーマットを行うか、別のMicro SDカードに取り替えてください。また、大事なデータはパソコン等にバックアップすることをお勧めします。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y153_manual_recording.jpg" alt="手動録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="quality"><strong>高画質録画</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>130万画素 Full HD</h4>
			<p>130万画素の高画質で精細な映像を記録し、昼間や夜間でも鮮明な映像を残すことができます。</p>
			<p class="small">※解像度はFHD（1080p）となります。この他にHD（720p）を選択できます。</p>
		</div>
		<div class="col-md-6 mb-4">
			<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fjf8tK9T8I0" allowfullscreen></iframe></div>
		</div>
		<div class="col-md-6 mb-4">
			<h4>自動LCDオフ機能</h4>
			<p>録画開始から時間が経過すると、LCDを自動的にオフにします。10秒、20秒、30秒から設定することができます。（常時オンも可能です）</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y153_kakunin.jpg" alt="自動LCDオフ" class="img-fluid">
		</div>
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="playback"><strong>録画した映像を本体でもパソコンでも確認</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>その場で確認、パソコンで確認</h4>
			<p>録画／撮影したファイルは車内その場で確認することができます。<br>microSDカードを取り外して、パソコンに接続して映像／画像を閲覧することもできます。（拡張子：MP4が再生可能な動画プレーヤー、JPGが表示できるフォトビューワーが必要です。）</p>
			<p class="small mb-0">※録画中はモード切替ボタン、メニューボタン、電源ボタンは機能しません。</p>
			<p class="small">※本体で再生メニューを操作している場合、録画および撮影はできません。</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y153_LCD_off.jpg" alt="本体 – その場で確認" class="img-fluid">
		</div>
	</div>
	

	<h3 class="mt-3 mb-3"><strong>仕様</strong></h3>
	<table class="table table-sm">
		<tbody>
			<tr>
				<th scope="row">サイズ</th>
				<td>約(W) 320 ×(H) 95 ×(D) 15 mm（突起、レンズ部を除く）</td>
			</tr>
			<tr>
				<th scope="row">重量</th>
				<td>約 310 g</td>
			</tr>
			<tr>
				<th scope="row">メモリーカード</th>
				<td>16GB microSD／SDHCカード（Class6以上、別売）</td>
			</tr>
			<tr>
				<th scope="row">カメラ</th>
				<td>130万画素 Full HD<br>対角120°／水平90°／垂直50°<br>FHD（1920×1080）25fps／HD（1280×720）25fps／</td>
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
				<th scope="row">シガー電源アダプターヒューズ</th>
				<td>ガラス管ヒューズ（6mm×30mm）1.5A</td>
			</tr>
			<tr>
				<th scope="row">消費電流</th>
				<td>最大 1210mA（12V）</td>
			</tr>
			<tr>
				<th scope="row">動作温度</th>
				<td>-10℃ 〜 60℃</td>
			</tr>
			<tr>
				<th scope="row">録画</th>
				<td>常時録画（1分、3分、5分） <br>イベント録画（録画時間は常時録画に連動）<br>エンジンON/OFFに連動して記録</td>
			</tr>
			<tr>
				<th scope="row">映像ファイル形式</th>
				<td>MP4（ビデオ: H.264、オーディオ:AAC）※</td>
			</tr>
			<tr>
				<th scope="row">静止画ファイル形式</th>
				<td>JPG（解像度：8M、5M、2M、1M）</td>
			</tr>
			<tr>
				<th scope="row">インターフェース</th>
				<td>5インチ液晶ディスプレイ</td>
			</tr>
			<tr>
				<th scope="row">鏡面</th>
				<td>平面型</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-5">※パソコンで再生する場合、MP4（ビデオ: H.264、オーディオ:AAC）が再生可能なプレーヤーが必要です。</p>
	
	
	<h3 class="mt-3 mb-3"><strong>録画時間の目安</strong></h3>
	<table class="table mb-3 table-sm">
		<tbody>
			<tr>
				<th scope="row" rowspan="2">16GB microSDカード</th>
				<th>解像度</th>
				<th>録画時間</th>
			</tr>
			<tr>
				<td>FHD（1920×1080）／25fps</td>
				<td>約400分</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-0">※microSDカード16GB、Class6を使用した場合。</p>
	<p class="small mb-5">※H.264 Encoding</p>
	
	<h3 class="mt-3 mb-3"><strong>撮影枚数の目安</strong></h3>
	<table class="table mb-5 table-sm">
		<tbody>
			<tr>
				<th scope="row" rowspan="2">16GB microSDカード</th>
				<th>解像度</th>
				<th>撮影枚数</th>
			</tr>
			<tr>
				<td>8M（3264×2448ピクセル）</td>
				<td>約1,140枚</td>
			</tr>
		</tbody>
	</table>
</div>
<?php require_once '../../../footer.php'; ?> 