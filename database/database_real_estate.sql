SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `real_estate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `monthly_charges` float NOT NULL,
  `images` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `access` varchar(50) NOT NULL,
  `floor_space` float NOT NULL,
  `utility` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `approved` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE staffs (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    role VARCHAR(255) NOT NULL,
    assigned_at DATETIME DEFAULT CURRENT_TIMESTAMP
);



INSERT INTO `real_estate` (`id`, `name`, `monthly_charges`, `images`, `address`, `access`, `floor_space`, `utility`, `description`, `approved`) VALUES
(1, 'Six BHK Luxury House', 40000, '1.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Trivandrum, Kerala', 'Rent', 1600, 'Six', 'This property is available for rent only.', 'true'),
(2, 'Three BHK Apartment', 6000000, '2.jpg,a.jpg,b.jpg,c.jpg', 'Eranakulam, Kerala', 'Sale', 1600, 'Three', 'This property is available for sale only. ', 'true'),
(3, 'Three BHK Basic House', 5000000, '3.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Nagercoil, TN.', 'Sale', 1600, 'Three', 'This property is available for sale only. ', 'true'),
(4, 'Four BHK Basic House', 8000000, '4.jpg,a.jpg,b.jpg,c.jpg,d.jpg', 'Kollam, Kerala', 'Sale', 1600, 'Four', 'This property is available for sale only. ', 'true'),
(5, 'Four BHK Basic House', 50000, '5.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Chennai, TN', 'Rent', 1600, 'Four', 'This property is available for rent only. ', 'true'),
(6, 'Five BHK Basic House', 7000000, '6.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Kanyakumari, TN', 'Sale', 1600, 'Five', 'This property is available for sale only. ', 'true'),
(7, 'Six BHK Luxury House', 8500000, '7.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Trivandrum, Kerala', 'Sale', 1600, 'Six', 'This property is available for sale only. ', 'true'),
(8, 'Four BHK Luxury House', 65000, '8.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Kottayam, Kerala', 'Rent', 1600, 'Four', 'This property is available for rent only. ', 'true'),
(9, 'Eight BHK House', 10000000, '9.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Nagercoil, TN', 'Sale', 1600, 'Eight', 'This property is available for sale only. ', 'true'),
(10, 'Six BHK Luxury House', 55000, '10.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Not stated.', 'Rent', 1600, 'Six', 'This property is available for rent only. ', 'true');


ALTER TABLE `real_estate`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `real_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

