<!DOCTYPE html>

<!-- 

 author Vortex Data Solutions 2013
 version 1.0.0
 
 description:

-->     

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <title>Process Sale</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                <img src="img/tt-logo-long.png" alt="ttlogo" />
            </div>
            <section class="content">
                <div class="page-header">
                    <h3>Process Sale</h3>
                </div>
                <h4>Please select one or more</h4>
                <div class="form-signin">
                    <div class="radio-inline">
                        <input type="radio" name="product" value="tire">Tire<br>
                        <input type="radio" name="product" value="rim">Rim<br>
                        <input type="radio" name="product" value="other">Other Product and Services<br>
                    </div>
                </div>
                <div class="button">
                    <?php echo anchor('otherController/other', 'View Summary', 'class="btn btn-inverse btn-small"') ?>
                    <?php echo anchor('tireController/tire', 'Next', 'class="btn btn-inverse btn-small"') ?>
                </div>
            </section><!-- end main-content -->
        </div> <!-- end content-container -->
        <?php include '/footer.php'; ?>