<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-md-between align-items-center">
			<div class="col-auto">
				<div class="row gx-2 gx-md-3 text-dark justify-content-center">
					<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center"><?= $site ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center">All Rights Reserved
					</div>
				</div>
			</div>
			<div class="col-auto d-none d-md-block">
				<div class="row align-items-center">
					<div class="col-auto fw-700 text-tertiary"><u>Privacy Policies</u></div>
					<div class="col-auto text-tertiary fw-700">|</div>
					<div class="col-auto fw-700 text-tertiary"><u>Terms &amp; Conditions</u></div>
					<div class="col-auto ps-xxl-7 d-none d-lg-block">
						<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
							<?= renderImg("aiims.png", "logo") ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 d-lg-none pt-3">
				<div class="row align-items-center justify-content-center d-md-none">
					<div class="col-auto fw-700 text-tertiary"><u>Privacy Policies</u></div>
					<div class="col-auto text-tertiary fw-700">|</div>
					<div class="col-auto fw-700 text-tertiary"><u>Terms &amp; Conditions</u></div>
				</div>
				<hr>
				<div class="text-center pt-2">
					<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
						<?= renderImg("aiims.png", "logo") ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>