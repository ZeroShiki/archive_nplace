<?php
	define("title", "DNK-780");
	require_once '../../../header.php';
?>
<div class="container" id="wrap">
	<section id="">
		<nav aria-label="breadcrumb" role="navigation" class="bg-light">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../../../index.php">ホーム</a></li>
				<li class="breadcrumb-item"><a href="../index.php">カーナビゲーション</a></li>
				<li class="breadcrumb-item"><a href="index.php">DNK-780</a></li>
				<li class="breadcrumb-item active" aria-current="page">オプション</li>
			</ol>
		</nav>
		<p class="">DIANAVI DNK-780 オプション</p>
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
				require_once '../option/op-rurubuguide.html';
			?>
		</div>
	
		<h3 class="mb-4 mt-3 pb-2 border-bottom"><strong>別売オプション</strong></h3>
		<div class="row mb-5">
			<?php require_once '../option/op-av_cable.html'; ?>
		</div>
		<?php require_once '../option/caution.html'; ?>
	</section>
</div>
<?php require_once '../../../footer.php'; ?>