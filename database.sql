CREATE DATABASE parking_system;

USE parking_system;

CREATE TABLE parking_tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    license_plate VARCHAR(20) NOT NULL,
    violation VARCHAR(255) NOT NULL,
    ticket_number VARCHAR(50) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
