<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Johan Felix - Travel</title>
    <link rel="icon" href="<?= base_url(); ?>/Images/icon.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/CSS/photo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/CSS/animation.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/CSS/home.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/CSS/loading.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
</head>

<body>
    <div id="loading">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="31.5" viewBox="0 0 36 31.5">
            <path id="Icon_awesome-camera-retro" data-name="Icon awesome-camera-retro" d="M3.375,2.25A3.376,3.376,0,0,0,0,5.625v24.75A3.376,3.376,0,0,0,3.375,33.75h29.25A3.376,3.376,0,0,0,36,30.375V5.625A3.376,3.376,0,0,0,32.625,2.25Zm0,2.25h7.453a.423.423,0,0,1,.422.422V6.328a.423.423,0,0,1-.422.422H2.672a.423.423,0,0,1-.422-.422v-.7A1.128,1.128,0,0,1,3.375,4.5Zm29.953,6.75H2.672a.423.423,0,0,1-.422-.422V8.3a.423.423,0,0,1,.422-.422h9.7L14.5,4.69a.419.419,0,0,1,.352-.19H32.625A1.128,1.128,0,0,1,33.75,5.625v5.2A.423.423,0,0,1,33.328,11.25ZM18,29.813a8.438,8.438,0,1,1,8.438-8.437A8.444,8.444,0,0,1,18,29.813Zm0-14.625a6.188,6.188,0,1,0,6.188,6.188A6.2,6.2,0,0,0,18,15.188ZM14.625,22.5A1.128,1.128,0,0,1,13.5,21.375a4.5,4.5,0,0,1,4.5-4.5,1.125,1.125,0,0,1,0,2.25,2.257,2.257,0,0,0-2.25,2.25A1.128,1.128,0,0,1,14.625,22.5Z" transform="translate(0 -2.25)" fill="#fff" />
        </svg>
    </div>
    <section id="myWork">
        <div class="box">
            <nav class="nav">
                <a class="nav-title" href="<?= base_url(); ?>/Home">Johan Felix</a>
                <li class=" nav-item dropdown">
                    <a class="nav-link cool-link photo active" href="#" id="dropdown01" data-toggle="collapse" data-target="#dd" aria-haspopup="true" aria-expanded="false">photo</a>
                    <div class="dropdown-menu p-0 collapse" aria-labelledby="dropdown01" id="dd">
                        <a id="btnPortrait" class="dropdown-item" href="<?= base_url(); ?>/Photo">portrait</a>
                        <a id="btnLandscape" class="dropdown-item active" href="<?= base_url(); ?>/Photo/Travel">travel</a>
                        <a id="btnProduct" class="dropdown-item" href="<?= base_url(); ?>/Photo/Product">product</a>
                    </div>
                </li>
                <li class=" nav-item dropdown">
                    <a class="nav-link cool-link video" href="#" id="dropdown01" data-toggle="collapse" data-target="#ee" aria-haspopup="true" aria-expanded="false">video</a>
                    <div class="dropdown-menu p-0 collapse" aria-labelledby="dropdown01" id="ee">
                        <a class="dropdown-item" href="<?= base_url(); ?>/Video">music video</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/Video/ShortMovie">short movie</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/Video/Product">product</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/Video/Engagement">engagement</a>
                        <a class="dropdown-item" href="#">prewedding <p class="comingsoon">comingsoon</p> </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link cool-link" href="<?= base_url(); ?>/Gear">gear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cool-link" href="<?= base_url(); ?>/Achievement">achievement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cool-link" href="<?= base_url(); ?>/Contact">contact</a>
                </li>
            </nav>
            <p class="pageIndicator">photo / travel</p>
            <div id="displayArea" class="grid">
                <div class="grid-col grid-col--1"></div>
                <div class="grid-col grid-col--2"></div>
                <div class="grid-col grid-col--3"></div>
                <div class="grid-col grid-col--4"></div>
                <!-- items -->
                <?php
                $ctr = 1;
                foreach ($photo as $photos) : ?>
                    <div class="grid-item">
                        <img id="gambar<?= $ctr ?>" class="img-item" src="<?= $photos['link_photo'] ?>" alt="picture">
                    </div>
                <?php
                    $ctr++;
                endforeach; ?>
            </div>
            <div id="footer-socialMedia">
                <div id="insta" class="iconSosmed" title="https://instagram.com/johan.felix?igshid=foieomt0hd9h">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35.272" height="35.255" viewBox="0 0 75.272 75.255">
                        <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M37.639,20.571A19.295,19.295,0,1,0,56.934,39.865,19.264,19.264,0,0,0,37.639,20.571Zm0,31.838A12.544,12.544,0,1,1,50.183,39.865,12.567,12.567,0,0,1,37.639,52.409ZM62.223,19.782a4.5,4.5,0,1,1-4.5-4.5A4.49,4.49,0,0,1,62.223,19.782ZM75,24.349c-.285-6.028-1.662-11.368-6.079-15.768-4.4-4.4-9.74-5.777-15.768-6.079-6.213-.353-24.836-.353-31.049,0-6.012.285-11.352,1.662-15.768,6.062S.561,18.3.259,24.332c-.353,6.213-.353,24.836,0,31.049C.545,61.41,1.922,66.75,6.338,71.15s9.74,5.777,15.768,6.079c6.213.353,24.836.353,31.049,0,6.028-.285,11.368-1.662,15.768-6.079,4.4-4.4,5.777-9.74,6.079-15.768.353-6.213.353-24.819,0-31.032Zm-8.027,37.7A12.7,12.7,0,0,1,59.822,69.2c-4.954,1.965-16.708,1.511-22.183,1.511S20.393,71.15,15.456,69.2A12.7,12.7,0,0,1,8.3,62.048C6.338,57.094,6.791,45.34,6.791,39.865S6.355,22.62,8.3,17.683a12.7,12.7,0,0,1,7.154-7.154C20.41,8.564,32.165,9.018,37.639,9.018s17.246-.437,22.183,1.511a12.7,12.7,0,0,1,7.154,7.154c1.965,4.954,1.511,16.708,1.511,22.183S68.94,57.111,66.976,62.048Z" transform="translate(0.005 -2.238)" fill="#969696" />
                    </svg>
                </div>
                <div id="behance" class="iconSosmed" title="https://www.behance.net/johanfelix">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60.375" height="20.876" viewBox="0 0 105.375 65.876">
                        <path id="Icon_simple-behance" data-name="Icon simple-behance" d="M30.474,6.754a39.168,39.168,0,0,1,8.433.826A18.969,18.969,0,0,1,45.43,10.26a12.347,12.347,0,0,1,4.217,4.919,17.553,17.553,0,0,1,1.493,7.6,14.294,14.294,0,0,1-2.227,8.17,16.09,16.09,0,0,1-6.6,5.359A15.479,15.479,0,0,1,51.2,42.324a18.027,18.027,0,0,1,2.921,10.366,18.158,18.158,0,0,1-1.8,8.477,16.254,16.254,0,0,1-5.1,5.93,22.355,22.355,0,0,1-7.335,3.369A32.132,32.132,0,0,1,31.5,71.581H0V6.785H30.474ZM74.406,60.174C76.339,62.054,79.119,63,82.725,63a11.471,11.471,0,0,0,6.72-1.963,8.086,8.086,0,0,0,3.426-4.129h11.367c-1.77,5.622-4.6,9.663-8.345,12.079a24.1,24.1,0,0,1-13.528,3.646,26.921,26.921,0,0,1-9.979-1.757,21.731,21.731,0,0,1-7.555-5.007A22.4,22.4,0,0,1,60.1,58.092a28.819,28.819,0,0,1-1.638-9.971,26.713,26.713,0,0,1,1.77-9.795A22.8,22.8,0,0,1,72.776,25.22a23.536,23.536,0,0,1,9.751-1.9,22.141,22.141,0,0,1,10.454,2.3,21.084,21.084,0,0,1,7.291,6.149,24.46,24.46,0,0,1,4.129,8.872,35.441,35.441,0,0,1,.922,10.454H71.547c0,3.69,1.23,7.168,3.119,9.07l-.351.132Zm-44.977.22a18.493,18.493,0,0,0,3.979-.408,10.185,10.185,0,0,0,3.351-1.318,6.509,6.509,0,0,0,2.284-2.561,9,9,0,0,0,.835-4.217c0-3.294-.966-5.666-2.811-7.116a12.1,12.1,0,0,0-7.423-2.108H14.231V60.455h15.2v-.132ZM89.195,35.577c-1.546-1.691-4.129-2.6-7.278-2.6A10.892,10.892,0,0,0,76.8,34.022a9.464,9.464,0,0,0-3.25,2.591,9.144,9.144,0,0,0-1.722,3.294,15.4,15.4,0,0,0-.593,3.119H92.147A12.547,12.547,0,0,0,89.16,35.6v.044Zm-60.557-2.7a10.229,10.229,0,0,0,6.259-1.81C36.54,29.88,37.33,27.9,37.33,25.189a8.276,8.276,0,0,0-.791-3.716,6.42,6.42,0,0,0-2.2-2.249A9.3,9.3,0,0,0,31.181,18.1a19.44,19.44,0,0,0-3.69-.325h-13.3V32.88H28.638ZM68.6,11.1H94.813v6.386H68.6v-6.4Z" transform="translate(0 -6.755)" fill="#969696" />
                    </svg>
                </div>
                <div id="email" class="iconSosmed" title="johanfelix02@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45.724" height="21.628" viewBox="0 0 79.724 55.628">
                        <path id="Icon_material-email" data-name="Icon material-email" d="M74.752,6H10.972C6.588,6,3.04,9.129,3.04,12.953L3,54.674c0,3.824,3.588,6.953,7.972,6.953H74.752c4.385,0,7.972-3.129,7.972-6.953V12.953C82.724,9.129,79.136,6,74.752,6Zm0,13.907L42.862,37.291,10.972,19.907V12.953l31.89,17.384,31.89-17.384Z" transform="translate(-3 -6)" fill="#969696" />
                    </svg>
                </div>
            </div>
            <div id="backTop" title="Back to Top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                    <g id="Group_201" data-name="Group 201" transform="translate(1682 254)">
                        <rect id="Rectangle_363" data-name="Rectangle 363" width="200" height="200" transform="translate(-1682 -254)" />
                        <path id="Icon_ionic-ios-arrow-round-up" data-name="Icon ionic-ios-arrow-round-up" d="M83.286,47.777a5,5,0,0,1-7.038.038L52.954,24.6v88.472a4.973,4.973,0,0,1-9.945,0V24.6L19.715,47.853a5.034,5.034,0,0,1-7.038-.038,4.952,4.952,0,0,1,.038-7L44.463,9.3h0a5.584,5.584,0,0,1,1.568-1.033,4.746,4.746,0,0,1,1.912-.382A4.986,4.986,0,0,1,51.424,9.3L83.172,40.815A4.873,4.873,0,0,1,83.286,47.777Z" transform="translate(-1630.247 -216.882)" fill="#f9f9f9" />
                    </g>
                </svg>
            </div>
            <div class="previewContainer">
                <div class="previewArea">
                    <div class="headerPreview">
                        <h3 class="previewTitle">Johan Felix</h3>
                    </div>
                    <div class="mainPreview">
                        <div class="prevArea">
                            <div class="arrowIcon" id="prev" style="margin-right: 0.5em">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.243" height="8.501" viewBox="0 0 20.243 13.501">
                                    <path id="Icon_ionic-ios-arrow-round-back" data-name="Icon ionic-ios-arrow-round-back" d="M15.216,11.51a.919.919,0,0,1,.007,1.294l-4.268,4.282H27.218a.914.914,0,0,1,0,1.828H10.955L15.23,23.2a.925.925,0,0,1-.007,1.294.91.91,0,0,1-1.287-.007L8.142,18.647h0a1.026,1.026,0,0,1-.19-.288.872.872,0,0,1-.07-.352.916.916,0,0,1,.26-.64l5.794-5.836A.9.9,0,0,1,15.216,11.51Z" transform="translate(-7.882 -11.252)" />
                                </svg>
                            </div>
                            <p class="prevText">prev</p>
                        </div>
                        <div class="previewImgContainer">
                        </div>
                        <div class="nextArea">
                            <p class="nextText">next</p>
                            <div class="arrowIcon" id="next" style="margin-left: 0.5em">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.243" height="8.501" viewBox="0 0 20.243 13.501">
                                    <path id="Icon_ionic-ios-arrow-round-back" data-name="Icon ionic-ios-arrow-round-back" d="M20.792,11.51a.919.919,0,0,0-.007,1.294l4.268,4.282H8.789a.914.914,0,0,0,0,1.828H25.053L20.777,23.2a.925.925,0,0,0,.007,1.294.91.91,0,0,0,1.287-.007l5.794-5.836h0a1.027,1.027,0,0,0,.19-.288.872.872,0,0,0,.07-.352.916.916,0,0,0-.26-.64l-5.794-5.836A.9.9,0,0,0,20.792,11.51Z" transform="translate(-7.882 -11.252)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="footerPreview">
                        <p class="footerPreviewText">photo / travel</p>
                    </div>
                </div>
                <div class="closePreview">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.422" viewBox="0 0 13.426 13.422">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.11.0/rellax.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/colcade@0/colcade.js"></script>
    <script>
        var ada = false;
        var imgCtr = 1;
        $("body").css("overflow", "hidden");
        $(document).ready(function() {
            $("body").css("animation-name", "fadeIn");
            $('#loading').hide();
            $(".previewContainer").css("display", "none");
        });
        /////////Munculin Box kanan bawah//////////////
        var scroll = setInterval(function() {
            var scrollPos = $("#myWork").scrollTop();
            // $(".scrollPos").text(scrollPos);
            if (scrollPos > 400 && !ada) {
                appearBut(true);
                ada = true;
            } else if (scrollPos <= 400 && ada) {
                appearBut(false);
                ada = false;
            }
        }, 1);

        function appearBut(state) {
            if (state) {
                $("#backTop").animate({
                    bottom: "+=120px"
                }, 1000);
            } else {
                $("#backTop").animate({
                    bottom: "-=120px"
                }, 1000);
            }
        }
        //////////////////////////////////////////////////
        //////////////////Sosmed//////////////////////////
        $("#insta").click(function() {
            openInNewTab("https://instagram.com/johan.felix?igshid=foieomt0hd9h");
        });
        $("#behance").click(function() {
            openInNewTab("https://www.behance.net/johanfelix");
        });

        function openInNewTab(url) {
            var win = window.open(url, '_blank');
            win.focus();
        }
        //////////////////////////////////////////////////
        $("#backTop").click(function() {
            $("#myWork").animate({
                scrollTop: 0
            }, 3000);
        });



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
        ///////////Masonry Layout////////////
        var colc = new Colcade('.grid', {
            columns: '.grid-col',
            items: '.grid-item'
        });
        /////////////////////////////////////
        ////////////Image Preview////////////
        var preview = false;
        $(".img-item").click(function() {
            if (!preview) {
                $(".previewContainer").css("display", "block");
                $(".previewContainer").addClass("fadeIn");
                ctr = $(this).attr("id").replace('gambar', '');
                console.log(ctr);
                imgCtr = parseInt(ctr);
                var img = $("#gambar" + imgCtr).attr("src");
                $(".previewImgContainer").append('<img class="previewImg" src="' + img + '" alt="picture">');
                var fadePreview = setTimeout('$(".previewContainer").removeClass("fadeIn");', 1000);
                preview = true;
            }
        });
        $(".prevArea").click(function() {
            previewImg("prev");
        });

        $(".nextArea").click(function() {
            previewImg("next");
        });

        $(".closePreview").click(function() {
            $(".previewContainer").addClass("fadeOut");
            var fadePreview = setTimeout(function() {
                $(".previewContainer").css("display", "none");
                $(".previewImgContainer").empty();
                $(".previewContainer").removeClass("fadeOut");
            }, 1000);
            preview = false;
        });

        function previewImg(direction) {
            if (direction == "prev") {
                imgCtr--;
                if (imgCtr == 0) imgCtr = $('#displayArea .grid-item').length
            } else {
                if (imgCtr == $('#displayArea .grid-item').length) imgCtr = 1;
                else imgCtr++;
            }
            var img = $("#gambar" + imgCtr).attr("src");
            $(".previewImg").addClass("fadeOut");
            var fade = setTimeout(() => {
                $(".previewImg").attr("style", "display:none");
                $(".previewImgContainer").children(".previewImg").remove();
                $(".previewImgContainer").append('<img class="previewImg fadeIn" src="' + img + '" alt="picture">');
            }, 500);
        }

        $(".previewTitle").click(function() {
            document.location.href = "<?= base_url(); ?>/Home";
        });

        /////////////////////////////////////
        // $("#btnLandscape").click(function() {
        //     $.ajax({
        //         url: "<?= base_url(); ?>/Home/refreshPhoto/landscape",
        //         method: "post",
        //         data: [

        //         ],
        //         success: function(result) {
        //             $("#displayArea").html(result);
        //             $(".pageIndicator").html("photo / landscape");
        //         }
        //     });
        // });
    </script>
</body>

</html>