<?php 
    // use isset to call the GET and add the name values in the brackets
    if ( isset($_POST['submit'])) {
        echo $_POST["author"];
        echo $_POST["project_name"];
        echo $_POST["project_description"];
    }
?>

<!DOCTYPE html>
<html>
    <?php  include('template/header.php'); ?>

    <section class='container'>
     <h4 class='center'></h4>
     <form class='form' action='form.php' method="POST">
        <label >Your Name</label>
        <input type='text' name='author'>
        <label>The Projects Title</label>
        <input type='text' name='project_name'>
        <label>Please Describe the Problem</label>
        <input type='text' name='project_description'>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn bg-dark"> 
        </div>
     </form>
    
    </section>

    <?php  include('template/footer.php'); ?>

</html>