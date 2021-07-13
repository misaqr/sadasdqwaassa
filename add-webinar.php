<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <?php require_once './common/head.php' ?>
  <title>ایجاد وبینار</title>
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
            <h1 class="h5"><i class="fas fa-video ml-2"></i>ایجاد وبینار</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card border-0 shadow-sm">
              <div class="card-body">
                <form>
                  <div class="form-row mb-4">
                    <div class="form-group col-md-6 mb-4">
                      <label for="exampleInputName"><small>نام کلاس مجازی</small></label>
                      <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputState"><small>انتخاب کلاس:</small></label>
                      <select id="inputState" class="form-control">
                        <option selected>نام کلاس</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12 mb-4 student-add-select2">
                      <label for="exampleFormControlSelect2"><small>لیست دانش آموزان:</small></label>
                      <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                        <option value="AL">سعید سجودی</option>
                          
                        <option value="WY">میثاق رحمانی</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <button type="submit" class="btn btn-outline-primary btn-block"><i class="fas fa-plus ml-2"></i>افزودن دانش آموزان</button>
                    </div>

                    
                  </div>
                </form>
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
  <script>
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
  });
  </script>
</body>
</html>
