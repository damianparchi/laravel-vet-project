<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" class="rel">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var slideIndex = 0;
            var slides = $(".mySlides");
            var circleBtns = $(".circle-btn");
            var slideshowTimeout;

            var buttonCaptions = [
                "Umów się na wizytę!",
                "Zobacz naszą ofertę!",
                "Skontaktuj się z nami!"
            ];

            showSlides();

            function showSlides() {
                for (var i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }

                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }

                slides[slideIndex - 1].style.display = "block";
                circleBtns.removeClass("active");
                circleBtns.eq(slideIndex - 1).addClass("active");

                updateButtonCaption();

                clearTimeout(slideshowTimeout);
                slideshowTimeout = setTimeout(showSlides, 10000);
            }

            circleBtns.on("click", function() {
                var index = $(this).index();
                slideIndex = index;
                showSlides();
            });

            function updateButtonCaption() {
                var mainControll = $(".main-controll");
                var caption = buttonCaptions[slideIndex - 1];
                mainControll.text(caption);
            }
        });

    </script>
</head>

<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="image1.jpg">
    </div>
    <div class="mySlides fade">
        <img src="image2.jpg">
    </div>
    <div class="mySlides fade">
        <img src="image3.jpg">
    </div>

    <a href="{{ url('/home')}}"><button class="main-controll">Umów się na wizytę!</button></a>

    <div class="controls">
        <button class="circle-btn active"></button>
        <button class="circle-btn"></button>
        <button class="circle-btn"></button>
    </div>
</div>

