<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>401 Unauthorized</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 100px;
            color: #e67e22;
            margin: 0;
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #666;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #e67e22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #d35400;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>401</h1>
        <h2>Unauthorized</h2>
        <p>You are not authorized to view this page. Please log in to continue.</p>
        <a href="/login">Go to Login</a>
    </div>
</body>
</html>
