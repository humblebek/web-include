<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <title>IDU</title>
</head>

<body>
    <?php
    include "sections/header.php";
    ?>


    <?php
    if (isset($_GET["page"])) {
        include $_GET["page"] . ".php";
    } else {
        include "sections/home.php";
    }
    ?>

    <?php
    include "sections/footer.php";
    ?>


    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0"
        }

        function hideMenu() {
            navLinks.style.right = "-200px"
        }
    </script>
</body>

</html>