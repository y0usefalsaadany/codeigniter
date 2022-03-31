<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Subscriptions</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
<a class="navbar-brand" href="#">
Customers Subscriptions
</a>
</nav><br>

<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subscription_Title</th>
      <th scope="col">Subscription_Type</th>
    </tr>
  </thead>
  <tbody id="data">

  </tbody>
</table>
</div>
<script>
fetch("http://127.0.0.1:8000/api/v1/customers").then(
    res => {
    res.json().then(
      data => {
        console.log(data.data);
        if (data.data.length > 0) {

          var temp = "";
          data.data.forEach((itemData) => {
            temp += "<tr>";
            temp += "<td>" + itemData.id + "</td>";
            temp += "<td>" + itemData.subscription.title + "</td>";
            temp += "<td>" + itemData.subscription.type + "</td></tr>";
          });
          document.getElementById('data').innerHTML = temp;
        }
      }
    )
  }
)
</script>