<form method="post" action="#">
    <div>
        <input type="text" name="eleve">
    </div>
    <div>
        <input type="text" name="groupe">
    </div>
    <input type="submit" value="valider" name="valider">

</form>
<div>
    <?php if($result !== null){
        echo '<p>Il y aura '.$result.' personnes par groupe</p>';
    }

    ?>

</div>
