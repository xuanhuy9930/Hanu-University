/* Menu sticky*/
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("menu-sticky");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

/* menu responsive*/
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

// tab-link
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
/* slick images*/
jQuery(document).ready(function($) {
$('.lien-ket-web').slick({
  dots: false,
  infinite: true,
  speed: 1000,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 2,
              slidesToScroll: 1
           }
        }]
    });
});
// back-top-top
//Get the button:
$(window).scroll(function(){
        var posbody = $('html,body').scrollTop();
        if(posbody>300){
            $('.bt-top').addClass('hienthi'); 
            $('.phonering-alo-phone').addClass('hienthi');   
        }
        else{
            $('.bt-top').removeClass('hienthi');
            $('.phonering-alo-phone').removeClass('hienthi');
          }  
        
    })

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
// language
var arrLang = {
  'en' : {
    // header
      'trangchu' : 'home',
      'gioithieu' : 'introduce',
      'daotao' : 'educate',
      'hoptac' : 'international cooperation',
      'nghiencuu' : 'investigate',
      'thongtin' : 'information',
      'tuyendung' : 'recruitment',
      'lienhe' : 'contact',
      'hoidap' : 'question',
      'uni-1' : 'university',
      'uni-2' : 'graduate',
      'uni-3' : 'Short-term training',

      'tim' : 'Search',
      // end header
      // main
      'chaomung' : 'Welcome to Hanoi University',
      'gioi-thieu' : 'Hanoi University strives to become a prestigious applied university in the country and in the region; specializing in training, scientific research and technology transfer in the fields of language and culture, business administration, economic management, finance and banking, tourism management, international research. , information and communication technology based on traditional strengths of foreign languages. Hanoi University is a training, research and technology transfer facility, providing human resources for undergraduate and postgraduate degrees. high quality, good expertise, proficiency in foreign languages ​​and application of information technology, meeting the increasing demands of the domestic and international labor market.',
      'see' : 'See more',
      'about-school' : 'introduction to the school',
      'tuyen-sinh' : 'enrollment in 2019',
      'lorem' : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt beatae error adipisci accusantium dolorum explicabo nobis, veritatis officiis aspernatur facere quis dolore eveniet eligendi eaque. Nostrum consectetur saepe quibusdam aut.',
      'dong-hanh' : 'companion with student 12',
      'nghien-cuu' : 'scientific research',
      'sang-tao' : 'Introducing an innovative approach to Russian language research and teaching',
      'thongtin-daotao' : 'training information',
      'hoi-thao' : 'Specialized scientific workshop',
      'vanban-phapluat' : 'Legislation document',
      'chat-luong' : 'Quality assurance',
      'video' : 'Video',
      'album' : 'Albums',
      'thong-bao' : 'notification',
      'student' : 'Student',
      'nhieu-thongtin' : 'Many other information',
      'hoatdong' : 'union activities',
      'news' : 'news',
      'h3-1' : 'Opening Ceremony and Graduation Ceremony for students of joint training program in Tourism and Tourism Management in the academic year 2019',
      'h3-2' : 'Letter of appreciation from the Principal - Representative of the Organizing Committee of International Translation Day - Translator Day 2019 "Localization and Translation Trends 4.0" and Ceremony of 3-Party Cooperation',
      'h3-3' : 'Exam schedule for the 2nd College Degree Exam - English Language Department, October 20, 2019',
      'lien-ket' : 'link website',
      // end main
      // footer
      'dia-chi' : 'Address: 78B Le Loi, Nguyen Trai Ward, Ha Dong District, Hanoi City',
      'sdt' : 'Number',
      'map' : 'Map',
      'trangchu-1' : 'home',
      'gioithieu-1' : 'introduce',
      'daotao-1' : 'educate',
      'hoptac-1' : 'international cooperation',
      'nghiencuu-1' : 'investigate',
      'thongtin-1' : 'information',
      'tuyendung-1' : 'recruitment',
      'lienhe-1' : 'contact',
      'hoidap-1' : 'question',
      // end footer
  },
  'vie': {
      // header
      'trangchu' : 'trang chủ',
      'gioithieu' : 'giới thiệu',
      'daotao' : 'đào tạo',
      'hoptac' : 'hợp tác quốc tế',
      'nghiencuu' : 'nghiên cứu khoa học',
      'thongtin' : 'thông tin du học',
      'tuyendung' : 'tuyển dụng',
      'lienhe' : 'liên hệ',
      'hoidap' : 'hỏi đáp',
      'tim' : 'Tìm kiếm',
      'uni-1' : 'Đại học',
      'uni-2' : 'Sau đại học',
      'uni-3' : 'Đào tạo ngắn hạn',
      // end header
      // main
      'chaomung' : 'CHÀO MỪNG BẠN ĐÃ ĐẾN TRƯỜNG ĐẠI HỌC HÀ NỘI',
      'see' : 'Xem Thêm',
      'gioi-thieu' : 'Trường Đại học Hà Nội phấn đấu trở thành trường đại học ứng dụng có uy tín trong nước và khu vực; chuyên sâu về đào tạo, nghiên cứu khoa học và chuyển giao công nghệ trong các lĩnh vực ngôn ngữ-văn hóa, quản trị kinh doanh, quản lý kinh tế, tài chính-ngân hàng, quản trị du lịch, nghiên cứu quốc tế, công nghệ thông tin và truyền thông dựa trên thế mạnh truyền thống về ngoại ngữ.Trường Đại học Hà Nội là cơ sở đào tạo, nghiên cứu và chuyển giao công nghệ, cung cấp nguồn nhân lực trình độ đại học, sau đại học chất lượng cao, giỏi chuyên môn, thành thạo ngoại ngữ và ứng dụng công nghệ thông tin, đáp ứng nhu cầu ngày càng cao của thị trường lao động trong nước và quốc tế.',
      'about-school' : 'giới thiệu về trường',
      'tuyen-sinh' : 'tuyển sinh năm 2019',
      'lorem' : 'Đào tạo quốc tế chính quy (  Đại Học, Sau Đại Học)',
      'dong-hanh' : 'đồng hành cùng học sinh lớp 12',
      'nghien-cuu' : 'nghiên cứu khoa học',
      'sang-tao' : 'Giới thiệu cách tiếp cận sáng tạo trong nghiên cứu và giảng dạy tiếng Nga',
      'thongtin-daotao' : 'Cổng thông tin đào tạo',
      'hoi-thao' : 'Chuyên trang hội thảo khoa học',
      'vanban-phapluat' : 'Văn bản pháp luật',
      'chat-luong' : 'Đảm bảo chất lượng',
      'video' : 'Video',
      'album' : 'Albums',
      'thong-bao' : 'thông báo',
      'student' : 'sinh viên',
      'nhieu-thongtin' : 'những thông tin khác',
      'hoatdong' : 'hoạt động của tổ chức',
      'news' : 'tin tức',
      'h3-1' : 'Lễ khai giảng và trao bằng tốt nghiệp cho sinh viên chương trình liên kết đào tạo ngành Quản trị Du lịch và Lữ hành năm học 2019',
      'h3-2' : 'Thư cảm ơn của Hiệu trưởng - đại diện Ban tổ chức Ngày Dịch thuật Quốc tế - Translator Day 2019 “Bản địa hóa và Xu hướng dịch thuật 4.0” và Lễ công bố hợp tác 03 bên',
      'h3-3' : 'Lịch thi tuyển sinh Bằng Đại học thứ 2 - Ngành ngôn ngữ Anh, ngày thi 20/10/2019',
      'lien-ket' : 'liên kết nhanh',
      // end main
      // footer
      'dia-chi' : 'Địa chỉ: 78B Lê Lợi, phường Nguyễn Trãi, quận Hà Đông,Thành phố Hà Nội',
      'sdt' : 'Số điện thoại',
      'map' : 'Bản đồ',
      // end footer
    },
};
    
$(function(){
  $('.translate').click(function(){
    console.log("OK");
    var lang = $(this).attr('id');  
      $('.lang').each(function(home,element){
        $(this).text(arrLang[lang][$(this).attr('key')]);
      });
  });
});
// test
// $('.add').each(function(){
//   $(this).click(function(event){
//     if($(this).hasClass('fa-plus')){
//       $(this).removeClass('fa-plus');
//       $(this).addClass('fa-minus');
//       $(this).siblings('ul.uldichvu').slideDown();
//       $(this).siblings('ul.ultuyendung').slideDown();
//       $(this).siblings('ul.ul1').slideDown();
//       $(this).siblings('ul.ul2').slideDown();
//       $(this).siblings('ul.ul3').slideDown();
//       $(this).siblings('ul.ul4').slideDown();

//     }else{
//       $(this).removeClass('fa-minus');
//       $(this).addClass('fa-plus');
//       $(this).siblings('ul.uldichvu').slideUp();
//       $(this).siblings('ul.ultuyendung').slideUp();
//       $(this).siblings('ul.ul1').slideUp();
//       $(this).siblings('ul.ul2').slideUp();
//       $(this).siblings('ul.ul3').slideUp();
//       $(this).siblings('ul.ul4').slideUp();
//     }
//   })
// });