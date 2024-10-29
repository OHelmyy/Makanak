<?php
include 'DataBaseM.php'; 

$type = isset($_GET['type']) ? $_GET['type'] : '';
$query = "SELECT * FROM properties";
if ($type) {
    $query .= " WHERE type = '" . mysqli_real_escape_string($con, $type) . "'";
}

$result = mysqli_query($con, $query);


if (!$result) {
    die("Query failed: " . mysqli_error($con)); 
}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/FindPage.css">
    <link rel="stylesheet" href="css/style.css">
    
    
    
</head>
<body>
<?php require_once 'php/includes/header.php'; ?> 
    <div class="container mt-5">
        <div class="search-container"> 
            <input type="text" class="search-input" placeholder="Look For Property">
            <button class="btn btn-danger">Search</button>
            <select class="form-select" aria-label="Default select example" id="propertyType">
                <option value="1">Buy</option>
                <option value="2">Rent</option>
            </select>

        </div>
        <div class="select-type-container mt-5" >
            <p>Properties For</p><span id="propertyStatus"></span>

        </div>
        <script>
    
            const propertyTypeSelect = document.getElementById('propertyType');
            const propertyStatusDiv = document.getElementById('propertyStatus');
    
            propertyTypeSelect.addEventListener('change', function() {
                if (this.value === '1') {
                    propertyStatusDiv.textContent = 'Buy';
                } else if (this.value === '2') {
                    propertyStatusDiv.textContent = 'Rent';
                }
            });
    
            
            propertyStatusDiv.textContent = 'Buy';
            
        </script>
        <div class="property-type-container d-flex flex-wrap justify-content-between mt-5">
            <a href="FindPage.php?type=Apartment" class="property-type-item" onclick="setActive(this)">Apartments</a>
            <a href="FindPage.php?type=Villa" class="property-type-item" onclick="setActive(this)">Villas</a>
            <a href="FindPage.php?type=Chalet" class="property-type-item" onclick="setActive(this)">Chalets</a>
            <a href="FindPage.php?type=Townhouse" class="property-type-item" onclick="setActive(this)">Townhouses</a>
            <a href="FindPage.php?type=Duplex" class="property-type-item" onclick="setActive(this)">Duplexes</a>
            <a href="FindPage.php?type=Twin House" class="property-type-item" onclick="setActive(this)">Twin Houses</a>
            <a href="FindPage.php?type=Penthouse" class="property-type-item" onclick="setActive(this)">Penthouses</a>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
    
                const urlParams = new URLSearchParams(window.location.search);
                const activeType = urlParams.get('active');
    
                if (activeType) {
        
                    const activeLink = document.querySelector(`.property-type-item[href*="${activeType}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            });
        </script>

        <div class="d-flex flex-wrap justify-content-start mt-5">
            <?php if ($result && mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="card property-card m-3" style="width: 18rem;">
                        <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="card-img-top property-image" alt="Property Image">
                        <div class="card-body">
                            <h6 class="text-uppercase text-secondary"><?php echo htmlspecialchars($row['type']); ?></h6>
                            <p class="property-price">$<?php echo number_format($row['price'], 2); ?></p>
                            <p class="card-title"><?php echo htmlspecialchars($row['name']); ?></p>
                            <p class="property-location text-muted"><?php echo htmlspecialchars($row['address']); ?></p>
                            <div class="property-actions">
                                <button class="btn btn-outline-danger btn-sm">Call</button>
                                <button class="btn btn-outline-danger btn-sm">Email</button>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php else: ?>
                <p class="text-center mt-5">No properties found for the selected type.</p>
            <?php endif; ?>
        </div>
        
    </div>
</div>
    </div>
    
    </div>
    <?php require_once 'php/includes/footer.php'; ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

</body>
</html>