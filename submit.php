<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Subdomain igénylés [Urlshort]</h3>

<div class="container">
  <form action="https://formsubmit.co/3dff6ab4ae5c90a462412f2a03da9895" method="POST" />
    <label for="fname">Neved</label>
    <input type="text" id="fname" name="Név" placeholder="Dömperes Gangmaster">
    <label for="lname">Dc neved</label>
    <input type="text" id="lname" name="Discord" placeholder="Bali0531">
    <label for="country">Ország</label>
    <select id="country" name="Ország">
      <option value="Magyar">Magyarország</option>
      <option value="Ukrán">Ukrajna</option>
      <option value="Egyébb">Egyébb</option>
    </select>

    <label for="subject">Subdomain + link amit akarsz!</label>
    <textarea id="subject" name="Adat" placeholder="pl: /kukasauto https://kukasautok.com/dömper" style="height:200px"></textarea>

    <input type="submit" value="Igénylés">
  </form>
</div>

</body>
</html>