# Organ Donation Management System

## Overview

The Organ Donation Management System is a web-based DBMS project developed using PHP and MySQL. It simplifies the management of organ donors and patients by maintaining records, displaying available organs, matching compatible donors with patients based on blood group and organ type, and prioritizing patients according to urgency.

This project was developed as part of a Database Management Systems (DBMS) course to demonstrate the practical implementation of relational databases and SQL operations.

---

## Features

- User Login Authentication
- Patient Management (Add, Update, Delete)
- Donor Management
- Display Available Organs
- Donor-Patient Matching
- Priority-wise Patient Listing
- MySQL Database Integration

---

## Tech Stack

- Frontend: HTML5, CSS3
- Backend: PHP
- Database: MySQL (MariaDB)
- Server: XAMPP

---

## Project Structure

```
organ_project/
│
├── database/
│   └── organ_system.sql
│
├── screenshots/
│
├── available_organs.php
├── db.php
├── delete_patient.php
├── donors.php
├── index.php
├── insert_donor.php
├── insert_patient.php
├── login.php
├── logout.php
├── matching.php
├── patients.php
├── priority_patients.php
├── update_patient.php
├── style.css
├── README.md
└── .gitignore
```

---

## Database

The project consists of two main tables:

### Patients

- patient_id
- name
- blood_group
- organ_required
- urgency
- status

### Donors

- donor_id
- name
- blood_group
- organ_type
- availability_status

---

## How to Run

1. Install XAMPP.
2. Copy the project folder into the `htdocs` directory.
3. Start Apache and MySQL from the XAMPP Control Panel.
4. Import `database/organ_system.sql` into phpMyAdmin.
5. Open your browser and visit:

```
http://localhost/organ_project/
```

---

## Screenshots

- Login Page
- Dashboard
- Patients Module
- Donors Module
- Available Organs
- Matching System
- Priority Patients

(All screenshots are available in the `screenshots` folder.)

---

## Future Improvements

- Email notifications for matched donors.
- Admin dashboard with analytics.
- Search and filtering options.
- Mobile responsive interface.
- Appointment scheduling.

---

## Author

Developed as a DBMS Mini Project by:

- Sobia Inamdar
