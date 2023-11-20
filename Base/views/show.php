<?php 
require '../helpers/sessionStart.php';
require '../helpers/request.php';
$title = $_GET['name'];
require_once __DIR__.'./partials/header.php';
?>

<main>
    <h1>
        <?php echo $_GET['name'];?>
    </h1>
    <a href="/">Homepage</a>
    <div>
        <figure>
            <img src="<?php echo $SelectedPkmData['img']?>" alt="<?php $SelectedPkmData['pkmName']?>">
        </figure>
        <?php if (!empty($evolution1Data)) : ?>
    <div>
        <img src="<?php echo $evolution1Data['img']; ?>" alt="<?php echo $evolution1Data['pkmName']; ?>">
        <p><?php echo $evolution1Data['pkmName']; ?></p>
    </div>
        <?php endif; ?>

        <?php if (!empty($evolution2Data)) : ?>
    <div>
        <img src="<?php echo $evolution2Data['img']; ?>" alt="<?php echo $evolution2Data['pkmName']; ?>">
        <p><?php echo $evolution2Data['pkmName']; ?></p>
    </div>
        <?php endif; ?>

    </div>
    
</main>

<?php 
require_once __DIR__.'/partials/footer.php';
?>