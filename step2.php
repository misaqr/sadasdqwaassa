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
      
      <div class="col-md-8 mb-4">
        <div class="card border-0 shadow-sm">
          <div class="card-body pt-0 px-0">
            <div class="row pb-2 mb-4">
              <div class="col-12 text-center">
                <div class="progress rounded-top mb-3 mt-0 mx-0" style="height: 20px; border-radius: 0;">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                </div>
                <a class="btn btn-link position-absolute text-decoration-none" href="affiliate-1.php" role="button" style="right: 30px;"><i class="fas fa-arrow-right"></i> بازگشت</a>
                <span class="position-absolute text-success h5" style="left: 30px;">مرحله 2 از 3</span>
                <img src="assets/img/aff2.jpg" alt="" class="mt-5 mb-4" width="210">
                <h6 class="text-center mt-2 mb-4">اطلاعات کاربر را وارد کنید</h6>
                
                <div class="row  justify-content-center">
                  
                  <div class="col-md-5 text-right">
                    <form class="needs-validation">
                      <div class="form-row ">
                        <div class="form-group col-12">
                          <label for="exampleInputName">نام</label>
                          <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="" required>
                        </div>

                        <div class="form-group col-12">
                          <label for="exampleInputName">نام خانوادگی</label>
                          <input type="tel" class="form-control" id="exampleInputName" aria-describedby="number" name="quantity" placeholder="" required>
                        </div>

                        <div class="form-group col-12">
                          <label for="exampleInputName">شماره تماس</label>
                          <input type="tel" class="form-control" id="exampleInputName" aria-describedby="number" name="quantity" placeholder="" required>
                        </div>
                      </div>

                      <div class="text-center">
                        <a class="btn btn-primary btn-s-1 mt-3 px-5" href="affiliate-3.php" role="button">ثبت نهایی</a>
                      </div>
                    </form>
                  </div>

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
