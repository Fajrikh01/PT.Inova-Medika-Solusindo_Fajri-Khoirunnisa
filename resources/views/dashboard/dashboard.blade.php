<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Selamat datang {{ Auth::user()->name }} <p>

    <div class="container">
        <div class="">
            <table class="table table-bordered">
                <thead class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                    </tr>
                </thead>
    
            </table>
        </div>
    </div>
</body>
</html>