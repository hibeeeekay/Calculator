<!DOCTYPE html>
<html>
  <head>
    <title>Simple Calculator </title>
    <meta charset="utf-8">
  </head>
  <body>
    
    <div style="margin-top: 50px">
    
    <?php
    
    // If the submit button has been pressed
    if(isset($_POST['submit']))
    {
    // Check number values
    if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
    {
    // Calculate total
    if($_POST['operation'] == 'plus')
    {
    $total = $_POST['number1'] + $_POST['number2'];  
    }
    if($_POST['operation'] == 'minus')
    {
    $total = $_POST['number1'] - $_POST['number2'];  
    }
    if($_POST['operation'] == 'multiply')
    {
    $total = $_POST['number1'] * $_POST['number2'];  
    }
    if($_POST['operation'] == 'divided by')
    {
    $total = $_POST['number1'] / $_POST['number2'];  
    }
    
    // Print total to the browser
    echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}</h1>";
    
    } else {
    
    // Print error message to the browser
    echo 'Numeric values are required';
    
    }
    }
    
    ?>
      
     
      <form method="post" action="index.php">
          <input name="number1" type="text" style="width: 150px; display: inline" />
          <select name="operation">
              <option value="plus">Add</option>
              <option value="minus">Subtract</option>
              <option value="multiply">Multiply</option>
              <option value="divided by">Divide</option>
          </select>
          <input name="number2" type="text"  style="width: 150px; display: inline" />
          <input name="submit" type="submit" value="Calculate"  />
      </form>
      
    </div>
  
  </body>
</html>
