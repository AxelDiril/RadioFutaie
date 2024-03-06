<!DOCTYPE html>

<form action="vote_count.php" method="POST"> 
<label for="vote">selectionnez une note:</label>

<select name="value_vote" id="vote">
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


<label for='datetime_vote'>Date & Heure : </label>
            <input type="datetime-local" id="datetime_vote" name="datetime_vote" required><br><br>

            

<input type="submit" value="Valider">
</form>

</html>