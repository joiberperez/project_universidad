<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<?php include "./app/core/config.php"; ?>
<?php include ROOT . "/core/autoload.php" ?>

<?php 
$router = new Router();
$router->run();
?>

</html>
