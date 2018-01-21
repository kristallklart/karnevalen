<?php
  $dbname = 'example_database';
  $dbuser = 'vagrant';
  $dbpass = 'vagrant';
  $dbhost = '127.0.0.1';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
  mysqli_select_db($conn, $dbname) or die("Could not open the db '$dbname'");

  $sql.= "TRUNCATE `student`; ";
  $sql.= "TRUNCATE `section`; ";
  $sql.= "INSERT INTO `section` (`vacancies`, `name`) VALUES (15, 'AdministerIT'), (10, 'Biljonsen'), (20, 'Blädderiet'), (30, 'Dansen'); ";
  $sql.= "INSERT INTO `student` (`firstname`,`lastname`,`email`,`phone`,`section`) VALUES ('Griffin','Burton','Phasellus@metusvitae.co.uk','0707595846','4'),('Nicholas','Reynolds','nec.cursus@Aliquamtincidunt.co.uk','0707874286','4'),('Brady','Terrell','nec.orci.Donec@Maecenas.org','0704218981','1'),('Clark','Guthrie','Maecenas@VivamusnisiMauris.com','0706115465','2'),('Yoshio','Maynard','eleifend.egestas@acmattis.ca','0701718756','4'),('Michael','Graham','ipsum.non@gravidanonsollicitudin.co.uk','0709254495','1'),('Boris','Chambers','sit@a.org','0709483386','1'),('Basil','Cabrera','Morbi.sit@eunibhvulputate.edu','0707811434','2'),('Evan','Mcknight','eget.lacus@rutrumnonhendrerit.co.uk','0701161525','3'),('Neil','Mcfadden','ultricies.ligula.Nullam@Duisa.com','0701459551','3'); ";
  $sql.= "INSERT INTO `student` (`firstname`,`lastname`,`email`,`phone`,`section`) VALUES ('Jerome','Lindsay','Morbi.vehicula@egestas.ca','0702459663','1'),('Bruno','Gilmore','aliquet.lobortis.nisi@MorbimetusVivamus.com','0708398932','4'),('Dorian','Valencia','tincidunt@ornaresagittis.com','0705638741','2'),('Conan','Atkins','enim.diam@Donec.net','0701818135','3'),('Xander','Henry','porttitor.vulputate.posuere@inaliquet.com','0708683566','4'),('Dexter','Emerson','Aenean.sed@justositamet.com','0702321881','2'),('Eric','Hansen','odio.tristique@nonluctussit.co.uk','0704478533','2'),('Jerry','Humphrey','mollis.Phasellus.libero@ligulaNullamenim.org','0701297762','1'),('Carson','Richard','velit.in.aliquet@Donec.edu','0704037970','4'),('Armand','Gould','sem.magna@semutdolor.edu','0701924174','2'); ";

  if (mysqli_multi_query($conn, $sql)) {
    echo "Data successfully inserted";
  } else {
      echo "Error inserting data: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>