<?php
	define("title", "DNK-701J");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<section id="">
		<nav aria-label="breadcrumb" role="navigation" class="bg-light">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
				<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
				<li class="breadcrumb-item"><a href="index.php">DNK-701J</a></li>
				<li class="breadcrumb-item active" aria-current="page">オプション</li>
			</ol>
		</nav>
		<p class="">DIANAVI DNK-701J オプション</p>
		<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>同梱オプション</strong></h3>
		<div class="row mb-5">
			<?php
				require_once '../option/k-stand-non.html';
				require_once '../option/op-fs7-non.html';
				require_once '../option/op-strap-non.html';
				require_once '../option/cc-019n-non.html';
				require_once '../option/en-015n-non.html';
				require_once '../option/mapmanual-non.html';
				require_once '../option/hardmanual-non.html';
			?>
			<div class="col-lg-3 col-md-4 col-6">
				<div class="option mb-4">
					<img class="card-img-top" src="../../../img/carnavi/jafnavi_guide.jpg" alt="JAFナビガイド">
					<div class="card-body-option">
						<p class="card-title">JAFナビガイド</p>
						<p class="card-text">1,800円（税抜）</p>
						<p class="card-text">ナビアプリケーション「JAFナビ」に関する詳しい内容が記載されています。</p>
					</div>
				</div>
			</div>
		</div>
				
		<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>別売オプション</strong></h3>
		<div class="row mb-5">
			<?php require_once '../option/op-av_cable.html'; ?>
		</div>
		<?php require_once '../option/caution.html'; ?>
	</section>
</div>
<?php require_once '../../../footer.php'; ?>