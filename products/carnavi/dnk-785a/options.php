<?php
	define("title", "DNK-785A");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<section id="">
		<nav aria-label="breadcrumb" role="navigation" class="bg-light">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
				<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
				<li class="breadcrumb-item"><a href="index.php">DNK-785A</a></li>
				<li class="breadcrumb-item active" aria-current="page">オプション</li>
			</ol>
		</nav>
		<p class="">DIANAVI DNK-785A オプション</p>
		<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>同梱オプション</strong></h3>
		<div class="row mb-5">
			<?php require_once '../option/k-stand-non.html'; ?>
			<?php require_once '../option/op-fs7-non.html'; ?>
			<?php require_once '../option/cc-015n-non.html'; ?>
			<?php require_once '../option/op-strap-non.html'; ?>
			<?php require_once '../option/op-manual-non.html'; ?>
		</div>
	
		<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>別売オプション</strong></h3>	
	
		<div class="row mb-5">
			<?php require_once '../option/en-015n-non.html'; ?>
			<?php require_once '../option/op-ckk-non.html'; ?>
		</div>
		<?php require_once '../option/caution.html'; ?>
	 </section>
</div>
<?php require_once '../../../footer.php'; ?>