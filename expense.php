<?php include ("connect.php"); ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="expense.css">
    <link rel="stylesheet" href="sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <aside>
            <?php include("sidebar.html"); ?>
        </aside>

        <main>
            <h2>Expense Tracker</h2>
            <div class="form-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="expense_category">Category:</label>
                    <select name="expense_category" id="expense_category">
                        <option value="school" name="expense_categ[]">School</option>
                        <option value="food" name="expense_categ[]">Food</option>
                        <option value="transpo" name="expense_categ[]">Transportation Fee</option>
                        <option value="personal" name="expense_categ[]">Personal</option>
                    </select> <br>

                    <label for="expense_item">Item:</label>
                    <input type="text" name="expense_item" id="expense_item"> <br>

                    <label for="expense_amount">Price:</label>
                    <input type="text" name="expense_amount" id="expense_amount"> <br>

                    <label for="expense_description">Description:</label>
                    <textarea name="expense_description" id="expense_description" rows="4" cols="50"
                        placeholder="Enter details about the expense"></textarea> <br>

                    <input type="submit" name="add" value="Add"><br>
                </form>
            </div>
            <div style="text-align: center">
                <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $categ = filter_input(INPUT_POST, "expense_category", FILTER_DEFAULT) ;
  $price = filter_input(INPUT_POST, "expense_amount", FILTER_VALIDATE_INT);
  $item = filter_input(INPUT_POST, "expense_item", FILTER_DEFAULT);
  $description = filter_input(INPUT_POST, "expense_description", FILTER_DEFAULT);
  
 

  if(!empty($price) && !empty($item) && !empty($description)){
    echo"Category:".$categ."  <br> " . "Price: ".$price."<br>" . "Item: " . $item. "<br>" . "Details: " . $description;

  }
  else{
    echo "Please complete the detail input.";
  }
  
}



?>

            </div>
        </main>
    </div>

</body>

</html>