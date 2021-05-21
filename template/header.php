<head>
<meta charset='UTF-8'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Bug tracker</title>
</head>
<?php  
    $path = '/form.php';

    echo "Path: $path";
    // require "forms/form.php"; 
    
?>

<body class="bg-light ">
    <nav class="navbar bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">Mack Tracker</a> 
            <!-- FIND THE PATH BELOW SHOULD BE EASY -->
            <a href="form.php" class="btn add-project bg-primary">Add a Project</a>
        </div>    
    </nav>