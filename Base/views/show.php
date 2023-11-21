<?php 
require '../helpers/sessionStart.php';
require '../helpers/request.php';
$title = $_GET['name'];
require_once __DIR__.'/partials/header.php';
?>

<main>
    
    <div class="singlepokemon">
        <div class="wrapper">
            <div class="current_pokemon">
                <h1>
                    <?php echo $_GET['name'];?>
                </h1>
                <figure>
                    <img src="<?php echo $SelectedPkmData['img']?>" alt="<?php $SelectedPkmData['pkmName']?>">
                </figure>
                <p><?php echo $SelectedPkmData['id']?></p>
            </div>
            <div class="stats">
                <h2>Stats</h2>
                <p>HP:<?php echo $SelectedPkmData['hp']?></p>
                <p>ATK:<?php echo $SelectedPkmData['atk']?></p>
                <p>DEF:<?php echo $SelectedPkmData['def']?></p>
                <p>ATK-SPE:<?php echo $SelectedPkmData['atk_spe']?></p>
                <p>DEF-SPE:<?php echo $SelectedPkmData['def_spe']?></p>
                <p>SPEED:<?php echo $SelectedPkmData['speed']?></p>
            </div>
        </div>
        <div class="description">
            <h2>Description</h2>
            <p><?php echo $SelectedPkmData['bio']?></p>
        </div>
        <h2>Evolution(s)</h2>
        <div class="evolution">
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
    </div>
    
</main>

<?php 
require_once __DIR__.'/partials/footer.php';
?>