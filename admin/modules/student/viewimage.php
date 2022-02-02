
<?php


$conn = mysqli_connect("localhost", "root", "", "bestfit_recommendation_system");
$sql = "SELECT attachment_file , UPPER(CONCAT(  `LNAME` ,  ', ',  `FNAME` ,  ' ',  `MNAME` )) AS  'Name' FROM tblstudent WHERE idno = " . $_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {
    $name = $row["Name"];
    $imagepath = base64_encode($row["attachment_file"]);
  }
} else {
  echo "No image";
}
$conn->close();


?>

<style>
  .img-container {
    text-align: center;
    display: block;
  }
</style>
<title>Photo</title>
<body>
  <span class="img-container">
    <h1><?php echo $name ?></h1>
    <img src="data:image/jpg;charset=utf8;base64,<?php echo $imagepath ?>" text-align="center" />
  </span>
</body>

