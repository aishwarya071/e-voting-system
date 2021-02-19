<?php
include_once 'db.php';
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