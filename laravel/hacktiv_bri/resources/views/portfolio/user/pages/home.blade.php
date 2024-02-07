
@extends('portfolio.user.layout.main')

@section('title','Home')

@section('container')
<!-- Header -->
<header class="masthead main-index">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Service!</div>
        <div class="masthead-heading text-uppercase">We Deliver the Best</div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalOrder">Order Our Services</button>
    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="modalOrder" tabindex="-1" aria-labelledby="modalOrderLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalOrderLabel">Our Service</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Feature</th>
                    <th scope="col">Basic</th>
                    <th scope="col">Premium</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>5$</td>
                    <td>10$</td>
                  </tr>
                  <tr>
                    <td>Delivey Day</td>
                    <td>10 Days</td>
                    <td>5 Days</td>
                  </tr>
                  <tr>
                    <td>Maintance</td>
                    <td>-</td>
                    <td>Unlimited</td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
</div>

<div class="container pb-4 pt-4">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Our Services</h2>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-md-4">
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Web Service</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Web Building</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Web Maintance</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
</div>

<!-- section our Service-->
<div class="container mt-4 mb-4 pb-4">
  <div class="text-center">
    <h2 class="section-heading text-uppercase mt-4 mb-4 pt-4">How We Deliver Our Services</h2>
  </div>
  <div class="row">
      <div class="col-md-6 col-12 left-pic-home"></div>
      <div class="col-md-6 col-12 d-flex align-items-center">
          <p class="col-12">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae modi cum ipsam ad, illo possimus laborum ut
              reiciendis obcaecati. Ducimus, quas. Corrupti, pariatur eaque?
              Reiciendis assumenda iusto sapiente inventore animi?
              <br><br>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae modi cum ipsam ad, illo possimus laborum ut
              reiciendis obcaecati. Ducimus, quas. Corrupti, pariatur eaque?
              Reiciendis assumenda iusto sapiente inventore animi?
          </p>
      </div>
  </div>
</div>
<en

@endsection