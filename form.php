<form  action="thanks.php"  method="post">

<div>
  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_lastName">
</div>
<div>
  <label  for="Prénom">Prénom :</label>
  <input  type="text"  id="prénom"  name="user_firstName">
</div>
<div>
  <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email">
</div>
<div>
  <label  for="phone">Télephone :</label>
    <input  type="phone"  id="phone"  name="user_phone">
</div>
<div>
  <p>
  <label  for="message">Message :</label>
<select name="Sujet" id="Sujet">
  <option value="Sujet 1">Sujet 1</option>
  <option value="Sujet 2">Sujet 2</option>
  <option value="Sujet 3">Sujet 3</option>
  </select>
  </p>
  <textarea  id="message"  name="user_message"></textarea>
</div>

<div  class="button">
  <button  type="submit">Envoyer votre message</button>
</div>

</form>

