<DOCTP html>
<html>
  <body>
      <h1>Pizza Shop 2.0</h1>
    <form method="post" action="mailto:h.akkas@hetcml.nl">
    <em>Name</em>
    <input type="text" size="20" maxlength="40" name="voornaam">
    <br>
    <em>Pizza Topping</em>
    <input type="radio" name="Pizza Topping" value="Supreme">Supreme
    <input type="radio" name="Pizza Topping" value="vegetarian">vegetarian
    <input type="radio" name="Pizza Topping" value="Hawaiian">Hawaiian
    <br>
    <em>Pizza Sauce</em>
    <select name="Pizza Sauce">
        <option>Tomato</option>
        <option>no sauce (not recommended)</option>
    </select>
    <br>
    <em>Optional Extras</em>
    <select name="Optional Extras">
        <option>Extra Cheese</option>
        <option>Gluten Free Base</option>
    </select>
    <br>
    <em>Delivery Instructions:</em>
    <br>
    <textarea rows="7" cols="25" name="opmerkingen"></textarea>
    <input type="submit" value="Send my Order">
    </form>
</body>
</html>
