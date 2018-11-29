<?php
	define("title", "ND-151FCL");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.html">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.html">ドライブレコーダー</a></li>
			<li class="breadcrumb-item active" aria-current="page">ND-151FCL</li>
		</ol>
	</nav>
	<p class="">DIANAVI ND-151FCL</p>
	<div id="carouselIndicators" class="carousel slide my-3" data-ride="carousel">
		<div class="carousel-inner">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
				<li data-target="#carouselIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-item active">
				<img class="w-100 d-block mx-auto" src="http://localhost/archive_nplace/img/drive_recorder/ND-151FCL_front.jpg" alt="正面">
			</div>
			<div class="carousel-item">
				<img class="w-100 d-block mx-auto" src="http://localhost/archive_nplace/img/drive_recorder/ND-151FCL_back.jpg" alt="背面">
			</div>
			<div class="carousel-item">
				<img class="w-100 d-block mx-auto" src="http://localhost/archive_nplace/img/drive_recorder/ND-151FCL_attach.jpg" alt="フロントガラス">
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
		<a href="viewer.php"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">専用ビューアソフト</button></a>
		<a href="http://nplace.jp/wp-content/uploads/downloads/manuals/dr/ND-151FCL_manual_web.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">取扱説明書</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#recording"><button type="button" class="btn btn-outline-dark m-1 btn-sm">３つの録画モード</button></a>
		<a href="#quality"><button type="button" class="btn btn-outline-dark m-1 btn-sm">高画質録画</button></a>
		<a href="#ldws"><button type="button" class="btn btn-outline-dark m-1 btn-sm">LDWS</button></a>
		<a href="#playback"><button type="button" class="btn btn-outline-dark m-1 btn-sm">録画した映像</button></a>
	</div>
	
	<h3 class="mb-4 mt-5 pb-2 border-bottom" id="recording"><strong>３つの録画モード</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>常時録画モード</h4>
			<p>起動してから終了するまで録画する通常の録画モードです。microSDカードが挿入されている状態で電源がONになると、録画モードが作動します。また、ACC電源連動なので、車のACC ON/OFFにしたがって、ドライブレコーダーの電源もON/OFFされます。</p>
			<ul class="explanation border-top">
				<li>常時録画モードの場合、１ファイルあたり約60秒のファイルが生成されます。（※状況により異なります。）</li>
				<li>再生メニューまたは設定メニューに入ると、録画が一時中断されます。</li>
				<li>常時録画の映像ファイルは、microSDカード内の「Normal」フォルダに保存されます。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="http://localhost/archive_nplace/img/drive_recorder/ND-151FCL_auto_recording.png" alt="常時録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>イベント録画モード</h4>
			<p>Gセンサーが一定以上の衝撃・急停止・急発進を感知すると、イベント録画モードに切り替わります。<br>万が一を記録することで、交通事故処理の迅速化など、メリットにつながることがあります。<br>イベント録画専用のフォルダに保存されるので、上書きの心配はありません。<br>また、スーパーキャパシタにより、急に電源が断たれた場合でも、記録した映像が保存されます。</p>
			<p class="small">イベント録画モードの場合、感知した時点の10秒前と30秒後、合わせて40秒間を録画したファイルが生成されます。（※状況により異なります。）</p>
			<ul class="explanation border-top">
				<li>イベント録画は１〜５までの５段階で感度調整が行えます。</li>
				<li>イベント録画の映像ファイルは、Micro SDカード内の「Event」フォルダに保存されます。</li>
				<li>再生メニューまたは設定メニューで操作している場合、イベント録画は発生しません。</li>
				<li>容量が不足すると、SDカードのフォーマットを促すメッセージが表示されます。フォーマットするまでイベント録画ができなくなりますので、本製品かパソコンにてフォーマットを行うか、別のMicro SDカードに取り替えてください。また、大事なデータはパソコン等にバックアップすることをお勧めします。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="http://localhost/archive_nplace/img/drive_recorder/ND-151FCL_event_recording.png" alt="イベント録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
		
		<div class="col-md-6 mb-4">
			<h4>手動録画モード</h4>
			<p>残しておきたい映像がある場合、手動録画モードを使うと、上書きされずにイベント録画のフォルダに保存されます。（※状況により異なります。）</p>
			<ul class="explanation border-top">
				<li>手動録画の映像ファイルは、Micro SDカード内の「Event」フォルダに保存されます。</li>
				<li>再生メニューまたは設定メニューで操作している場合、手動録画はできません。</li>
				<li>容量が不足すると、SDカードのフォーマットを促すメッセージが表示されます。フォーマットするまで手動録画ができなくなりますので、本製品かパソコンにてフォーマットを行うか、別のMicro SDカードに取り替えてください。また、大事なデータはパソコン等にバックアップすることをお勧めします。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="http://localhost/archive_nplace/img/drive_recorder/ND-151FCL_manual_recording.png" alt="手動録画モード" class="img-fluid">
			<p class="small">（※画像はイメージです。）</p>
		</div>
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="quality"><strong>高画質録画</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>200万画素 CMOSセンサーを搭載</h4>
			<p>SONY製CMOSセンサーを搭載。200万画素の高画質で精細な映像を記録し、昼間や夜間でも鮮明な映像を残すことができます。</p>
			<p class="small">※解像度は 1920×1080p となります。</p>
		</div>
		<div class="col-md-6 mb-4">
			<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sfRO5BP3Fdw" allowfullscreen></iframe></div>
		</div>	
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="ldws"><strong>未然に事故を防止！車線離脱警告システム（LDWS）</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>車線を乗り越える前に、警告音でお知らせ！</h4>
			<p>車線離脱警告システム（LDWS：Lane Departure Warning System）は、道路上の車線を感知して、車両が走行中の車線からはみ出てしまわないように、ドライバーに警告音で知らせるシステムです。</p>
			<ul class="explanation border-top">
				<li>LDWSは、天候状況（雨・雪・霧など）、道路状況（急カーブ・起伏が激しい・斜線の白線（黄線）が見えにくいなど）などの条件によっては適切に作動しない場合があります。</li>
				<li>LDWSは、ドライバーの安全運転を前提としたシステムであり、事故被害や運転負荷の軽減を目的としています。したがって、各機能には限界がありますので過信せず、安全運転を心がけてください。</li>
				<li>当製品は、ウインカー操作と連動していません。ドライバーが意図的に車線を変更する場合でも、警告音が鳴りますのでご了承ください。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="http://localhost/archive_nplace/img/drive_recorder/LDWS.jpg" alt="LDWS" class="img-fluid">
		</div>	
	</div>
	
	<h3 class="mb-4 mt-3 pb-2 border-bottom" id="playback"><strong>録画した映像を本体でもパソコンでも確認</strong></h3>
	<div class="row">
		<div class="col-md-6 mb-4">
			<h4>本体 – その場で確認</h4>
			<p>3.0インチの大きな液晶ディスプレイ（タッチパネル）で、車内その場で確認することができます。</p>
			<p class="small">再生メニューを操作している場合、録画はできません。</p>
		</div>
		<div class="col-md-6 mb-4">
			<img src="http://localhost/archive_nplace/img/drive_recorder/ND-151FCL_on_the_car.jpg" alt="本体 – その場で確認" class="img-fluid">
		</div>
		<div class="col-md-6 mb-4">
			<h4>専用ビューア – 自宅のパソコンで確認</h4>
			<p>付属のmicroSDカード内に、Windows専用のビューアソフトが収納されています。パソコンにインストールして、以下のように操作することができます。<br>●映像のリストを作成して連続再生ができる<br>●Gセンサー情報によって衝撃の方向を知ることができる<br>●映像をキャプチャーして編集する</p>
			<ul class="explanation border-top">
				<li>専用ビューアソフトを起動させるには、OS Windows7／8 が必要です。左記以外の環境での動作は保証できません。</li>
				<li>一般の動画プレーヤーでも再生できます。MP4（ビデオ：H.264、オーディオ：PCM コーデック）が再生可能なプレーヤーが必要です。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-4">
			<img src="http://localhost/archive_nplace/img/drive_recorder/viewer_000.jpg" alt="専用ビューア – 自宅のパソコンで確認" class="img-fluid">
		</div>
	</div>
	

	<h3 class="mt-3 mb-3"><strong>仕様</strong></h3>
	<table class="table mb-5 table-sm">
		<tbody>
			<tr>
				<th scope="row">サイズ</th>
				<td>約(W) 100 ×(H) 56 ×(D) 21 mm（突起部を除く）</td>
			</tr>
			<tr>
				<th scope="row">重量</th>
				<td>約 100 g</td>
			</tr>
			<tr>
				<th scope="row">メモリーカード</th>
				<td>16GB microSD／SDHCカード Class10 MLC（本体に挿入済）</td>
			</tr>
			<tr>
				<th scope="row">カメラ</th>
				<td>200万画素 SONY Full HD CMOSセンサー<br>対角130°／水平100°／垂直65°<br>1080p FHD（1920×1080p）／25, 28, 30fps／60Hz</td>
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
				<td>ガラス管ヒューズ（6mm×30mm）3A</td>
			</tr>
			<tr>
				<th scope="row">消費電流</th>
				<td>最大 300mA（12V）</td>
			</tr>
			<tr>
				<th scope="row">動作温度</th>
				<td>-20℃ 〜 60℃</td>
			</tr>
			<tr>
				<th scope="row">録画</th>
				<td>常時録画（60秒単位録画） <br>イベント録画／緊急録画（前10秒、後30秒録画）<br>エンジンON/OFFに連動して記録<br>常時録画：イベント録画＝１:１の比率で録画されます。</td>
			</tr>
			<tr>
				<th scope="row">映像ファイル形式</th>
				<td>MP4（ビデオ: H.264、オーディオ:PCM）</td>
			</tr>
			<tr>
				<th scope="row">インターフェース</th>
				<td>3インチタッチパネルLCD</td>
			</tr>
			<tr>
				<th scope="row">再生方法</th>
				<td>Windows専用ビューアソフト（付属microSDカード内に収納済）</td>
			</tr>
		</tbody>
	</table>
	
	<h3 class="mt-3 mb-3"><strong>録画時間の目安</strong></h3>
	<table class="table mb-3 table-sm">
		<tbody>
			<tr>
				<th scope="row">解像度</th>
				<td>16GB</td>
				<td></td>
			</tr>
			<tr>
				<th scope="row" rowspan="2">最大保存時間</th>
				<td>常時録画</td>
				<td>約100分</td>
			</tr>
			<tr>
				<td>イベント録画</td>
				<td>約100分</td>
			</tr>
			<tr>
				<th scope="row" rowspan="2">最大保存容量</th>
				<td>常時録画</td>
				<td>約7GB</td>
			</tr>
			<tr>
				<td>イベント録画</td>
				<td>約7GB</td>
			</tr>
		</tbody>
	</table>
	
	<ul class="explanation border-top">
		<li>microSDカードの空き容量に対し、常時録画モード：イベント録画（緊急録画）モード ＝ １:１の比率で保存されます。</li>
		<li>録画時間の目安は、以下の条件となります。<br>・付属のmicroSDカード16GB<br>・昼間撮影で、Full HD／1CH／30fps<br>・H.264 Encoding（main profile）</li>
	</ul>
</div>
<?php require_once '../../../footer.php'; ?> 