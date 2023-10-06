<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Test - Bootstrap</title>

    <!--- css de bootstrap --->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossOrigin="anonymous" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossOrigin="anonymous">


    <!--- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossOrigin="anonymous"></script>

    <!--- JQuery validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="header">
                    <h3>Inscription</h3>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Inscription au portail de jeux
                </div>


                <div class="panel-body">
                                            <form id="inscription_form" action="check.php" method="post">
                                                <!-- Nom -->
                                                <div class="form-group row">
                                                    <label for="nom_per" class="col-sm-2 col-form-label">Nom</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="nom_per" name="nom_per" placeholder="votre nom">
                                                    </div>
                                                </div>
                                                <!-- Prenom -->
                                                <div class="form-group row">
                                                    <label for="prenom_per" class="col-sm-2 col-form-label">Prenom</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="prenom_per" name="nom_per" placeholder="votre prenom">
                                                    </div>
                                                </div>
                                                <!-- E-mail -->
                                                <div class="form-group row">
                                                    <label for="email_per" class="col-sm-2 col-form-label">E-mail</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="email_per" name="email_per" placeholder="votre adrresse e-mail">
                                                    </div>
                                                </div>
                                                <!-- mdp -->
                                                <div class="form-group row">
                                                    <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="password" name="password" placeholder="votre mot de passe">
                                                    </div>
                                                </div>
                                                <!-- vérification du mdp -->
                                                <div class="form-group row">
                                                    <label for="password_conf" class="col-sm-2 col-form-label">Mot de passe(confirmation)</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="password_conf" name="password_conf" placeholder="Saissisez votre mot de passe une seconde fois">
                                                    </div>
                                                </div>
                                                <!-- Check Box -->
                                                <div class="form-group row">
                                                    <div class="col-sm-offset-2 checkbox">
                                                        <label class="col-sm-10 col-form-label">
                                                            <input type="checkbox" id="news_letter" name="news_letter" value="1"  checked="checked">La formation d'informaticien m'intéresse
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- Bouttons de la validation validé ou annulation annulé-->
                                                <div class="form-group row">
                                                    <div class="col-sm-2 col-sm-offset-8">
                                                        <input type="submit" class="form-control input-sm btn-primary" id="submit_conf" name="submit_conf" value="S'inscrire">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="reset" class="form-control input-sm btn-warning" id="reset_con" name="reset_con" value="Annuler">
                                                    </div>
                                                </div>
                                            </form>
                </div>
                <div class="panel-footer">
                </div>
            </div>
        </div>
    <script src="./js/inscription.js"></script>
    </body>
</html>