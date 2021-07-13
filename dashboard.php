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
      <div class="col-md-8">
        <div class="row border-bottom">
          <div class="col-auto ml-auto mt-2">
            <h1 class="h5"><i class="fas fa-columns ml-2"></i>داشبورد</h1>
          </div>
          <div class="col-auto pb-3">
          <a class="btn btn-outline-primary px-md-4" href="faktorsaz1.php" role="button">ایجاد وبینار</a>
            <a class="btn btn-primary px-md-4" href="affiliate-1.php" role="button">ایجاد کلاس جدید</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mt-3 px-2">
            <div class="card border-0 shadow-sm">
              <div class="card-body text-center px-0 pb-3">
                <h6 class="card-title text-right text-primary pr-3">فروش کل</h6>
                <a href="report.php" class="card-link text-secondary detail-card">جزئیات</a>
                
                <div class="tab-content py-3" id="nav-tabContent">
                  <div class="tab-pane fade pb-3 pt-2 show active text-dark" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><h4 class="numbers">213000 تومان</h4></div>
                  <div class="tab-pane fade pb-3 pt-2 text-dark" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><h4 class="numbers">813000 تومان</h4></div>
                </div>
                <nav>
                  <div class="nav nav-pills justify-content-center border-top" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link nav-link-top active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ماه جاری</a>
                    <a class="nav-item nav-link nav-link-top" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">کل</a>
                  </div>
                </nav>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3 px-2">
            <div class="card border-0 shadow-sm">
              <div class="card-body text-center px-0 pb-3">
                <h6 class="card-title text-right text-primary pr-3">فروش زیر مجموعه</h6>
                <a href="report.php" class="card-link text-secondary detail-card">جزئیات</a>
                
                <div class="tab-content py-3" id="nav-tabContent">
                  <div class="tab-pane fade pb-3 pt-2 show active text-dark" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab"><h4 class="numbers">213000 تومان</h4></div>
                  <div class="tab-pane fade pb-3 pt-2 text-dark" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab"><h4 class="numbers">813000 تومان</h4></div>
                </div>
                <nav>
                  <div class="nav nav-pills justify-content-center border-top" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link nav-link-top active" id="nav-home-tab" data-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home" aria-selected="true">ماه جاری</a>
                    <a class="nav-item nav-link nav-link-top" id="nav-profile-tab" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile" aria-selected="false">کل</a>
                  </div>
                </nav>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3 px-2">
            <div class="card border-0 shadow-sm">
              <div class="card-body text-center px-0 pb-3">
                <h6 class="card-title text-right text-primary pr-3">موجودی کیف پول</h6>
                <a href="wallet.php" class="card-link text-secondary detail-card">جزئیات</a>
                
                <div class="tab-content py-3" id="nav-tabContent">
                  <div class="tab-pane fade pb-3 pt-2 show active text-dark" id="nav-home3" role="tabpanel" aria-labelledby="nav-home-tab3"><h4 class="numbers">213000 تومان</h4></div>
                  <div class="tab-pane fade pb-3 pt-2 text-dark" id="nav-profile3" role="tabpanel" aria-labelledby="nav-profile-tab"><h4 class="numbers">813000 تومان</h4></div>
                </div>
                <nav>
                  <div class="nav nav-pills justify-content-center border-top" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link nav-link-top active" id="nav-home-tab3" data-toggle="tab" href="#nav-home3" role="tab" aria-controls="nav-home" aria-selected="true">موجودی</a>
                    <a class="nav-item nav-link nav-link-top" id="nav-profile-tab" data-toggle="tab" href="#nav-profile3" role="tab" aria-controls="nav-profile" aria-selected="false">قابل برداشت</a>
                  </div>
                </nav>
                
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
