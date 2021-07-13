<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <?php require_once './common/head.php' ?>
  <title>لیست وبینارها</title>
</head>
<style>
  #table {
  position: relative;
  overflow: hidden;
  margin-top: 50px;
  }

  table {
    background: white;
    box-shadow: 0 10px 30px rgba(225, 225, 225, 0.5);
  }

  thead tr {
    height: 45px;
  }

  .title-td {
    position: relative;
  }

  .title-td span {
    position: relative;
    top: 6px;
  }

  input {
    border-radius: 0 !important;
    border: 1px solid #ddd !important;
    box-shadow: 0 10px 30px rgba(225, 225, 225, 0.4) !important;
  }

  .green {
    background: #2ecc71;
  }

  tr > td {
    position: relative;
  }

  .static {
    position: static !important;
  }

  .alert {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background: linear-gradient(to bottom, #bdc3c7 , #ecf0f1);
    transition: all 400ms ease;
    transform: translateY(-100%);
  }

  .alert.active {
    transform: translateY(0);
  }

</style>
<script>
  $(document).ready(function(){
  function remove() {
    $(".red").click(function(){
      $(this).closest("tr").remove();
    });
  }
  remove();
    $(".add-form").on('submit', function(e){
      e.preventDefault();
      if($("input[name=name]").val(), $("input[name=name]").val(), $("input[name=name]").val() == "") {
        $(".alert").addClass("active");
        $(".remove").click(function(){
          $(".alert").removeClass("active");
        });
      } else {
        var name = $("input[name=name]").val();
        var surname = $("input[name=surname]").val();
        var number = $("input[name=number]").val();
        $(".first-tr").after('<tr><td></td><td>'+name+'</td><td>'+surname+'</td><td>'+number+'</td><td class="static"><button class="btn btn-danger red"><i class="fas fa-trash-alt"></i></button></td></tr>');
        remove();
        $("input[name=name], input[name=surname], input[name=number]").val("");   
      }
    });
  });
</script>
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
      <div class="col-md-8">
       <div class="row border-bottom pb-2 mb-2">
          <div class="col-auto ml-auto mt-2">
            <h1 class="h5"><i class="fas fa-video ml-2"></i>لیست وبینارها</h1>
          </div>
          <div class="col-auto pb-3">
            <a class="btn btn-primary px-md-4" href="add-webinar.php" role="button">ایجاد وبینار جدید</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-2">
            <div class="card border-0 shadow-sm">
              <div class="card-body pt-1 px-0">
                <div class="table-responsive ">
                  <table class="table table-hover mb-0 bg-transparent">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">تاریخ ثبت</th>
                        <th scope="col">تاریخ ویرایش</th>
                        <th scope="col">عملیات</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>ششم 1</td>
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
