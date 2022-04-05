<template>
	<section class="hash" id="blog">
		<div class="container">
			<h3 class="section-title">Artikel</h3>
			<div v-if="loading">
				<div class="d-flex justify-content-center">
					<div class="spinner-grow text-success" style="width: 3rem; height: 3rem;" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</div>
			</div>
			<div v-else class="text-center my-5">
				<div v-if="articles.length === 0">					
					<i class="fas fa-frown fa-6x text-warning mb-5"></i>
					<h5  class="font-weight-light">
						Ups! Belum ada artikel baru nih. Tetap stay tuned ya!
					</h5>
				</div>
				<div v-else class="row justify-content-center">
					<div v-for="(item, index) in articles" class="col-md-4 mb-5">
						<div class="card">
							<img :src="`https://bebeb-network.herokuapp.com/images/blog/${item.slug}/${item.cover}`" class="card-img-top" :alt="item.slug">
							<div class="card-body">
								<h5 class="card-title truncate2">
									{{item.title}}
								</h5>
								<p class="card-text truncate">
									{{item.description}}
								</p>
								<!-- <a href="#" class="btn btn-primary">Selengkapnya</a> -->
								<router-link :to="{
									name: 'article-detail',
									params: {
										slug: item.slug
									}
								}" class="btn btn-outline-success btn-md btn-block">Selengkapnya</router-link>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
</template>

<script>
	export default {
		props: ['articles', 'loading', 'app_url']
	}
</script>

<style lang="scss">
	.card{
		.card-body{
			.card-title{
				color: #000;
				font-weight: 700;
				text-align: left;
			}
			.card-text{
				color:#000;
				text-align: left;
			}

			.truncate {
				display: -webkit-box;
				-webkit-line-clamp: var(--line-clamp, 3);
				-webkit-box-orient: vertical;
				word-break: var(--word-break, "none");
				overflow: hidden;
				hyphens: auto;
				text-align: var(--align, left);
				--is-single-line: 1 - Clamp(0, Calc(var(--line-clamp) - 1), var(--line-clamp));
				--delay: Calc(-1s * (var(--is-single-line, 1) - 1));
				animation: states 1s var(--delay) paused;
				@keyframes states {
					0% {
						word-break: break-all;
					}
				}
			}
			.truncate2 {
				display: -webkit-box;
				-webkit-line-clamp: var(--line-clamp, 2);
				-webkit-box-orient: vertical;
				word-break: var(--word-break, "none");
				overflow: hidden;
				hyphens: auto;
				text-align: var(--align, left);
				--is-single-line: 1 - Clamp(0, Calc(var(--line-clamp) - 1), var(--line-clamp));
				--delay: Calc(-1s * (var(--is-single-line, 1) - 1));
				animation: states 1s var(--delay) paused;
				@keyframes states {
					0% {
						word-break: break-all;
					}
				}
			}
		}
	}
</style>