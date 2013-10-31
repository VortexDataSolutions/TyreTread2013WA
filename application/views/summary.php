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
        <label>Name</label><br>
        <input type="text" name="name" class="input-large" id="cName"><br>
        <label>Address</label><br>
        <input type="text" name="address" class="input-large" id="cAddress"><br>
        <div style="overflow-y:scroll;height:200px;">
            <table style="overflow-y:scroll;height:200px;">
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Brand</th>
                        <th>Qty</th>
                        <th>Cost GST</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>	
                </thead>
                <?php
                ?>
            </table>
        </div>
            <form action="">
                <input type="radio" name="sale" value="quote" id="quote">Quote
                <input type="radio" name="sale" value="credit" id="credit">Credit
                <input type="radio" name="sale" value="cash" id="Cash">Cash
                <input type="radio" name="sale" value="eftpos" id="eftpos">Eftpos
                <?php echo anchor('', 'Main Menu', 'class="btn btn-inverse btn-small"') ?>
                <?php echo anchor('summaryController/summary', 'Finish', 'class="btn btn-inverse btn-small"') ?>
            </form>
    </section><!-- end main-content -->
</div> <!-- end content-container -->
<?php include '/footer.php'; ?>
