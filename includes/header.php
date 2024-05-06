<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    function pageTitle()
    {
        // Get the current filename
        $currentPage = basename($_SERVER['PHP_SELF']);

        if ($currentPage == 'index.php') {
            $pageTitle = 'Home';
            return $pageTitle;
        }

        // Remove the ".php" extension
        $pageTitle = ucfirst(str_replace('.php', '', $currentPage));

        return $pageTitle;
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CMV | <?= pageTitle() ?></title>
    <link rel="icon" type="image/x-icon" href="image/logo-white.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/swiper@6.0.2/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/cf9a2f60ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/404.css">
    <link rel="stylesheet" href="css/clientele.css">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/laptop.css">
    <link rel="stylesheet" href="css/location.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/overview.css">
    <link rel="stylesheet" href="css/particles.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/serv.css">
    <link rel="stylesheet" href="css/careers.css">
    <link rel="stylesheet" href="css/joinus.css">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <script>
        // document.addEventListener('contextmenu', function(e) {
        //     e.preventDefault();
        // });
    </script>
</head>

<body data-theme="light">