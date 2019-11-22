<?php include ('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query 
$db->query("SELECT * FROM `addressbook_contacts`");

//Assign Result Set
$contacts = $db->resultset();
?>





<div class="row">
    <div class="large-12 columns">
        <table>
            <thead>
                <tr>
                    <th width="100">Name</th>
                    <th width="100">Telefonnummer</th>
                    <th width="150">Email</th>
                    <th width="250">Adresse</th>
                    <th width="100">Gruppe</th>
                    <th width="200">Actions</th>
                </tr>
            </thead>
            <tbody>
            
            	<?php foreach($contacts as $contact) : ?>
                <tr>
                    <td><a href="#"><?php echo $contact->first_name.' '.$contact->last_name; ?></a></td>
                    <td><?php echo $contact->phone;?></td>
                    <td><?php echo $contact->email;?></td>
                    <td>
                        <ul>
                            <li><?php echo $contact->address1;?></li>
                            <li><?php if($contact->address2) echo $contact->address2; ?></li>
                            <li><?php echo $contact->city.' '.$contact->state.' '.$contact->zipcode;?></li>
                        </ul>
                    </td>
                    <td><?php echo $contact->contact_group;?></td>
                    <td>
                        <ul class="button-group">
                            <li>
                            	<a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id;?>" data-contact-id="<?php echo $contact->id;?>">Verw.</a>
                            	<div id="editModal<?php echo $contact->id;?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
                            		<h2>Neue Kontakte</h2>
					                <form id="editContact" action="#" method="post">
					                    <div class="row">
					                        <div class="large-6 columns">
					                            <label>
					                               Vorname
					                                <input name="first_name" type="text" placeholder="Vorname Eingeben" value="<?php echo $contact->first_name; ?>" />
					                            </label>
					                        </div>
					                        <div class="large-6 columns">
					                            <label>
					                                Nachname
					                                <input name="last_name" type="text" placeholder="Nachname Eingeben" value="<?php echo $contact->last_name; ?>"/>
					                            </label>
					                        </div>
					                    </div>
					                    
					                    <div class="row">
					                        <div class="large-4 columns">
					                            <label>
					                                Email
					                                <input name="email" type="email" placeholder="Email Eingeben" value="<?php echo $contact->email; ?>"/>
					                            </label>
					                        </div>
					                        <div class="large-4 columns">
					                            <label>
					                                Telefonnummer
					                                <input name="phone" type="text" placeholder="Telefonnummer Eingeben" value="<?php echo $contact->phone; ?>"/>
					                            </label>
					                        </div>
					                        <div class="large-4 columns">
					                            <label>
					                                Contact Gruppe
					                                <select name="contact_group">
					                                    <option value="Familie" <?php if($contact->contact_group == 'Family') echo "selected" ?>>Familie</option>
					                                    <option value="Frunde" <?php if($contact->contact_group == 'Friends') echo "selected" ?>>Freunde</option>
					                                    <option value="Business" <?php if($contact->contact_group == 'Business') echo "selected" ?>>Business</option>
					                                </select>
					                            </label>
					                        </div>
					                    </div>
					                    
					                    <div class="row">
					                        <div class="large-6 columns">
					                            <label>
					                                Adresse 1
					                                <input name="address1" type="text" placeholder="Adresse Eingeben" value="<?php echo $contact->address1; ?>"/>
					                            </label>
					                        </div>
					                        <div class="large-6 columns">
					                            <label>
					                                Adresse 2
					                                <input name="address2" type="text" placeholder="Adresse Eingeben" value="<?php echo $contact->address2; ?>"/>
					                            </label>
					                        </div>
					                    </div>
					                    
					                    <div class="row">
					                        <div class="large-4 columns">
					                            <label>
					                                Stadt
					                                <input name="city" type="text" placeholder="Stadt Eingeben" value="<?php echo $contact->city; ?>"/>
					                            </label>
					                        </div>
					                        <div class="large-4 columns">
					                            <label>
					                               Bundesland
					                                <input name="state" type="text" placeholder="Bundesland Eingeben" value="<?php echo $contact->state; ?>"/>
					                            </label>
					                        </div>
					                        <div class="large-4 columns">
					                            <label>
					                                PIZ
					                                <input name="zipcode" type="text" placeholder="Postleitzahl Eingeben" value="<?php echo $contact->zipcode; ?>"/>
					                            </label>
					                        </div>
					                    </div>
					                    
					                    <div class="row">
					                        <div class="large-12 columns">
					                            <label>
					                                Notiz
					                                <textarea name="notes" placeholder="Notiz Eingeben"><?php echo $contact->notes; ?></textarea>
					                            </label>
					                        </div>
					                    </div>
									<input type="hidden" name="id" value="<?php echo $contact->id; ?>"/>
					                <input name="submit" type="submit" class="add-btn button right" value="Speichern" />
					                <a class="close-reveal-modal">&#215;</a>
					                </form>
                            	</div>
                            </li>
                            <li>
                            	<form id="deleteContact" action="#" method="post" >
                            		<input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                            		<input type="submit" class="delete-btn button tiny secondary alert" value="Lösc" />
                            	</form>
                            </li>
                        </ul>
                    </td>
                </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
    </div>
</div>
