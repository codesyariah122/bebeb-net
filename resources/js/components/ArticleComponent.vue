<template>
	<div>
		<article class="article__content">
			<div v-if="loading" class="d-flex justify-content-center">
				<div class="spinner-grow text-danger" style="width: 5rem; height: 5rem;" role="status">
					<span class="sr-only">Loading...</span>
				</div>
			</div>
			<div v-else class="content__here">
				<img :src="`https://bebeb-network.herokuapp.com/images/blog/${detail.slug}/${detail.cover}`">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-xs-12 col-sm-12">
							<small class="mt-2">
								{{$moment(detail.date).format("LLL")}}
							</small>
						</div>
						<div class="col-lg-12 col-xs-12 col-sm-12 mt-5">
							<h2> {{detail.title}} </h2>

							<!-- Article content -->
							<p v-html="detail.content"></p>

						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</template>

<script>
	export default {
		props: ['api_url', 'app_key'],
		name: 'article-detail',
		data(){
			return {
				slug: this.$route.params.slug,
				detail: {},
				loading: null
			}
		},

		mounted(){
			this.DetailArticle()
		},

		methods: {
			DetailArticle(){
				this.loading=true
				axios.get(`${this.api_url}/articles/${this.app_key}`)
				.then(({data}) => {
					this.detail = data.list_data.articles.find(d => d.slug === this.slug)
					// console.log(this.detail)
				})
				.catch(err => console.log(err.response))
				.finally(() => {
					setTimeout(() => {
						window.scrollTo(0,0)
						console.log("Puji Ermanto Was Here !")
						this.loading=false
					}, 1500)
				})
			}
		}
	}
</script>

<style lang="scss">
	.article__content{
	}
	@media (min-width: 992px) {
		.article__content{
			margin-top: 7rem;
			margin-bottom: 5rem;
			.content__here{
				img{
					width:100%;
				}
				p{
					font-size:18px;
					font-weight: 400;
				}
				small{
					font-size:16px;
				}
			}
		}	
	}
</style>