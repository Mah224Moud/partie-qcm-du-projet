<?php
    echo "<h1> Bienvenue sur la page </h1>";
    $fichierXml= simplexml_load_file("fichier.xml");
    $i= 0;

    if(empty($_POST["reponse1"]) && empty($_POST["reponse2"]) && empty($_POST["reponse3"]) && empty($_POST["reponse4"]) && empty($_POST["reponse5"]) && empty($_POST["reponse6"]) && empty($_POST["reponse7"]) && empty($_POST["reponse8"]) && empty($_POST["reponse9"]) && empty($_POST["reponse10"]))
        echo "<p style=color:red>Toutes les questions ne sont pas répondues</p>";
    if(isset($_POST['send']) && isset($_POST['reponse1']) && isset($_POST['reponse2']) && isset($_POST['reponse2']))
    {
        echo $_POST['reponse1']."<br>";
        echo $_POST['reponse2']."<br>";
        echo $_POST['reponse3']."<br>";
        $res=0;
        if($_POST['reponse1'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse2'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse3'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse4'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse5'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse6'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse7'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse8'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse9'] == "vrai")
        {
            $res+= 10;
        }
        if($_POST['reponse10'] == "vrai")
        {
            $res+= 10;
        }

        echo $res;
    }
?>
    <form action="" method="POST">
        <fieldset>
            <?php foreach($fichierXml as $contenu): ?>
                <?php $i++; ?>
                <h4><?=$contenu?></h4>
                <input type="radio" name="reponse<?=$i?>" id="" value="<?=$contenu->reponse1['check']?>"><label for=""><?=$contenu->reponse1?></label><br>
                <input type="radio" name="reponse<?=$i?>" id="" value="<?=$contenu->reponse2['check']?>"><label for=""><?=$contenu->reponse2?></label><br>
                <input type="radio" name="reponse<?=$i?>" id="" value="<?=$contenu->reponse3['check']?>"><label for=""><?=$contenu->reponse3?></label><br>
            <?php endforeach ?>
            <input type="reset" value="Annuler"> <input type="submit" value="Envoyer" name="send">
        </fieldset>
    </form>