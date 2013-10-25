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
            <h2>Summary</h2>
        </div>
        <label>Name</label>
        <input type="text" name="name" class="input-large" id="cName" placeholder="Customer's Name"><br>
        <label>Address</label>
        <input type="text" name="address" class="input-large" id="cAddress" placeholder="Customer's Address"><br>
        <div style="overflow-y:auto;height:200px;">
            <?php
            echo "<table>";
            echo "<tr><th>Product Code</th>";
            echo "<th>Brand</th>";
            echo "<th>Qty</th>";
            echo "<th>GST</th>";
            echo "<th>Price</th>";
            echo "<th>Remove</th></tr>";

            echo "</table>";
            echo "</div>";
            ?>
            <form action="">
                <input type="radio" name="sale" value="quote">Quote
                <input type="radio" name="sale" value="credit">Credit
                <input type="radio" name="sale" value="Cash">Cash
                <input type="radio" name="sale" value="eftpos">Eftpos
            </form>
            <div class="button-right">
                <?php echo anchor('', 'Main Menu', 'class="btn btn-inverse btn-small"') ?>
                <?php echo anchor('summaryController/summary', 'Finish', 'class="btn btn-inverse btn-small"') ?>
            </div>
    </section><!-- end main-content -->
</div> <!-- end content-container -->
<?php include '/footer.php'; ?>
