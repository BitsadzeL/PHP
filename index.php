<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
    <link rel="stylesheet" href="style.css">
   </head>
   <body>
         <h1>Storing Form data in Database</h1>
         <form action="insert.php" method="post">
             
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="firstName">
               <label for="lastName">Last Name:</label>
               <input type="text" name="last_name" id="lastName">
               <label for="Gender">Gender:</label>
               <input type="text" name="gender" id="Gender">
               <label for="Address">Address:</label>
               <input type="text" name="address" id="Address">
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="email" id="emailAddress">
               <input type="submit" value="Submit">
         </form>
   </body>
</html>