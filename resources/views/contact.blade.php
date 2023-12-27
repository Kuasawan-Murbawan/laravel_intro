<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }

        h1 {
            color: #009688;
        }

        p {
            font-size: 18px;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 8px 16px;
            text-decoration: none;
            color: #fff;
            background-color: #009688;
            border-radius: 5px;
        }

        a:hover {
            background-color: #00796b;
        }

        table {
            border-collapse: collapse;
            border: 1px solid #ddd;
            width: 100%;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            font-weight: bold;
        }

        tr:nth-child(odd) {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h1>Contact Us</h2>


        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>University</th>
                <th>Position Apply</th>
            </tr>

            @foreach ($applicants as $applicant)
                <tr>
                    <td>{{ $applicant->fname }}</td>
                    <td>{{ $applicant->lname }}</td>
                    <td>{{ $applicant->university }}</td>
                    <td>{{ $applicant->positionApply }}</td>
                </tr>
            @endforeach

        </table>

        @include('/components.application-form')


        <a href='/'>Homepage</a>
        <a href='/about/husyairi/21'>About Us</a>

</body>
