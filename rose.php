<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envelope with a Letter</title>
    <style>
        /* Tổng quan */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }

        /* Bìa thư */
        .envelope {
            position: relative;
            width: 700px;
            height: 600px;
            background-color: gold;
            border: 2px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        /* Nắp thư */
        .envelope::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background-color: #ff6347;
            clip-path: polygon(50% 100%, 0 0, 100% 0);
            transition: background-color 0.3s ease;
        }

        /* Hiệu ứng khi hover */
        .envelope:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
        }

        .envelope:hover::before {
            background-color: #ff4500;
        }

        /* Văn bản trong phong bì */
        .envelope-text {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        /* Tờ giấy bên trong */
        .letter {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
            transition: top 0.5s ease, opacity 0.5s ease;
            text-align: center;
            font-size: 16px;
            color: #333;
            opacity: 0;
        }

        /* Khi thư được mở */
        .envelope.open .letter {
            top: 0;
            opacity: 1;
        }

        /* Hình ảnh trong tờ giấy */
        .letter img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="envelope" id="envelope" onclick="openEnvelope()">
        <div class="envelope-text"><h2>Nhấn để nhận quà</h2></div>
        <div class="letter" id="letter">
            <h2>Chúc chị ba 20/10 vui vẻ! Có ở quê mô mà đòi quà, dị mà cũng nhấn mở hehehhe</h2><br>
            <img src="hai.jpg" alt="Hình ảnh minh họa">
        </div>
    </div>

    <script>
        function openEnvelope() {
            var envelope = document.getElementById("envelope");
            envelope.classList.toggle("open");
        }
    </script>

</body>
</html>
