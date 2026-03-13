<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">ecommerce - block chain - crypto currency</span>
    <span class="site-heading-lower">Smarty Indonesia</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/">Home
              <!--<span class="sr-only">(current)</span>-->
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/products">Products</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/location">Lokasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<script>
// Add active class to the current button (highlight it)
var btns = $("#navbarResponsive .navbar-nav .nav-link");
for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click",
                                      function () {
                    var current = document
                        .getElementsByClassName("active");
  
                    current[0].className = current[0]
                        .className.replace(" active", "");
  
                    this.className += " active";
                });
            }
</script>
