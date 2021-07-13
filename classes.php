<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <?php require_once './common/head.php' ?>
  <title>لیست کلاس ها</title>
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
            <h1 class="h5"><i class="fas fa-clipboard-list ml-2"></i>لیست کلاس‌ها</h1>
          </div>
          <div class="col-auto pb-3">
            <a class="btn btn-primary px-md-4" href="add-class.php" role="button">ایجاد کلاس جدید</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-2">
            <div class="card border-0 shadow-sm">
              <div class="card-body pt-0 px-0">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">سال تحصیلی</th>
                        <th scope="col">پایه تحصیلی</th>
                        <th scope="col">تاریخ ثبت</th>
                        <th scope="col">تاریخ ویرایش</th>
                        <th scope="col">عملیات</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>ششم 1</td>
                        <td>1400-1401</td>
                        <td>ششم</td>
                        <td>1400-03-02</td>
                        <td>1400-03-02</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light"><i class="fas fa-edit text-secondary"></i></button>
                            <button type="button" class="btn btn-light"><i class="fas fa-check-square text-success"></i></button>
                            <button type="button" class="btn btn-light"><i class="fas fa-trash-alt text-danger"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>ششم 1</td>
                        <td>1400-1401</td>
                        <td>ششم</td>
                        <td>1400-03-02</td>
                        <td>1400-03-02</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light"><i class="fas fa-edit text-secondary"></i></button>
                            <button type="button" class="btn btn-light"><i class="fas fa-check-square text-success"></i></button>
                            <button type="button" class="btn btn-light"><i class="fas fa-trash-alt text-danger"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>ششم 1</td>
                        <td>1400-1401</td>
                        <td>ششم</td>
                        <td>1400-03-02</td>
                        <td>1400-03-02</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light"><i class="fas fa-edit text-secondary"></i></button>
                            <button type="button" class="btn btn-light"><i class="fas fa-check-square text-success"></i></button>
                            <button type="button" class="btn btn-light"><i class="fas fa-trash-alt text-danger"></i></button>
                          </div>
                        </td>
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
  <footer>
    <!-- footer -->
    <?php require_once './common/footer.php' ?>

  </footer>

</body>
</html>
