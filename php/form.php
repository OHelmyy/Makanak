// Define the table and fields in SQL queries, matching new `properties` schema
<?php
// // Show PHP errors
// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(E_ALL);

// require_once 'Property.php';

// $objProperty = new Property();

// $property_id = null; 
// $rowProperty = null;  

// // GET: Check if there is a request to edit an existing record
// if (isset($_GET['edit_id'])) {
//     $property_id = $_GET['edit_id'];
//     $stmt = $objProperty->runQuery("SELECT * FROM properties WHERE property_id = :property_id");
//     $stmt->execute([":property_id" => $property_id]);
//     $rowProperty = $stmt->fetch(PDO::FETCH_ASSOC);
// }

// // POST: Handle form submission for insert or update
// if (isset($_POST['btn_save'])) {
//     $name = strip_tags($_POST['name']);
//     $address = strip_tags($_POST['address']);
//     $image_url = strip_tags($_POST['image_url']);
//     $price = intval($_POST['price']);
//     $type = strip_tags($_POST['type']);

//     try {
//         if ($property_id !== null) {
//             // Update existing record
//             if ($objProperty->update($name, $address, $image_url, $price, $type, $property_id)) {
//                 $objProperty->redirect('index.php?updated');
//             }
//         } else {
//             // Insert new record
//             if ($objProperty->insert($name, $address, $image_url, $price, $type)) {
//                 $objProperty->redirect('index.php?inserted');
//             } else {
//                 $objProperty->redirect('index.php?error');
//             }
//         }
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }}
?>
<!doctype html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Head metas, css, and title -->
    </head>
    <body>
    <?php require_once 'includes/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1>Add / Edit Property</h1>
                <p>Required fields are marked with (*)</p>
                
                <form method="post">
                    <div class="form-group">
                        <label for="property_id">Property ID</label>
                        <input class="form-control" type="text" name="property_id" id="property_id" value="<?php echo htmlspecialchars($rowUser['property_id'] ?? '', ENT_QUOTES); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Enter property name" value="<?php echo htmlspecialchars($rowUser['name'] ?? '', ENT_QUOTES); ?>" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="address">Address *</label>
                        <input class="form-control" type="text" name="address" id="address" placeholder="Enter property address" value="<?php echo htmlspecialchars($rowUser['address'] ?? '', ENT_QUOTES); ?>" required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label for="image_url">Image URL</label>
                        <input class="form-control" type="text" name="image_url" id="image_url" placeholder="Enter image URL" value="<?php echo htmlspecialchars($rowUser['image_url'] ?? '', ENT_QUOTES); ?>" maxlength="255">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class="form-control" type="number" name="price" id="price" placeholder="Enter price" value="<?php echo htmlspecialchars($rowUser['price'] ?? '', ENT_QUOTES); ?>" min="0">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input class="form-control" type="text" name="type" id="type" placeholder="Enter property type" value="<?php echo htmlspecialchars($rowUser['type'] ?? '', ENT_QUOTES); ?>" maxlength="100">
                    </div>
                    <input class="btn btn-primary mb-2" type="submit" name="btn_save" value="Save">
                </form>
            </main>
        </div>
    </div>
    
</body>
</html>
