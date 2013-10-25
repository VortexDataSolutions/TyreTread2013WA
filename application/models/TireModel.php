<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TireModel
 *
 * @author Simon
 */
class TireModel extends CI_Model {

    function getProduct() {

        $query = $this->db->query("SELECT *
                              FROM tyrerange
                              JOIN width
                              ON width.intWidthID = tyrerange.intWidthID
                              JOIN diameter
                              ON diameter.intDiameterID = tyrerange.intDiameterID
                              JOIN location
                              ON location.intLocationID = tyrerange.intLocationID");
        
        if ($query->num_rows() > 0) {
            // loop through each record (row) and place that
            // record into an array called $data
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        // return the array to the controller
        return $data;
    }

}
?>
