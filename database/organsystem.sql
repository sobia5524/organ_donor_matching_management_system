CREATE DATABASE organ_system;
USE organ_system;

CREATE TABLE Donors (
    donor_id INT PRIMARY KEY,
    name VARCHAR(50),
    blood_group VARCHAR(5),
    organ_type VARCHAR(30),
    donor_type VARCHAR(20),
    availability BOOLEAN
);

CREATE TABLE Patients (
    patient_id INT PRIMARY KEY,
    name VARCHAR(50),
    blood_group VARCHAR(5),
    organ_required VARCHAR(30),
    urgency VARCHAR(10),
    registration_date DATE,
    status VARCHAR(20)
);

CREATE TABLE Hospitals (
    hospital_id INT PRIMARY KEY,
    name VARCHAR(50),
    city VARCHAR(50)
);

CREATE TABLE Organs (
    organ_id INT PRIMARY KEY,
    donor_id INT,
    organ_type VARCHAR(30),
    availability BOOLEAN,
    FOREIGN KEY (donor_id) REFERENCES Donors(donor_id)
);

CREATE TABLE Transplants (
    transplant_id INT PRIMARY KEY,
    organ_id INT,
    patient_id INT,
    hospital_id INT,
    transplant_date DATE,
    FOREIGN KEY (organ_id) REFERENCES Organs(organ_id),
    FOREIGN KEY (patient_id) REFERENCES Patients(patient_id),
    FOREIGN KEY (hospital_id) REFERENCES Hospitals(hospital_id)
);

INSERT INTO Donors VALUES
(1, 'Amit', 'O+', 'Kidney', 'Living', TRUE),
(2, 'Sara', 'A+', 'Liver', 'Deceased', TRUE);

INSERT INTO Patients VALUES
(1, 'Rahul', 'O+', 'Kidney', 'Critical', '2024-01-01', 'Waiting'),
(2, 'Neha', 'A+', 'Liver', 'High', '2024-02-01', 'Waiting'),
(3, 'Karan', 'O+', 'Kidney', 'Normal', '2024-03-01', 'Waiting');

INSERT INTO Hospitals VALUES
(1, 'City Hospital', 'Mumbai');

INSERT INTO Organs VALUES
(1, 1, 'Kidney', TRUE),
(2, 2, 'Liver', TRUE);

INSERT INTO Transplants VALUES
(1, 1, 1, 1, '2024-04-01'),
(2, 2, 2, 1, '2024-04-02');

-- Display all patients in the system
SELECT * FROM Patients;

-- Display all registered donors
SELECT * FROM Donors;

 -- Find matching donors and patients based on blood group and organ type 
SELECT p.name AS patient, d.name AS donor, p.organ_required
FROM Patients p
JOIN Donors d
ON p.blood_group = d.blood_group
WHERE p.organ_required = d.organ_type;

-- Display patients sorted by priority (Critical > High > Normal)
SELECT *
FROM Patients
ORDER BY 
  CASE 
    WHEN urgency = 'Critical' THEN 1
    WHEN urgency = 'High' THEN 2
    ELSE 3
  END,
  registration_date;

-- Show all available organs for transplant  
  SELECT * 
FROM Organs
WHERE availability = TRUE;

-- Display patients who are currently waiting for transplant
SELECT name, organ_required, urgency
FROM Patients
WHERE status = 'Waiting';

-- Display complete transplant history with patient, organ, and hospital details
SELECT t.transplant_id, p.name, o.organ_type, h.name AS hospital
FROM Transplants t
JOIN Patients p ON t.patient_id = p.patient_id
JOIN Organs o ON t.organ_id = o.organ_id
JOIN Hospitals h ON t.hospital_id = h.hospital_id;

-- top priority patient
SELECT *
FROM Patients
ORDER BY 
  CASE 
    WHEN urgency = 'Critical' THEN 1
    WHEN urgency = 'High' THEN 2
    ELSE 3
  END,
  registration_date
LIMIT 1;