<?php
include 'header.php';
?>
  <div class="container">
    <h1>Saved Orders</h1>
            <?php
            $count=0; 
            $order_file= __DIR__ . '/../data/order.json';
            $json_file=file_get_contents($order_file);
              $orders=json_decode($json_file,true);
              foreach($orders as $order):
                $cart=$order['cart'];
                $count_item=count($cart);
                $count+=1;
                
              ?>
    <table>
      <thead>
        <tr>
          <th>order number</th>
          <th>name</th>
          <th>email</th>
          <th>address</th>
          <th>number of item</th>
        </tr>
      </thead>
      <tbody>
              
            <tr>
            <td><?php echo $count;?></td>
            <td><?php echo $order['name'] ?></td>
            <td><?php echo $order['email'] ?></td>
            <td><?php echo $order['address'] ?></td>
            <td><?php echo $count_item?></td>
            </tr>


            <tr>
            <td colspan="5">

            <?php
                $sum=0; $total=0; 
                foreach($cart as $item):
                $total= $item['price'] * $item['quantity'];
                $sum+=$total;
                ?>
            
                <div class="items">
              <div><strong><?php echo "item id:"." ".$item['id'] ?></strong>
               <strong><?php echo "-- name: ". $item['name']?></strong>
               <strong><?php echo "--price: ". $item['price']?></strong>
               <strong><?php echo "--quantity: ". $item['quantity']?></strong></div>
                </div>
            <?php endforeach; ?>

          </td>
        </tr>
        <tr>
            <td><strong>total:<?php echo $sum; ?></strong></td>
        </tr>
      </tbody>
    </table>
    <?php endforeach;?>


  </div>

</body>
</html>