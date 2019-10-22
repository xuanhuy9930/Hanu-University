@extends('master-layout')
@section('title')
Đào Tạo
@endsection
@section('css')
<link rel="stylesheet" href="css/daotao.css">
<link rel="stylesheet" href="css/gioithieu.css">
<link rel="stylesheet" href="css/tuyendung.css">
@endsection
@section('content')
<main>
	<section class="banner-gt">
	<h2 class="container">Đào tạo</h2>
</section>
	<section class="container mt-5">
		<div class="title-tuyendung">đào tạo</div>
		<div class="row mt-3 mb-5">
			<div class="col-md-3">
				<div class="full-tuyensinh">
					<h2 class="title-tuyensinh">Đại học</h2>
						<a class="a-daotao" href="">Đào tạo chính quy</a>
						<a class="a-daotao" href="">Đăng ký học tập</a>
						<a class="a-daotao" href="">Lịch thi</a>
						<a class="a-daotao" href="">Phân nghành</a>
					<h2 class="title-tuyensinh">Sau đại học</h2>
						<a class="a-daotao" href="">Thạc sĩ</a>
						<a class="a-daotao" href="">Tiến sĩ</a>
					<h2 class="title-tuyensinh">Đào tạo ngắn hạn</h2>
						<a class="a-daotao" href="">Ngành đào tạo</a>
						<a class="a-daotao" href="">Chương trình đào tạo</a>
						<a class="a-daotao" href="">Kế hoạc đào tạo</a>
						<a class="a-daotao" href="">Văn bản - Quy chế</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="ct-daotao">
					<h3>Mô hình đào tạo</h3>
					<h4>Các bậc đào tạo</h4>
					<p>Hiện nay, trường Đại học Hà Nội tổ chức đào tạo ở cả hai bậc, đại học và sau đại học</p>
					<img src="images/ct-daotao.jpg" alt="">
					<p><b>Với bậc đại học</b> (cấp bằng Kỹ sư, Kiến trúc sư) có các hệ đào tạo sau:</p>
					<ul class="mb-4">
						<li>Hệ chính quy: - Thời gian đào tạo 4,5 năm với các ngành/chuyên ngành đào tạo theo phương pháp tiếp cận CDIO (trừ ngành Kiến trúc; ngành Quy hoạch vùng và đô thị; chuyên ngành Quy hoạch - Kiến trúc)</li>
						<li>Hệ bằng hai: Thời gian đào tạo 3 năm, tập trung;</li>
						<li>Hệ liên thông: Thời gian đào tạo 2,5 năm, tập trung;</li>
						<li>Hệ vừa làm vừa học: Thời gian đào tạo 5,5 năm.</li>
					</ul>
					<p><b>Với bậc sau đại học</b> Đào tạo Thạc sỹ và Tiến sỹ </p>
					<p>Bên cạnh đó, trường còn tổ chức các chương trình đào tạo ngắn hạn (cấp chứng chỉ) nhằm bồi dưỡng, nâng cao kiến thức với các chuyên đề xuất phát từ yêu cầu thực tiễn như Giám sát thi công xây dựng công trình, Quản lý dự án đầu tư xây dựng, Đấu thầu xây dựng, Bất động sản, Các lớp nâng cao kỹ năng nghề nghiệp cho Kỹ sư mới ra trường ...</p>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection