<?php
	define("title", "NDR-167M");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">ドライブレコーダー</a></li>
			<li class="breadcrumb-item active" aria-current="page">NDR-167M</li>
		</ol>
	</nav>
	<p>DIADORA NDR-167M</p>
	
	<div class="justify-content-center">
		<img class="w-75 d-block mx-auto" src="../../../img/drive_recorder/NDR-167M_front.jpg" alt="正面">
	</div>

	<div class="row justify-content-center">
		<a href="options.php"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">オプション</button></a>
		<a href="http://nplace.jp/wp-content/uploads/downloads/manuals/dr/NDR-167M_manual_web_v5.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">取扱説明書</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#mirror"><button type="button" class="btn btn-outline-dark m-1 btn-sm">ルームミラーで録画可能
			</button></a>
		<a href="#recording"><button type="button" class="btn btn-outline-dark m-1 btn-sm">３つの録画モード</button></a>
		<a href="#quality"><button type="button" class="btn btn-outline-dark m-1 btn-sm">自動LCDオフ</button></a>
		<a href="#playback"><button type="button" class="btn btn-outline-dark m-1 btn-sm">録画した映像を確認</button></a>
	</div>
	
		<h3 class="mb-4 mt-5 pb-2 border-bottom" id="mirror"><strong>ルームミラー型で録画可能</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<p>130万画素の画質で映像を記録します。ルームミラーに取り付けることでフロントガラスの視界を確保することができます。</p>
		</div>
		<div class="col-md-6 mb-4">
			<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-IpuvBAclH0" allowfullscreen></iframe></div>
		</div>	
	</div>

	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="recording"><strong>３つの録画モード</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>常時録画モード</h4>
			<p>起動してから終了するまで録画する通常の録画モードです。<br>microSDカードが挿入されている状態で電源がONになると、録画モードが作動します。また、ACC電源連動なので、車のACC ON/OFFにしたがって、ドライブレコーダーの電源もON/OFFされます。</p>
			<ul class="explanation border-top">
				<li>１ファイルあたりの録画時間は1分、3分、5分もしくは連続録画に設定できます。</li>
				<li>録画時間単位を「オフ」に設定すると、10分間録画して停止します。このファイルは原則的に上書きされません。</li>
				<li>[撮影時刻]0001.AVI、…という形式で保存されます。</li>
				<li>microSDカードの容量が不足すると、一番古いファイルから上書きして保存します。保護されたファイルは上書きされません。</li>
				<li>OKボタンを押すか電源を切ると、録画が停止します。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/NDR-167M_auto_recording.jpg" alt="常時録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>イベント録画モード</h4>
			<p>Gセンサーが一定以上の衝撃・急停止・急発進を感知すると、イベント録画モードに切り替わります。<br>万が一を記録することで、交通事故処理の迅速化など、メリットにつながることがあります。</p>
			<ul class="explanation border-top">
				<li>録画単位時間は、常時録画に連動します。</li>
				<li>EVE00001.AVI、…という形式で保存されます。</li>
				<li>これらのファイルは原則的に上書きされませんが、microSDカードのフォーマットを行うと削除されます。</li>
				<li>保護された状態で保存されます。ファイルを削除したい場合は、本機で保護解除をしてください。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/NDR-167M_event_recording.jpg" alt="イベント録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>手動録画モード</h4>
			<p>残しておきたい映像がある場合、手動録画モードを使うと、上書きされずにイベント録画のフォルダに保存されます。（※状況により異なります。）</p>
			<ul class="explanation border-top">
				<li>基本的な機能はイベント録画モードと同じです。</li>
				<li>SOS00001.AVI、…という形式で保存されます。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="../../../img/drive_recorder/NDR-167M_manual_recording.jpg" alt="手動録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
	</div>
	
	<h3 class="mb-4 pb-2 border-bottom"><strong>その他の機能</strong></h3>
	<div class="mb-5">
		<h4 id="quality">自動LCDオフ機能</h4>
		<p>録画開始から時間が経過すると、LCDを自動的にオフにします。1分、3分、5分から設定することができます。（常時オンも可能です。）</p>
		<h4 id="playback" class="mt-4">録画した映像を確認を本体でもパソコンでも確認</h4>
		<p>録画／撮影したファイルは車内その場で確認することができます。また、microSDカードを取り外して、パソコンに接続して映像／画像を閲覧することもできます。<br>（拡張子：AVIが再生可能な動画プレーヤー、JPGが表示できるフォトビューワーが必要です。）</p>
		<p class="small">※再生メニューを操作している場合、録画はできません。</p>
	</div>


	<h3 class="mt-3 mb-3"><strong>仕様</strong></h3>
	<table class="table table-sm">
		<tbody>
			<tr>
				<th scope="row" width="35%">サイズ</th>
				<td>約(W) 321 ×(H) 95 ×(D) 17 mm（レンズ部を除く）</td>
			</tr>
			<tr>
				<th scope="row">重量</th>
				<td>約 295 g</td>
			</tr>
			<tr>
				<th scope="row">メモリーカード</th>
				<td>8〜32GB microSD／SDHCカード（Class6以上、別売）</td>
			</tr>
			<tr>
				<th scope="row">カメラ</th>
				<td>100万画素 HD<br>対角140°／水平110°／垂直85°</td>
			</tr>
			<tr>
				<th scope="row">解像度</th>
				<td>1HD　1280×720<br>VGA　640×480</td>
			</tr>
			<tr>
				<th scope="row">フレームレート</th>
				<td>30fps</td>
			</tr>
			<tr>
				<th scope="row">デジタルズーム</th>
				<td>1倍〜4倍</td>
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
				<td>常時録画（連続録画、１分、２分、３分） <br>イベント録画（録画時間は常時録画に連動）<br>エンジンON/OFFに連動して記録</td>
			</tr>
			<tr>
				<th scope="row">映像ファイル形式</th>
				<td>AVI（ビデオ: MJPEG、オーディオ:PCM）※</td>
			</tr>
			<tr>
				<th scope="row">静止画ファイル形式</th>
				<td>JPG（3M、2M、1M）</td>
			</tr>
			<tr>
				<th scope="row">モニター</th>
				<td>4.3インチ液晶ディスプレイ</td>
			</tr>
			<tr>
				<th scope="row">ミラー形状</th>
				<td>平面型</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-5">※パソコンで再生する場合、AVI（ビデオ: MJPEG、オーディオ:PCM）が再生可能なプレーヤーが必要です。</p>
	
	
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
				<td>HD　1280×720</td>
				<td>約73分</td>
				<td>約146分</td>
				<td>約292分</td>
			</tr>
			<tr>
				<td>VGA　640×480</td>
				<td>約72分</td>
				<td>約144分</td>
				<td>約288分</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-0">※スピードクラス：Class6を使用</p>
	<p class="small">※上記の録画時間は、常時録画、イベント録画（Gセンサー、手動）の全ての録画時間の合計です。</p>
</div>
<?php require_once '../../../footer.php'; ?> 