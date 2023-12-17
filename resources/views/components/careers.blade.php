<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Careers</title>
  <style>
    /* Add your custom styles here */

body {
  font-family: Arial, sans-serif;
}

header {
  text-align: center;
  margin-bottom: 20px;
}

h2 {
  font-size: 2rem;
  font-weight: bold;
}

table {
  border-collapse: collapse;
  border: 1px solid #ddd;
  width: 100%;
}

th, td {
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

a {
  display: block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
}

  </style>
  </head>
<body>
  <header>
    <h2>Careers</h2>
  </header>
  <main>
    <table>
        <tr>
          <th>Positions</th>
          <th>Salary</th>
          <th>Date Created</th>
        </tr>

        @foreach ($careers as $career)
        <tr>
          <td>{{ $career->position }}</td>
          <td>{{ $career->salary }}</td>
          <td>{{ $career->created_at->format('M d, Y') }}</td> </tr>
        @endforeach
    </table>
    <a href="/">Homepage</a>
  </main>
</body>
</html>
