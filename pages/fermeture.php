<!DOCTYPE Html>
<html lang="fr">
          <head>
                    <meta charset="utf-8">
                    <title>connexion</title>
                    <link rel="stylesheet" href="../styles.css"/>
                    <link href="css/styles.css" rel="stylesheet" />
                    <link rel="stylesheet" href="../bootstrap.css"/>
          </head>
          <body>
               <?php include("../includes/menuacc.php"); ?>
                <?php include("../includes/header.php"); ?>
                    <div class="container">
                              <div class="row">                                       
                                                                         
                                        <div class="col-12 col-sm-6 col-md-8 col-lg-9">
                                             
                                                  <form method="get" action="traitement.php">
                                                            <div class="row">
                                                                      <div class="col-12 col-sm-6 form-group">
                                                                                <label for="nom">N° de compte</label>
                                                                                <input type="text" name="numCmpt" required="required" pattern="\d" placeholder="Entrez le N° de compte" class="form-control">
                                                                      
                                                                      <input type="submit" value="Suprimer" class="btn btn-success">
                                                            </div>
                                                  </form>
                                        </div>
                                        
                              </div>
                                                  
                                        
                    </div>

                   
          </body>


          <!-- footer-->
        <?php include("../includes/footer.php");?>
</html>
