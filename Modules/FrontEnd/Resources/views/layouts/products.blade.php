<section id="cta" class="cta" style="background-image: url('assets/img/2m-6.jpg');">
    <div class="overlay"></div>
    <div class="container">

        <div class="row" data-aos="zoom-out">
            <div class="col-lg-12 text-center text-lg-center">
                <h3><i class="bi bi-chat-right-quote"></i> Every process will be checked by QC system <i class="bi bi-chat-left-quote"></i>
                </h3>
            </div>
        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= products Section ======= -->
<section id="products" class="products">
    <div class="container">

        <div class="section-title" data-aos="zoom-out">
            <h2>Products</h2>
            <p>What we do offer</p>
        </div>

        <div class="row">

            @foreach ($products as $product)
                
            
            <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="zoom-in-left">
                    <div class="icon"><img src="{{asset('themes/theme_front/assets/img')}}/{{$product->photo}}"></div>
                    <h4 class="title"><a href="#products">{{$product->name}}</a></h4>
                    <p class="description">{{$product->description}}</p>
                </div>
            </div>
            @endforeach
            

        </div>

    </div>
</section><!-- End products Section -->