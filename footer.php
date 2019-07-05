    <footer class="big-footer">
	    <div class="container">
			<div class="row">
				<div class="col-12 col-sm">
					<a href="http://nplace.jp/"><img src="http://archive.nplace.jp/img/common/site_id_2x.png" height="40" alt="logo"></a>
					<a class="d-block mt-3 mb-3 text-muted" href="#">page to top</a>
				</div>
				<div class="col-3 d-none d-sm-block d-md-block">
					<a href="http://nplace.jp/about/" class="h6"><strong>会社情報</strong></a>
					<ul class="list-unstyled text-small mt-2">
						<li><a class="text-muted" href="http://nplace.jp/about/">会社概要</a></li>
					</ul>
				</div>
				<div class="col-3 d-none d-sm-block d-md-block">
					<a href="http://nplace.jp/product/" class="h6"><strong>商品情報</strong></a>
					<ul class="list-unstyled text-small mt-2">
						<li><a class="text-muted" href="http://nplace.jp/product/carnavi/">カーナビゲーション</a></li>
						<li><a class="text-muted" href="http://nplace.jp/product/drive_recorder/">ドライブレコーダー</a></li>
					</ul>
				</div>
				<div class="col-3 d-none d-sm-block d-md-block">
						<a href="http://support.nplace.jp/" class="h6"><strong>サポート</strong></a>
					<ul class="list-unstyled text-small mt-2">
						<li><a class="text-muted" href="http://support.nplace.jp/inquiry/">お問い合わせ</a></li>
						<li><a class="text-muted" href="http://support.nplace.jp/download/">ダウンロード</a></li>
						<li><a class="text-muted" href="http://support.nplace.jp/repair/">修理のご依頼</a></li>
						<li><a class="text-muted" href="http://support.nplace.jp/maps/">地図データ更新</a></li>
						<li><a class="text-muted" href="http://support.nplace.jp/faq/">FAQ</a></li>
					</ul>
				</div>
			</div>
	   	 	<span class="small mr-3"><a class="text-muted" href="http://nplace.jp/">Copyright © NPLACE.CO,.LTD. All Rights Reserved.</a></span>
			<span class="small mr-3"><a class="text-muted" href="http://nplace.jp/achives/category/update/"><i class="fas fa-chevron-right"></i>更新情報</a></span>
			<span class="small mr-3"><a class="text-muted" href="http://nplace.jp/achives/category/information/"><i class="fas fa-chevron-right"></i>お知らせ</a></span>
			<span class="small"><a class="text-muted" href="https://www.youtube.com/user/NPLACEchannel" target="_blank"><i class="fab fa-youtube"></i>Youtube</a></span>
		</div>
	</footer>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script>
		$(function(){
		  $('a[href^="#"]').click(function() {
			  var headerHeight = 80;
			  var speed = 400;
			  var href= $(this).attr("href");
			  var target = $(href == "#" || href == "" ? 'html' : href);
			  var position = target.offset().top - headerHeight;
			  $('body,html').animate({scrollTop:position}, speed, 'swing');
			  return false;
		   });
		});
	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>