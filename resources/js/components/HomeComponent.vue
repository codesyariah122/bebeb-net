<template>
	<div>
		<main>
			<a v-show="visible" href="#top" class="to-top">
				<font-awesome-icon icon="chevron-circle-up" />
			</a>
			<!-- <a href="https://wa.me/628113314116" class="wa-ctc text-success" target="_blank">
				<span class="fa-stack">
					<i class="fas fa-square fa-stack-2x"></i>
					<i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
				</span>
			</a> -->
			<!-- Intro section -->
			<IntroSection/>
			<!-- End Intro -->

			<!-- Service Section -->
			<ServiceSection/>
			<!-- End services -->
			
			<!-- Partner Section -->
			<PartnerSection/>
			<!-- End partner -->
			
			<!-- Paket Section -->
			<PaketSection/>
			<!-- End paket -->

			<!-- Blog Section -->
			<BlogSection :articles="articles" :loading="loading" :app_url="app_url"/>
			<!-- End Blog -->

			<!-- Contact Section -->
			<ContactSection :list_data="list_data" :phone="phone" :api_url="api_url" :app_env="app_env" :app_key="app_key"/>
			<!-- End contact -->
			
		</main>
	</div>
</template>

<script>
	import IntroSection from './HomepageComponents/IntroSection.vue'
	import ServiceSection from './HomepageComponents/ServiceSection.vue'
	import PartnerSection from './HomepageComponents/PartnerSection.vue'
	import PaketSection from './HomepageComponents/PaketSection.vue'
	import BlogSection from './HomepageComponents/BlogSection.vue'
	import ContactSection from './HomepageComponents/ContactSection.vue'

	export default {
		props: ['api_url', 'app_key', 'app_env', 'app_url'],
		components:{
			IntroSection,
			ServiceSection,
			PartnerSection,
			PaketSection,
			BlogSection,
			ContactSection
		},

		data(){
			return{
				list_data: {},
				phone:{},
				visible: false,
				articles: [],
				loading: null
			}
		},

		mounted(){
			this.GetWebData(),
			window.addEventListener('scroll', this.scrollListener),
			this.GetArticleLists()
		},

		beforeDestroy() {
			window.removeEventListener('scroll', this.scrollListener)
		},

		methods: {
			GetWebData(){
				axios.get(`${this.api_url}/data/homepage/${this.app_key}`)
				.then(({data}) => {
					this.list_data = data.data
					this.phone = data.data.phone
				})
				.catch(err => console.log(err.response))
			},

			GetArticleLists(){
				this.loading = true
				axios.get(`${this.api_url}/articles/${this.app_key}`)
				.then(({data}) => {
					this.articles = data.list_data.articles
				})
				.catch(err => console.log(err.response))
				.finally(() => {
					setTimeout(() => {
						this.loading=false
					}, 1500)	
				})
			},

			scrollTop() {
				this.intervalId = setInterval(() => {
					if (window.pageYOffset === 0) {
						clearInterval(this.intervalId)
					}
					// window.scroll(0, window.pageYOffset - 50)
					document.getElementById('top').scrollIntoView();
				}, 20)
			},
			scrollListener(e) {
				this.visible = window.scrollY > 150
			}
		}
	}
</script>