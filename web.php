<?php
use Illuminate\Support\Facades\Route;

Route::get('/form1', function () {
    return '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f4; }
            .container { background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: inline-block; }
            input[type="text"], input[type="radio"] { margin: 10px 0; padding: 10px; width: calc(100% - 22px); border: 1px solid #ccc; border-radius: 5px; }
            button { background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; margin-top: 20px; }
            button:hover { background-color: #0056b3; }
            label { margin-right: 10px; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Personal Information</h1>
            <form action="/form2" method="get">
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required><br>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required><br>
                <input type="text" id="address" name="address" placeholder="Address" required><br>
                <label><input type="radio" id="female" name="gender" value="Female"> Female</label>
                <label><input type="radio" id="male" name="gender" value="Male"> Male</label><br>
                <button type="submit">Next</button>
            </form>
        </div>
    </body>
    </html>';
});

Route::get('/form2', function () {
    return '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f4; }
            .container { background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: inline-block; }
            input[type="text"] { margin: 10px 0; padding: 10px; width: calc(100% - 22px); border: 1px solid #ccc; border-radius: 5px; }
            button { background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; margin-top: 20px; }
            button:hover { background-color: #0056b3; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Educational Background</h1>
            <form action="/form3" method="get">
                <input type="text" id="elemS" name="elemS" placeholder="Elementary School" required><br>
                <input type="text" id="elemY" name="elemY" placeholder="Year Attended" required><br>
                <input type="text" id="highS" name="highS" placeholder="High School" required><br>
                <input type="text" id="highY" name="highY" placeholder="Year Attended" required><br>
                <input type="text" id="colS" name="colS" placeholder="College School" required><br>
                <input type="text" id="colY" name="colY" placeholder="Year Attended" required><br>
                <a href="/form1"><button type="button">Back</button></a>
                <button type="submit">Next</button>
            </form>
        </div>
    </body>
    </html>';
});

Route::get('/form3', function () {
    return '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f4; }
            .container { background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: inline-block; }
            input[type="text"] { margin: 10px 0; padding: 10px; width: calc(100% - 22px); border: 1px solid #ccc; border-radius: 5px; }
            button { background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; margin-top: 20px; }
            button:hover { background-color: #0056b3; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Contact Information</h1>
            <form action="/form4" method="get">
                <input type="text" id="motherName" name="motherName" placeholder="Mother\'s Full Name" required><br>
                <input type="text" id="motherNumber" name="motherNumber" placeholder="Phone Number" required><br>
                <input type="text" id="fatherName" name="fatherName" placeholder="Father\'s Full Name" required><br>
                <input type="text" id="fatherNumber" name="fatherNumber" placeholder="Phone Number" required><br>
                <a href="/form2"><button type="button">Back</button></a>
                <button type="submit">Next</button>
            </form>
        </div>
    </body>
    </html>';
});

Route::get('/form4', function () {
    return '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f4; }
            .container { background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: inline-block; }
            button { background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; margin-top: 20px; }
            button:hover { background-color: #0056b3; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Registration Complete</h1>
            <a href="/form1"><button type="button">Restart</button></a>
        </div>
    </body>
    </html>';
});

Route::fallback(function () {
    return '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f4; }
            .container { background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: inline-block; }
            button { background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; margin-top: 20px; }
            button:hover { background-color: #0056b3; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>404 - Page Not Found</h1>
            <p>Sorry, the page you are looking for could not be found.</p>
            <a href="/form1"><button type="button">Go to Home</button></a>
        </div>
    </body>
    </html>';
});
