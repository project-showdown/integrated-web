<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Links with Captions</title>
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
        .image-item {
            margin: 15px;
            text-align: center;
        }
        .image-item a {
            display: inline-block;
            border: 2px solid #ccc;
            padding: 5px;
            transition: transform 0.2s;
        }
        .image-item a:hover {
            transform: scale(1.05);
            border-color: #000;
        }
        img {
            max-width: 200px; /* Limits the width of each image to 200px */
            height: auto;     /* Maintains the aspect ratio */
            display: block;
        }
        .caption {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

    <h1>Click to access the applications</h1>

    <div class="image-container">
        <div class="image-item">
            <a href="https://applications.microsoft.com" target="_blank" rel="noopener noreferrer">
                <img src="images/Microsoft365.png" alt="Image 1">
            </a>
            <div class="caption">Microsoft 365</div>
        </div>
        <div class="image-item">
            <a href="INSERT ANY LINK HERE" target="_blank" rel="noopener noreferrer">
                <img src="images/ContactUsPhone.png" alt="Image 2">
            </a>
            <div class="caption">VoIP Services</div>
        </div>
        <div class="image-item">
            <a href="INSERT ANY LINK HERE" target="_blank" rel="noopener noreferrer">
                <img src="images/Dollar.png" alt="Image 3">
            </a>
            <div class="caption">Payments</div>
        </div>
    </div>

</body>
</html>
