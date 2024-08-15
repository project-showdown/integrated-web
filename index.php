<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Links</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .image-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .image-container a {
            margin: 15px;
            border: 2px solid #ccc;
            padding: 5px;
            display: inline-block;
            transition: transform 0.2s;
        }
        .image-container a:hover {
            transform: scale(1.05);
            border-color: #000;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>

    <h1>Click to access the applications</h1>

    <div class="image-container">
        <a href="https://applications.microsoft.com/" target="_blank">
            <img src="images/Microsoft365.png" alt="Image 1">
        </a>
        <a href="INSERT ANY LINK HERE" target="_blank">
            <img src="images/ContactUsPhone.png" alt="Image 2">
        </a>
        <a href="INSERT ANY LINK HERE" target="_blank">
            <img src="images/Dollar.png" alt="Image 3">
        </a>
    </div>

</body>
</html>
