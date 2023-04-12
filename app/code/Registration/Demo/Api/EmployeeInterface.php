<?php
namespace Registration\Demo\Api;

/**
 * Interface for managing Demo Api
 * @api
 */

 interface EmployeeInterface {

    /**
     * Get name
     * 
     * @return array
     */

     public function getProfile();

    /**
     * set data
     * 
     * @param string[] $postdata
     * @return array
     */

    public function setCustomList($postdata);


}

 ?>
