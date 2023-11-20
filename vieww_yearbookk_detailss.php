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
                        <a class="nav-link" aria-current="page" href="View_Hoodie_Size.php">View Hoodie Size</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_yearbook_details.php">View Yearbook Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">View Change Request</a>
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

    $limit = 4;

    if (isset($_GET['page'])) {
        $page_num = $_GET['page'];
    } else {
        $page_num = 1;
    }

    // Initialize search conditions
    $search_conditions = array();

    // Check if you have search parameters and add them to $search_conditions

    // Retrieve the user's ID from the session (assuming you store it in the session)
    session_start();
    $user_id = $_SESSION['id']; // Modify this based on your session variable

    // Add a condition to filter by user ID
    $search_conditions[] = "user_id = $user_id";

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
    ?>

    <?php
    if ($count > 0) {
    ?>
    <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID NO.</th>
            <th scope="col">Full Name</th>
            <th scope="col">Nick Name</th>
            <th scope="col">High School</th>
            <th scope="col">Dorm Number</th>
            <th scope="col">Condition on Admission</th>
            <th scope="col">Memorable time in Med School</th>
            <th scope="col">Worst time in Med School</th>
            <th scope="col">Black Lion Was</th>
            <th scope="col">If I hadn't been a doctor</th>
            <th scope="col">Inclination</th>
            <th scope="col">Last Words</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th scope="row"><?php echo $row['id'] ?></th>
                <td><?php echo $row['full_name'] ?></td>
                <td><?php echo $row['nick_name'] ?></td>
                <td><?php echo $row['high_school'] ?></td>
                <td><?php echo $row['dorm_number'] ?></td>
                <td><?php echo $row['condition_on_admission'] ?></td>
                <td><?php echo $row['memorable_time_in_med_school'] ?></td>
                <td><?php echo $row['worst_time_in_med_school'] ?></td>
                <td><?php echo $row['black_lion'] ?></td>
                <td><?php echo $row['if_not_doctor'] ?></td>
                <td><?php echo $row['inclination'] ?></td>
                <td><?php echo $row['last_words'] ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
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
            echo "<li class='page-item'><a class='page-link' href='view_yearbook_details.php?page=" . ($page_num - 1) . "'>Previous</a></li>";
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $page_num) {
                $active = 'active';
            } else {
                $active = '';
            }
            echo "<li class='page-item " . $active . "'><a class='page-link' href='view_yearbook_details.php?page=" . $i . "'>" . $i . "</a></li>";
        }
        if ($page_num < $total_page) {
            echo "<li class='page-item'><a class='page-link' href='view_yearbook_details.php?page=" . ($page_num + 1) . "'>Next</a></li>";
        }
        echo "</ul>";
    }
    ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
