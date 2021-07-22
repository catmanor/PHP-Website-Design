<?php

// Create to server
$conn = mysqli_connect("localhost","root","");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Create database Jingyun_He
$mysql = "CREATE DATABASE Jingyun_He";
if ($conn->query($mysql) === TRUE) {
  // echo "Database created successfully";
} else {
  // echo "Error creating database: " . $conn->error;
}


//connect to the db
$connect = mysqli_connect("localhost","root","","Jingyun_He");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



// Create table members
$sqlMember = "
CREATE TABLE members(
  member_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(128) NOT NULL,
  password VARCHAR(128) NOT NULL,
  address VARCHAR(128) NOT NULL,
  phone VARCHAR(15) NOT NULL
)";

if(mysqli_query($connect, $sqlMember)){
  // echo "Table created successfully.";
} else{
  // echo "ERROR: Could not able to execute $sqlMember. " . mysqli_error($connect);
}



$sqlDropProduct = "DROP TABLE product";
         
mysqli_query($connect, $sqlDropProduct);
// Create table products
$sqlProduct = "
CREATE TABLE product(
  product_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(128) NOT NULL,
  teaLeaf VARCHAR(128) NOT NULL,
  teaFavor VARCHAR(128) NOT NULL,
  image VARCHAR(128) NOT NULL, 
  caffine VARCHAR(128) NOT NULL
)";

if(mysqli_query($connect, $sqlProduct)){
  // echo "Table created successfully.";
} else{
  // echo "ERROR: Could not able to execute $sqlProduct. " . mysqli_error($connect);
}


// Insert products into the table
$sqlp1="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Euealyptus Mist', 'Green', 'Lemon', 'green1.jpg', 'High')";
$connect->query($sqlp1);
// if ($connect->query($sqlp1) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sqlp1 . "<br>" . $connect->error;
// }

$sqlp2="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Rhubarb Fizz', 'Green', 'Ginger', 'green2.jpg', 'Low')";
$connect->query($sqlp2);

$sqlp3="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Grapefully Yours', 'White', 'Lemon', 'white1.jpg', 'High')";
$connect->query($sqlp3);

$sqlp4="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Flamingo Fresca', 'White', 'Ginger', 'white2.jpg', 'Midium')";
$connect->query($sqlp4);

$sqlp5="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Pumpkin Chai', 'Black', 'Lemon', 'black1.jpg', 'Low')";
$connect->query($sqlp5);

$sqlp6="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Irish Breakfast', 'Black', 'Ginger', 'black2.jpg', 'High')";
$connect->query($sqlp6);

$sqlp7="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Tangerine Turmeric', 'Oolong', 'Lemon', 'oolong1.jpg', 'Midium')";
$connect->query($sqlp7);

$sqlp8="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Organic GoldenLily', 'Oolong', 'Ginger', 'oolong2.jpg', 'Low')";
$connect->query($sqlp8);

$sqlp9="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Rhubarb Fizz', 'Green', 'Ginger', 'green2.jpg', 'Low')";
$connect->query($sqlp9);

$sqlp10="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Grapefully Yours', 'White', 'Lemon', 'white1.jpg', 'High')";
$connect->query($sqlp10);

$sqlp11="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Flamingo Fresca', 'White', 'Ginger', 'white2.jpg', 'Midium')";
$connect->query($sqlp11);

$sqlp12="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Pumpkin Chai', 'Black', 'Lemon', 'black1.jpg', 'Low')";
$connect->query($sqlp12);

$sqlp13="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Irish Breakfast', 'Black', 'Ginger', 'black2.jpg', 'High')";
$connect->query($sqlp13);

$sqlp14="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Tangerine Turmeric', 'Oolong', 'Lemon', 'oolong1.jpg', 'Midium')";
$connect->query($sqlp14);

$sqlp15="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Organic GoldenLily', 'Oolong', 'Ginger', 'oolong2.jpg', 'Low')";
$connect->query($sqlp15);

$sqlp16="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Rhubarb Fizz', 'Green', 'Ginger', 'green2.jpg', 'Low')";
$connect->query($sqlp16);

$sqlp17="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Grapefully Yours', 'White', 'Lemon', 'white1.jpg', 'High')";
$connect->query($sqlp17);

$sqlp18="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Flamingo Fresca', 'White', 'Ginger', 'white2.jpg', 'Midium')";
$connect->query($sqlp18);

$sqlp19="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Pumpkin Chai', 'Black', 'Lemon', 'black1.jpg', 'Low')";
$connect->query($sqlp19);

$sqlp20="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Irish Breakfast', 'Black', 'Ginger', 'black2.jpg', 'High')";
$connect->query($sqlp20);

$sqlp21="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Tangerine Turmeric', 'Oolong', 'Lemon', 'oolong1.jpg', 'Midium')";
$connect->query($sqlp21);

$sqlp22="INSERT INTO product (name, teaLeaf, teaFavor, image, caffine)
VALUES ('Organic GoldenLily', 'Oolong', 'Ginger', 'oolong2.jpg', 'Low')";
$connect->query($sqlp22);


// Create table comment
$sqlComment = 
// "DROP TABLE comments";
"
CREATE TABLE comments(
  comment_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(128) NOT NULL,
  comment VARCHAR(255) NOT NULL, 
  productindex VARCHAR(255) NOT NULL
)";
mysqli_query($connect, $sqlComment);

?>