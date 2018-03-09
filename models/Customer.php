<?php
/**
 * Created by PhpStorm.
 * User: VSM
 * Date: 05-Mar-18
 * Time: 3:30 PM
 */


Class Customer {
    private $db;

    public  function __construct(){
        $this->db = new Database;
    }

    public  function addCustomer($data) {
       // Prepare query
        $this->db->query('INSERT INTO customers (id, first_name, last_name, email) VALUES(:id, :first_name, :last_name, :email)');

        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);

        // execute

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public  function getCustomers() {
        $this->db->query('SELECT * FROM customers ORDER BY created_at DESC');

        $result = $this->db->resultset();
        return $result;
    }
}