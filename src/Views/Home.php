<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td,
  th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>

<body>
  <table>
    <tr>
      <th>ProductID</th>
      <th>ProductName</th>
      <th>CategoryID</th>
      <th>UnitPrice</th>
      <th>CreateAt</th>
      <th>Description</th>
    </tr>

    <?php foreach ($products as $product) { ?>
      <tr>
        <td><?= $product['ProductID'] ?></td>
        <td><?= $product['ProductName'] ?></td>
        <td><?= $product['CategoryID'] ?></td>
        <td><?= $product['UnitPrice'] ?></td>
        <td><?= $product['CreateAt'] ?></td>
        <td><?= $product['Description'] ?></td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>