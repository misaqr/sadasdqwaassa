<!-- footer -->

	
<div class="container-fluid py-4 bg-white border-top">
		
	<div class="row justify-content-md-center py-md-5">
		
		<div class="col-md-2">
			<nav class="page-links">
			<div class="mb-4 mt-2 tex-dark">
					<h3 class="h5">منوی اصلی</h3>
			</div>
				<ul class="text-secondary px-3">
					<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#">صفحه اصلی</a></li>
					<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#">محصولات</a></li>
					<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#"></a>خدمات</li>
				</ul>
			</nav>
		</div>
		
		<div class="col-md-2">
			<nav class="page-links">
				<div class="mb-4 mt-2 tex-dark">
					<h3 class="h5">سایر بخش ها</h3>
				</div>
				<ul class="text-secondary px-3" >
					<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#">ثبت نام</a></li>
					<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#">سوالات متداول</a></li>
					<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#">بلاگ</a></li>

				</ul>
			</nav>
		</div>
		
		
		<div class="col-md-2">
		<nav class="page-links">
			<div class="mb-4 mt-2 tex-dark">
				<h3 class="h5">درباره ما </h3>
			</div>
			<ul class="px-3 text-secondary">
				<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#"> آدرس</a></li>
				<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#"> ایمیل</a></li>
				<li class="mb-2 small"><a class="text-decoration-none text-secondary" href="#">شماره تماس </a></li>
			</ul>
		</nav>
		</div>

		<!--شبکه های اجتماعی-->
		<div class="col-md-3 pb-5 pb-md-0">
			<div class="row">
				<div class="col-12">
				<div class="mb-4 mt-2 text-dark">
					<h3 class="h5">ما را در شبکه های اجتماعی دنبال کنید</h3>
				</div>
				<div class="d-flex justify-content-between mx-4">
					<a class="text-secondary" style="font-size:24px;" href="#" target="_blank"><i class="fab fa-facebook "></i></a>
					<a class="text-secondary" style="font-size:24px;" href="#" target="_blank"><i class="fab fa-telegram "></i></a>
					<a class="text-secondary" style="font-size:24px;" href="#" target="_blank"><i class="fab fa-instagram "></i></a>
					<a class="text-secondary" style="font-size:24px;" href="#" target="_blank"><i class="fab fa-linkedin "></i></a>
					<a class="text-secondary" style="font-size:24px;" href="#" target="_blank"><i class="fab fa-twitter "></i></a>
				</div>
				</div>
				<div class="col-4 mt-4 text-center d-none">
				<img src="assets/img/namad.png" class="w-75" alt="">
				</div>
				<div class="col-4 mt-4 text-center d-none">
					<img src="assets/img/namad.png" class="w-75" alt="">
				</div>
				<div class="col-4 mt-4 text-center d-none">
					<img src="assets/img/namad.png" class="w-75" alt="">
				</div>
			</div>
		
		</div>
		

	</div><!-- row -->

</div>


<script>
  
  var sp = document.getElementsByClassName("numbers");


  Array.from(sp).forEach((el) => {
	  console.log(el.textContent);

	  el.textContent = el.textContent.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
  });


</script>
