<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Total Register Student</title>


  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/font-awesome.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/perfect-scrollbar.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/bootstrap.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- Import Templates CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/responsive.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/index-01.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
        <div class="navbar-brand">
          <a class="logo js-scroll-trigger" href="index.html"><img src="{{ asset('front-end') }}/img/logo1.jpg"></a>
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register-course.html">Register Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="generate-routine.html">Generate Routine</a>
            </li>
          </ul>
      </div>
    </nav>
  </header>
    <div class="content-wrapper container-fluid">
      <div class="dashboard-contents">
        <div class="contents-inner">
          <div class="row">
            <div class="col-12">
              <div class="section-content">
                <div class="content-head">
                  <h4 class="content-title">Total Register Student </h4><!-- /.content-title -->
                </div><!-- /.content-head -->

                <div class="content-details show">
                  <table id="data-table" class="table data-table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#No</th>
                        <th>Student Id</th>
                        <th>Name</th>
                        <th>Semester</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>
                          <h6>12345</h6>
                        </td>
                        <td>
                           <div class="name">
                             <h5>Md Rakibul Islam</h5>
                           </div>
                        </td>
                        <td>
                          <h6>Spring 19</h6>
                        </td>
                        <td class="action">
                          <ul>
                            <li><a href="#" target="blank" class="profile">Remove</a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>02</td>
                        <td>
                          <h6>12642323</h6>
                        </td>
                        <td>
                           <div class="name">
                             <h5>Md Rafiqul Islam</h5>
                           </div>
                        </td>
                        <td>
                          <h6>Spring 19</h6>
                        </td>
                        <td class="action">
                          <ul>
                            <li><a href="#" target="blank" class="profile">Remove</a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>03</td>
                        <td>
                          <h6>123689</h6>
                        </td>
                        <td>
                           <div class="name">
                             <h5>Md Rabiul Islam</h5>
                           </div>
                        </td>
                        <td>
                          <h6>Summer 19</h6>
                        </td>
                        <td class="action">
                          <ul>
                            <li><a href="#" target="blank" class="profile">Remove</a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>04</td>
                        <td>
                          <h6>1234585</h6>
                        </td>
                        <td>
                           <div class="name">
                             <h5>Md Ridoy</h5>
                           </div>
                        </td>
                        <td>
                          <h6>Fall 19</h6>
                        </td>
                        <td class="action">
                          <ul>
                            <li><a href="#" target="blank" class="profile">Remove</a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>05</td>
                        <td>
                          <h6>12345867</h6>
                        </td>
                        <td>
                           <div class="name">
                             <h5>Md Ariful Islam</h5>
                           </div>
                        </td>
                        <td>
                          <h6>Spring 19</h6>
                        </td>
                        <td class="action">
                          <ul>
                            <li><a href="#" target="blank" class="profile">Remove</a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>06</td>
                        <td>
                          <h6>12345</h6>
                        </td>
                        <td>
                           <div class="name">
                             <h5>Md Naimul Hasan</h5>
                           </div>
                        </td>
                        <td>
                          <h6>Spring 19</h6>
                        </td>
                        <td class="action">
                          <ul>
                            <li><a href="#" target="blank" class="profile">Remove</a></li>
                          </ul>
                        </td>
                      </tr>
                    </tbody>

                    <tfoot>
                      <tr>
                        <th>#No</th>
                        <th>Student Id</th>
                        <th>Name</th>
                        <th>Semester</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.content-details -->
              </div>
            </div>

          </div>
        </div><!-- /.contents-inner -->
    </div><!-- /.dashboard-contents -->
  </div>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-area">
            <p>&copy; Developed by <a href="#">Sojib</a></p>
          </div>
        </div>
      </div>
    </div> 
  </footer>

  <script src="{{ asset('front-end') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/plugins.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>

  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      "use strict";

      $('.data-table').DataTable();
    });
  </script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:01:56 GMT -->
</html>
