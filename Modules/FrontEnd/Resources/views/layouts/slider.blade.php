<section id="home-section" style="background-image: url(assets/img/factory.jpg);">
    <div class="overlay"></div>

    <div class="main-slider" id="home">
        <div class="cd-slider" data-swipe-threshold="50" data-swipe-timeout="5000" data-swipe-ignore="false">
            <ul>
                @foreach($slider as $slider)
                <li>
                    <div class="content">
                        <h2>{{$slider->description}}</h2>
                    </div>
                    <div class="image" style="background-image:url({{asset('themes/theme_front/assets/img')}}/{{$slider->photo}});"></div>
                    <!-- <div class="overlay2"></div> -->
                    <div class="overlay3"></div>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</section>