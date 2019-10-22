@extends('master-layout')
@section('title')
Tuyển Dụng
@endsection
@section('css')
<link rel="stylesheet" href="css/tuyendung.css">
<link rel="stylesheet" href="css/gioithieu.css">
@endsection
@section('content')
<div id="tuyendung">
	<section class="banner-gt">
	<h2 class="container">Tuyển dụng</h2>
</section>
	<div class="container mt-5">
		
		<div class="title-tuyendung">tuyển sinh</div>
		<div class="row mt-3 mb-5">
			<div class="col-md-3">
				<div class="full-tuyensinh">
					<h2 class="title-tuyensinh">Tuyển sinh</h2>
					<a class="a-daotao" href="">Đào tạo chính quy</a>
					<h2 class="title-tuyensinh">Đào tạo sau đại học</h2>
					<a class="a-daotao" href="">Thạc sĩ</a>
					<a class="a-daotao" href="">Tiến sĩ</a>
					<h2 class="title-tuyensinh">Đào tại quốc tế</h2>
					<h2 class="title-tuyensinh">Chương trình ngắn hạn</h2>
					<h2 class="title-tuyensinh">Trúng tuyển ĐHCQ 2019</h2>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-4">
						<div class="img-tuyendung">
							<img src="images/slider-1.jpg" alt="">
						</div>
						
					</div>
					<div class="col-md-8">
						<div class="link-ct">
							<a href="{{ route('chitiettuyendung') }}">Tra cứu điểm thi tuyển sinh cao học đợt T9/2019</a>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-4">
						<div class="img-tuyendung">
							<img src="images/tuyen-dung-1.jpg" alt="">
						</div>
					</div>
					<div class="col-md-8">
						<div class="link-ct">
							<a href="{{ route('chitiettuyendung') }}">QĐ công nhận thí sinh trúng tuyển lớp chất lượng cao hệ ĐHCQ năm 2019</a>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-4">
						<div class="img-tuyendung">
							<img src="images/tuyen-dung-2.jpg" alt="">
						</div>
					</div>
					<div class="col-md-8">
						<div class="link-ct">
							<a href="{{ route('chitiettuyendung') }}">Thông báo nhập học đối với sinh viên trúng tuyển ĐHTM hệ đào tạo đặc thù 2019</a>
						</div>
					</div>
				</div>
			</div>
			<div class="pagination">
				<a href="#">&laquo;</a>
				<a href="#" class="active">1</a>
				<a href="#" >2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				
				<a href="#">&raquo;</a>
			</div>
		</div>
	</div>
</div>

@endsection