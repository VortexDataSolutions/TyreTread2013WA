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
            <h2>Tire</h2>
        </div>
        <h4>Please select fields</h4>
        <label>Width</label>
        <select>
            <option value="1">1</option>
        </select>
        <label>Diameter</label>
        <select>
            <option value="1">1</option>
        </select>
        <label>Profile</label>
        <select>
            <option value="1">1</option>
        </select>
        <?php echo anchor('', 'Submit', 'class="btn btn-inverse btn-small"') ?>
        <div style="overflow-y:scroll;height:200px;">
            <table style="overflow-y:scroll;height:200px;">
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Brand</th>
                        <th>Qty</th>
                        <th>Cost GST</th>
                        <th>Price</th>
                        <th>Select</th>
                    </tr>	
                </thead>
                <?php
                foreach ($records as $row):
                    echo "<tr>";
                    echo "<td> $row->strTyreProductCode </td>";
                    echo "<td> $row->strDesc </td>";
                    echo "<td> $row->strDesc </td>";
                    echo "<td> $row->strDesc </td>";
                    echo "<td> $row->strDesc </td>";
                    echo "<td>" . "<input type='checkbox' name='select' value='select'>" . "</td>";
                    echo "</tr>";
                endforeach; /* end foreach loop */
                ?>
            </table>
        </div>
        <input type='checkbox' name='discount' value='disc'>
        <label>Total Discount</label>
        <input class='input-medium' type='text' placeholder='$00.00'>
        <label>Quantity</label>
        <select>
            <option value="1">1</option>
        </select>
        <div class="button-right">
            <?php echo anchor('', 'Main Menu', 'class="btn btn-inverse btn-small"') ?>
            <?php echo anchor('otherController/other', 'Add', 'class="btn btn-inverse btn-small"') ?>
            <?php echo anchor('summaryController/summary', 'View Summary', 'class="btn btn-inverse btn-small"') ?>
        </div>
    </section><!-- end main-content -->
</div> <!-- end content-container -->
<?php include '/footer.php'; ?>
