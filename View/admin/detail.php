<?php
ob_start();
?>
<div class="row">
    <div class="col-6">
        <div class="card">
            <img src="<? $Produit[5] ?>" alt="photo">
        </div>
    </div>
    <div class="col-6">
        <h3><?= $Produit[1] ?>(<?= $Produit[2] ?>DT)</h3>
        <p><?= $Produit[4] ?></p>
        <?php
        if ($Produit[6] == 1) {
            echo "<span class='badge badge-secondary'> en Promo</span>";
        } else {
            echo "<span class='badge badge-danger'>pas en Promo</span>";
        }
        ?>
    </div>

</div>


<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>