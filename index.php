<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telefonbuch </title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
        <div class="large-6 columns">
            <h1>Telefonbuch</h1>
        </div>
        <div class="large-6 columns">
            <a class="add-btn button right small" data-reveal-id="addModal">Neue Kontakte</a>
            <div id="addModal" class="reveal-modal" data-reveal>
                <h2>Neue Kontakte</h2>
                <form id="addContact" action="#" method="post">
                    <div class="row">
                        <div class="large-6 columns">
                            <label>
                                Vorname
                                <input name="first_name" type="text" placeholder="Vorname Eingeben" />
                            </label>
                        </div>
                        <div class="large-6 columns">
                            <label>
                                Nachname
                                <input name="last_name" type="text" placeholder="Nachname Eingeben" />
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-4 columns">
                            <label>
                                Email
                                <input name="email" type="email" placeholder="Email Eingeben" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>
                                Telefonnummer
                                <input name="phone" type="text" placeholder="Telefonnummer Eingeben" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>
                                Contact Gruppe
                                <select name="contact_group">
                                	<option disabled selected>Conntact gruppe auswählen</option>
                                    <option value="Family">Familie</option>
                                    <option value="Friends">Freunde</option>
                                    <option value="Business">Business</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-6 columns">
                            <label>
                                Adresse 1
                                <input name="address1" type="text" placeholder="Adresse Eingeben" />
                            </label>
                        </div>
                        <div class="large-6 columns">
                            <label>
                                Adresse 2
                                <input name="address2" type="text" placeholder="Adresse Eingeben" />
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-4 columns">
                            <label>
                               Stadt
                                <input name="city" type="text" placeholder="Stadt Eingeben" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>
                               Bundesland
                                <input name="state" type="text" placeholder="Bundesland Eingeben" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>
                                PIZ
                                <input name="zipcode" type="text" placeholder="Postleitzahl" />
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Notiz
                                <textarea name="notes" placeholder="....."></textarea>
                            </label>
                        </div>
                    </div>
                <input name="submit" type="submit" class="add-btn button right" value="Speichern" />
                <a class="close-reveal-modal">&#215;</a>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Loading Image -->
    
        <div id="loaderImage">
            <img src="img/ajax-loader.gif" />
        </div>
    
    <!-- Main Content -->
    
        <div id="pageContent"></div>
    
    <!-- /Main Content -->
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
