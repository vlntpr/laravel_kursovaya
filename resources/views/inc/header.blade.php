<header>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll" style="background-image: none; background-color: rgba(249, 250, 253, 0);">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="#">
            <div class="text-primary font-base">Archive</div>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item"><a class="nav-link" href="{{ route('fandoms') }}">Fandoms</a></li>              
              <li class="nav-item"><a class="nav-link" href="{{ route('works') }}">Works</a></li>
              <li class="nav-item"><a class="nav-link" href="#libraries">Search</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
              
            </ul>
            <form class="ps-lg-5">
              <button class="btn btn-lg btn-primary rounded-pill bg-gradient font-base order-0" type="submit">Login</button>
            </form>
          </div>
        </div>
      </nav>
</header>