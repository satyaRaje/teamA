<html>
<title>Sale History</title>
<head>
<style>
table, th, td {
  border: 1px solid black;
margin-top: 120px;
margin-left: 0%;
}


</style>
</head>
<body>

<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="container-fluid text-center" style="margin-left: 150%;margin-top: 20%;" class="input-group">
          <div class="input-group-append">
            <input type="text" class="form-control" placeholder="Search for customer" aria-label="Search" aria-describedby="basic-addon2">
            
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>



</br></br>
</br>
<br>
<br>
<table style="width:100%">
  <tr>
    <th>Product_Id</th>
    <th>Product_Name</th> 
    <th>Product_Price</th>
    <th>Sold_Date_&_Time</th>
    
  </tr>
  </table>
<footer class="container-fluid text-center">
        <?php include 'footer.php';?>
    </footer>
</div>


</body>
</html>
