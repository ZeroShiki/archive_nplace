<?php
	define("title", "DNK-7636J");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
  	<section id="">
	  	<nav aria-label="breadcrumb" role="navigation" class="bg-light">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
				<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
				<li class="breadcrumb-item"><a href="index.php">DNK-7636J</a></li>
				<li class="breadcrumb-item active" aria-current="page">オプション</li>
			</ol>
		</nav>
		<p class="">DIANAVI DNK-7636J オプション</p>
		<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>同梱オプション</strong></h3>
		<div class="row mb-5">
			<?php
				require_once '../option/op-st711.html';
				require_once '../option/op-fd7.html';
				require_once '../option/cc-019n.html';
			?>
			<div class="col-lg-3 col-md-4 col-6">
				<div class="option mb-4">
					<img class="card-img-top" src="../../../img/carnavi/DNK-7636J_manual_pict.jpg" alt="取扱説明書">
					<div class="card-body-option">
						<p class="card-title">取扱説明書</p>
						<h4 class="card-text">OP-M7636</h4>
						<p class="card-text">2,500円（税抜）</p>
						<p class="card-text">ナビゲーション本体に関する詳しい操作方法が記載されています。</p>
					</div>
				</div>
			</div>
		</div>
	
		<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>別売オプション</strong></h3>	
		<div class="row mb-5">
			<?php
				require_once '../option/en-015n.html';
				require_once '../option/cg19-l.html';
				require_once '../option/op-fac.html';
			?>
		</div>
		<?php require_once '../option/caution.html'; ?>
	</section>
</div>
<?php require_once '../../../footer.php'; ?>