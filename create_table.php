<?php
$con = mysqli_connect('localhost', 'root', '', 'raw_crud');
$con->query(
"create table students (
  id int(11) auto_increment primary key,
  name varchar(30) not null,
  roll int(11) not null,
  reg int(11) not null 
)"
);