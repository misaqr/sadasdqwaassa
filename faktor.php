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
       <div class="row border-bottom pb-2 mb-4">
          <div class="col-auto ml-auto mt-2">
            <h1 class="h5"><i class="fas fa-sticky-note ml-2"></i>فاکتورها</h1>
          </div>
          <div class="col-auto pb-3">
            <a class="btn btn-primary px-md-4" href="faktorsaz1.php" role="button">ایجاد فاکتور جدید</a>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card border-0 shadow-sm">
              <div class="card-body pt-0 px-0">
                <ul class="nav nav-pills mb-3 justify-content-center pr-0 border-bottom">
                  <li class="nav-item">
                    <a class="nav-link nav-link-b active" href="faktor.php">فاکتورهای من</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-b" href="faktor-2.php">فاکتورهای زیر مجموعه</a>
                  </li>
                </ul>
                
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="row mb-3">
                      <div class="col mt-3 mr-3">
                        <h6>لیست فاکتورها</h6>
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
                        <div class="table-responsive-sm">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">شماره فاکتور</th>
                                <th scope="col">مبلغ فاکتور</th>
                                <th scope="col">تاریخ</th>
                                <th scope="col">وضعیت</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-warning">در انتظار تایید</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-warning">پیش نویس</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-danger">رد شده</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-success">تایید شده</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-success">تایید شده</td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-success">تایید شده</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row mb-3">
                      <div class="col mt-3 mr-3">
                        <h6>لیست فاکتورها</h6>
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
                        <div class="table-responsive-sm">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">شماره فاکتور</th>
                                <th scope="col">مبلغ فاکتور</th>
                                <th scope="col">تاریخ</th>
                                <th scope="col">وضعیت</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-warning">در انتظار تایید</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-warning">پیش نویس</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-danger">رد شده</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-success">تایید شده</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-success">تایید شده</td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td><a class="text-decoration-none" href="">65321322</a></td>
                                <td class="numbers">1300000 ریال</td>
                                <td class="">1400/03/15</td>
                                <td class="text-success">تایید شده</td>
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
            <div class="row">
              <div class="col offset-md-3">
              
                <nav aria-label="Page navigation example justi">
                  <ul class="pagination mt-4">
                    <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                  </ul>
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
