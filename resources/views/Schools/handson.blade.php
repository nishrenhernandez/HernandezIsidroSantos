<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands-On Activity Laravel</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h1, h2 {
        color: #2c3e50;
        font-size: 28px;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #34495e;
    }

    input[type="text"],
    input[type="number"] {
        width: 90%;
        padding: 10px;
        margin: 20px;
        border: 1px solid #bdc3c7;
        border-radius: 4px;
    }

    button {
        width: 100%;
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
    }

    button:hover {
        background-color: #2980b9;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #2c3e50;
    }

    th, td {
        padding: 10px;
        text-align: center;
        font-size: 16px;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    td {
        background-color: #ecf0f1;
    }

    .success, .error {
        max-width: 400px;
        margin: 0 auto;
        padding: 10px;
        text-align: center;
        margin-top; 10px;
    }

    .success {
        background-color: #2ecc71;
        color: white;
    }

    .error {
        background-color: #e74c3c0;
        color: white;
    }
</style>

<body>

    <h1>Enter School Information</h1>


    <form action="{{route('Schools.store')}}" method="post">
        @csrf
        @method('post')
        <label for="schoolname">School Name:</label>
        <input type="text" id="schoolname" name="schoolname"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" ><br><br>

        <label for="schoolID">School ID:</label>
        <input type="number" id="schoolID" name="schoolID" ><br><br>

        <button type="submit">Save</button>
    </form>

    @if (session('success'))
        <div style="color: green; text-align:center; margin-top: 10px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red; text-align:center; margin-top: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Saved Schools</h2>
    <table border="1">
        <thead>
            <tr>
                <th>School Name</th>
                <th>Address</th>
                <th>School ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Schools as $school)
                <tr>
                    <td>{{ $school->schoolname }}</td>
                    <td>{{ $school->address }}</td>
                    <td>{{ $school->schoolID }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
