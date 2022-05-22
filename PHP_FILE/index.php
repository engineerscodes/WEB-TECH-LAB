<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | FILE UPLOADER</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .conatiner {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            background: linear-gradient(to right, #ea1d6f 0%, #eb466b 100%);
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: 1.4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ctn {
            background: #3e3e3e;
            height: 300px;
            width: 400px;

            position: relative;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
            color: #20dea0;
            text-align: center;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: column;
        }

        form button {
            margin-top: 30px;
            margin-bottom: 5px;

        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/427ff44d09.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="conatiner">

        <div class="ctn">

            <form action="upload.php" method="POST" enctype="multipart/form-data">

                <label for="emp_id">REG NUMBER</label>
                <input type="text" name="emp_id" id="emp_id" placeholder="19BCN7185" required>

                <label for="emp_file">File Upload</label>
                <input type="file" name="emp_file" id="emp_file" required>

                <button type="submit" name="submit">Upload</button>

                <div>
                    <h1> <a href="/PHP_FILE/read_files.php" style="color: white;  text-decoration: none;">VIEW FILE UPLOADED </a></h1>
                </div>

            </form>


        </div>

    </div>

</body>

</html>