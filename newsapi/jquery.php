<!-- journey api testing code in html page -->
<!-- done -->

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="jquery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>JQUERYshimmer</title>
    <!-- adding CDN Jquery url instead of downloading a compresed file -->
    <!-- jquer format to be added before script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

    </script>


    <div class="container" >
        <div class="card" id="load-data">
</div>
</div>


    <script>
        $(document).ready(function() {
            $.ajax({

                url: "https://newsapi.org/v2/everything?q=apple&from=2022-05-30&to=2022-05-30&sortBy=popularity&apiKey=a93cfa0af9cd4be385e4766e280af223 ",
                type: "GET",
                success: function(data) {
                    console.log(data);
                    $.each(data.articles, function(key, value) {
                        // console.log(value.urlToImage);





                        $("#load-data").append(`<div class="col-12">
                                                    <div class="card-deck">
                                                    <div class="card-image loading "><img src="" alt=""></div>
                                                    <div class="card-info">
                                                    <h3 class="card-title loading"><span>${value.author}</span> </h3>
                                                     <p class="card-description loading"><span>${value.description}</span></p>

                                                    </div>
                                                       </div>
                                                      </div>`);
                        //   

                    });
                }


            });

        });
    </script>
    <!-- </div>
    </div> -->


</body>





<!-- 

                            // $("#load-data").append('<div class="card col-4"  style="width: 40rem;"><img src=' + value.urlToImage + ' class="card-img-top" alt="internet too slow">' + '<h4>' + value.author + '</h4> <h5>' + value.description + '</h5> ' + value.detail + '<br><a href=' + value.url + ' class="btn btn-primary">Read More</a></button></div></div>');


                            // $("#load-data").append('<div class= "col-4 "><div class = "card-deck">
                            //     <div class="card-image loading"><img src='+value.urlToImage+'alt=""></div><div class="card-info"><h3 class="card-title loading"><span>'+value.name+'</span><h3><p class="card-description loading"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. < /span > < /p ><div><div></div>'); -->



                            
    <script type="text/javascript">
        const cardImages = document.querySelectorAll(".card-image");
        const cardTitles = document.querySelectorAll(".card-title");
        const cardDescriptions = document.querySelectorAll(".card-description");
        // const cardMediaIcons = document.querySelectorAll(".card-mediaIcons a");
        const cardImgs = document.querySelectorAll(".card-image img");
        const cardTitleSpans = document.querySelectorAll(".card-title span");
        const cardDescSpans = document.querySelectorAll(".card-description span");
        // const mediaIcons = document.querySelectorAll(".card-mediaIcons a i");

        const renderCard = () => {
            //Remove the skeleton loading effect
            cardImages.forEach(() => {
                cardImage.classList.remove("loading");
            });
            cardTitles.forEach((cardTitle) => {
                cardTitle.classList.remove("loading");
            });
            cardDescriptions.forEach((cardDescription) => {
                cardDescription.classList.remove("loading");
            });
            // cardMediaIcons.forEach((cardMediaIcon) => {
            //     cardMediaIcon.classList.remove("loading");
            // });

            //Show the hidden html elements
            cardImgs.forEach((cardImg) => {
                cardImg.style.visibility = "visible";
            });
            cardTitleSpans.forEach((cardTitleSpan) => {
                cardTitleSpan.style.visibility = "visible";
            });
            cardDescSpans.forEach((cardDescSpan) => {
                cardDescSpan.style.visibility = "visible";
            });
            // mediaIcons.forEach((mediaIcon) => {
            //     mediaIcon.style.visibility = "visible";
            // });
        }

        //Execute renderCard on setTimeout
        setTimeout(() => {
            renderCard();
        }, 4000);

        //  Execute renderCard after the page loaded
         window.addEventListener("load", () => {
        renderCard();
        });
    </script>
</html>