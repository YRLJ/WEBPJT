<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Nom - Creer un cours</title>
</head>

<body>
    <div class="container text-center">
    <form method="POST" action="">
        <div class="table-responsive">
            <table class="table table-bordered" id="dynamic_field">
                <tr>
                    <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                </tr>
            </table>
            <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
        </div>

    </form>
    <script>
        $(document).ready(function() {
                    var i = 1;
                    $('#add').click(function() {
                        i++;
                        $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
                    });
                    $(document).on('click', '.btn_remove', function() {
                        var button_id = $(this).attr("id");
                        $('#row' + button_id + '').remove();
                    });
                })
                
    </script>

</div>

</body>

</html>