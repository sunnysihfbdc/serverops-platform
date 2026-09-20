<?php

require_once __DIR__ . '/db.php';

$appVersion = "1.1.0";
$hostname = gethostname();

$stmt = $pdo->query("SELECT * FROM servers ORDER BY id");
$servers = $stmt->fetchAll();
?>

<?php

$appVersion = "1.1.0";

$hostname = gethostname();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServerOps Portal</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .header {
            background: #1f2937;
            color: white;
            padding: 20px 40px;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .status {
            color: green;
            font-weight: bold;
        }

        .version {
            color: #2563eb;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>ServerOps Portal</h1>
</div>

<div class="container">

    <div class="card">

        <h2>Application Dashboard</h2>

        <p>
            Application Status:
            <span class="status">RUNNING</span>
        </p>

        <p>
            Application Version:
            <span class="version">
                <?php echo $appVersion; ?>
            </span>
        </p>

        <p>
            Container Hostname:
            <strong>
                <?php echo $hostname; ?>
            </strong>
        </p>

        <hr>

        <h3>Infrastructure</h3>

        <p>Environment: Development</p>
        <p>Platform: Kubernetes / K3s</p>
        <p>Web Server: Nginx</p>
        <p>Runtime: PHP-FPM</p>

    </div>

</div>

</body>
</html>
