<template>
	<section class="hash" id="kontak">
		<div class="container">
			<h3 class="section-title">Kontak</h3>
			<div class="row">
				<div class="col-12 col-md-7">
					<h5 class="mb-4">Tinggalkan Pesan</h5>
					<div id="kontak-message" style="display: none;"></div>
					<div v-if="loading" id="kontak-loader">
						<div class="form-group d-flex flex-column align-items-center">
							<div class="fa-2x">
								<i class="fas fa-circle-notch fa-spin"></i>
							</div>
							<div class="mt-2">Mengirim pesan...</div>
						</div>
					</div>

					<div v-if="error" class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Ooops!</strong> Periksa kembali kolom inputan dengan lengkap dan benar.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div v-if="success" class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Yu Huuu!</strong> {{message}}.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form @submit.prevent="SendingMessage" id="kontak-form" class="form-dark">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Nama" v-model="field.name" maxlength="255" @keyup="Handling">

							<div v-if="validation.name" class="mt-3 alert alert-danger">
								{{ validation.name[0] }}
							</div>
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Email" v-model="field.email" maxlength="255">
							<div v-if="validation.email" class="mt-3 alert alert-danger">
								{{ validation.email[0] }}
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="phone" class="form-control" pattern="\d{5,20}" placeholder="No HP" v-model="field.phone">
							<div v-if="validation.phone" class="mt-3 alert alert-danger">
								{{ validation.phone[0] }}
							</div>
						</div>
						<div class="form-group">
							<textarea rows="4" name="message" class="form-control" v-model="field.message" placeholder="Pesan" maxlength="1024"></textarea>
							<div v-if="validation.message" class="mt-3 alert alert-danger">
								{{ validation.message[0] }}
							</div>
						</div>
						<button type="submit" class="text-white btn btn-outline-primary float-right px-4 rounded-pill btn-block">
							<div v-if="loading">
								<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								Loading...
							</div>
							<span v-else>
								Kirim
							</span>
						</button>
					</form>
				</div>
				<div class="col-12 col-md-5">
					<h5 class="mt-4 mt-md-0 mb-4">Hubungi Kami</h5>
					<div class="d-flex flex-column">
						<span class="my-1">
							<i class="fas fa-map-marker-alt mr-2 text-secondary"></i>
							{{list_data.address}}
						</span>

						<span class="my-1">
							<i class="fas fa-envelope mr-2 text-secondary"></i>
							{{list_data.email}}
						</span>


						<span class="my-1">
							<i class="fab fa-whatsapp mr-2 text-secondary"></i>
							<a :href="phone.number">
								{{phone.context}}
							</a>
						</span>
						<span class="my-1">
							<i class="fab fa-facebook mr-2 text-secondary"></i>
							@bebebnet
						</span>
						<span class="my-1">
							<i class="fab fa-instagram mr-2 text-secondary"></i>
							@bebebnet
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
	export default{
		props: ['list_data', 'phone', 'api_url', 'app_key', 'app_env'],
		data(){
			return{				
				field: {},
				validation:{},
				loading: null,
				success: null,
				error: null,
				message: ''
			}
		},

		methods: {
			Handling(){
				this.error=false
				this.validation={}
				this.success=false
				this.message=''
			},
			SendingMessage(){
				this.loading=true
				this.validation={}
				this.success=false
				this.error=false
				let form = {
					name: this.field.name,
					email: this.field.email,
					phone: this.field.phone,
					message: this.field.message
				}

				this.axios.post(`${this.api_url}/send-message/${this.app_key}`, form)
				.then(({data}) => {
					console.log(data)
					this.field = {}
					if(data.success){
						this.success=true
						this.error=false
						this.validation={}	
						this.message=data.message				
						this.$swal({
							position: 'top-end',
							icon: 'success',
							title: data.message,
							showConfirmButton: false,
							timer: 5500
						})
					}else{
						this.error = true
						this.success=false
						this.validation={}
						this.$swal(
							'Bad Request?',
							'That thing is still around?',
							'question'
							)
					}
				})
				.catch((err) => {
					console.log(err.response)
					this.error = true
					this.$swal({
						icon: 'error',
						title: 'Oops...',
						text: err.response.statusText,
					})
					this.loading=false
					this.validation = err.response.data
				})
				.finally(() => {
					this.loading=false
				})
			}
		}
	}
</script>