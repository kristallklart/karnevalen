<?php
  $dbname = 'example_database';
  $dbuser = 'vagrant';
  $dbpass = 'vagrant';
  $dbhost = '127.0.0.1';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
  mysqli_select_db($conn, $dbname) or die("Could not open the db '$dbname'");

  $sql = "DROP TABLE IF EXISTS `user`, `student`, `section`, `mainNews`, `asideEvent`; ";

  $sql.= "CREATE TABLE `section` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `vacancies` int(11) DEFAULT NULL,
          `name` varchar(45) DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `name_UNIQUE` (`name`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

  $sql.= "CREATE TABLE `student` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `firstname` varchar(45) DEFAULT NULL,
          `lastname` varchar(45) DEFAULT NULL,
          `email` varchar(45) DEFAULT NULL,
          `phone` varchar(45) DEFAULT NULL,
          `section` int(11) DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `section_idx` (`section`),
          CONSTRAINT `section` FOREIGN KEY (`section`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

  $sql.= "CREATE TABLE `user` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `username` varchar(45) NOT NULL,
          `password` varchar(255) NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `username_UNIQUE` (`username`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

  $sql.= "CREATE TABLE `mainNews` (
          `timestamp` int(11) NOT NULL,
          `heading` varchar(100) NOT NULL,
          `body` text NOT NULL,
          `imgPath` varchar(45) DEFAULT NULL,
          PRIMARY KEY (`timestamp`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

  $sql.= " CREATE TABLE `asideEvent` (
            `timestamp` int(11) NOT NULL,
            `body` text NOT NULL,
            `imgPath` varchar(45) DEFAULT NULL,
            PRIMARY KEY (`timestamp`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

  if (mysqli_multi_query($conn, $sql)) {
      echo "Tables created successfully";
  } else {
      echo "Error creating table: " . mysqli_error($conn);
  }

    mysqli_close($conn);
?>