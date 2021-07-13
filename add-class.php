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
            <h1 class="h5"><i class="fas fa-clipboard-list ml-2"></i>ایجاد کلاس جدید</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-2">
            <div class="card border-0 shadow-sm">
              <div class="card-body pt-0 px-0">
                <div class="row justify-content-md-center pb-md-4 py-3">
                  <div class="col-12 col-md col-lg-8 mt-3 text-center">
                    <img src="assets/img/class-icon.png" alt="" class="my-2" width="130">
                    <form class="text-right">
                      <fieldset enable>
        
        
        
                        <div class="form-row">
                          <div class="form-group col-12 mb-4">
                            <label for="exampleInputName">نام کلاس</label>
                            <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="مثال: کلاس اول تجربی">
                          </div>

                          <div class="form-group col-md-6 mb-4">
                            <label for="exampleFormControlSelect1">سال تحصیلی</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>98/99</option>
                              <option>97/98</option>
                              <option>96/97</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6 mb-4">
                            <label for="exampleFormControlSelect2">پایه تحصیلی</label>
                            <select class="form-control" id="exampleFormControlSelect2">
                              <option>دهم تجربی</option>
                              <option>یازدهم تجربی</option>
                              <option>دهم ریاضی</option>
                            </select>
                          </div>

                          <div class="form-group col-md-12 mb-4 student-add-select2">
                            <label for="exampleFormControlSelect2">دانش آموزان:</label>
                            <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                              <option value="AL">سعید سجودی</option>
                                
                              <option value="WY">میثاق رحمانی</option>
                            </select>
                          </div>
                          
                          <div class="form-group col-md-6 mb-4">
                            <label for="">وضعیت:</label>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                              <label class="custom-control-label" for="customRadioInline1">فعال</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">تعلیق</label>
                            </div>
                          </div>

                        </div>
        

                      </fieldset>
                    </form>
                    <a class="btn btn-outline-secondary mt-4 px-4 mx-1" href="#" role="button">انصراف</a>
                    <a class="btn btn-primary mt-4 px-5 mx-1" href="#" role="button">ایجاد کلاس</a>
                      
                  
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
  <script>
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
  });
  </script>
</body>
</html>
