    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <strong>ILS</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link nav-item {{Request::is('/')?'active':null}} text-center" href="#hero">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#ourcategories">Pembangunan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#our-video">Sejarah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#news">Tempat Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('/gallery')?'active':null}} text-center" href="#latest-posts">Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#instagram">Our Video</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>