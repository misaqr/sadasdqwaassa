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
            <a class="btn btn-outline-primary px-md-4" href="add-class.php" role="button">ایجاد کلاس جدید</a>
            <a class="btn btn-primary px-md-4" href="step-1.php" role="button">مشاهده پکیج</a>
          </div>
        </div>
        <div class="row">
          <div class="col"></div>
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
