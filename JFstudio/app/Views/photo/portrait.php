<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Johan Felix | Potrait</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/CSS/photo.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="box">
        <nav class="nav">
            <a class="nav-title" href="<?= base_url(); ?>/Home">Johan Felix</a>
            <li class="nav-item dropdown">
                <a class="nav-link cool-link photo active" href="#" id="dropdown01" data-toggle="collapse" data-target="#dd" aria-haspopup="true" aria-expanded="false">photo</a>
                <div class="dropdown-menu p-0 collapse" aria-labelledby="dropdown01" id="dd">
                    <a class="dropdown-item active" href="#">potrait</a>
                    <a class="dropdown-item" href="#">landscape</a>
                    <a class="dropdown-item" href="#">product</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link cool-link video" href="#" id="dropdown01" data-toggle="collapse" data-target="#ee" aria-haspopup="true" aria-expanded="false">video</a>
                <div class="dropdown-menu p-0 collapse" aria-labelledby="dropdown01" id="ee">
                    <a class="dropdown-item" href="#">music video</a>
                    <a class="dropdown-item" href="#">short movie</a>
                    <a class="dropdown-item" href="#">product</a>
                    <a class="dropdown-item" href="#">engagement</a>
                    <a class="dropdown-item" href="#">prewedding <p class="comingsoon">comingsoon</p> </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link cool-link" href="#">gear</a>
            </li>
            <li class="nav-item">
                <a class="nav-link cool-link" href="#">achievement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link cool-link" href="#">contact</a>
            </li>
        </nav>
        <p class="pageIndicator">photo/potrait</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        $(".photo").click(function() {
            if ($("#ee").css("display") == "block") {
                $(".video").trigger("click");
            }
        });

        $(".video").click(function() {
            if ($("#dd").css("display") == "block") {
                $(".photo").trigger("click");
            }
        });

        $(window).click(function(e) {
            if (e.target.id != "dropdown01") {
                if ($("#ee").css("display") == "block") {
                    $(".video").trigger("click");
                }
                if ($("#dd").css("display") == "block") {
                    $(".photo").trigger("click");
                }
            }
        });
    </script>
</body>

</html>