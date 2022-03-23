<style>
    .close {
    font-size: 1.5rem;
    }

    .col-12 img {
    opacity: 0.7;
    cursor: pointer;
    margin: 2rem;
    width: 100%;
    }

    .col-12 img:hover {
    opacity: 1;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<div class="container">
<br>
<h1 class="display-4 fst-italic text-dark text-center">Фотогалерея</h1>
<div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
  <div class="col-12 col-md-6 col-lg-3">
        <img src="https://source.unsplash.com/random/200" data-target="#indicators" data-slide-to="0" alt="" /> 
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/201" data-target="#indicators" data-slide-to="1" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
     <img src="https://source.unsplash.com/random/202" data-target="#indicators" data-slide-to="2"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/203" data-target="#indicators" data-slide-to="3" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/204" data-target="#indicators" data-slide-to="4"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/205" data-target="#indicators" data-slide-to="5" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/206" data-target="#indicators" data-slide-to="6" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
     <img src="https://source.unsplash.com/random/207" data-target="#indicators" data-slide-to="7"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/208" data-target="#indicators" data-slide-to="8" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/209" data-target="#indicators" data-slide-to="9"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/210" data-target="#indicators" data-slide-to="10" alt="" />
  </div>
    <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/211" data-target="#indicators" data-slide-to="11" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
        <img src="https://source.unsplash.com/random/212" data-target="#indicators" data-slide-to="0" alt="" /> 
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/213" data-target="#indicators" data-slide-to="1" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
     <img src="https://source.unsplash.com/random/214" data-target="#indicators" data-slide-to="2"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/215" data-target="#indicators" data-slide-to="3" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/216" data-target="#indicators" data-slide-to="4"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/217" data-target="#indicators" data-slide-to="5" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/218" data-target="#indicators" data-slide-to="6" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
     <img src="https://source.unsplash.com/random/219" data-target="#indicators" data-slide-to="7"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/220" data-target="#indicators" data-slide-to="8" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/221" data-target="#indicators" data-slide-to="9"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/222" data-target="#indicators" data-slide-to="10" alt="" />
  </div>
    <div class="col-12 col-md-6 col-lg-3">
       <img src="https://source.unsplash.com/random/223" data-target="#indicators" data-slide-to="11" alt="" />
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div id="indicators" class="carousel slide" data-interval="false">
  <ol class="carousel-indicators">
    <li data-target="#indicators" data-slide-to="0" class="active"></li>
    <li data-target="#indicators" data-slide-to="1"></li>
    <li data-target="#indicators" data-slide-to="2"></li>
    <li data-target="#indicators" data-slide-to="3"></li>
    <li data-target="#indicators" data-slide-to="4"></li>
    <li data-target="#indicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      
      <img class="d-block w-100" src="https://source.unsplash.com/random/200" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/random/201" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/random/202" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/random/203" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/random/204" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/random/205" alt="Sixth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
  </div>
</div>
                         </div>