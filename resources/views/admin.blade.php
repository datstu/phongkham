<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard </title>
	<link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('public/backend/css/styles.css')}}" rel="stylesheet">
	<link href="{{asset('public/backend/css/custom.css')}}" rel="stylesheet">
	<script src="{{asset('public/backend/js/lumino.glyphs.js')}}"></script>
	<script src="{{asset('public/backend/js/tags/jquery.js')}}"></script>

	<link rel="{{asset('public/backend/css/tags/bootstrap-tagsinput.css')}}" />
	<script src="{{asset('public/backend/js/tags/bootstrap-tagsinput.js')}}"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"> Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
								<use xlink:href="#stroked-male-user"></use>
							</svg>Hi, <?php $name = Session::get('admin_name');
										if ($name) {
											echo $name;
										} ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{URL::to('/admin-logout')}}"><svg class="glyph stroked cancel">
										<use xlink:href="#stroked-cancel"></use>
									</svg> Logout</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown dropdown-notifications">
						<a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
							<i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
						</a>

						<div class="dropdown-container">
							<div class="dropdown-toolbar">
								{{-- <div class="dropdown-toolbar-actions">
									<a href="#">Xóa thông tất cả</a>
								</div> --}}
								<h3 class="dropdown-toolbar-title">Thông báo (<span class="notif-count">0</span>)</h3>
							</div>
							<ul class="dropdown-menu">
							</ul>
							{{-- <div class="dropdown-footer text-center">
								<a href="#">View All</a>
							</div> --}}
						</div>
					</li>

				</ul>
			</div>
			<div class="collapse navbar-collapse">

			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<?php
	$route =  Route::current()->uri;
	?>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>

			<li class="<?php echo ($route == 'admin') ? 'active' : ''; ?>"><a href="{{URL::to('/admin')}}"><svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg> Trang chủ</a></li>
			<li class="<?php echo ($route == 'quan-ly-danh-muc') ? 'active' : ''; ?>"><a href="{{URL::to('/quan-ly-danh-muc')}}"><svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar"></use>
					</svg> Danh mục bài viết</a>
			</li>
			<li class="<?php echo ($route == 'quan-ly-bai-viet') ? 'active' : ''; ?>"><a href="{{URL::to('/quan-ly-bai-viet')}}"><svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar"></use>
					</svg> 'Quản lý bài viết</a>
			</li>
			<li class="<?php echo ($route == 'quan-ly-danh-muc-y-khoa') ? 'active' : ''; ?>"><a href="{{URL::to('/quan-ly-danh-muc-y-khoa')}}"><svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar"></use>
					</svg> Danh mục y khoa</a>
			</li>
			<li class="<?php echo ($route == 'quan-ly-bac-si') ? 'active' : ''; ?>"><a href="{{URL::to('/quan-ly-bac-si')}}"><svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar"></use>
					</svg> Quản lý bác sỹ</a>
			</li>
			<?php
			$uriSetting = '';
			if ($route == 'home-quan-li-thong-tin-chung' || $route == 'home-quan-li-thuong-hieu' || $route == 'home-quan-li-nha-dau-tu' || $route == 'cai-dat' || $route == 'home-quan-li-banner' || $route == 'ome-quan-li-thong-tin-chung') {
				$uriSetting = 'active';
			}
			?>
			<li class="<?= $uriSetting ?>"><a href="{{URL::to('/cai-dat')}}"><svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>Thiết lập</a></li>
			<!-- <li class=""><a href="{{URL::to('/quan-ly-bai-viet')}}"><svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar"></use>
					</svg> Dự án</a>
			</li> -->


			<li role="presentation" class="divider"></li>
		</ul>

	</div>
	<!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">@yield('main')</div>
	<!--/.main-->


	<script src="{{asset('public/backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/backend/js/chart.min.js')}}"></script>
	<script src="{{asset('public/backend/js/chart-data.js')}}"></script>
	<script src="{{asset('public/backend/js/easypiechart.js')}}"></script>
	<script src="{{asset('public/backend/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('public/backend/js/bootstrap-datepicker.js')}}"></script>



	<script>
		! function($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function() {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function() {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function() {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})

		function changeImg(input) {

			var allowedExtension = ['jpeg', 'jpg', 'png', 'gif'];
			var fileExtension = document.getElementById('img').value.split('.').pop().toLowerCase();
			var isValidFile = false;

			for (var index in allowedExtension) {

				if (fileExtension === allowedExtension[index]) {
					isValidFile = true;
					break;
				}
			}
			if (!isValidFile) {
				alert('Chỉ được phép up file có định dạng : *.' + allowedExtension.join(', *.'));
				return isValidFile;
			}

			//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				//Sự kiện file đã được load vào website
				reader.onload = function(e) {
					//Thay đổi đường dẫn ảnh
					$('#avatar').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		function changeImgSvg(input) {

			var allowedExtension = ['svg'];
			var fileExtension = document.getElementById('img').value.split('.').pop().toLowerCase();
			var isValidFile = false;

			for (var index in allowedExtension) {

				if (fileExtension === allowedExtension[index]) {
					isValidFile = true;
					break;
				}
			}
			if (!isValidFile) {
				alert('Chỉ được phép up file có định dạng : *.' + allowedExtension.join(', *.'));
				return isValidFile;
			}

			//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				//Sự kiện file đã được load vào website
				reader.onload = function(e) {
					//Thay đổi đường dẫn ảnh
					$('#avatar').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$(document).ready(function() {
			$('#avatar').click(function() {
				$('#img').click();
			});
		});
	</script>

	{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
	<script src="//js.pusher.com/3.1/pusher.min.js"></script>
	{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}

	<script type="text/javascript">
		var notificationsWrapper = $('.dropdown-notifications');
		var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
		var notificationsCountElem = notificationsToggle.find('i[data-count]');
		var notificationsCount = parseInt(notificationsCountElem.data('count'));
		var notifications = notificationsWrapper.find('ul.dropdown-menu');

		// if (notificationsCount <= 0) {
		//     notificationsWrapper.hide();
		// }

		//Thay giá trị PUSHER_APP_KEY vào chỗ xxx này nhé
		var pusher = new Pusher('b59b303106eccae4e8fe', {
			encrypted: true,
			cluster: "ap1"
		});

		// Subscribe to the channel we specified in our Laravel Event
		var channel = pusher.subscribe('a');

		// Bind a function to a Event (the full Laravel class)
		channel.bind('my-event', function(data) {
			var existingNotifications = notifications.html();
			audio = document.getElementById('autoplay');

			audio.play();
			var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
			var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/` + avatar + `.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">` + data.message + `</strong>
                  <!--p class="notification-desc">Extra description can go here</p-->
                  <div class="notification-meta">
                    <small class="timestamp">Khoảng 1 phút trước</small>
                  </div>
                </div>
              </div>
          </li>
        `;
			notifications.html(newNotificationHtml + existingNotifications);

			notificationsCount += 1;
			notificationsCountElem.attr('data-count', notificationsCount);
			notificationsWrapper.find('.notif-count').text(notificationsCount);
			notificationsWrapper.show();
		});
	</script>

	<script language="javascript">
		function ChangeToSlug() {
			var title, slug;

			//Lấy text từ thẻ input title 
			title = document.getElementById("title").value;

			//Đổi chữ hoa thành chữ thường
			slug = title.toLowerCase();

			//Đổi ký tự có dấu thành không dấu
			slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
			slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
			slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
			slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
			slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
			slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
			slug = slug.replace(/đ/gi, 'd');
			//Xóa các ký tự đặt biệt
			slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
			//Đổi khoảng trắng thành ký tự gạch ngang
			slug = slug.replace(/ /gi, "-");
			//Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
			//Phòng trường hợp người nhập vào quá nhiều ký tự trắng
			slug = slug.replace(/\-\-\-\-\-/gi, '-');
			slug = slug.replace(/\-\-\-\-/gi, '-');
			slug = slug.replace(/\-\-\-/gi, '-');
			slug = slug.replace(/\-\-/gi, '-');
			//Xóa các ký tự gạch ngang ở đầu và cuối
			slug = '@' + slug + '@';
			slug = slug.replace(/\@\-|\-\@|\@/gi, '');
			//In slug ra textbox có id “slug”
			document.getElementById('slug').value = slug;
		}
	</script>
</body>

</html>