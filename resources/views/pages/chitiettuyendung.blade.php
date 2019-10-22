@extends('master-layout')
@section('title')
Chi Tiết Tuyển Dụng
@endsection
@section('css')
<link rel="stylesheet" href="css/tuyendung.css">
@endsection
@section('content')
<div id="tuyendung">
	<div class="container">
		<div class="back-home">
			<a href="">Trang chủ</a> > <a href="">Tuyển dụng</a> > <a href="">Chi tiết Tuyển dụng</a>
		</div>
		<div class="title-tuyendung">chi tiết tuyển sinh</div>
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
			<div class="col-md-9 mt-4">
				<h2 class="title-chitiet-td">Tra cứu điểm thi tuyển sinh cao học đợt T9/2019</h2>
				<span class="calendar"><i class="fa fa-calendar-check-o"></i>
				Thứ hai - 07/10/2019 14:57</span>
				<img class="img-ct" src="images/slider-1.jpg" alt="">
				<p class="p-p">Thí sinh sử dụng link này để tra cứu kết quả</p>
				<a class="link" href="">https://tmu.edu.vn/vi/ket-qua-thi-cao-hoc/</a>
			</div>
		</div>
	</div>
</div>
@endsection