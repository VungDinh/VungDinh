  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

          <h1 class="logo me-auto me-lg-0"><a href="index.html">Restaurantly</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                  <li><a class="nav-link scrollto active" href="/">Home</a></li>
                  <li><a class="nav-link scrollto" href="/#about">About</a></li>
                  <li><a class="nav-link scrollto" href="/#menu">Menu</a></li>
                  <li><a class="nav-link scrollto" href="/#specials">Specials</a></li>
                  <li><a class="nav-link scrollto" href="/#events">Events</a></li>
                  <li><a class="nav-link scrollto" href="/#chefs">Chefs</a></li>
                  <li><a class="nav-link scrollto" href="/#gallery">Gallery</a></li>
                  <li class="dropdown"><a href="#"><span>Booking list</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="{{ route('list-book') }}">Danh sách đặt bàn</a></li>
                      </ul>
                  </li>
                  <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a href="/#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

      </div>
      <div class="col-12 col-md-2">
        <h3>{{ $weather->list[0]->name .' '. ($weather->list[0]->main->temp - 273)}} °C</h3>
      </div>
  </header><!-- End Header -->
