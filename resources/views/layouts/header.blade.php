<header>
    <div class="container py-2">
      <div class="row py-4 pb-0 pb-sm-4 align-items-center ">
        <div class="col-sm-4 col-lg-3 text-center text-sm-start">
          <div class="main-logo">
            <a href="/">
              <img src={{asset('storage/images/logo.png')}} alt="logo" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
          <div class="search-bar border rounded-2 px-3 border-dark-subtle">
            <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
              <input type="text" class="form-control border-0 bg-transparent py-4"
                placeholder="Search for more than 10,000 products" />
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                  d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
              </svg>
            </form>
          </div>
        </div>

        <div
          class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
          <div class="support-box text-end d-none d-xl-block">
            <span class="fs-6 secondary-font text-muted">Phone</span>
            <h5 class="mb-0">0976049347</h5>
          </div>
          <div class="support-box text-end d-none d-xl-block">
            <span class="fs-6 secondary-font text-muted">Email</span>
            <h5 class="mb-0">vanthuc08888@gmail.com</h5>
          </div>



        </div>
      </div>
    </div>

    <div class="container-fluid">
      <hr class="m-0">
    </div>

    <div class="container">
      <nav class="main-menu d-flex navbar navbar-expand-lg ">

        <div class="d-flex d-lg-none align-items-end mt-3">
          <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
              <a href="account.html" class="mx-3">
                <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
              </a>
            </li>
            <li>
              <a href="wishlist.html" class="mx-3">
                <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
              </a>
            </li>

            <li>
              <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                aria-controls="offcanvasCart">
                <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                  03
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                aria-controls="offcanvasSearch">
                <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                </span>
              </a>
            </li>
          </ul>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                Dropdown button
              </button>
              <ul class="dropdown-menu z-3">
                <li><a class="dropdown-item" href="#">Clothes</a></li>
                <li><a class="dropdown-item" href="#">Food</a></li>
                <li><a class="dropdown-item" href="#">Toy</a></a></li>
              </ul>
            </div>

            <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
              <li class="nav-item">
                <a href="/" class="nav-link active">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu" aria-labelledby="pages">
                  <li><a href="about.html" class="dropdown-item">About Us<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="shop.html" class="dropdown-item">Shop<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="single-product.html" class="dropdown-item">Single Product<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="cart.html" class="dropdown-item">Cart<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="wishlist.html" class="dropdown-item">Wishlist<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="checkout.html" class="dropdown-item">Checkout<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="blog.html" class="dropdown-item">Blog<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="single-post.html" class="dropdown-item">Single Post<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="contact.html" class="dropdown-item">Contact<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="faqs.html" class="dropdown-item">FAQs<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="account.html" class="dropdown-item">Account<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="thank-you.html" class="dropdown-item">Thankyou<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="error.html" class="dropdown-item">Error 404<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="styles.html" class="dropdown-item">Styles<span
                        class="badge bg-success text-dark ms-2">PRO</span></a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="shop.html" class="nav-link">Shop</a>
              </li>
              <li class="nav-item">
                <a href="blog.html" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Others</a>
              </li>
            </ul>

            <div class="d-none d-lg-flex align-items-center">
              <ul class="d-flex justify-content-end list-unstyled m-0">
                @if(Auth::check())
                <div class="dropdown">
                  <a class="mx-3 d-block h-100 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="d-inline fs-5">{{ (Auth::user() -> name ) ? Auth::user() -> name : '' }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg> 
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href={{route('logout')}}>Log out</a></li>
                  </ul>
                </div>
                @else
                <li class="">
                  <a href={{route('login')}} class="mx-3 d-block h-100" style="">
                    <p class="d-inline fs-5">Log in</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                  </a>
                </li>
                @endif
                
                <li class="">
                  <a href="#" class="mx-3 d-block h-100" style="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                    aria-controls="offcanvasCart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                    </svg>
                    <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                      03
                    </span>
                  </a>
                </li>
              </ul>

            </div>

          </div>

        </div>

      </nav>
    </div>
  </header>