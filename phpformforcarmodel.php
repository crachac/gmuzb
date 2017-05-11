<html>
<head>
       <?php include('head.php') ?>
    <title>Inserting data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<?php include('mainindex.php') ?>
<a></a>








<div class="container">
    <h1 align="center">Entering data to Car model</h1><br/>
    <div id="disp_data" class="table table-condensed"></div>
</div>
<button type="button" class="btn btn-default" ><a href="profileadmin.php">Prev. page</a></button>
</body>
</html>
<script>
    $(document).ready(function () {
        function fetch_data() {
            $.ajax({
                url: "select.php",
                method: "POST",
                success: function (data) {
                    $('#disp_data').html(data);
                }
            });
        }

        fetch_data();
        $(document).on('click', '#add', function () {
            var first_name = $('#first_name').text();
            var last_name = $('#last_name').text();
            if (first_name == '') {
                alert("Enter Model Code");
                return false;
            }
            if (last_name == '') {
                alert("Enter Model Name");
                return false;
            }
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: {first_name: first_name, last_name: last_name},
                dataType: "text",
                success: function (data) {
                    alert(data);
                    fetch_data();
                }
            })
        });
        function edit_data(id, text, column_name) {
            $.ajax({
                url: "edit.php",
                method: "POST",
                data: {id: id, text: text, column_name: column_name},
                dataType: "text",
                success: function (data) {
                    //alert(data);
                }
            });
        }

        $(document).on('blur', '.first_name', function () {
            var id = $(this).data("id1");
            var first_name = $(this).text();
            edit_data(id, first_name, "first_name");
        });
        $(document).on('blur', '.last_name', function () {
            var id = $(this).data("id2");
            var last_name = $(this).text();
            edit_data(id, last_name, "last_name");
        });
        $(document).on('click', '#delete', function () {
            var id = $(this).data("id3");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "delete.php",
                    method: "POST",
                    data: {id: id},
                    dataType: "text",
                    success: function (data) {
                        alert(data);
                        fetch_data();
                    }
                });
            }
        });
    });
</script>