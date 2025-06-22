CREATE DATABASE IF NOT EXISTS infocontrol CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE infocontrol;

CREATE TABLE documents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contractor_id VARCHAR(255) NOT NULL,
    filename VARCHAR(255) NOT NULL,
    status VARCHAR(50) DEFAULT 'pendiente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);