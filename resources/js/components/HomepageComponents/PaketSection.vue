<template>
	<section class="hash" id="paket">
		<div class="container-fluid">
			<h3 class="section-title">Paket Internet</h3>
			<ul class="nav nav-tabs border-0 justify-content-center mb-4">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#business">Business</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#hotspot">Hotspot Area</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="business">
					<div class="row">
						<div class="col-12 col-sm-8 offset-sm-2 col-lg-4 offset-lg-4">
							<form method="GET" action="#">
								<div class="pricing-plan">
									<div class="pricing-header">
										<h4 class="pricing-title">Dedicated</h4>
										<div class="pricing-cost">Call Only</div>
									</div>
									<ul class="pricing-features">
										<li>
											<div class="input-group">
												<input type="number" name="speed" min="1" max="1000" class="form-control" placeholder="Kecepetan akses" required>
												<div class="input-group-append">
													<div class="input-group-text">Mbps</div>
												</div>
											</div>
										</li>
										<li>Simetris Upload : Download</li>
										<li>Unlimited Tanpa Kuota/FUP</li>
										<li>Cocok untuk usaha RT/RW Net</li>
										<li>* Syarat ketentuan berlaku</li>
									</ul>
									<div class="pricing-footer">
										<button type="submit" class="btn btn-lg btn-primary rounded-pill px-4">Daftar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="home" role="tabpanel">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="pricing-plan">
								<div class="pricing-header">
									<h4 class="pricing-title">Bronze</h4>
									<div class="pricing-cost">Rp200.000,00</div>
									<div class="pricing-save">/Bulan</div>
								</div>
								<ul class="pricing-features">
									<li>1 Mbps Upload Speed</li>
									<li>2 Mbps Download Speed</li>
									<li>Bandwitdh UpTo</li>
									<li>Unlimited Tanpa Kuota/FUP</li>
									<li>Cocok Untuk Rumahan (Laptop/HP)</li>
									<li>* Syarat ketentuan berlaku</li>
								</ul>
								<div class="pricing-footer">
									<a href="#" class="btn btn-lg btn-primary rounded-pill px-4">Daftar</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="pricing-plan">
								<div class="pricing-header red">
									<h4 class="pricing-title">Silver</h4>
									<div class="pricing-cost">Rp385.000,00</div>
									<div class="pricing-save">/Bulan</div>
								</div>
								<ul class="pricing-features">
									<li>2 Mbps Upload Speed</li>
									<li>5 Mbps Download Speed</li>
									<li>Bandwitdh UpTo</li>
									<li>Unlimited Tanpa Kuota/FUP</li>
									<li>Cocok Untuk Rumahan (Laptop/HP)</li>
									<li>* Syarat ketentuan berlaku</li>
								</ul>
								<div class="pricing-footer">
									<a href="#" class="btn btn-lg btn-danger rounded-pill px-4">Daftar</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="pricing-plan">
								<div class="pricing-header secondary">
									<h4 class="pricing-title">Gold</h4>
									<div class="pricing-cost">Rp660.000,00</div>
									<div class="pricing-save">/Bulan</div>
								</div>
								<ul class="pricing-features">
									<li>3 Mbps Upload Speed</li>
									<li>10 Mbps Download Speed</li>
									<li>Bandwitdh UpTo</li>
									<li>Unlimited Tanpa Kuota/FUP</li>
									<li>Cocok Untuk Rumahan (Laptop/HP)</li>
									<li>* Syarat ketentuan berlaku</li>
								</ul>
								<div class="pricing-footer">
									<a href="#" class="btn btn-lg btn-success rounded-pill px-4">Daftar</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 offset-lg-4">
							<form method="GET" action="#">
								<div class="pricing-plan">
									<div class="pricing-header">
										<h4 class="pricing-title">Custom</h4>
										<div class="pricing-cost">Call Only</div>
										<div class="pricing-save">&nbsp;</div>
									</div>
									<ul class="pricing-features">
										<li class="with-desc">
											<div class="input-group">
												<input type="number" name="speed" min="1" max="1000" class="form-control" placeholder="Kecepetan download" required>
												<div class="input-group-append">
													<div class="input-group-text">Mbps</div>
												</div>
												<a href="#" class="ml-2 my-2 text-secondary" data-toggle="tooltip" title="Kecepatan 1:2 (Upload : Download). Kecepatan download akan menjadi acuan kecepatan upload.">
													<i class="fas fa-question-circle"></i>
												</a>
											</div>
										</li>
										<li>Bandwitdh UpTo</li>
										<li>Unlimited Tanpa Kuota/FUP</li>
										<li>Cocok Untuk Rumahan (Laptop/HP)</li>
										<li>* Syarat ketentuan berlaku</li>
									</ul>
									<div class="pricing-footer">
										<button type="submit" class="btn btn-lg btn-primary rounded-pill px-4">Daftar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="hotspot" role="tabpanel">
					<div class="row">
						<div class="col-12 col-sm-8 offset-sm-2 col-lg-4 offset-lg-4">
							<div class="pricing-plan">
								<div class="pricing-header">
									<h4 class="pricing-title">Hotspot Area</h4>
									<div class="pricing-cost">Rp2.000,00</div>
									<div class="pricing-save">/Voucher</div>
								</div>
								<ul class="pricing-features">
									<li>1 Mbps Upload Speed / Voucher</li>
									<li>2 Mbps Download Speed / Voucher</li>
									<li>Bandwitdh Burstable (UpTo)</li>
									<li>Unlimited Tanpa Kuota/FUP</li>
									<li>Cocok Untuk Usaha Voucher Hotspot</li>
									<li>* Syarat ketentuan berlaku</li>
								</ul>
								<div class="pricing-footer">
									<a href="#" class="btn btn-lg btn-primary rounded-pill px-4">Daftar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>