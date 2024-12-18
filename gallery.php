<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Law College</title>
    <link rel="stylesheet" href="styles.css"> <!-- Replace with actual stylesheet -->
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        padding: 20px;
        justify-content: center;
    }

    .gallery img {
        width: 300px;
        height: 200px;
        object-fit: cover;
        cursor: pointer;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }
    </style>
</head>

<body>
    <header>
        <h1>Law College Gallery</h1>

    </header>
    <main>
        <section class="gallery">
            <img src="images/gallery/1.jpg" alt="Photo 1">
            <img src="images/gallery/2.jpg" alt="Photo 2">
            <img src="images/gallery/3.jpg" alt="Photo 3">
            <img src="images/gallery/4.jpg" alt="Photo 4">
            <img src="images/gallery/8.jpg" alt="Photo 5">
            <img src="images/gallery/6.jpg" alt="Photo 6">
            <img src="images/gallery/17.jpg" alt="Photo 7">
            <img src="images/gallery/19.jpg" alt="Photo 8">

        </section>
    </main>

    <footer>
        <p>&copy; 2024 Law College. All rights reserved.</p>
    </footer>
</body>

</html>