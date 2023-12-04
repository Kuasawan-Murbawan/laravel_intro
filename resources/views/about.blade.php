<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
  <style>body {
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
</style>
</head>
<body>

  <h1>About Us</h1>

  <br>

  <p>Username: {{ $username }}</p>
  <p>Age: {{ $age }}</p>

  <br>

  <a href="/">Homepage</a>
  <a href="/contact">Contact Us</a>

</body>
</html>
