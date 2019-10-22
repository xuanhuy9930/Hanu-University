
<header id="top-1">
	<div class="container header-top">
		<div class="logo">
			<a href="{{ route('home') }}">
				<img src="images/logo.png" alt="">
			</a>
		</div>
		<div class="search-bot box-search">

			<button class="translate" id="en">English</button> <span style="color: #fff; font-weight: bold;">|</span>
			<button class="translate" id="vie">Vietnamese</button>


			<input type="text" placeholder="&ensp;Tìm Kiếm" class="ip-tim1">
			<a class="a-search" href=""><i class="fa fa-search pl"></i></a>
			
		</div>
		<span class="menu-rsp container text-right" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;
		</span>
	</div>
</header>
<div id="menu-sticky">
	<div class="header-menu container" >
		<ul class="menu-first">
			<li><a class="lang" key="trangchu" href="{{ route('home') }}">Trang Chủ</a></li>
			<li><a class="lang" key="gioithieu" href="{{ route('gioithieu') }}">Giới thiệu</a></li>
			<li class="menu-cha"><a class="lang" key="daotao" href="{{ route('daotao') }}">Đào tạo</a>
				<ul class="menu-con">
					<li><a class="lang" key="uni-1" href="{{ route('daotao') }}">Đại Học</a></li>
					<li><a class="lang" key="uni-2" href="{{ route('daotao') }}">Sau Đại Học</a></li>
					<li><a class="lang" key="uni-3" href="{{ route('daotao') }}">Đào tạo ngăn hạn</a></li>
				</ul>
			</li>
			<li><a class="lang" key="hoptac" href="">hợp tác quốc tế</a></li>
			<li><a class="lang" key="nghiencuu" href="">nghiên cứu khoa học</a></li>
			<li><a class="lang" key="thongtin" href="">thông tin du học</a></li>
			<li><a class="lang" key="tuyendung" href="{{ route('tuyendung') }}">tuyển dụng</a></li>
			<li><a class="lang" key="lienhe" href="{{ route('lienhe') }}">Liên hệ</a></li>
			<li><a class="lang" key="hoidap" href="">hỏi đáp</a></li>
		</ul>
	</div>
</div>
<div id="mySidenav" class="sidenav" style="z-index: 9999">

	<div class="menu-rsp-full">
		<input type="text" placeholder="  Tìm kiếm..." class="ip-tim lang" key="tim">
		<a class="ic1" href=""><i class="fa fa-search"></i></a>
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a class="list-menu-rsp" href="{{ route('home') }}">Trang Chủ</a>
		<a class="list-menu-rsp" href="{{ route('gioithieu') }}">Giới Thiệu</a>
		<a class="list-menu-rsp" href="{{ route('daotao') }}">Đào Tạo</a>
		<a class="list-menu-rsp" href="#">Hợp Tác Quốc Tế</a>			
		<a class="list-menu-rsp" href="">Nghiên Cứu Khoa Học</a>
		<a class="list-menu-rsp" href="">Thông Tin Du Học</a>
		<a class="list-menu-rsp" href="{{ route('tuyendung') }}">Tuyển Dụng</a>
		<a class="list-menu-rsp" href="{{ route('lienhe') }}">Liên Hệ</a>
		<a class="list-menu-rsp" href="">Hỏi Đáp</a>
	</div>
	
</div>