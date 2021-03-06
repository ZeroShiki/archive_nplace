<?php
	define("title", "DT-RC317");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<section id="">
		<nav aria-label="breadcrumb" role="navigation" class="bg-light">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
				<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
				<li class="breadcrumb-item"><a href="index.php">DT-RC317</a></li>
				<li class="breadcrumb-item active" aria-current="page">オプション</li>
			</ol>
		</nav>
	<p class="">DIANAVI DT-RC317 オプション</p>
	<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>同梱オプション</strong></h3>
	<div class="row mb-5">
		<?php
			require_once '../option/op-st511.html';
			require_once '../option/op-fd5.html';
			require_once '../option/op-h711j.html';
		?>
		<div class="col-lg-3 col-md-4 col-6">
			<div class="option mb-4">
				<img class="card-img-top" src="../../../img/carnavi/CC-201SW.jpg" alt="スイッチ付専用シガー電源アダプター">
				<div class="card-body-option">
					<p class="card-title">スイッチ付専用シガー電源アダプター</p>
					<h4 class="card-text">CC-201SW</h4>
					<p class="card-text">3,000円（税抜）</p>
					<p class="card-text">約1.5m／12V-24V車 対応です。専用リアカメラ映像の表示切り替えができます。</p>
				</div>
			</div>
		</div>
		<?php require_once '../option/op-tp7jb.html'; ?>
		<div class="col-lg-3 col-md-4 col-6">
		  <div class="option mb-4">
			<img class="card-img-top" src="../../../img/carnavi/OP-RC317.jpg" alt="専用リアカメラ">
			<div class="card-body-option">
				<p class="card-title">専用リアカメラ</p>
				<h4 class="card-text">OP-RC317</h4>
				<p class="card-text">3,800円（税抜）</p>
				<p class="card-text">カーナビに接続して、後方の映像を表示します。</p>
			</div>
		  </div>
		</div>
		<div class="col-lg-3 col-md-4 col-6">
		  <div class="option mb-4">
			<img class="card-img-top" src="../../../img/carnavi/OP-CC8.jpg" alt="ケーブル固定クランプ">
			<div class="card-body-option">
				<p class="card-title">ケーブル固定クランプ（８個）</p>
				<h4 class="card-text">OP-CC8</h4>
				<p class="card-text">1,500円（税抜）</p>
				<p class="card-text">リアカメラの配線時に使用します。</p>
			</div>
		  </div>
		</div>
		<div class="col-lg-3 col-md-4 col-6">
		  <div class="option mb-4">
			<img class="card-img-top" src="../../../img/carnavi/DT-RC317_manual_pict.jpg" alt="取扱説明書">
			<div class="card-body-option">
				<p class="card-title">取扱説明書</p>
				<h4 class="card-text">OP-M317</h4>
				<p class="card-text">2,500円（税抜）</p>
				<p class="card-text">ナビゲーション本体に関する詳しい操作方法が記載されています。</p>
			</div>
		  </div>
		</div>
	</div>

	<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>別売オプション</strong></h3>	
	<div class="row mb-5">
		<?php require_once '../option/en-015n.html'; ?>
	</div>
	<?php require_once '../option/caution.html'; ?>
	</section>
</div>
<?php require_once '../../../footer.php'; ?>