
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `category`
(
`CateID` int(11) NOT NULL,
`CategotyName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
`Description` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail`
(
`DetailID` int(11) NOT NULL,
`OrderID` int(11) NOT NULL,
`ProductID` int(11) NOT NULL,
`Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct`
(
`OrderID` int(11) NOT NULL,
`OrderDate` datetime NOT NULL,
`ShipDate` datetime NOT NULL,
`ShipName` varchar (150) COLLATE utf8_unicode_ci NOT NULL,
`ShipAddress` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- --------------------------------------------------------

--
-- Table structure for table `product`
--
CREATE TABLE `product`
(
`ProductID` int(11) NOT NULL,
`ProductName` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
`CateID` int(11) DEFAULT NULL,
`Price` double DEFAULT NULL,
`Quantity` int(11) DEFAULT NULL,
`Description` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
`Picture` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`,`ProductName`, `CateID`, `Price`, `Quantity`, `Description`, `Picture`) VALUES
(1, 'asus a111', 1, 100000, 9, 'mô tả', 'google.com'),
(2, 'Galaxy A10', 1, 2000000, 10, 'là sản phẩm tiên tiến', 'google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`ADD PRIMARY KEY(`CateID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`ADD PRIMARY KEY(`DetailID`);

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`ADD PRIMARY KEY(`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`ADD PRIMARY KEY(`ProductID`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`MODIFY `CateID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;