<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
<body>
<div><?php include('mainindex.php') ?></div>
<a></a>



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT US</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Uzbekistan, Tashkent</p>
            <p><span class="glyphicon glyphicon-phone"></span> +998676777777, +998976777777</p>
            <p><span class="glyphicon glyphicon-envelope"></span> gmuz@gamil.com</p>
        </div>
        <div class="col-sm-7 slideanim">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('footer.php') ?>
</body>
</html>
