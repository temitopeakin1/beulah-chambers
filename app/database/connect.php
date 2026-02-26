<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'beulahchambers';

// Connect without selecting a database first
$conn = new MySQLi($host, $user, $pass);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

// Create database if it doesn't exist
$conn->query("CREATE DATABASE IF NOT EXISTS `" . $conn->real_escape_string($db_name) . "`");
$conn->select_db($db_name);

// Create tables if they don't exist
$conn->query("
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

$conn->query("
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

$conn->query("
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `topic_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `image` varchar(255) DEFAULT NULL,
  `published` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

// Ensure at least one user exists (required for posts JOIN in getPublishedPosts)
$result = $conn->query("SELECT id FROM users LIMIT 1");
if ($result && $result->num_rows === 0) {
    $hash = password_hash('changeme', PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, admin) VALUES ('admin', 'admin@beulahchambers.org', ?, 1)");
    $stmt->bind_param('s', $hash);
    $stmt->execute();
}
