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
                <div class="progress-bar  bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                </div>
                <span class="position-absolute text-success h5" style="left: 30px;">مرحله 3 از 3</span>
                <img src="assets/img/success1.png" alt="" class="mt-5 pt-md-3" width="180">
                <h5 class="text-center mt-4 mb-md-5 text-success">اطلاعات کاربر با موفقیت ثبت شد.</h5>
                <p class="text-center my-4 text-s1">روش اطلاع رسانی خود را مشخص کنید:</p>
                
                <div class="col-12 text-center mb-2">
                  <div class="row justify-content-center">
                    <div class="col-md-4 mx-1">
                      <i class="fas fa-link pt-2 h3 pb-2 text-dark"></i>
                      <p class="text-dark">ارسال پیامک</p>
                      <input type="text" class="form-control text-left en-font mb-2 form-control-sm" placeholder="" value="0912213333" aria-label="" aria-describedby="button-addon" readonly>
                      <a class="btn btn-block btn-sm btn-outline-success" href="#" role="button" id="button-addon">ارسال</a>
                    </div>
                    <div class="col-md-4  mx-1">
                      <i class="fas fa-vote-yea text-dark pt-2 h3 pb-2"></i>
                      <p class="text-dark">لینک دعوتنامه</p>
                      <input type="text" class="form-control text-left en-font mb-2 form-control-sm" id="myRef2" placeholder="" value="Classeh.ir/SFJ31" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <button class="btn btn-block btn-sm btn-outline-success" onclick="CopyText2()" type="button" id="button-addon1">کپی</button>
                    </div>
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
