<!-- 
  require_once 'classes\listReg.php';

  $objApplication = new JobApplication();

  // Insert application on form submission
  if (isset($_POST['submit_application'])) {
    $companyName = htmlspecialchars($_POST['company_name']);
    $city = htmlspecialchars($_POST['city']);
    $jobTitle = htmlspecialchars($_POST['job_title']);
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['phone_number']);

    // Insert new job application
    if ($objApplication->insert($companyName, $city, $jobTitle, $firstName, $lastName, $email, $phoneNumber)) {
        $objApplication->redirect('index.php?application_submitted');
    }
  }
 -->

<!doctype html>
<html lang="en">
<head>
    <style>
        [role="main"] {
    padding-top: 48px;
    padding-bottom: 48px;
}
</style>
    <title>Job Application Form</title>
    <?php require_once 'includes/head.php'; ?> <!-- Link to your head file for styles -->
</head>
<body>
    <?php require_once 'includes/header.php'; ?> <!-- Include header -->

    <div class="container-fluid">
        <div class="row">
            <?php require_once 'includes/sidebar.php'; ?> <!-- Include sidebar if needed -->

            <main role="main" class="col-md-9  col-lg-10 px-4">
                <h1 style="margin-top: 10px">Job Application Form</h1>
                <p>Fields marked with (*) are required</p>

                <form method="post">
                    <div class="form-group">
                        <label for="company_name">Company Name *</label>
                        <input class="form-control" type="text" name="company_name" id="company_name" placeholder="Enter company name" required maxlength="100">
                    </div>

                    <div class="form-group">
                        <label for="city">City *</label>
                        <select class="form-control" name="city" id="city" required>
                        <option value="">Select City</option>
                <option value="Mostakbal city">Mostakbal city</option>
                <option value="obour">obour</option>
                <option value="nasr city">nasr city</option>
                <option value="Tagamoa">Tagamoa</option>
                <option value="zayed">zayed</option>
                            <!-- Add more cities as needed -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="job_title">Job Title *</label>
                        <input class="form-control" type="text" name="job_title" id="job_title" placeholder="Enter job title" required maxlength="100">
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name *</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Enter first name" required maxlength="100">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name *</label>
                        <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Enter last name" required maxlength="100">
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Enter email address" required maxlength="100">
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number *</label>
                        <input class="form-control" type="tel" name="phone_number" id="phone_number" placeholder="Enter phone number" required maxlength="15">
                    </div>

                    <input href="form.php"class="btn btn-primary mb-2" type="submit" name="submit_application" value="Submit Application">
                </form>
            </main>
        </div>
    </div>

    <?php require_once 'includes/footer.php'; ?> <!-- Include footer -->
</body>
</html>
