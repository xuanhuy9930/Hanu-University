@extends('master-layout')
@section('title')
Liên Hệ
@endsection
@section('css')
<link rel="stylesheet" href="css/daotao.css">
<link rel="stylesheet" href="css/gioithieu.css">
<link rel="stylesheet" href="css/tuyendung.css">
@endsection
@section('content')
<main>
	<section class="lien-he">
		<section class="banner-gt">
			<h2 class="container">liên hệ</h2>
		</section>
		<div id="lienhe">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="lienhe-tv">
					<h2>liên hệ để được tư vấn</h2>
					<textarea name="" cols="40" rows="2" placeholder="Họ Và Tên"></textarea>
					<textarea name="" cols="40" rows="2" placeholder="Nhập Số Điện Thoại"></textarea>
					<textarea name="" cols="40" rows="2" placeholder="Email"></textarea>
					<textarea name="" cols="40" rows="6" placeholder="Nội Dung"></textarea>
					<br>
					<br>
					<a href="">Nhập Thông Tin</a>
					</div>
				</div>
				<div class="col-md-7 loi-ich">
					<h2>Sinh viên tại Hanu sẽ được gì?</h2>
					<ul>
						<li><i class="fa fa-check-circle"></i>Tất cả các<span> chương trình</span> đều đào tạo bằng ngoại ngữ. Sinh viên sau khi ra trường không chỉ có kiến thức, kỹ năng chuyên nghiệp mà còn sử dụng thành thạo từ 1 đến 2 ngoại ngữ.</li>
						<li><i class="fa fa-check-circle"></i>Tất cả các chương trình đào tạo được xây dựng theo chương trình <span>tiên tiến của nước ngoài</span>, sử dụng giáo trình của nước ngoài có cập nhật theo thực tế Việt Nam, 90% giáo viên được đào tạo hoặc tu nghiệp ở nước ngoài.</li>
						<li><i class="fa fa-check-circle"></i>Có chương trình học trao đổi, liên thông 01 học kỳ hoặc 01 năm tại nước ngoài với mạng lưới hơn<span> 200 trường đại học đối tác nước ngoài</span>  của Trường Đại học Hà Nội. Kết quả học ở nước ngoài được công nhận tương đương nếu sinh viên đạt kết quả yêu cầu.</li>
						<li><i class="fa fa-check-circle"></i>Có nhiều học bổng theo quy định của nhà nước cho sinh viên thuộc diện chính sách, có hoàn cảnh gia đình khó khăn, sinh viên nghèo vượt khó, sinh viên học giỏi.</li>
						<li><i class="fa fa-check-circle"></i>Được<span> học cùng lúc 2 chương trình</span> và nhận 2 bằng đại học chính quy của Việt Nam (xem Quy định học cùng 2 chương trình).</li>
						<li><i class="fa fa-check-circle"></i>Có nhiều chương trình đào tạo liên kết do các trường ĐH của Anh, Úc, Áo, Italia cấp bằng chính quy: <span> Quản trị kinh doanh, Tài chính, Marketing,</span></li>
						<li><i class="fa fa-check-circle"></i>Sinh viên năng động, sáng tạo và được rèn luyện nhiều kỹ năng mềm (làm việc nhóm, lãnh đạo, tổ chức thời gian, thuyết trình trước công chúng, học tập suốt đời…) và định hướng khởi nghiệp.</li>
					</ul>
				</div>
			</div>
			<div class="lienhe-qc">
				<h2>hãy tới với Hanu</h2>
				<p>* nơi sinh viên có môi trường học tập và trải nghiệm cuộc sống *</p>
			</div>
		</div>
	</div>
	</section>
</main>
@endsection