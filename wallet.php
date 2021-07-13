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
        <div class="row border-bottom pb-2 mb-2">
          <div class="col-auto ml-auto mt-2">
            <h1 class="h5"><i class="fas fa-credit-card ml-2"></i>بخش مالی</h1>
          </div>
        </div>
        <div class="row">
         <div class="col-12 mt-2">
            <div class="card border-0 shadow-sm">
              <div class="card-body pt-0 px-0">
                <ul class="nav nav-pills mb-3 justify-content-center pr-0 border-bottom" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link nav-link-b active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">موجودی</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-b" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-profile" aria-selected="false">قابل برداشت</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="row d-flex align-items-center justify-content-center">
                      <div class="col-md-2 mt-1 mb-3 mb-md-0 text-center align-items-center">
                        <img src="assets/img/money.jpg" alt="" width="100">
                      </div>
                      <div class="col-auto mt-1 mb-3 h2 mb-md-0 text-center">
                        <p class="numbers text-success mb-0">1300000 ریال</p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row d-flex align-items-center justify-content-center">
                      <div class="col-md-2 mt-1 mb-3 mb-md-0 text-center align-items-center">
                        <img src="assets/img/money.jpg" alt="" width="100">
                      </div>
                      <div class="col-auto mt-1 mb-3 h2 mb-md-0 text-center">
                        <p class="numbers text-success mb-0">62300000 ریال</p>
                      </div>
                      <div class="col-auto mt-1">
                        <a class="btn btn-outline-success" href="#" role="button">تسویه حساب</a>
                      </div>
                    </div>
                  </div>    
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 mt-3">
            
            <div class="card border-0 shadow-sm">
              <div class="card-body">
              
              
                <div class="row mb-3">
                  <div class="col mt-3">
                    <h6>لیست تراکنشها</h6>
                  </div>
                  <div class="col-md-4 d-flex align-items-center">
                    <ul class="nav nav-pills nav-fill">
                      <li class="nav-item">
                        <a class="nav-link active px-3" href="#">ماه جاری</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link px-4" href="#">کل</a>
                      </li>
                    </ul>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-12">
                    <!-- table -->
                    <table class="table table-hover table-responsive-sm">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">شماره تراکنش</th>
                          <th scope="col">تاریخ</th>
                          <th scope="col">مبلغ</th>
                          <th scope="col">وضعیت</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>6452132</td>
                            <td>1400/03/15</td>
                            <td class="numbers">1300000 ریال</td>
                            <td class="text-danger">منقضی</td>
                        </tr>
                        
                        <tr>
                            <td scope="row">2</td>
                            <td >654852</td>
                            <td>1400/03/15</td>
                            <td class="numbers">1300000 ریال</td>
                            <td class="text-success">پرداخت شده</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td >654852</td>
                            <td>1400/03/15</td>
                            <td class="numbers">1300000 ریال</td>
                            <td class="text-warning">در حال پرداخت</td>
                        </tr>
                        
                      </tbody>
                    </table>
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
