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
            <h1 class="h5"><i class="fas fa-user ml-2"></i>اطلاعات کاربری</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card shadow-sm border-0 mb-4">
              <div class="card-body">
                <div class="row justify-content-md-center pb-md-4 pb-3">
                
                  <div class="col-12 col-md col-lg-8 text-center">
                    <div class="avatar-upload" width="300">
                      <div class="avatar-edit">
                          <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload"><i class="fas fa-camera text-secondary pt-2"></i></label>
                      </div>
                      <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(assets/img/avatar.png);">
                          </div>
                      </div>
                    </div>
                    <form class="text-right">

                      <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                          <label for="exampleInputName">نام</label>
                          <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="میثاق">
                        </div>
                        <div class="form-group col-12 col-md-6">
                          <label for="exampleInputName">نام خانوادگی</label>
                          <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="رحمانی">
                        </div>
                      </div>
      
                      <div class="form-row">
                      
                        <div class="form-group col-12 col-md-6 ">
                          <label for="exampleInputcodemelli">کد ملی</label>
                          <input type="tel" class="form-control" id="exampleInputcodemelli" aria-describedby="number" name="quantity" placeholder="2589929922">
                        </div>
      
                        
                        <div class="form-group col-12 col-md-6">
                          <label for="exampleInputName">شماره همراه</label>
                          <input type="tel" class="form-control" id="exampleInputName" aria-describedby="number" name="quantity" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">رمز عبور</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">تکرار رمز عبور</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        
                        
                      </div>
                    </form>
                    <a class="btn btn-outline-secondary mt-4 px-4 mx-1" href="#" role="button">انصراف</a>
                    <a class="btn btn-primary mt-4 px-5 mx-1" href="#" role="button">ذخیره</a>
                    
                   
                  
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
  
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imageUpload").change(function() {
    readURL(this);
  });
  </script>
</body>
</html>
