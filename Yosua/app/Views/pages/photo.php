<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Johan Felix</title>
    <link rel="icon" href="../../../public/Images/icon.svg">
    <link rel="stylesheet" href="../../../public/CSS/photo.css">
    <link rel="stylesheet" href="../../../public/CSS/animation.css">
    <link rel="stylesheet" href="../../../public/CSS/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <span style="position: fixed; color: white; left:20px; top:30px; font-size:medium; z-index:3;" id="scroll">0</span>
    <header class="heroThumb">
        <div class="imageHeroContainer rellax" data-rellax-speed="-3">
            <img src="../../../public/Images/hero.jpg" alt="" class="imageHero">
        </div>
        <div class="heroTitle rellax" data-rellax-speed="5">
            <p class="heroName fadeTitleInDown">Johan Felix</p>
            <p class="heroSubName">Videographer based in Indonesia.</p>
            <p class="heroSubDiv slideInUp">See my work</p>
            <div class="arrowDown slideInUp">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.41 73.235">
                    <g id="Group_204" data-name="Group 204" transform="translate(-940.495 -917.72)">
                        <g id="Group_203" data-name="Group 203">
                            <path id="Path_1955" data-name="Path 1955" d="M976.2,971.35l-17.5,18.87-17.5-18.87,3.13-2.93,12.23,13.19V918.22h4.28v63.39l12.23-13.19Z" fill="#fff" stroke="#fff" stroke-width="1" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <section id="myWork">
        <div class="box">
            <nav class="nav">
                <a class="nav-title" href="#home">Johan Felix</a>
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
    </section>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.11.0/rellax.min.js" crossorigin="anonymous"></script>
    <script src="../../../public/JS/autoscroll.min.js"></script>
    <script>
        $(document).ready(function() {
            $("body").css("animation-name", "fadeIn");
        });


        //////////////Parallax///////////////
        var rellax = new Rellax('.rellax');
        /////////////////////////////////////



        $(".arrowDown").mouseenter(function() {
            $(".arrowDown").css("transform", "translate3d(0, 30%, 0)");
            $(".arrowDown").css("transition-duration", "0.5s");
            $("#Path_1955").attr("fill", "transparent");
        });
        $(".arrowDown").mouseleave(function() {
            $(".arrowDown").css("transform", "translate3d(0, 0%, 0)");
            $(".arrowDown").css("transition-duration", "0.5s");
            $("#Path_1955").attr("fill", "#fff");
        });

        $(".heroSubDiv").mouseenter(function() {
            $(".arrowDown").css("transform", "translate3d(0, 30%, 0)");
            $(".arrowDown").css("transition-duration", "0.5s");
            $("#Path_1955").attr("fill", "transparent");
        });

        $(".heroSubDiv").mouseleave(function() {
            $(".arrowDown").css("transform", "translate3d(0, 0%, 0)");
            $(".arrowDown").css("transition-duration", "0.5s");
            $("#Path_1955").attr("fill", "#fff");
        });

        $(".arrowDown").click(function() {});

        //////////Dropdown Collapse//////////
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
        /////////////////////////////////////
    </script>
</body>

</html>