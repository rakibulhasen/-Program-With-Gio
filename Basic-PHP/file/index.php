<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
  <title>Home Page</title>
</head>

<body class="container" style="margin-top: 50px">

<?php include 'partials/nav.php' ?>

  <h1>Home</h1>
  <p> Hello from the Home page</p>

  <form>
  <fieldset>
    <label for="nameField">Name</label>
    <input type="text" placeholder="CJ Patoilo" id="nameField">
    <label for="ageRangeField">Age Range</label>
    <select id="ageRangeField">
      <option value="0-13">0-13</option>
      <option value="14-17">14-17</option>
      <option value="18-23">18-23</option>
      <option value="24+">24+</option>
    </select>
    <label for="commentField">Comment</label>
    <textarea placeholder="Hi CJ …" id="commentField"></textarea>
    <div class="float-right">
      <input type="checkbox" id="confirmField">
      <label class="label-inline" for="confirmField">Send a copy to yourself</label>
    </div>
    <input class="button-primary" type="submit" value="Send">
  </fieldset>
</form>
</body>

</html>