<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Johan Felix</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/CSS/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/CSS/animation.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <header class="heroThumb">
        <img src="<?= base_url(); ?>/Images/hero.jpg" alt="" class="imageHero">
        <div class="heroTitle">
            <p class="heroName fadeTitleInDown">Johan Felix</p>
            <p class="heroSubName">Videographer based in Indonesia.</p>
            <p class="heroSubDiv slideInUp">See my work</p>
            <img src="<?= base_url(); ?>/Images/arrowDown.svg" alt="" class="arrowDown slideInUp">
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("body").css("animation-name", "fadeIn");
        });
    </script>
</body>

</html>