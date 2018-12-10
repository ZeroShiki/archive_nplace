<?php
	define("title", "DNK-701J");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
			<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
			<li class="breadcrumb-item active" aria-current="page">DNK-701J</li>
		</ol>
	</nav>
	
	<p class="">DIANAVI DNK-701J</p>
	<div id="carouselIndicators" class="carousel slide my-3" data-ride="carousel">
		<div class="carousel-inner">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-item active">
				<img class="w-100 d-block mx-auto" src="../../../img/carnavi/DNK-701J_front.jpg" alt="正面">
			</div>
			<div class="carousel-item">
				<img class="w-100 d-block mx-auto" src="../../../img/carnavi/DNK-701J_back.jpg" alt="背面">
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
		<a href="http://nplace.jp/wp-content/uploads/downloads/manuals/navigation/DNK-701J_manual_web_v1.pdf" target="_blank"><button type="button" class="btn btn-info m-1 mb-2 btn-lg">ハードマニュアル</button></a>
	</div>
	
	<div class="row justify-content-center">
		<a href="#map-2013"><button type="button" class="btn btn-outline-dark m-1 btn-sm">2013年度版マップ</button></a>
		<a href="#indicator"><button type="button" class="btn btn-outline-dark m-1 btn-sm">インジケーター</button></a>
		<a href="#JAF"><button type="button" class="btn btn-outline-dark m-1 btn-sm">JAFナビ</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">エンジンキー電源連動</button></a>
		<a href="#others"><button type="button" class="btn btn-outline-dark m-1 btn-sm">マルチメディア機能</button></a>
	</div>

	<?php
		require_once '../details/map-2013.html';
		require_once '../details/indicator.html';
	
	?>
	
	<h3 class="mb-4 mt-4 pb-2 border-bottom" id="JAF"><strong>JAFドライブコース収録！</strong></h3>
	<div class="row mb-5">
		<div class="col-md-6 mb-3">
			<h4>ドライブコース、会員優待施設から検索が可能</h4>
			<p>豊富なドライブコースや施設情報を提供するJAF（日本自動車連盟）から、約200のドライブコースを集録しました。通称「JAFナビ」！<br>JAFが用意した「ドライブコース」と、JAF会員ならではの「会員優待施設」の２つから検索が可能です。季節に合わせたおすすめのモデルドライブコースや、ドライブに役立つ情報が満載。</p>
			<p>ドライブコースを検索すると、ルート全体の走行ガイドが表示されます。<br>また、選択したドライブコースを編集することができるので、自分なりのオリジナルコースが作成できます。</p>
			<h6 class="mt-4"><strong>JAFナビデータベース</strong></h6>
			<table class="table table-sm">
				<tbody>
					<tr>
						<td class="text-nowrap">情報の種類</td>
						<td>「JAFナビ」情報提供：一般社団法人 日本自動車連盟</td>
					</tr>
					<tr>
						<td class="text-nowrap">ドライブコース</td>
						<td>約 200 コース</td>
					</tr>
					<tr>
						<td class="text-nowrap">会員優待施設</td>
						<td>約 20,000 件</td>
					</tr>
	  			</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<img src="../../../img/carnavi/jafnavi_detail_1.jpg" alt="JAFナビ" class="img-fluid">
		</div>
		
		<div class="col-md-6">
			<p>JAFナビでは「ドライブコース」「会員優待施設」の２つのカテゴリーから検索することができます。さらに、トップメニューにはJAFロードサービスガイダンスが準備されており、万が一の場合にも対応しています。</p>
			<p class="small">※JAFナビに収録されている会員優待施設やロードサービスはJAF会員の方のみに適用されます。入会されていない方は適用外となりますので予めご了承ください。</p>
		</div>
		<div class="col-md-6 mb-5">
			<img src="../../../img/carnavi/jafnavi_10.jpg" alt="JAFナビ_ドライブコースと会員優待施設" class="img-fluid">
		</div>
		<div class="col-md-6">
			<p>人気スポットを巡るドライブコースは、全国のJAFスタッフが実際に走行したコースです。その中から、四季折々のコースやグルメを楽しむコース、さまざまな種類のコースが厳選収録されています。自宅からモデルドライブコースまでのナビゲーションも行います。</p>
			<p class="small">春夏秋冬に分けたコース、時には日付をまたいで走行するドライブコースも収録されています。どれもJAFスタッフのおすすめです。</p>
		</div>
		<div class="col-md-6 mb-5">
			<img src="../../../img/carnavi/jafnavi_13.jpg" alt="JAFナビ_検索画面" class="img-fluid">
		</div>
		<div class="col-md-6">
			<p>ドライブコースを検索すると、立ち寄りスポットの詳細情報が表示されます。また、ドライブコースは自分なりに立ち寄りスポットを編集することができます。ドライブコースを走る前に確認することができるので、スケジュールに合わせて自分なりのオリジナルコースを作ることができます。</p>
			<p class="small">詳細情報は、住所、電話番号、営業時間、利用料金等が記載されています（一部掲載されていない施設あり）。</p>
		</div>
		<div class="col-md-6 mb-5">
			<img src="../../../img/carnavi/jafnavi_19.jpg" alt="JAFナビ_検索結果画面" class="img-fluid">
		</div>
		

		<div class="col-md-6">
			<h4>優待会員施設を検索</h4>
			<p>JAFと優待協定を結んでいる全国のさまざまな施設で割引・特典が受けられる、JAF会員向けサービスの優待施設を検索することができます。</p>
			<p>会員優待施設検索は「見る」「楽しむ」「暮らす」「旅する」「学ぶ」のカテゴリーから検索できます。また、周辺検索も可能です。</p>
			<p class="small">※JAF会員優待に関する詳しい情報は、JAFおよびJAFナビの公式ホームページをご参照ください。JAFナビ付のカーナビゲーションに会員優待機能はついておりません。<br>※集録データは現在と異なる場合があります。ご利用の際は事前に問い合わせるなど、各自で確認されることをお勧めします。</p>
		</div>
		<div class="col-md-6 mb-5">
			<img src="../../../img/carnavi/jafnavi_271.jpg" alt="JAFナビ_優待会員施設検索" class="img-fluid">
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
				<th scope="row">マップソフト</th>
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
				<td>モノラル</td>
			</tr>
			<tr>
				<th scope="row">イヤホン</th>
				<td>φ3.5mm ステレオミニジャック</td>
			</tr>
			<tr>
				<th scope="row">外部入力</th>
				<td>φ3.5mm ミニジャック（専用AVケーブル別売4極タイプ）</td>
			</tr>
			<tr>
				<th scope="row">シガー電源</th>
				<td>DC 12/24V 車対応</td>
			</tr>
			<tr>
				<th scope="row">シガーソケット電源<br>アダプターヒューズ</th>
				<td>ガラス管ヒューズ（6mm×30mm）2A</td>
			</tr>
			<tr>
				<th scope="row">動作温度</th>
				<td>0 〜 60℃</td>
			</tr>
			<tr>
				<th scope="row">サイズ（約）</th>
				<td>(W) 203 ×(H) 117 ×(D) 16.5 mm</td>
			</tr>
			<tr>
				<th scope="row">重量（約）</th>
				<td>400 g</td>
			</tr>
			<tr>
				<th scope="row">生産国</th>
				<td>韓国</td>
			</tr>
		</tbody>
	</table>
	<?php
		require_once '../details/map-2013sp-db.html';
		require_once '../details/media7inch_k.html';
	?>
</div>
<?php require_once '../../../footer.php'; ?> 