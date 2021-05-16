<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopepe</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- start #header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">Jordan Calderon 430-985 Eleifend St. Duluth Washington 92611 (427) 930-5255</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Whishlist (0)</a>
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Mobile Shopee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                  <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                  </li>
              </ul>
              <form action="#" class="font-size-14 font-rale">
                  <a href="#" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                  </a>
              </form>
            </div>
            </div>
          </nav>
           <!-- !Primary Navigation -->

    </header>
    <!-- !start #header -->
    
    <!-- start #main-site -->
        <main id="main">
            
            <!-- Owl carousel -->
            <section id="banner-area">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                      <img src="../assets/Banner1.png" alt="Banner1">
                    </div>
                    <div class="item">
                      <img src="../assets/Banner2.png" alt="Banner2">
                    </div>
                    <div class="item">
                      <img src="../assets/Banner1.png" alt="Banner3">
                    </div>
                </div>
              </section>
            <!-- !Owl carousel -->

            <!-- Top Sale -->
          <section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Samsung Galaxy 10</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/2.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Readme Note 7</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/3.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Readme Note 7</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/6.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Samsung Galaxy 10</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Readme Note 7</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="#"><img src="../assets/products/1.png" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Readme Note 7</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>$122</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="#"><img src="../assets/products/2.png" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Readme Note 7</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>$122</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
        <!-- !Top Sale -->

        <!-- Special Price -->
        <section id="special-price">
          <div class="container">
            <h4 class="font-rubik font-size-20">Special Price</h4>
            <div id="filters" class="button-group text-right font-baloo font-size-16">
              <button class="btn is-checked" data-filter="*">All Brand</button>
              <button class="btn" data-filter=".Apple">Apple</button>
              <button class="btn" data-filter=".Samsung">Samsung</button>
              <button class="btn" data-filter=".Redmi">Redmi</button>
            </div>

            <div class="grid">
              <div class="grid-item Apple border">
               <div class="item py-2" style="width: 200px;">
                <div class="product font-rale">
                  <a href="#"><img src="../assets/products/13.png" alt="product1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Apple iPhone 10</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$152</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                  </div>
                </div>
              </div>
              </div>
              <div class="grid-item Samsung border">
                <div class="item py-2" style="width: 200px;">
                 <div class="product font-rale">
                   <a href="#"><img src="../assets/products/11.png" alt="product1" class="img-fluid"></a>
                   <div class="text-center">
                     <h6>Samsung Galaxy 10</h6>
                     <div class="rating text-warning font-size-12">
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="far fa-star"></i></span>
                     </div>
                     <div class="price py-2">
                       <span>$152</span>
                     </div>
                     <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                   </div>
                 </div>
               </div>
               </div>
               <div class="grid-item Redmi border">
                <div class="item py-2" style="width: 200px;">
                 <div class="product font-rale">
                   <a href="#"><img src="../assets/products/3.png" alt="product1" class="img-fluid"></a>
                   <div class="text-center">
                     <h6>Redmi Note 7 Pro</h6>
                     <div class="rating text-warning font-size-12">
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="far fa-star"></i></span>
                     </div>
                     <div class="price py-2">
                       <span>$152</span>
                     </div>
                     <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                   </div>
                 </div>
               </div>
               </div>
               <div class="grid-item Apple border">
                <div class="item py-2" style="width: 200px;">
                 <div class="product font-rale">
                   <a href="#"><img src="../assets/products/14.png" alt="product1" class="img-fluid"></a>
                   <div class="text-center">
                     <h6>Apple iPhone 10</h6>
                     <div class="rating text-warning font-size-12">
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="far fa-star"></i></span>
                     </div>
                     <div class="price py-2">
                       <span>$152</span>
                     </div>
                     <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                   </div>
                 </div>
               </div>
               </div>
               <div class="grid-item Samsung border">
                <div class="item py-2" style="width: 200px;">
                 <div class="product font-rale">
                   <a href="#"><img src="../assets/products/12.png" alt="product1" class="img-fluid"></a>
                   <div class="text-center">
                     <h6>Samsung Galaxy 10</h6>
                     <div class="rating text-warning font-size-12">
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="far fa-star"></i></span>
                     </div>
                     <div class="price py-2">
                       <span>$152</span>
                     </div>
                     <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                   </div>
                 </div>
               </div>
               </div>
               <div class="grid-item  Redmi border ">
                <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <div class="d-flex flex-column">
                      <a href="#"><img src="../assets/products/4.png" class="img-fluid" alt="pro1"></a>
                      <div class="text-center">
                        <h6>Redmi Note 7 Pro</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item  Redmi border ">
                <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <div class="d-flex flex-column">
                      <a href="#"><img src="../assets/products/5.png" class="img-fluid" alt="pro1"></a>
                      <div class="text-center">
                        <h6>Redmi Note 7 Pro</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item  Redmi border ">
                <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <div class="d-flex flex-column">
                      <a href="#"><img src="../assets/products/6.png" class="img-fluid" alt="pro1"></a>
                      <div class="text-center">
                        <h6>Redmi Note 7 Pro</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item  Redmi border">
                <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <div class="d-flex flex-column">
                      <a href="#"><img src="../assets/products/10.png" class="img-fluid" alt="pro1"></a>
                      <div class="text-center">
                        <h6>Redmi Note 7 Pro</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item Apple border  " >
                <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <div class="d-flex flex-column">
                      <a href="#"><img src="../assets/products/13.png" class="img-fluid" alt="pro1"></a>
                      <div class="text-center">
                        <h6>Apple iPhone 10</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$252</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!-- !Special Price -->

      <!-- Banner Ads  -->
      <section id="banner_adds">
        <div class="container py-5 text-center">
          <img src="../assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
          <img src="../assets/banner2-cr-500x150.jpg" alt="banner1" class="img-fluid">
        </div>
      </section>
      <!-- !Banner Ads  -->

      <!-- New Phones -->
      <section id="new-phones">
        <div class="container">
          <h4 class="font-rubik font-size-20">New Phones</h4>
          <hr>

                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                  <div class="item py-2 bg-light">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Samsung Galaxy 10</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2 bg-light">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/2.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Readme Note 7</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2 bg-light">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/3.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Readme Note 7</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2 bg-light">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/6.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Samsung Galaxy 10</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2 bg-light">
                    <div class="product font-rale">
                      <a href="#"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Readme Note 7</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$152</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2 bg-light">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="#"><img src="../assets/products/1.png" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Readme Note 7</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>$122</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2 bg-light">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="#"><img src="../assets/products/2.png" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Readme Note 7</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>$122</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- !owl carousel -->

        </div>
      </section>
      <!-- !New Phones -->

      <!-- Blogs -->
            <section id="blogs">
              <div class="container py-4">
                <h4 class="font-rubik font-size-20">Latest Blogs</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                      <img src="../assets/blog/blog1.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                      <img src="../assets/blog/blog2.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                      <img src="../assets/blog/blog3.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <!-- !Blogs -->

        </main>
    <!-- !start #main-site -->

    <!-- start #footer -->
    <footer id="footer" class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12">
            <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
            <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
          </div>
          <div class="col-lg-5 col-12">
            <h4 class="font-rubik font-size-20">Newslatter</h4>
            <form class="row">
              <div class="col pe-0">
                <input type="text" class="form-control" placeholder="Email *">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-size-20">Information</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-size-20">Account</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
      <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Daily Tuition</a></p>
    </div>
<!-- !start #footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Owl carousel JS file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    
    <!-- isotope plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="./index.js"></script>
</body>
</html>