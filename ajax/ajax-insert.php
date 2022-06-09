<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax-insert</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <table id="main" cellspacing="0">
        <tr>
            <td id="header"></td>
            <h2>ajax</h2>
        </tr>
        <tr>
            <td id="table-form">
                FIRST NAME:<input type="text" id="fname">
                LAST NAME :<input type="text" id="lname">
                <input type="submit" id="submit_button" value="submit">
            </td>
        </tr>
        <tr>
            <td id="table-data">
            </td>
        </tr>

        <script>
            $(document).ready(function() {
                function loadTable() {
                    $.ajax({
                        url: "ajax-insert.php",
                        type = "POST",
                        success: function(data) {
                            $("#table-data").html(data);
                        }
                    });
                    loadTable();
                    $("#submit_button").on("click", function(e) {
                        e.preventDEFAULT();
                        var fname = $("$fname").val();
                        var lname = $("$lname").val();
                       
                    });
                }
            });
        </script>
</body>

</html>