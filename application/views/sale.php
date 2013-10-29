<?php
/**
 * -----------------------AUTHOR CODE BEGINS HERE ----------------------
 * @PRIMARY AUTHOR
 * @LEAD SOFTWARE DEVELOPER: SIMON HADDAD
 * @STUDENT ID: 0452837
 * @DATE CREATED: 22/10/2013
 * @CREATED: Markup and Interface design for sale.php page
 * 
 * @SECONDARY AUTHOR: SHAUN WATSON
 * @STUDENT ID: 1240153
 * @DATE UPDATED: 29/10/2013
 * @CREATED: Javascript (js/processSale.js) and adjusted code to interact 
 * with the controllers
 * 
 * @COPYRIGHT: VORTEX DATA SOLUTIONS 2013
 * @VERSION: 0.0.0.1
 * @DESC: The sale.php page displays to the user the interface of 
 * "Process Sale". The functionality allows the user to select a product
 * type via radio buttons & depending on choice the page will re-direct
 * to the specific controller. (As seen in the javascript file)
 * ---------------------------------------------------------------------
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <title>Process Sale</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/processSale.js"></script>
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
                        <input type="radio" name="product" value="tire" >Tire<br>
                        <input type="radio" name="product" value="rim">Rim<br>
                        <input type="radio" name="product" value="other">Other Product and Services<br> 
                    </div>
                </div>
                <div class="button">
                    <?php
                    echo anchor('summaryController/summary', 'View Summary', 'class="btn btn-inverse btn-small"');
                    ?>
                    <input class="btn btn-inverse btn-small" type="button" value="Next" onclick="productSelection()"><p></p>
                    <div class="alert alert-error" id="alert" style="display: none;">
                        <button type="button" class="close" onclick="$('.alert').hide()">&times;</button>
                        <strong>Error! </strong> Please make a selection to begin processing a sale transaction.
                    </div>
                </div>
            </section><!-- end main-content -->
        </div> <!-- end content-container -->
        <?php include '/footer.php'; ?>