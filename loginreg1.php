<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency services Login</title>
    <style>
        body {
           font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(239,143,185);
            background: radial-gradient(circle, rgba(239,143,185,1) 57%, rgba(251,1,1,0.8) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .content {
            max-width:350px;
            margin-right: 20px;
            padding: 0px;
        }
        .container {
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 40px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"] {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: none;
            border-bottom: 1px solid #ccc;
        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
        li p
        {
            color: white;
            font-size: larger;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 100;
        }
        li h1
        {
            font-weight: 400; font-size: xx-large;
        }
        @media (max-width: 768px) {
            .content, .container {
                max-width: 100%;
                margin-right: 0;
            }
            .content {
                margin-bottom: 20px;
            }
            body {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 style="color: white;">ABO <br><span style="color: black;">The Smart Ambulance System</span></h1>
        <ul style="list-style: none;">
            <li><h2>Real-Time Tracking</h2> <p>Our ambulances light up like fireflies on a map, providing real-time updates on their location. With ABO, we always know where they are and precisely where they need to go.</p></li>
            <li><h2>Traffic Whisperer</h2><p>Our advanced AI acts as a traffic whisperer, predicting jams and detours in real-time. Ambulances are expertly navigated through the fastest paths, ensuring that precious moments are not wasted.</p></li>
        </ul>
    </div>
    
    <div class="container">
        <h2>Emergency Services Registration</h2>
        <form action="reg1.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="organization">Organization Name: <span style="color: red;">*</span></label>
                <input type="text" id="organization" name="organization" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Person: <span style="color: red;">*</span></label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address: <span style="color: red;">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number: <span style="color: red;">*</span></label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="location">Location: <span style="color: red;">*</span></label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="password">Password <span style="color: red;">*</span></label>
                <input type="password" id="password" name="password" required maxlength="8">
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div> 
    <script>
        
    </script>   
</body>
</html>

