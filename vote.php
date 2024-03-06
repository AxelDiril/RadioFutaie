<!DOCTYPE html>

<form action="vote_count.php" method="POST"> 
<label for="vote">selectionnez une note:</label>

<select name="vote_value" id="vote">
  <option value="">?/10</option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>

<label for="id_playlist">id_playlist</label>
       <input type="text" id="id_playlist" name="id_playlist"
       required  minlength="2" maxlength="20" size="21"/><br><br>
  
<label for="id_track">id_track</label>
       <input type="text" id="id_track" name="id_track"
       required  minlength="2" maxlength="20" size="21"/><br><br>
    
<label for="id_user">id_user</label>
       <input type="text" id="id_user" name="id_user"
       required  minlength="2" maxlength="20" size="21"/><br><br>

<label for='datetime_vote'>Date & Heure : </label>
            <input type="datetime-local" id="datetime_vote" name="datetime_vote" required><br><br>

            

<input type="submit" value="Valider">
</form>

</html>