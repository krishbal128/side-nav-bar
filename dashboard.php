<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</head>
<body>
    
<h1>Display the Data</h1>
    <?php
    $conn=mysqli_connect("localhost:3306","root","");
    $db=mysqli_select_db($conn,"college");
    $sql="SELECT * FROM student";
    $query=mysqli_query($conn,$sql);
?>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll Number</th>
                <th>Email</th>
                <th>Department</th>
                <th>College</th>
                
            </tr>
        </thead>
        <?php
        if ($query)
        {
        foreach($query as $row)
        {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['rollnumber'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['dept'];?></td>
                <td><?php echo $row['college'];?></td>
         </tr>
            
        </tbody>
        <?php    
        }
            }
        else
        {
            echo "No Record Found";
        }
        ?>
       
    </table>




</body>
</html>