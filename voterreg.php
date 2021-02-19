<?php
include_once 'db.php';



sql="CREATE TABLE candidate (
  Name VARCHAR(50) NOT NULL,
  CID INT(10),
  Address VARCHAR(255),
  State VARCHAR(20),
  Party VARCHAR(20),
  gender VARCHAR(20),
  PRIMARY KEY(CID)


$sql="CREATE TABLE voter (
    Name VARCHAR(50) NOT NULL,
    VoterID INT(10),
    Address VARCHAR(255),
    DOB DATE,
    gender VARCHAR(20),
    PRIMARY KEY(VoterID)
)";

$sql="CREATE TABLE feedback (
  
  VoterID INT(10),
  Feedback VARCHAR(255),
  Rating VARCHAR(20)
  
)";


if ($conn->query($sql) === TRUE) {
  echo "Table voter created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
if ($conn->query($sql) === TRUE) {
    echo "Table voter created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }*/
  ?>


  include_once 'db.php';
$sql="CREATE TABLE candidate (
    Name VARCHAR(50) NOT NULL,
    CID INT(10),
    Address VARCHAR(255),
    State VARCHAR(20),
    Party VARCHAR(20),
    gender VARCHAR(20),
    PRIMARY KEY(CID)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table candidate created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  SELECT State, MAX(Total_vote) AS maximum FROM candidate GROUP BY State
  


  $sql="CREATE TABLE officer (
    Name VARCHAR(50) NOT NULL,
    UID INT(10),
    Password VARCHAR(20),
    PRIMARY KEY(UID)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table officer created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  $squi="CREATE TABLE votes (
        vote_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        time_stamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        VoterID INT(10),
        CID INT(10),
        UID INT (10),
        FOREIGN KEY(VoterID) REFERENCES voter(VoterID),
        FOREIGN KEY(CID) REFERENCES candidate(CID),
        FOREIGN KEY(UID) REFERENCES officer(UID)
        )";
if ($conn->query($squi) === TRUE) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  $squi="CREATE TABLE final_result (
        result_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        time_stamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        CID INT(10),
        Party VARCHAR(20),
        NAME VARCHAR(50),
        UID INT (10),
        FOREIGN KEY(CID) REFERENCES candidate(CID),
        FOREIGN KEY(UID) REFERENCES officer(UID)
        )";
if ($conn->query($squi) === TRUE) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }