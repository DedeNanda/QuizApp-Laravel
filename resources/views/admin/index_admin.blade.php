<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset("image/icon.png") }}" type="image/x-icon">
    <title>ini admin</title>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="header">
            <h1>Welcome, Admin</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <h3>Total Users</h3>
                <p>1,230</p>
            </div>
            <div class="card">
                <h3>Page Views</h3>
                <p>12,345</p>
            </div>
            <div class="card">
                <h3>Messages</h3>
                <p>85</p>
            </div>
            <div class="card">
                <h3>Revenue</h3>
                <p>$7,890</p>
            </div>
        </div>
    </div>

    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f4f4f9;
        }

        .sidebar {
            width: 250px;
            background: #1e1e2f;
            color: #fff;
            padding: 20px 10px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5rem;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            padding: 10px 15px;
            display: block;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background: #3d3d63;
        }

        .main {
            flex: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .header .search-bar {
            flex: 1;
            margin-left: 20px;
        }

        .header .search-bar input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .card p {
            color: #555;
        }
    </style>
</body>
</html>