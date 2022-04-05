<template>
	<div>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
				<a class="navbar-brand" href="https://bebeb-network.herokuapp.com">
					<img :src="list_data.logo_brand" width="55" height="55">
					<span>{{app_name}}</span> 
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
					<div class="toggler-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar">
					<div class="navbar-nav">
						<a class="nav-link active" href="#top">Beranda</a>
						<a class="nav-link" href="#why-us">Mengapa Kami?</a>
						<a class="nav-link" href="#service">Layanan</a>
						<a class="nav-link" href="#paket">Paket Internet</a>
						<a class="nav-link" href="#blog">Artikel</a>
						<a class="nav-link" href="#kontak">Kontak</a>
					</div>
				</div>
			</nav>
			
			<div v-if="$route.name !== 'article-detail'" id="carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li v-for="(item, index) in carousels" data-target="#carousel" :data-slide-to="index" :class="`${index === 0 ? 'active' : ''}`"></li>
				</ol>
				<div class="carousel-inner">
					<div v-for="(item, index) in carousels" :class="`carousel-item ${index === 0 ? 'active' : ''}`">
						<img :src="item">
					</div>
					<!-- <div class="carousel-item">
						<img src="https://tsabit.net.id/assets/img/slide_2.jpg">
					</div>
					<div class="carousel-item">
						<img src="https://tsabit.net.id/assets/img/slide_3.jpg">
					</div>
					<div class="carousel-item">
						<img src="https://tsabit.net.id/assets/img/slide_4.jpg">
					</div> -->
				</div>
			</div>
		</header>
	</div>
</template>

<script>
	export default{
		props: ['app_name',  'api_url', 'app_key', 'app_env'],
		data(){
			return {
				list_data:{},
				carousels: []
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
					this.carousels = data.data.carousels
					console.log(data.data.carousels)
				})
				.catch(err => console.log(err.response))
			}
		}
	}
</script>