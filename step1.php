<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <?php require_once './common/head.php' ?>
  <title>داشبورد</title>
</head>
<body class="bg-light">
  <header>
  <!-- navbar -->
  <?php require_once './common/navbar.php' ?>

  </header>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-4 d-none d-md-block d-xl-block d-lg-block">
        <?php require_once './common/dashboard-nav.php' ?>
      </div>
      <!-- main -->
      <div class="col-md-8 mb-2">
        <div class="card border-0 shadow-sm">
          <div class="card-body pt-0 px-0">
            <div class="row pb-2 mb-4">
              <div class="col-12 text-center">
              
                <div class="progress rounded-top mb-3 mt-0 mx-0" style="height: 20px; border-radius: 0;">
                <div class="progress-bar  bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                </div>
                <span class="position-absolute text-success h5" style="left: 30px;">مرحله 1 از 3</span>
                <img src="assets/img/aff1.jpg" alt="" class="mt-5 mb-4" width="210">
                <h6 class="text-center my-4">نقش کاربر را مشخص کنید</h6>
                <div class="col-12 text-center">
                  <a class="btn btn-outline-dark px-4 mx-2 pb-3 mb-3" href="affiliate-2.php" role="button" style="width: 7rem;"><i class="fas fa-chalkboard-teacher pt-2 h3 pb-2"></i><br> معلم</a>
                  <a class="btn btn-outline-dark px-4 mx-2 pb-3 mb-3" href="affiliate-2.php" role="button" style="width: 7rem;"><i class="fas fa-user-check pt-2 h3 pb-2"></i><br> مدیر</a>
                  <a class="btn btn-outline-dark px-3 mx-2 pb-3 mb-3" href="affiliate-2.php" role="button" style="width: 7rem;"><i class="fas fa-user-graduate pt-2 h3 pb-2"></i><br> دانش آموز</a>
                  <a class="btn btn-outline-dark px-4 mx-2 pb-3 mb-3" href="affiliate-2.php" role="button" style="width: 7rem;"><i class="fas fa-user-friends pt-2 h3 pb-2"></i><br> همکار</a>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <!-- footer -->
    <?php require_once './common/footer.php' ?>

  </footer>

</body>
</html>
