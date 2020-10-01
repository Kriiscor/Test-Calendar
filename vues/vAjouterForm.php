
<!--Vue pour la saisie des informations dans un formulaire!-->

<div class="container">

<form name="formAjout" action="" method="post">
  <fieldset>
    <legend>Entrez les données sur la fleur à ajouter </legend>
    <label> Référence : </label> <input type="text" placeholder="Entrer la référence …"name="ref" size="10" /><br />
    <label>Désignation :</label> <input type="text" name="des" size="20" /><br />
    <label>Prix :</label> <input type="text" name="prix" size="10" /><br />
    <label>Image :</label> <input type="text" name="image" size="20"/><br />    
    <label>Catégorie :</label>
    <select name="cat">
       <option selected value = "bul">Bulbes</option>
       <option value = "mas">Plantes à massif</option>
       <option value = "ros">Rosiers</option>
    </select> 
  </fieldset>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <button type="reset" class="btn">Annuler</button>
  <p />
</form>
</div>


