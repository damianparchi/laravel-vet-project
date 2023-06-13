<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Przesuwana lista certyfikatów</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" class="rel">
</head>
<body>

<h1 class="section-title" id="certificates-section">Nasze Szkolenia!</h1>
<div class="hr-container">
    <hr size="10" class="section-divider">
</div>
<div id="arrow-container">
    <button class="arrow-btn" id="prev-btn"><i class="fas fa-chevron-left"></i></button>
    <button class="arrow-btn" id="next-btn"><i class="fas fa-chevron-right"></i></button>
</div>

<div id="certificates-container">
    <div class="certificate" data-toggle="modal" data-target="#certificateModal" data-certificate="Certyfikat 1">Certyfikat 1</div>
    <div class="certificate" data-toggle="modal" data-target="#certificateModal" data-certificate="Certyfikat 2">Certyfikat 2</div>
    <div class="certificate" data-toggle="modal" data-target="#certificateModal" data-certificate="Certyfikat 3">Certyfikat 3</div>
    <div class="certificate" data-toggle="modal" data-target="#certificateModal" data-certificate="Certyfikat 4">Certyfikat 4</div>
    <div class="certificate" data-toggle="modal" data-target="#certificateModal" data-certificate="Certyfikat 5">Certyfikat 5</div>
    <div class="certificate" data-toggle="modal" data-target="#certificateModal" data-certificate="Certyfikat 6">Certyfikat 6</div>
    <div class="certificate" data-toggle="modal" data-target="#certificateModal" data-certificate="Certyfikat 7">Certyfikat 7</div>
</div>

<!-- Modal -->
<div class="modal fade" id="certificateModal" tabindex="-1" role="dialog" aria-labelledby="certificateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="certificateModalLabel">Przybliżenie certyfikatu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="certificateZoomed"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        var containerWidth = $("#certificates-container").width();
        var scrollAmount = 0;

        $("#next-btn").click(function() {
            var containerScrollWidth = $("#certificates-container")[0].scrollWidth;
            if (scrollAmount < containerScrollWidth - containerWidth) {
                scrollAmount += 200;
                $("#certificates-container").animate({ scrollLeft: scrollAmount }, 500);
            }
        });

        $("#prev-btn").click(function() {
            if (scrollAmount > 0) {
                scrollAmount -= 200;
                $("#certificates-container").animate({ scrollLeft: scrollAmount }, 500);
            }
        });

        $(".certificate").click(function() {
            var certificateText = $(this).data("certificate");
            $("#certificateZoomed").text(certificateText);
        });
    });
</script>
</body>
</html>
