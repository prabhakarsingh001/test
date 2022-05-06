<!-- journey api testing code in html page -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>read_json_files</title>
    <!-- adding CDN Jquery url instead of downloading a compresed file -->
    <!-- jquer format to be added before script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

    <div class="row" id="load-data">

    </div>


    <!-- jquery begins -->
    <script>
        $(document).ready(function() {

            $.ajax({

                url: "https://journeyonapi.herokuapp.com/api/category/getcategory",
                type: "GET",
                success: function(data) {
                    // console.log(data);
                    $.each(data.categories, function(key, value) {

                        // correct one 
                        $("#load-data").append('<div class="card"  style="width: 18rem;"><img src=' + value.categoryImage + ' class="card-img-top" alt="internet too slow"><h4>' + value.name + '</h4> <h5>'+value.slug+'</h5></div>');




                    });
                }
            });
        });
    </script>




</body>

</html>