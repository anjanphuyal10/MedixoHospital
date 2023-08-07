<link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

<?php
include 'connectToDatabase.php';
$id = $_GET['id'];
$query = "SELECT id, userId, fullName, phoneNumber, role FROM userLogin WHERE id = '$id'";
$result = mysqli_query($connection, $query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $id = $row['id'];
  $userId = $row['userId'];
  $fullName = $row['fullName'];
  $phoneNumber = $row['phoneNumber'];
  $role = $row['role'];
}
mysqli_close($connection); 
?>
<style>
    table {
      width: 100%;
      border-collapse: collapse; 
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    form {
      margin-bottom: 16px;
    }
    input[type=text] {
      padding: 8px;
      width: 200px;
      text-align: center;
      border-radius: 20px;
      border-color: blue;
    }
    input[type=submit],
    input[type=button] {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type=submit]:hover,
    input[type=button]:hover {
      background-color: #45a050;
    }
    .delete-btn {
      background-color: #f44336;
    }
    .update-btn {
      background-color: #ff9800;
    }
  </style>
<h2>Update User</h2>
    <form method="POST" action="updateUser.php">
         <label>ID:</label>
        <input type="text"  placeholder="ID" value="<?php echo $id; ?>" name="id" required readonly>
    
        <label>User ID:</label>
        <input type="text" placeholder="User ID" name="userId" value="<?php echo $userId ?>" required readonly>

        <label>Full Name:</label>
        <input type="text" placeholder="Full Name" value="<?php echo $fullName; ?>" name="fullName" required>

        <label>Phone Number:</label>
        <input type="text" placeholder="Phone Number" value="<?php echo $phoneNumber; ?>" name="phoneNumber" required>
        
        <label>Role:</label>
        <input type="text" placeholder="1 -> Admin | 2 -> User" value="<?php echo $role; ?>" name="role" required readonly>
        <br> <br>
        
        <input type="button" value="Go Back" onclick="goBack();" style="float: left; margin-left: 2%; border-radius: 10px;">
        <input type="submit" value="Update" style="float: right; margin-right: 2%; border-radius: 10px;">
    </form>
    <script>
          function goBack() {
              window.history.back();
          }
    </script>
