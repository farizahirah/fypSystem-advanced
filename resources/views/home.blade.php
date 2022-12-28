<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>UNITEN FYP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">HOME</a></li>
                          <li class="scroll-to-section"><a href="#project">PROJECT LIST</a></li>
                          <li>
                          @if (Route::has('login'))
                          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                          @auth
                            <li>
                            <x-app-layout>
                            </x-app-layout>
                            </li>
                          @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOGIN</a></li>

                            @if (Route::has('register'))
                              <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a></li>
                            @endif
                          @endauth
                          </div>
                          @endif
                          </li>
                      </ul>
            
            </nav>
        </div>
      </div>
    </div>
</header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Welcome to UNITEN</h6>
            <h2><em>FYP</em> Management System</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/banner-right-image.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

    <section class="main-banner" id="project">
    <div class="container">
      <div class="row">
      <div class="card">
                <div class="card-body" >
                  <h4 class="card-title">Project List</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                        <th>Project Type</th>
                        <th>Title</th>
                        <th>Student</th>
                        <th>Supervisor</th>
                        <th>Examiner</th>
                        <th>Examiner</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Duration</th>
                        <th>Progress</th>
                        <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($list as $x)
                      <tr>
                        <td>{{$x['projecttype']}}</td>
                        <td>{{$x['title']}}</td>
                        <td>{{$x['student']}}</td>
                        <td>{{$x['supervisor']}}</td>
                        <td>{{$x['examiner1']}}</td>
                        <td>{{$x['examiner2']}}</td>
                        <td>{{$x['startdate']}}</td>
                        <td>{{$x['enddate']}}</td>
                        <td>{{$x['duration']}} month</td>
                        <td>{{$x['progress']}}</td>
                        <td>{{$x['status']}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <p>Copyright © 2022 DigiMedia Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p> -->
          <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved. 
          <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
  </script>

</body>
</html>