<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Marvel&family=Oxanium:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Oxanium:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/CSS/portfolio.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand titleNav" href="#">Johan Felix</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>/Pages">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Portfolio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>/Pages">Shop</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="grid-container">
        <div class="grid-item">
            <img class='imgPortfolio' id='myImg' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
        <div class="grid-item">
            <img class='imgPortfolio' id='myImg' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
        <div class="grid-item">
            <img class='imgPortfolio' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
        <div class="grid-item">
            <img class='imgPortfolio' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
        <div class="grid-item">
            <img class='imgPortfolio' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
        <div class="grid-item">
            <img class='imgPortfolio' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
        <div class="grid-item">
            <img class='imgPortfolio' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
        <div class="grid-item">
            <img class='imgPortfolio' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
        <div class="grid-item">
            <img class='imgPortfolio' src="<?= base_url(); ?>/Img/img1.jpg" alt="...">
        </div>
    </div>

    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");

        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>