<section id="about" class="about">
    <div class="container">

        <div class="section-title" data-aos="zoom-out">
            <h2>About</h2>
            <p>Who we are</p>
        </div>

        <div class="row content">
            <div class="col-lg-6 textabout" data-aos="fade-left">
                @foreach ($about as $about)    
                @if ($about->description_type == 'paragraph')    
                <p>
                    {{$about->about_description}}
                </p>
                @endif
                
                <ul>
                    @if ($about->description_type == 'list')   
                    <li><i class="ri-check-double-line"></i>{{$about->about_description}}</li>
                    @endif
                </ul>
                @endforeach
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 textabout" data-aos="fade-right">

                <img src="{{asset('themes/theme_front/assets/img/about-new.png')}}">
                <!-- <img src="assets/img/about2.jpg"> -->
            </div>
        </div>

    </div>
</section>