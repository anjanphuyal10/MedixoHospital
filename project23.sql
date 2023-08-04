CREATE DATABASE medixoHospital;
USE medixoHospital;

-- Create table 'role' to store roles
CREATE TABLE role (
  roleId INT PRIMARY KEY,
  roleName VARCHAR(20)
);

-- Insert sample roles
INSERT INTO role (roleId, roleName) VALUES
(1, 'user'),
(2, 'admin');

-- Create table 'userLogin' to store user login details
CREATE TABLE userLogin (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userId VARCHAR(20),
  fullName VARCHAR(50),
  phoneNumber VARCHAR(20),
  role INT,
  FOREIGN KEY (role) REFERENCES role (roleId)
);

-- Insert sample user data
INSERT INTO userLogin (userId, fullName, phoneNumber, role) VALUES
('210634', 'Niraj Giri', '9847950672', 2),
('210633', 'Anjan Phuyal', '9841361927', 2);

-- Create the `doctor` table
CREATE TABLE doctor (
  doctorId INT PRIMARY KEY AUTO_INCREMENT,
  fullName VARCHAR(255) NOT NULL,
  phoneNumber VARCHAR(20) NOT NULL,
  speciality VARCHAR(255) NOT NULL,
  flag INT NOT NULL
);

-- Create the `appointments` table
CREATE TABLE appointments (
  appointmentId INT PRIMARY KEY AUTO_INCREMENT,
  date DATE NOT NULL,
  time TIME NOT NULL,
  doctorId INT,
  fullName VARCHAR(255),
  FOREIGN KEY (doctorId) REFERENCES doctor(doctorId)
);

INSERT INTO doctor (doctorId, fullName, phoneNumber, speciality, flag)
VALUES (210630, 'Anjan Baniya', '9823455484', 'Psychiatry', '1');

INSERT INTO doctor (doctorId, fullName, phoneNumber, speciality, flag)
VALUES (210623, 'Prakash Ghimire', '9821314151', 'Gynecology', '1'),
(210633, 'Anjan Phuyal', '9821314151', 'Pulmonology', '1'),
(210621, 'Suman Sigdel', '9821314151', 'Orthopedics', '1'),
(210622, 'Sanjog Gurung', '9821314151', 'Pediatrics', '1'),
(210624, 'Sijan Rai', '9821314151', 'Osteology', '1');

SELECT * FROM userLogin;
SELECT * FROM doctor;
SELECT * FROM appointments;


DROP TABLE doctor;



