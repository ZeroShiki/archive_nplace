<?php
	define("title", "ND-Y152");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">ドライブレコーダー</a></li>
			<li class="breadcrumb-item active" aria-current="page">ND-Y152</li>
		</ol>
	</nav>
	<p>DIANAVI ND-Y152</p>
	
	<div class="justify-content-center">
		<img class="w-75 d-block mx-auto" src="../../../img/drive_recorder/ND-Y152_front.jpg" alt="正面">
	</div>

	<div class="row justify-content-center">
		<a href="options.php"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">オプション</button></a>
		<a href="http://nplace.jp/wp-content/uploads/downloads/manuals/dr/ND_Y152_manual_web.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">取扱説明書</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#recording"><button type="button" class="btn btn-outline-dark m-1 btn-sm">３つの録画モード</button></a>
		<a href="#quality"><button type="button" class="btn btn-outline-dark m-1 btn-sm">高画質録画</button></a>
		<a href="#playback"><button type="button" class="btn btn-outline-dark m-1 btn-sm">録画した映像を確認</button></a>
	</div>
	
	<h3 class="mb-4 mt-5 pb-2 border-bottom" id="recording"><strong>３つの録画モード</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>常時録画モード</h4>
			<p>起動してから終了するまで録画する通常の録画モードです。microSDカードが挿入されている状態で電源がONになると、録画モードが作動します。また、ACC電源連動なので、車のACC ON/OFFにしたがって、ドライブレコーダーの電源もON/OFFされます。</p>
			<ul class="explanation border-top">
				<li>１ファイルあたりの録画時間は1分、3分、5分もしくは連続録画に設定できます。</li>
				<li>再生メニューまたは設定メニューに入ると、録画が中断されます。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y152_auto_recording.jpg" alt="常時録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>イベント録画モード</h4>
			<p>Gセンサーが一定以上の衝撃・急停止・急発進を感知すると、イベント録画モードに切り替わります。<br>万が一を記録することで、交通事故処理の迅速化など、メリットにつながることがあります。<br>イベント録画専用のフォルダに保存されるので、上書きの心配はありません。</p>
			<ul class="explanation border-top">
				<li>再生メニューまたは設定メニューで操作している場合、イベント録画は発生しません。</li>
				<li>容量が不足すると、SDカードのフォーマットを促すメッセージが表示されます。フォーマットするまでイベント録画ができなくなりますので、本製品かパソコンにてフォーマットを行うか、別のmicro SDカードに取り替えてください。また、大事なデータはパソコン等にバックアップすることをお勧めします。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y152_event_recording.jpg" alt="イベント録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>手動録画モード</h4>
			<p>残しておきたい映像がある場合、手動録画モードを使うと、上書きされずにイベント録画のフォルダに保存されます。（※状況により異なります。）</p>
			<ul class="explanation border-top">
				<li>再生メニューまたは設定メニューで操作している場合、手動録画はできません。</li>
				<li>容量が不足すると、SDカードのフォーマットを促すメッセージが表示されます。フォーマットするまで手動録画ができなくなりますので、本製品かパソコンにてフォーマットを行うか、別のmicro SDカードに取り替えてください。また、大事なデータはパソコン等にバックアップすることをお勧めします。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y152_manual_recording.jpg" alt="手動録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="quality"><strong>高画質録画</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>200万画素 Full HD</h4>
			<p>200万画素の高画質で精細な映像を記録し、昼間や夜間でも鮮明な映像を残すことができます。</p>
			<p class="small">※解像度はFHD（1080p）となります。この他にHD（720p）、VGA（480p）を選択できます。</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/20150810_rec_mini.jpg" alt="撮影された映像" class="img-fluid">
		</div>
		<div class="col-md-6 mb-4">
			<h4>自動LCDオフ機能</h4>
			<p>2録画開始から時間が経過すると、LCDを自動的にオフにします。1分、3分から設定することができます。（常時オンも可能です）</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y152_LCD_off.jpg" alt="自動LCDオフ" class="img-fluid">
		</div>
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="playback"><strong>録画した映像を本体でもパソコンでも確認</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<p>録画／撮影したファイルは車内その場で確認することができます。<br>microSDカードを取り外して、パソコンに接続して映像／画像を閲覧することもできます。（拡張子：AVIが再生可能な動画プレーヤー、JPGが表示できるフォトビューワーが必要です。）</p>
			<p class="small mb-0">※録画中はモード切替ボタン、メニューボタン、電源ボタンは機能しません。</p>
			<p class="small">※再生メニューを操作している場合、録画はできません。</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/ND-Y152_kakunin.jpg" alt="本体 – その場で確認" class="img-fluid">
		</div>
	</div>
	

	<h3 class="mt-3 mb-3"><strong>仕様</strong></h3>
	<table class="table table-sm">
		<tbody>
			<tr>
				<th scope="row" width="35%">サイズ</th>
				<td>約(W) 80 ×(H) 44 ×(D) 15 mm（突起、レンズ部を除く）</td>
			</tr>
			<tr>
				<th scope="row">重量</th>
				<td>約 55 g</td>
			</tr>
			<tr>
				<th scope="row">メモリーカード</th>
				<td>16GB microSD／SDHCカード（Class6以上、別売）</td>
			</tr>
			<tr>
				<th scope="row">カメラ</th>
				<td>200万画素 Full HD<br>対角130°／水平125°／垂直95°<br>FHD 30fps／HD 60fps／HD 30fps／VGA 30fps</td>
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
				<td>ガラス管ヒューズ（6mm×30mm）1A</td>
			</tr>
			<tr>
				<th scope="row">消費電流</th>
				<td>最大 500mA（12V）</td>
			</tr>
			<tr>
				<th scope="row">動作温度</th>
				<td>-10℃ 〜 60℃</td>
			</tr>
			<tr>
				<th scope="row">録画</th>
				<td>常時録画（連続録画、1分、3分、5分） <br>イベント録画（録画時間は常時録画に連動）<br>エンジンON/OFFに連動して記録</td>
			</tr>
			<tr>
				<th scope="row">映像ファイル形式</th>
				<td>AVI（ビデオ: H.264、オーディオ:AAC）※</td>
			</tr>
			<tr>
				<th scope="row">静止画ファイル形式</th>
				<td>JPG（解像度：14M、12M、8M、5M、3M、2M、1.2M、VGA）</td>
			</tr>
			<tr>
				<th scope="row">インターフェース</th>
				<td>2.7インチ液晶ディスプレイ</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-5">※パソコンで再生する場合、AVI（ビデオ: H.264、オーディオ:AAC）が再生可能なプレーヤーが必要です。</p>
	
	
	<h3 class="mt-3 mb-3"><strong>録画時間の目安</strong></h3>
	<table class="table mb-3 table-sm">
		<tbody>
			<tr>
				<th scope="row" rowspan="5" width="35%">16GB microSDカード</th>
				<th>解像度</th>
				<th>録画時間</th>
			</tr>
			<tr>
				<td>FHD（1920×1080）／30fps</td>
				<td>約140分</td>
			</tr>
			<tr>
				<td>HD（1280×720）／60fps</td>
				<td>約140分</td>
			</tr>
			<tr>
				<td>HD（1280×720）／60fps</td>
				<td>約260分</td>
			</tr>
			<tr>
				<td>VGA（640×480）／30fps</td>
				<td>約700分</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-0">※microSDカード16GB、Class6を使用した場合。</p>
	<p class="small">※H.264 Encoding</p>
</div>
<?php require_once '../../../footer.php'; ?> 