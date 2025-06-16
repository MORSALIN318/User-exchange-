<?php include 'db.php'; ?>
<form method="post">
  <input name="name" placeholder="Your Name"><br>
  <input name="email" placeholder="Your Email"><br>
  <input name="account" placeholder="Your PM/Payeer ID"><br>
  <input name="amount" placeholder="Amount"><br>
  <select name="method">
    <option value="PerfectMoney">Perfect Money</option>
    <option value="Binance">Binance</option>
  </select><br>
  <button name="submit">Buy</button>
</form>

<?php
if (isset($_POST['submit'])) {
  $stmt = $conn->prepare("INSERT INTO orders (type, name, email, account, amount, method) VALUES ('buy', ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssds", $_POST['name'], $_POST['email'], $_POST['account'], $_POST['amount'], $_POST['method']);
  $stmt->execute();
  echo "Order Placed!";
}
?>