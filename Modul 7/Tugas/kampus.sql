-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 04:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE jurusan (
  id_jur char(9) NOT NULL,
  nama varchar(50) NOT NULL
)

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE mahasiswa (
  nrp char(9) NOT NULL,
  nama varchar(50) NOT NULL,
  alamat varchar(100) NOT NULL,
  id_jur char(9) NOT NULL
)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE jurusan
  ADD PRIMARY KEY (id_jur);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE mahasiswa
  ADD PRIMARY KEY (nrp), 
  ADD FOREIGN KEY (id_jur) REFERENCES jurusan(id_jur);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
