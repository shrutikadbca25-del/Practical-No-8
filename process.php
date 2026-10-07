<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $roll_no = $_POST["Roll_No"];
    $name = $_POST["Name"];
    $gender = $_POST["Gender"];
    $contact = $_POST["Contact"];
    $marks = $_POST["Marks"];

    $sql = "INSERT INTO `Student Details`
            (Roll_No, Name, Gender, Contact, Marks)
            VALUES
            ('$roll_no', '$name', '$gender', '$contact', '$marks')";

    if (mysqli_query($conn, $sql)) {

        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <title>Student Added Successfully</title>

            <style>
                * {
                    box-sizing: border-box;
                }

                body {
                    margin: 0;
                    font-family: Arial, sans-serif;
                    background: linear-gradient(135deg, #dbeafe, #f3e8ff);
                    min-height: 100vh;
                }

                .navbar {
                    background: #1e3a8a;
                    color: white;
                    padding: 18px 50px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .logo {
                    font-size: 24px;
                    font-weight: bold;
                }

                .nav-links a {
                    color: white;
                    text-decoration: none;
                    margin-left: 25px;
                }

                .success-container {
                    min-height: calc(100vh - 70px);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 30px;
                }

                .success-box {
                    width: 500px;
                    background: white;
                    padding: 40px;
                    border-radius: 20px;
                    text-align: center;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                    border-top: 7px solid #2563eb;
                }

                .success-icon {
                    width: 70px;
                    height: 70px;
                    margin: 0 auto 20px;
                    border-radius: 50%;
                    background: #22c55e;
                    color: white;
                    font-size: 45px;
                    line-height: 70px;
                    font-weight: bold;
                }

                h1 {
                    color: #166534;
                    margin-bottom: 10px;
                }

                .success-text {
                    color: #555;
                    margin-bottom: 25px;
                }

                .student-details {
                    background: linear-gradient(135deg, #eff6ff, #f5f3ff);
                    padding: 20px;
                    border-radius: 12px;
                    text-align: left;
                    margin-bottom: 25px;
                }

                .student-details p {
                    margin: 12px 0;
                    color: #333;
                    font-size: 16px;
                }

                .back-button {
                    display: inline-block;
                    background: #2563eb;
                    color: white;
                    padding: 12px 25px;
                    border-radius: 8px;
                    text-decoration: none;
                    font-weight: bold;
                }

                .back-button:hover {
                    background: #1d4ed8;
                }
            </style>

        </head>

        <body>

            <nav class='navbar'>

                <div class='logo'>
                    Student Portal
                </div>

                <div class='nav-links'>
                    <a href='index.html'>Home</a>
                    <a href='index.html'>Students</a>
                    <a href='#'>About</a>
                    <a href='#'>Contact</a>
                </div>

            </nav>

            <div class='success-container'>

                <div class='success-box'>

                    <div class='success-icon'>✓</div>

                    <h1>Student Added Successfully!</h1>

                    <p class='success-text'>
                        Student data has been successfully saved in the database.
                    </p>

                    <div class='student-details'>

                        <p><b>Roll No:</b> $roll_no</p>

                        <p><b>Name:</b> $name</p>

                        <p><b>Gender:</b> $gender</p>

                        <p><b>Contact:</b> $contact</p>

                        <p><b>Marks:</b> $marks</p>

                    </div>

                    <a href='index.html' class='back-button'>
                        Add Another Student
                    </a>

                </div>

            </div>

        </body>
        </html>
        ";

    } else {

        echo "Error: " . mysqli_error($conn);

    }

} else {

    echo "Invalid Request";

}

?>