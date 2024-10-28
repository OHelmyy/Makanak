<?php

require_once 'DataBaseM.php';

class Property {
    private $conn;

    // Constructor
    public function __construct(){
      $database = new Database();
      $db = $database->dbConnection();
      $this->conn = $db;
    }

    // Execute queries SQL
    public function runQuery($sql){
      $stmt = $this->conn->prepare($sql);
      return $stmt;
    }

    // Insert new property
    public function insert($image_url, $type, $price, $name, $address){
        try {
            $stmt = $this->conn->prepare("INSERT INTO properties (image_url, type, price, name, address) VALUES (:image_url, :type, :price, :name, :address)");
            $stmt->bindparam(":image_url", $image_url);
            $stmt->bindparam(":type", $type);
            $stmt->bindparam(":price", $price);
            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":address", $address);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Update property by property_id
    public function update($property_id, $image_url, $type, $price, $name, $address){
        try {
            $stmt = $this->conn->prepare("UPDATE properties SET image_url = :image_url, type = :type, price = :price, name = :name, address = :address WHERE property_id = :property_id");
            $stmt->bindparam(":property_id", $property_id);
            $stmt->bindparam(":image_url", $image_url);
            $stmt->bindparam(":type", $type);
            $stmt->bindparam(":price", $price);
            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":address", $address);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Delete property by property_id
    public function delete($property_id){
        try {
            $stmt = $this->conn->prepare("DELETE FROM properties WHERE property_id = :property_id");
            $stmt->bindparam(":property_id", $property_id);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Redirect URL method
    public function redirect($url){
        header("Location: $url");
    }
}
?>
