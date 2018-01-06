<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 29-Dec-17
 * Time: 9:17 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Graph Generator using Canvas JS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Generate Graph</h2>
    <form action="graph_generator.php" id="new_form" method="post">
        <div class="form-group">
            <input type="name" class="form-control" placeholder="Title" name="title">
        </div>
        <div class="form-group">
            <input type="name" class="form-control" placeholder="Define Unit" name="unit">
        </div>
        <div class="form-group">
            <input type="name" class="form-control" placeholder="Y-axis" name="yaxis">
        </div>
        <div class="form-inline">
            <div class="form-group">
                <input type="name" class="form-control" placeholder="Label 1" name="label[]">
            </div>
            <div class="form-group">
                <input type="name" class="form-control" placeholder="Value 1" name="value[]">
            </div>
        </div>
        <div class="form-inline">
            <div class="form-group">
                <input type="name" class="form-control" placeholder="Label 2" name="label[]">
            </div>
            <div class="form-group">
                <input type="name" class="form-control" placeholder="Value 2" name="value[]">
            </div>
        </div>
        <div class="input_fields_wrap">
            <button class="add_field_button">Add More Fields</button>
        </div>
    </form>
    <br>
    <button type="submit" class="btn btn-primary" form="new_form">Submit</button>
</div>
</body>
<script>
    $(document).ready(function() {
        var max_fields      = 8; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        var x = 2; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div> <div class="form-inline"><div class="form-group"><input type="name" class="form-control" placeholder="Label '+x+'" name="label[]"> </div> <div class="form-group"> <input type="name" class="form-control" placeholder="Value '+x+'" name="value[]"> </div><a href="#" class="remove_field">Remove</a> </div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>
</html>
