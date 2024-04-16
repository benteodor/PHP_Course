<?php 
// Write your PHP code here

// Step 1: Use and declare php strict types

declare(strict_types=1);
include 'includes/header.php'; 
?>
 
<?php 


// Step 2:  Create a class for account (with its properties e.g. number, type and balance)
class Account 
{
  public string $number;
  public string $type;
  public float $balance;

// Step 3: Create a PHP constructor with argument types e.g. number, type and balance If a balance is not given when creating the object, a default value of 0.00 should be used.
public function __construct(string $number, string $type, float $balance = 0.00) 
{
  $this->number = $number;
  $this->type = $type;
  $this->balance = $balance;
}

// Step 4: Create two methods for deposit and withdraw which will update the value stored in the balance property. They should be given arguments and return type declaration of float.
public function deposit(float $amount): float
{
  $this->balance += $amount;
  return $this->balance;
}

public function withdraw(float $amount): float 
{
  $this->balance -= $amount;
  return $this->balance;
}
}
// Step 5: Create two objects to represent a checking account and savings account.
$checking = new Account("12345", "Checking");
$savings = new Account("06789", "Savings", 5000.00);

/* Step 6:  An HTML skeleton is drawn. The first row should show headings using the type property of two objects. To access property use the:
 - Name of the variable that holds the object
 - Object operator
 - Property name */
 echo "<h2>Account Balances</h2>";
 echo "<table>";
 echo  "<tr>";
 echo "<th>Account Type</th>";
 echo "<th>Balance</th>";
 echo "<th>Date</th>";
 echo "</tr>";
 
// Step 7: In the next table row show the balance property of the objects.
echo "<tr>";
echo "<td>" .$checking->type ."</td>";
echo "<td>" .$checking->deposit(1000.00). "</td>";
echo "<td>23 June</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" .$savings->type ."</td>";
echo "<td>" .$savings->withdraw(500.00) ."</td>";
echo "<td>23 June</td>";
echo "</tr>";

/* Step 8: In the third row of the table, the balance of each account is updated by calling deposit() or
withdraw() methods. These methods return the new value of balance property and this should be shown in page.
To call a method, you can use
- Name of the variable that holds the object
- Object operator
- Method name with its argument in parantheses */

// Step 9: In the final row of the table, previous step is repeated using different values. 
echo "<tr>";
echo "<td>" .$checking->type ."</td>";
echo "<td>" .$checking->deposit(1000.00). "</td>";
echo "<td>24 June</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" .$savings->type ."</td>";
echo "<td>" .$savings->withdraw(500.00) ."</td>";
echo "<td>24 June</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" .$checking->type ."</td>";
echo "<td>" .$checking->deposit(2000.00). "</td>";
echo "<td>25 June</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" .$savings->type ."</td>";
echo "<td>" .$savings->withdraw(1500.00) ."</td>";
echo "<td>25 June</td>";
echo "</tr>";


echo "</table>";

?>


<?php 
include 'includes/footer.php'; 
?>