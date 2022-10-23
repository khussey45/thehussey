CREATE TABLE registration (
    id int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname varchar(200) NOT NULL,
    lname varchar(200) NOT NULL,
    email varchar(200) NOT NULL,
    phonenum int(10) NOT NULL,
    company varchar(200) NOT NULL,
    school varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 