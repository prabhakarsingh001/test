<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>cardtest</title>
</head>

<body>
    <h1>card test!</h1>



    <div class="container">

        <div class="row" id="load-data">
            <script>
                $(document).ready(function() {

                    $.ajax({

                        url: "https://newsapi.org/v2/everything?q=apple&from=2022-05-30&to=2022-05-30&sortBy=popularity&apiKey=a93cfa0af9cd4be385e4766e280af223 ",
                        type: "GET",
                        dataType:"json",
                        success: function(data) {
                            console.log(data);
                            $.each(data.articles, function(key, value) {

                                //     // correct one 
                                //     $("#load-data").append('<div class="card"  style="width: 18rem;"><img src=' + value.categoryImage + ' class="card-img-top" alt="internet too slow"><h4>' + value.name + '</h4> <h5>' + value.slug + '</h5></div>');

                                $('#load-data').append('<div class="col-sm-4><div class="card"> <img src=' + value.articles.urlToImage + 'class="card-img-top" alt="slow"></div>');


                            });
                        }
                    });
                });
            </script>

            <!-- <div class="col-sm-4">
                <div class="card">
                    <img src="../img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
            
           
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>