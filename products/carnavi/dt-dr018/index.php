<?php
	define("title", "DT-DR018");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
			<li class="breadcrumb-item active" aria-current="page">DT-DR018</li>
		</ol>
	</nav>
	<p class="">DIANAVI DT-DR018</p>
	<div class="justify-content-center">
		<img class="w-75 d-block mx-auto" src="../../../img/carnavi/DT-DR018_front.jpg" alt="正面">
	</div>
	
	<div class="row justify-content-center">
		<a href="options.php"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">オプション</button></a>
		<a href="http://nplace.jp//wp-content/uploads/downloads/manuals/navigation/DT-DR018_manual_web_v1.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">取扱説明書</button></a>
		<a href="http://support.nplace.jp/download/firmware/dt-dr018/"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">ファームウェア</button></a>
	</div>

	<div class="row justify-content-center">
		<a href="#map-2018sp"><button type="button" class="btn btn-outline-dark m-1 btn-sm">2018年度版マップ春</button></a>
		<a href="#recorder"><button type="button" class="btn btn-outline-dark m-1 btn-sm">ドライブレコーダー機能搭載</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">エンジンキー電源連動</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">マルチメディア機能</button></a>
	</div>

	<?php
		require_once '../details/map-2018sp.html';
		require_once '../details/detail-2018sp.html';
	?>
	
	<h3 class="mb-4 pb-2 border-bottom" id="recorder"><strong>ドライブレコーダー機能搭載</strong></h3>
	<p>カーナビの本体背面にドライブレコーダーを搭載しています。カーナビの画面上で操作することができ、ナビゲーションをしながら録画することができます。</p>
	<div class="row mb-5">
		<div class="col-md-6">
			<h4>カーナビでドラレコをカンタン操作</h4>
			<p>通常のドライブレコーダーでは、画面が小さくて見にくい、ボタン操作が難しい・・・。でもこのカーナビなら、７インチタッチパネルの大画面でカンタンに操作できます。</p>
			
			<h5>■ライブビュー画面</h5>
			<ul class="explanation">
				<li>撮影画面の表示</li>
				<li>録画／停止、手動（イベント）録画</li>
				<li>録画設定</li>
				<li>撮影位置の確認</li>
				<li>microSDカードフォーマット</li>
				<li>録画映像の再生</li>
			</ul>
		</div>
		<div class="col-md-6 mb-5">
			<img src="../../../img/carnavi/DT-DR018_back.jpg" alt="ライブビュー画面" class="img-fluid">
		</div>
		
		<div class="col-md-6">
			<h4>エンジンキー電源連動</h4>
			<p>microSDカードが録画用のスロットに挿入された状態だと、車のエンジンON/OFFに合わせて、自動で録画を開始／終了します。
さらにGPS信号を受信すると、正確な時刻が録画ファイルに反映されます。録画中はLEDランプが点滅します。</p>
		</div>
		<div class="col-md-6 mb-5">
			<img src="http://nplace.jp/wp-content/uploads/2018/11/DT-DR018_rec.jpg" alt="エンジンキー電源連動" class="img-fluid">
		</div>
		
		<div class="col-md-6">
			<h4>常時録画</h4>
			<p>常時録画は起動してから終了するまで録画する通常の録画モードです。microSDカードが挿入されている状態で電源がONになると、録画を開始します。</p>
			<ul class="explanation border-top">
				<li>ファイル詳細データ（1データ）は容量約120MB（約２分）に設定されています。</li>
				<li>microSDカードの容量が不足すると、一番古いファイルから上書きして保存します。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-5">
			<img src="http://nplace.jp/wp-content/uploads/2018/11/DT-DR018_rectime.jpg" alt="常時録画" class="img-fluid">
		</div>
		
		<div class="col-md-6">
			<h4>イベント録画</h4>
			<ul class="pl-3">
				<li>カメラに内蔵されているGセンサーが一定以上の衝撃・急停止・急発進を感知すると、イベント録画モードに切り替わります。万が一を記録することで、交通事故処理の迅速化など、メリットになることがあります。</li>
				<li>ライブビュー画面に表示されている「映像をロック」ボタンをタッチすると、イベント録画として保存されます。</li>
				<li>本体の「録画映像ロックスイッチ」を押すと、イベント録画として保存されます。</li>
			</ul>
			<ul class="explanation border-top">
				<li>ファイル詳細データ（1データ）は容量約120MB（約２分）に設定されています。</li>
				<li>これらのファイルは上書きされませんが、microSDカードのフォーマットを行うと削除されます。</li>
			</ul>
		</div>
		<div class="col-md-6 mb-5">
			<img src="http://nplace.jp/wp-content/uploads/2018/11/DT-DR018_rectime_2.jpg" alt="イベント録画" class="img-fluid mb-4">
			<img src="http://nplace.jp/wp-content/uploads/2018/11/DT-DR018_lock.jpg" alt="手動録画" class="img-fluid">
		</div>
		
		<div class="col-md-6">
			<h4>カーナビ画面で録画した映像を再生</h4>
			<p>再生モードに切り替えて、録画した映像を再生することができます。</p>
		</div>
		<div class="col-md-6">
			<img src="http://nplace.jp/wp-content/uploads/2018/11/DT-DR018_play.jpg" alt="再生" class="img-fluid">
		</div>
		
	</div>

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
				<td>8GB 内蔵メモリー</td>
			</tr>
			<tr>
				<th scope="row">microSDスロット</th>
				<td>32GBまでのmicroSDカード・microSDHCカードに対応</td>
			</tr>
			<tr>
				<th scope="row">LEDバックライト液晶</th>
				<td>7.0インチTFT<br>解像度：800×480 pixelタッチパネル</td>
			</tr>
			<tr>
				<th scope="row">内蔵スピーカー</th>
				<td>モノラル（1.5W×1）</td>
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
				<td>(W) 175 × (H) 109 × (D) 14 mm（レンズ部を除く）</td>
			</tr>
			<tr>
				<th scope="row">重量（約）</th>
				<td>265 g</td>
			</tr>
			<tr>
				<th scope="row">生産国</th>
				<td>中国</td>
			</tr>
		</tbody>
	</table>
	
	<h3 class="mt-5 mb-3"><strong>カメラ</strong></h3>
	<table class="table mb-5 table-sm spec">
		<tbody>
			<tr>
				<th scope="row" width="200px">カメラ</th>
				<td>100万画素 HD（1280×720pixel）搭載<br>対角128° / 水平99° / 垂直73°</td>
			</tr>
			<tr>
				<th scope="row">フレームレート</th>
				<td>30fps</td>
			</tr>
			<tr>
				<th scope="row">音声</th>
				<td>マイク内蔵</td>
			</tr>
			<tr>
				<th scope="row">Gセンサー</th>
				<td>3軸Gセンサー（3段階切替）</td>
			</tr>
			<tr>
				<th scope="row">録画単位時間</th>
				<td>約２分（約120MBを1データとして記録）<br>イベント録画（常時録画と同じ）</td>
			</tr>
			<tr>
				<th scope="row">動画ファイル形式</th>
				<td>AVI（ビデオ：JPEG、オーディオ：PCM）<br>※上記のコーデックが再生可能なプレーヤーが必要です。</td>
			</tr>
			<tr>
				<th scope="row">再生方法</th>
				<td>Windows専用ビューアソフト（microSDカードフォーマット時に生成）</td>
			</tr>
		</tbody>
	</table>
	
	<?php
		require_once '../details/map-2018sp-db.html';
		require_once '../details/media7inch_c.html';
	?>
	
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
				<td>約60分</td>
				<td>約120分</td>
				<td>約240分</td>
			</tr>
		</tbody>
	</table>
	<p class="small mb-5">※上記値は目安です。状況により変動します。</p>
	
</div>
<?php require_once '../../../footer.php'; ?> 