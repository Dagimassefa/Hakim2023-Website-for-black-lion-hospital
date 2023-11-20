<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <title>Yearbook Detail</title>
    <style>
        .form-group {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Hakim</a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="View_Yearbook_Details.php">View Yearbook Detail</a>
                    </li>
                </ul>
                <span class="navbar-text text-white">
                    <a href="logout.php" class="btn btn-outline-danger">Logout</a>
                </span>
            </div>
        </div>
    </nav>
    <br>

    <?php
    include('configure.php');

    $limit = 30;

    if (isset($_GET['page'])) {
        $page_num = $_GET['page'];
    } else {
        $page_num = 1;
    }

    // Initialize search conditions
    $search_conditions = array();

    // Check if you have search parameters and add them to $search_conditions

    // Construct the search condition using OR operator
    if (!empty($search_conditions)) {
        $search_condition = "WHERE " . implode(" OR ", $search_conditions);
    } else {
        $search_condition = "";
    }

    $offset = ($page_num - 1) * $limit;

    $query = "SELECT * FROM med_school_data $search_condition ORDER BY id ASC LIMIT {$offset}, {$limit}";
    $result = mysqli_query($connection, $query) or die("Failed");

    $count = mysqli_num_rows($result); // Count the number of rows fetched from the database

    if ($count > 0) {
    ?>
    <!-- Display records as cards -->
    <div class="row">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card" id="record-<?php echo $row['id']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['full_name']; ?></h5>
                        <p class="card-text">
                            <strong>Nick Name:</strong> <?php echo $row['nick_name']; ?><br>
                            <strong>High School:</strong> <?php echo $row['high_school']; ?><br>
                            <strong>Dorm Number:</strong> <?php echo $row['dorm_number']; ?><br>
                            <strong>Condition on Admission:</strong> <?php echo $row['condition_on_admission']; ?><br>
                            <strong>Memorable Time in Med School:</strong> <?php echo $row['memorable_time_in_med_school']; ?><br>
                            <strong>Worst Time in Med School:</strong> <?php echo $row['worst_time_in_med_school']; ?><br>
                            <strong>Black Lion Was:</strong> <?php echo $row['black_lion']; ?><br>
                            <strong>If Not a Doctor:</strong> <?php echo $row['if_not_doctor']; ?><br>
                            <strong>Inclination:</strong> <?php echo $row['inclination']; ?><br>
                            <strong>Last Words:</strong> <?php echo $row['last_words']; ?><br>
                            <!-- Display the new fields -->
                            <strong>Condition of Discharge:</strong> <?php echo $row['condition_of_discharge']; ?><br>
                            <strong>In Ten Years:</strong> <?php echo $row['in_ten_years']; ?><br>
                        </p>
                        <button class="btn btn-primary" onclick="convertToPDF(<?php echo $row['id']; ?>, '<?php echo $row['full_name']; ?>')">
                            Convert to PDF
                        </button>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    } else {
        echo "<p>No results found.</p>";
    }
    ?>
    <?php
    $query1 = "SELECT * FROM med_school_data";
    $result1 = mysqli_query($connection, $query1) or die("Failed!");
    $count1 = mysqli_num_rows($result1);
    if ($count1) {
        $total_data = $count1;
        $total_page = ceil($count1 / $limit);
        echo "<ul class='pagination justify-content-center'>";
        if ($page_num > 1) {
            echo "<li class='page-item'><a class='page-link' href='View_Yearbook_Details.php?page=" . ($page_num - 1) . "'>Previous</a></li>";
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $page_num) {
                $active = 'active';
            } else {
                $active = '';
            }
            echo "<li class='page-item " . $active . "'><a class='page-link' href='View_Yearbook_Details.php?page=" . $i . "'>" . $i . "</a></li>";
        }
        if ($page_num < $total_page) {
            echo "<li class='page-item'><a class='page-link' href='View_Yearbook_Details.php?page=" . ($page_num + 1) . "'>Next</a></li>";
        }
        echo "</ul>";
    }
    ?>

    <!-- Add the "Convert All to PDF" button -->
    <button id="convertAllToPDF" class="btn btn-primary">Convert All to PDF</button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Include the html2pdf library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script>
// Function to convert a card to PDF using html2pdf
function convertToPDF(id,fullName) {
    const element = document.querySelector(`#record-${id}`); // Select the card container
    const cardContent = element.innerHTML; // Get the HTML content of the card
    console.log("cardContent", cardContent)
    const options = {
        margin: 10,
        filename: `yearbook_details_${fullName}.pdf`,
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
    };

    // Generate the PDF using the card's HTML content
    html2pdf()
        .from(cardContent) // Pass the HTML content here
        .set(options)
        .toPdf()
        .save()
        // .then(function(pdf) {
        //     // Create a Blob from the PDF data
        //     const blob = new Blob([pdf], { type: 'application/pdf' });

        //     // Create a temporary URL to the Blob
        //     const url = URL.createObjectURL(blob);

        //     // Create a link element and trigger the download
        //     const a = document.createElement('a');
        //     a.href = url;
        //     a.download = `yearbook_details_${id}.pdf`;
        //     a.style.display = 'none';
        //     document.body.appendChild(a);
        //     a.click();

        //     // Cleanup
        //     URL.revokeObjectURL(url);
        //     document.body.removeChild(a);
        // });
}

// Add a click event listener to the "Convert All to PDF" button
document.getElementById('convertAllToPDF').addEventListener('click', function() {
    // Loop through all card elements and convert each to PDF
    <?php
    $result = mysqli_query($connection, $query) or die("Failed");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "convertToPDF({$row['id']});\n";
    }
    ?>
});
</script>
</body>
</html>
