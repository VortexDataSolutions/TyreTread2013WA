<!DOCTYPE html>

<!-- 

 author Vortex Data Solutions 2013
 version 1.0.0
 
 description:

-->      

<?php include '/header.php'; ?>
<div class="container">
    <div class="logo">
        <img src="../img/tt-logo-long.png" alt="ttlogo" />
    </div>
    <section class="content">
        <div class="page-header">
            <h3>Other Products and Services</h3>
        </div>
        <h4>Please enter fields</h4>
        <?php
        echo "<form class='form-signin'>";
        echo "<label>Description</label><br>";
        echo "<input type='text' name='Description' id='desc' placeholder='Description'><br>";

        echo "<label>Price</label><br>";
        echo "<input type='text' name='Price' class='input-medium' id='price' placeholder='$00.00'><br>";

        echo "<label>Quantity</label><br>";
        echo "<select>";
        echo "<option></option>";
        echo "</select>";
        echo "</form>";
        ?>
        <div class="button">
            <?php echo anchor('', 'Main Menu', 'class="btn btn-inverse btn-small"') ?>
            <?php echo anchor('', 'Add', 'class="btn btn-inverse btn-small"') ?>
            <?php echo anchor('summaryController/summary', 'View Summary', 'class="btn btn-inverse btn-small"') ?>
        </div>
    </section><!-- end main-content -->
</div> <!-- end content-container -->
<?php include '/footer.php'; ?>