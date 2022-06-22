-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 02:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS db_name.master_data (Topic varchar(10),
English varchar(25), Telugu varchar(33),
Hindi varchar(6)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;;

INSERT INTO `db_name`.`master_data` (`Topic`, `English`, `Telugu`, `Hindi`) 
VALUES ('vegetables', 'Alternanthera sessilis', 'పొన్నగంటి కూర', 'TBD'), 
('vegetables', 'Raw tamarind', 'చింతకాయలు', 'TBD'), 
('vegetables', 'Almond', 'బాదంపప్పు', 'TBD'), 
('vegetables', 'Amaranthus', 'తోటకూర', 'TBD'), 
('Fruits', 'Ambarella', 'అడవి మామిడి', 'TBD'), 
('vegetables', 'Amla', 'ఉసిరి కాయ', 'TBD'), 
('vegetables', 'Amorphophallus sylvaticus', 'వజ్రకంద', 'TBD'), 
('Fruits', 'Amra', 'అడవి మామిడి', 'TBD'), 
('vegetables', 'Angular gourd', 'బీర కాయ', 'TBD'), 
('Fruits', 'Apple', 'ఆపిల్', 'TBD'), ('Fruits', 'Apple', 'సీమ రేగు  ', 'TBD'),
('Fruits', 'Apricot', 'సీమ బాదం, జల్లారు పండు', 'TBD'), 
('vegetables', 'arrow root', 'పాలగరుడ', 'TBD'), 
('vegetables', 'Artichoke', 'ఆర్టిచూక్', 'TBD'), 
('vegetables', 'Arum', '\nచేమ దుంప', 'TBD'), 
('vegetables', 'Ash gourd', 'బూడిద గుమ్మడి కాయ', 'TBD'), 
('vegetables', 'Asparagus', 'తోట తేగ', 'TBD'), 

