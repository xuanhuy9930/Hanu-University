@extends('master-layout')
@section('title')
Trang chủ
@endsection
@section('content')
<div id="myCarousel" class="carousel slide border" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="images/slider-3.jpg" alt="">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/slider-2.jpg" alt="">
		</div>
		
	</div>
	<!-- Controls -->
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<main>
	<div class="container gioithieu">
		<h1 class="lang wow fadeInUp" key="about-school">Giới thiệu về trường</h1>
		<div class="star-space"></div>
		<div class="row">
			<div class="col-md-6 text-gt wow fadeInLeft">
				<p class="lang" key="gioi-thieu">Trường Đại học Hà Nội phấn đấu trở thành trường đại học ứng dụng có uy tín trong nước và khu vực; chuyên sâu về đào tạo, nghiên cứu khoa học và chuyển giao công nghệ trong các lĩnh vực ngôn ngữ-văn hóa, quản trị kinh doanh, quản lý kinh tế, tài chính-ngân hàng, quản trị du lịch, nghiên cứu quốc tế, công nghệ thông tin và truyền thông dựa trên thế mạnh truyền thống về ngoại ngữ.Trường Đại học Hà Nội là cơ sở đào tạo, nghiên cứu và chuyển giao công nghệ, cung cấp nguồn nhân lực trình độ đại học, sau đại học chất lượng cao, giỏi chuyên môn, thành thạo ngoại ngữ và ứng dụng công nghệ thông tin, đáp ứng nhu cầu ngày càng cao của thị trường lao động trong nước và quốc tế.</p>
				<a class="lang" key="see" href="{{ route('gioithieu') }}">Xem thêm <i class="fa fa-angle-double-right"></i>
				</a>
			</div>
			<div class="col-md-6 wow fadeInRight">
				<div class="img-gt">
					<img src="images/slider-1.jpg" alt="">
				</div>
			</div>
			<div class="hr"></div>
			<div class="col-md-8 tuyen-sinh">
				<h2 class="title-ts lang wow fadeInUp" key="tuyen-sinh">Tuyển sinh năm 2019</h2>
				<div class="row">
					<div class="col-md-7">
						<div class="img-ts wow fadeInUp">
							<img src="images/tuyen-sinh.jpeg" alt="">
							<a class="lang" key="dong-hanh" href="{{ route('chitiettuyendung') }}">Đồng hành cùng sinh viên lớp 12</a>
						</div>
					</div>
					<div class="col-md-5">
						<div class="ct-ts wow fadeInUp">
							<ul>
								<li>
									<img src="images/gt-2.jpg" alt="">
									<a class="lang" key="lorem" href="{{ route('chitiettuyendung') }}">Chuỗi sự kiện tư vấn tuyển sinh</a>
								</li>
								<li>
									<img src="images/gt-3.jpg" alt="">
									<a class="lang" key="lorem" href="{{ route('chitiettuyendung') }}">Đào tạo quốc tế chính quy (	Đại Học, Sau Đại Học)</a>
								</li>
								<li>
									<img src="images/gt-4.png" alt="">
									<a class="lang" key="lorem" href="{{ route('chitiettuyendung') }}">Khóa học ngắn hạn giành cho sinh viên muốn tìm việc làm sớm</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<h2 class="title-ts1 lang wow fadeInUp" key="nghien-cuu">Nghiên cứu khoa học</h2>
				<div class="img-nghiencuu wow fadeInUp">
					<a href=""><img src="images/nghiencuu.jpg" alt="">
						<span class="lang" key="sang-tao">Giới thiệu cách tiếp cận sáng tạo trong nghiên cứu và giảng dạy tiếng Nga</span>
					</a>
				</div>
				<div class="row">
					<div class="col-md-4 wow fadeInLeft">
						<div class="img-nghiencuu-1">
							<a href=""><img src="images/nghiencuu-1.jpg" alt="">
								<span class="lang" key="lorem">
								Ngày hội Quốc tế Dịch thuật 2019: Bản địa hóa và xu hướng dịch thuật 4.0									</span>
							</a>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp">
						<div class="img-nghiencuu-1">
							<a href=""><img src="images/nghiencuu-2.jpg" alt="">
								<span class="lang" key="lorem">
								Thông báo số 1 về việc tổ chức Hội thảo khoa học quốc tế “Giảng dạy ngôn ngữ và văn hóa Italia tại Khu vực Đông Nam Á”</span>
							</a>
						</div>
					</div>
					<div class="col-md-4 wow fadeInRight">
						<div class="img-nghiencuu-1">
							<a href=""><img src="images/nghiencuu-3.jpg" alt="">
								<span class="lang" key="lorem">HANU - Hưởng ứng “Năm chéo Việt - Nga” (2019 - 2020) và thiết thực chào mừng...</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInRight">
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link lang" key="thongtin" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Thông tin
								</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								<ul>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Cổng thông tin đào tạo</a><br></li>
									<li><a class="lang" key="hoi-thao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Chuyên trang hội thảo khoa học</a><br></li>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Thư viện</a><br></li>
									<li><a class="lang" key="vanban-phapluat" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Văn bản pháp luật</a><br></li>
									<li><a class="lang" key="chat-luong" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Đảm bảo chất lượng</a><br></li>
									<li><a class="lang" key="video" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Video</a><br></li>
									<li><a class="lang" key="album" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Albums</a><br></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed lang" key="thong-bao" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Thông báo
								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								<ul>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Thi và cấp chứng chỉ theo Khung tham chiếu chung châu Âu</a></li>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Đào tạo</a></li>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Học bổng, tuyển dụng</a></li>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Cổng thông tin đào tạo</a></li>

								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed lang" key="student" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Sinh viên
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
								<ul>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Thông tin tuyển sinh</a></li>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Cơ hội việc làm</a></li>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Dành cho cựu sinh viên</a></li>
									<li><a class="lang" key="thongtin-daotao" href="{{ route('daotao') }}"><i class="fa fa-chevron-right"></i>
									Du học</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
				<img class="right-colap" src="images/right.jpg" alt="">
			</div>
		</div>
		<div class="hoptac-tochuc">
			<h2 class="title-tt lang wow fadeInUp" key="nhieu-thongtin">Những thông tin khác</h2>
			<div class="star-space"></div>
			<div class="tab wow fadeInUp">
				<button class="tablinks active lang" key="hoptac" onclick="openCity(event, 'London')">Hợp Tác Quốc Tế</button>
				<button class="tablinks lang" key="hoatdong" onclick="openCity(event, 'Paris')">Hoạt động của Tổ chức, Đoàn thể</button>
			</div>
			<div id="London" class="tabcontent">
				<div class="row wow fadeInUp">
					<div class="col-md-4 tab-hoptac">
						<div class="row">
							<div class="col-md-5 img-ht">
								<img src="images/hoptac-1.jpg" alt="">
							</div>
							<div class="col-md-7 text-ht">
								<a class="lang" key="lorem" href="">Hiệu trưởng Nguyễn Văn Trào tiếp Đại sứ Đặc mệnh toàn quyền Kazakhtan tại Việt Nam</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 tab-hoptac">
						<div class="row">
							<div class="col-md-5 img-ht">
								<img src="images/hoptac-2.jpg" alt="">
							</div>
							<div class="col-md-7 text-ht">
								<a class="lang" key="lorem" href="">Hiệu trưởng Nguyễn Văn Trào tiếp Đại sứ Đặc mệnh toàn quyền Kazakhtan tại Việt Nam</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 tab-hoptac">
						<div class="row">
							<div class="col-md-5 img-ht">
								<img src="images/hoptac-3.jpg" alt="">
							</div>
							<div class="col-md-7 text-ht">
								<a class="lang" key="lorem" href="">Hiệu trưởng Nguyễn Văn Trào tiếp Đại sứ Đặc mệnh toàn quyền Kazakhtan tại Việt Nam</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 tab-hoptac">
						<div class="row">
							<div class="col-md-5 img-ht">
								<img src="images/hoptac-4.jpg" alt="">
							</div>
							<div class="col-md-7 text-ht">
								<a class="lang" key="lorem" href="">Hiệu trưởng Nguyễn Văn Trào tiếp Đại sứ Đặc mệnh toàn quyền Kazakhtan tại Việt Nam</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 tab-hoptac">
						<div class="row">
							<div class="col-md-5 img-ht">
								<img src="images/hoptac-5.jpg" alt="">
							</div>
							<div class="col-md-7 text-ht">
								<a class="lang" key="lorem" href="">Hiệu trưởng Nguyễn Văn Trào tiếp Đại sứ Đặc mệnh toàn quyền Kazakhtan tại Việt Nam</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 tab-hoptac">
						<div class="row">
							<div class="col-md-5 img-ht">
								<img src="images/hoptac-6.jpg" alt="">
							</div>
							<div class="col-md-7 text-ht">
								<a class="lang" key="lorem" href="">Hiệu trưởng Nguyễn Văn Trào tiếp Đại sứ Đặc mệnh toàn quyền Kazakhtan tại Việt Nam</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Paris" class="tabcontent">
				<div class="row">
					<div class="col-md-3 hd-ct">
						<a href=""><img src="images/hd-1.jpg" alt="">
							<span class="lang" key="sang-tao">Giao lưu bóng đá – Kết nối thế hệ</span>
						</a>
					</div>
					<div class="col-md-3 hd-ct">
						<a href="">
							<img src="images/hd-2.jpg" alt="">
							<span class="lang" key="sang-tao">Cuộc thi người đẹp tranh tài</span>
						</a>
					</div>
					<div class="col-md-3 hd-ct">
						<a href="">
							<img src="images/hd-3.jpg" alt="">
							<span class="lang" key="sang-tao">Văn phòng SunWay Hanu</span>
						</a>
					</div>
					<div class="col-md-3 hd-ct">
						<a href=""><img src="images/hd-4.jpg" alt="">
							<span class="lang" key="sang-tao">Tranh giải đệ nhất Hoa Khôi</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="tin-tuc">
			<h2 class="title-tt lang wow fadeInUp" key="news">tin tức</h2>
			<div class="star-space"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 tintuc-text wow fadeInLeft">
						<div class="tintuc-text-1">
							<div class="tintuc-img">
								<img src="images/tintuc-1.jpg" alt="">
							</div>
							<h3 class="lang" key="h3-1">
							Lễ khai giảng và trao bằng tốt nghiệp cho sinh viên chương trình liên kết đào tạo ngành Quản trị Du lịch và Lữ hành năm học 2019</h3>
							<p class="lang" key="lorem">

							Thư cảm ơn của Hiệu trưởng - đại diện Ban tổ chức Ngày Dịch thuật Quốc tế - Translator Day 2019 “Bản địa hóa và Xu hướng dịch thuật 4.0” và Lễ công bố hợp tác 03 bên																	</p>
							<a class="lang" key="see" href=""><i class="fa fa-link"></i>  Xem Thêm</a>
						</div>
					</div>
					<div class="col-md-4 tintuc-text wow fadeInDown">
						<div class="tintuc-text-1">
							<div class="tintuc-img">
								<img src="images/tintuc-3.jpg" alt="">
							</div>
							<h3 class="lang" key="h3-2">
							Thư cảm ơn của Hiệu trưởng - đại diện Ban tổ chức Ngày Dịch thuật Quốc tế - Translator Day 2019 “Bản địa hóa và Xu hướng dịch thuật 4.0” và Lễ công bố hợp tác 03 bên</h3>
							<p class="lang" key="lorem">Lễ vinh danh Chương trình Thạc sĩ Lý luận và Phương pháp giảng dạy tiếng Anh </p>
							<a class="lang" key="see" href=""><i class="fa fa-link"></i> Xem Thêm</a>
						</div>
					</div>
					<div class="col-md-4 tintuc-text wow fadeInRight">
						<div class="tintuc-text-1">
							<div class="tintuc-img">
								<img src="images/tintuc-2.jpg" alt="">
							</div>
							<h3 class="lang" key="h3-3">
							Lịch thi tuyển sinh Bằng Đại học thứ 2 - Ngành ngôn ngữ Anh, ngày thi 20/10/2019</h3>
							<p class="lang" key="lorem">
							Lễ khai giảng và trao bằng tốt nghiệp cho sinh viên chương trình liên kết đào tạo ngành Quản trị Du lịch và Lữ hành năm học 2019									</p>
							<a class="lang" key="see" href=""><i class="fa fa-link"></i> Xem Thêm</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="lien-ket wow fadeInUp">
			<h4 class="lang" key="lien-ket">
				<span>
					<i class="fa fa-gg"></i>
					liên kết website
					<i class="fa fa-gg"></i>
				</span>
			</h4>
		</div>
	</div>
</div>
<div class="container wow fadeInUp">
	<div class="lien-ket-web">
		<img src="images/lien-ket-1.png" alt="">
		<img src="images/lien-ket-2.png" alt="">
		<img src="images/lien-ket-4.png" alt="">
		<img src="images/lien-ket-2.png" alt="">
		<img src="images/lien-ket-4.png" alt="">
		<img src="images/lien-ket-3.png" alt="">
	</div>
</div>
</main>
<!-- Back to top -->
<div class="phone-fix">
	<a class="bt-top" href="#"><i class="fa fa-angle-double-up"></i></a>
<!-- Phone-Ring -->
<div class="phonering-alo-phone phonering-alo-green phonering-alo-show">
	<!-- <div class="phonering-alo-ph-circle"></div> -->
	<div class="phonering-alo-ph-circle-fill"></div>
	<a href="tel:+(84-24) 38544338" class="pps-btn-img">
		<div class="phonering-alo-ph-img-circle"></div>
		<span class="hot-line-phone">
			Hotline: (84-24) 38544338
		</span>
	</a>
</div>

	
</div>

@endsection