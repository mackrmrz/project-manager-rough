<?php 
    $conn = mysqli_connect('localhost', 'mack', 'project_manager');

    if(!$conn) {
        echo "Connection ERROR : " . mysqli_connect_error();
    }

    //write query for all items
    $sql = 'SELECT project_name, project_author FROM projects ORDER BY project_created_at';

    //write query & get results
    $result = mysqli_query($conn, $sql);

    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang='en'>

<?php include("template/header.php"); ?>
<!-- <h1>Project Manager</h1> -->
<div class="container">
    <div class="row">
        <?php foreach($projects as $project) { ?>
            <div class="col">
                <div class="card">
                    <div class="card-title">
                        <h5><?php echo htmlspecialchars($project["project_name"]); ?></h5>
                        <h6><?php echo htmlspecialchars($project["project_author"]); ?> </h6>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include("template/footer.php"); ?>
