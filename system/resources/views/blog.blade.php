@extends('template.base')

@section('content')
	<section class="container blog" style="margin-top: 100px;">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-8">
		           <div class="jumbotron">
  <h1 class="display-4">Selamat datang di Blog Jajanan Tradisional</h1>
  <p class="lead">Jajanan pasar adalah makanan tradisional Indonesia yang diperjualbelikan di pasar, khususnya di pasar-pasar tradisional. Dalam pengertian lain, adalah berbagai macam kue yang pada awalnya diperjualbelikan di pasar-pasar tradisional. Meskipun telah banyak beredar makanan instan dan modern bahkan impor dari luar negeri, jajanan pasar masih tetap digemari karena beberapa alasan, antara lain harganya yang relatif terjangkau dengan rasa yang enak, dan ada banyak pilihan beragam yang disediakan. Jajanan pasar ini, oleh masyarakat Jawa, ketika sudah dihidangkan di atas meja, sudah berubah namanya, yaitu pacetan atau nyamikan atau penganan. Dunia perhotelan, untuk meningkatkan daya tarik bagi para tamu bahkan banyak menyediakan jajanan pasar pada saat sarapan pagi. Dan beberapa kota/kabupaten di Indonesia, tak jarang menyelenggarakan festival jajanan pasar dalam rangka memperkenalkan potensi daerah berupa makanan tradisional yang menjadi ciri khas daerah tersebut.</p>
					</div>
		        </div>
		            <!-- Blog Sidebar Column -->
		            @include('template.section.sidebar')
				</div>
		    </section>
@endsection