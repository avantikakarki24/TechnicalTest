<?php
include('header.php');
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">TotalPrice</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($cart as $c){
    ?>
      <tr>
      <td><?php echo $c['name'] ?></td>
      <td><?php echo $c['price'] ?></td>
      <td><?php echo $quantity[$c['name']] ?></td>
      <td><?php echo $c['price'] * $quantity[$c['name']]?></td>

      <td>
      <form action='mycart.php' method='POST'>
      <button name='remove' Class='btn btn-outline-danger'>REMOVE</button>
      <input type='hidden' name='name' value=<?php echo $c['name'] ?>>
      </form>
      </td>
    </tr>
    <?php $price += $c['price'] * $quantity[$c['name']];
          $price_value = round($price, 2); 
    

} ?>
  </tbody>
</table>

<h2>Total: 
<?php echo $price_value ?>
</h2>





