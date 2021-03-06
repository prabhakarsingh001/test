<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skeleton Loading Effect - Using HTML, CSS & Javascript</title>
    <link rel="stylesheet" href="s1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="container">


        <div class="card">
            <?php
            for($i=1;$i<=20;$i++){
                ?>
           
                <div class="col-4">
                    <div class="card-deck">
                        <div class="card-image loading "><img src="" alt=""></div>
                        <div class="card-info">
                            <h3 class="card-title loading"><span></span></h3>
                            <p class="card-description loading"><span></span></p>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>


    </div>

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
            cardImages.forEach((cardImage) => {
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

        // Execute renderCard after the page loaded
        // window.addEventListener("load", () => {
        // renderCard();
        // });
    </script>
</body>

</html>