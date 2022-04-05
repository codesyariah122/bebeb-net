<img src="{{asset('/images/bebeb-logo.png')}}" alt="" style="width: 100px;">

<h5>{{$details['title']}}</h5>
	<blockquote class="blockquote-footer text-info">
		<strong>Halo, {{$details['roles']}} BebebNet<br> <strong><b><i>{{$details['name']}}</i></b> dengan email : {{$details['email']}}</strong>, baru saja mengirim pesan melalui website:
	</blockquote>

	<br><br><br>
	<p>Detail Message  :  </p>
	<ul>
		<li>Nama  : {{$details['name']}}</li>
		<li>Email : {{$details['email']}}</li>
		<li>Phone : {{$details['phone']}}</li>
		<li>Messagee : <br> 
			{{$details['message']}}
		</li>
	</ul>

	<br>

	{{-- <p>
		Respon pesan dari : {{ $details['fullname'] }} di sini <br>

		<br>
		<a href="{{ env('FRONTEND')}}dashboard/{{$details['roles']}}/{{$details['route']}}/contact" class="btn btn-info btn-block">Response Message</a>
	</p> --}}