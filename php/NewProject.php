<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Projects | Mkanak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .serag {
            background-image: url('https://source.unsplash.com/1600x900/?real-estate');
            background-size: cover;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        .property-card {
            transition: transform 0.3s;
        }

        .property-card:hover {
            transform: scale(1.05);
        }

        .main-search-bar {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            padding: 1rem;
            margin: 1rem;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        .filter-section {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        .filter-section select, .filter-section button {
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-danger">MKA</span>NK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Find</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">New projects</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Explore</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Communities</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="btn btn-outline-success">Log in</button>
            </div>
        </div>
    </nav>

    <!-- Main Search Bar -->
    <div class="container main-search-bar">
        <form class="d-flex">
            <input type="text" class="form-control me-2" placeholder="Search properties..." aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>

    <!-- Filter Section -->
    <div class="container filter-section">
        <form class="d-flex flex-wrap gap-2">
            <select class="form-select" aria-label="Location">
                <option selected>Location</option>
                <option value="1">North Coast</option>
                <option value="2">Alexandria</option>
                <option value="3">Cairo</option>
            </select>
            <select class="form-select" aria-label="Property Type">
                <option selected>Property Type</option>
                <option value="1">Villa</option>
                <option value="2">Apartment</option>
                <option value="3">Townhouse</option>
            </select>
            <select class="form-select" aria-label="Price Range">
                <option selected>Price Range</option>
                <option value="1">1,000,000 LE - 2,500,000 LE</option>
                <option value="2">2,500,000 LE - 5,000,000 LE</option>
                <option value="3">5,000,000 LE - 10,000,000 LE</option>
            </select>
            <button class="btn btn-secondary" type="submit">Apply Filters</button>
        </form>
    </div>

    <!-- Hero Section -->
    <div class="serag">
        <div class="container">
            <h1>Discover New Properties</h1>
            <p>Your dream home awaits!</p>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="container my-5">
      <h2 class="text-center mb-4">300 New Projects</h2>
      <div class="row">
          <?php
          // Sample data for properties
          $properties = [
              [
                  'title' => 'Zoya Ghazala Bay',
                  'location' => 'North Coast',
                  'price' => '5,000,000 LE',
                  'developer' => 'Landmark Development',
                  'status' => 'Completed',
                  'image' => 'https://source.unsplash.com/300x200/?house'
              ],
              [
                  'title' => 'Hay Sharq',
                  'location' => 'Hay Sharq, Alexandria',
                  'price' => '8,000,000 LE',
                  'developer' => 'City Edge',
                  'status' => 'Completed',
                  'image' => 'https://source.unsplash.com/300x200/?apartment'
              ],
              [
                  'title' => 'Bab Elbahr Resort',
                  'location' => 'Al Alamein, North Coast',
                  'price' => '1,200,000 LE',
                  'developer' => 'Alrowad Companies Group',
                  'status' => 'Under Construction',
                  'image' => 'https://source.unsplash.com/300x200/?villa'
              ],
              [
                  'title' => 'Muruj Green City',
                  'location' => 'Hay Sharq, Alexandria',
                  'price' => '2,500,000 LE',
                  'developer' => 'Bonyan Development',
                  'status' => 'Under Construction',
                  'image' => 'https://source.unsplash.com/300x200/?beach-house'
              ],
          ];

          // Loop through each property and display it
          foreach ($properties as $property) {
              echo '<div class="col-md-12 mb-4">';
              echo '<div class="card property-card">';
              echo '<img src="' . $property['image'] . '" class="card-img-top" alt="' . $property['title'] . '">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">By ' . $property['developer'] . ' . ' . $property['status'] . '</h5>';
              echo '<p class="card-text">' . $property['title'] . '</p>';
              echo '<p class="card-text">Location: ' . $property['location'] . '</p>';
              echo '<p class="card-text"><strong>Price: ' . $property['price'] . '</strong></p>';
              echo '<a href="#" class="btn btn-primary">View Details</a>';
              echo '</div></div></div>';
          }
          ?>
      </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
