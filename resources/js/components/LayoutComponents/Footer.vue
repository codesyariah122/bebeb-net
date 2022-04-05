<template>
	<div>
		<footer>
			<div class="container pt-5 pb-3">
				<div class="row">
					<div class="col-12 col-sm-8 col-lg-4">
						<div class="m-2">
							<h5 class="font-weight-bold mb-4">Tentang</h5>
							<p>
								{{list_data.about}}
							</p>
							<p>
								<i class="fas fa-map-marker-alt mr-2"></i>
								{{list_data.address}}
							</p>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-lg-4">
						<div class="m-2">
							<h5 class="font-weight-bold mb-4">Links</h5>
							<div class="d-flex flex-column">
								<a class="link" href="#top">Beranda</a>
								<a class="link" href="#paket">Paket Internet</a>
								<a class="link" href="#blog">Artikel</a>
								<a class="link" href="#kontak">Kontak</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-lg-4">
						<div class="m-2">
							<h5 class="font-weight-bold mb-4">Get In Touch</h5>
							<div class="d-flex flex-column">
								<a :href="`mailto:${list_data.email}`" class="link text-white text-light" target="_blank">
									<i class="fas fa-envelope mr-2"></i>
									{{list_data.email}}
								</a>
								<a href="https://wa.me/628113314116" class="link text-light" target="_blank">
									<i class="fab fa-whatsapp mr-2"></i>
									<a :href="phone.number" class="text-white">
										{{phone.context}}
									</a>
								</a>
							</div>
							<div class="mt-4">
								<a href="https://www.facebook.com/abigeulis" class="socmed-link" target="_blank">
									<i class="fab fa-facebook"></i>
								</a>
								<a href="https://www.instagram.com/abigeulis" class="socmed-link" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12 col-xs-12 col-sm-12">
						<div class="embed-responsive embed-responsive-21by9 mt-2 mb-5">
							<iframe :src="list_data.gmaps" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
				<hr class="w-100 border-primary">
				<small class="d-flex flex-column flex-md-row">
					<span>
						Copyright &copy; 2021 <strong>{{app_name}}</strong>. All rights reserved.
					</span>
					<span class="ml-md-auto mt-2 mt-md-0">
						Made with <i class="fas fa-heart text-pink"></i> by <a href="https://github.com/codesyariah122/bebeb-net" target="_blank">BebebNet::Developer Team</a>.
					</span>
				</small>
				<small class="d-block mt-2">
					Icons provided by <a href="https://icon8.com" target="_blank">icons8</a>.
				</small>
			</div>
		</footer>
	</div>
</template>

<script>
	export default {
		props: ['app_name', 'api_url', 'app_key', 'app_env'],
		data(){
			return{
				list_data: {},
				phone:{},
				email:''
			}
		},

		mounted(){
			this.GetWebData()
		},
		methods: {
			GetWebData(){
				axios.get(`${this.api_url}/data/homepage/${this.app_key}`)
				.then(({data}) => {
					this.list_data = data.data
					this.phone = data.data.phone
					console.log(data.data)
				})
				.catch(err => console.log(err.response))
			}
		}
	}
</script>