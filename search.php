<!DOCTYPE html>
<html>
<head>
    <title>Patient Details</title>
    <style>
        body
        {
            background-image: url("p3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .dwnfile
        {
            color: white;
            margin-top: 150px;
        }
    </style>
</head>
<body>
    <center>
        <div class="dwnfile">
            <h2>View Patient Details</h2>
            <br>
            <br>
             <center><form method="post" action="ext.php">
                <label for="name">Patient's Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="phone">Patient's Phone:</label>
                <input type="text" id="ph" name="ph" required><br><br><br><br>
                <button type="submit" name="submit">Click on submit</button></center> 
            </form>
           </center>
        </div>   
</body>
</html>
