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

INSERT INTO role (roleId, roleName) VALUES (3, 'doctor');

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
('210625', 'Nalina', '9803119218', 3);


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
  doctorId INT NOT NULL,
  fullName VARCHAR(255) NOT NULL,
  status TINYINT NOT NULL DEFAULT 0,
  FOREIGN KEY (doctorId) REFERENCES doctor(doctorId)
);

-- Create the `Services` table
CREATE TABLE services (
  serviceId INT PRIMARY KEY AUTO_INCREMENT,
  icon VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL
);
INSERT INTO services (icon, title, description) VALUES
('images/icon-1.png', 'ENT', 'ENT, short for Ear, Nose, and Throat, is a specialized medical field that focuses on diagnosing and treating disorders and conditions related to the ears, nose, throat, and related structures.'),
('images/icon-2.png', 'Neurology', 'Neurology is a medical specialty that focuses on the diagnosis and treatment of disorders related to the nervous system. This includes the brain, spinal cord, and peripheral nerves.'),
('images/icon-3.png', 'Pulmonology', 'Pulmonology is a specialized medical field that focuses on diagnosing and treating disorders and conditions related to the respiratory system, including the lungs, airways, and chest.'),
('images/icon-4.png', 'Orthopedics', 'Orthopedics is a medical specialty that focuses on the diagnosis, treatment, and prevention of conditions and injuries related to the musculoskeletal system.'),
('images/icon-5.png', 'Gynecology', 'Gynecology and obstetrics are twin subjects that deal with the female reproductive system. While obstetrics deals with pregnancy and its associated procedures and complications, gynaecology involves treating women who are not pregnant.'),
('images/icon-6.png', 'Pediatrics', 'Pediatrics is the branch of medicine dealing with the health and medical care of infants, children, and adolescents from birth up to the age of 18. The word “paediatrics” means “healer of children”; they are derived from two Greek words: (pais = child) and (iatros = doctor or healer).'),
('images/icon-7.png', 'Osteology', 'Pediatrics is the branch of medicine dealing with the health and medical care of infants, children, and adolescents from birth up to the age of 18. The word “paediatrics” means “healer of children”; they are derived from two Greek words: (pais = child) and (iatros = doctor or healer).'),
('images/icon-4.png', 'Cardiology', 'Cardiology is a branch of medicine that concerns diseases and disorders of the heart, which may range from congenital defects through to acquired heart diseases such as coronary artery disease and congestive heart failure.'),
('images/icon-2.png', 'Psychiatry', 'Psychiatry is the medical specialty devoted to the diagnosis, prevention, and treatment of deleterious mental conditions. These include various matters related to mood, behaviour, cognition, and perceptions. Initial psychiatric assessment of a person begins with a case history and mental status examination.'),
('images/icon-7.png', 'Radiology', 'Radiology is the medical discipline that uses medical imaging to diagnose diseases and guide their treatment, within the bodies of humans and other animals.Radiology is the medical discipline that uses medical imaging to diagnose diseases and guide their treatment, within the bodies of humans and other animals. ');


INSERT INTO userLogin (userId, fullName, phoneNumber, role)
VALUES
    (210623, 'Prakash Ghimire', '9821314151', 3),
    (210633, 'Anjan Phuyal', '9821314151', 3),
    (210621, 'Suman Sigdel', '9821314151', 3),
    (210622, 'Sanjog Gurung', '9821314151', 3),
    (210624, 'Sijan Rai', '9821314151', 3),
    (210625, 'Ashish Subedi', '9821314151', 3),
    (210626, 'Rushab Khadka', '9821314151', 3),
    (210627, 'Alish Khadgi', '9821314151', 3),
    (210628, 'Hari Gopal Yadav', '9821314151', 3);
    
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
SELECT * FROM role;


DROP TABLE doctor;
DROP TABLE appointments;



