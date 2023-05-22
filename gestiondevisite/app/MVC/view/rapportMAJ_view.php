<html>

<head>
    <!--Unicode transformation format -->
    <meta charset="utf-8" /> <!-- Spécifiez l'encodage des caractères -->
    <title>Gestion de visite</title>
</head>

<div class="mt-4 border-top pt-4"></div>

<br>

<form class="form-control" action="../controller/rapport_controller.php" method="post" name="formUserData">

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label"> Motif : </label>
        <div class="col-sm-10">
            <label>
                <?= $dataRapport[0]["motif"]?>
            </label>
        </div>
    </div>

    <div class="form-group row">
        <label for="prenom" class="col-sm-2 form-label"> Bilan : </label>
        <div class="col-sm-10">
            <label>
                <?= $dataRapport[0]["bilan"]?>
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <div class="form-group row">
        <label for="tel" class="col-sm-2 form-label"> Date : </label>
        <div class="col-sm-10">
            <label>
                <?= $dataRapport[0]["dateRapport"]?>
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <div class="form-group row">
        <label for="adresse" class="col-sm-2 form-label"> Medecin : </label>
        <div class="col-sm-10">
            <label>
                <?= $dataRapport[0]["medecinnom"]?>,
                <?= $dataRapport[0]["medecinprenom"];?><br>
                <?= $dataRapport[0]["medecinadresse"]?><br>
                <?= $dataRapport[0]["tel"]?>
            </label>
        </div>
    </div>
    <div class="mt-4 border-top pt-4"></div>
    <div class="form-group row">
        <label for="cp" class="col-sm-2 form-label"> Visiteur : </label>
        <div class="col-sm-10">
            <label>
                <?= $dataRapport[0]["visiteurnom"]?>,
                <?= $dataRapport[0]["visiteurprenom"]?><br>
                <?= $dataRapport[0]["visiteuradresse"]?><br>
                <?= $dataRapport[0]["ville"]?><br>
                <?= $dataRapport[0]["cp"]?>
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>
    <br>
    <button type="submit" class="btn btn-warning" name="back" >BACK</button>

</form>
</html>