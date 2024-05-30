CREATE TABLE `Role` (
  `RoleID` int PRIMARY KEY AUTO_INCREMENT,
  `RoleName` varchar(50) NOT NULL
);

CREATE TABLE `User` (
  `UserID` int PRIMARY KEY AUTO_INCREMENT,
  `RoleID` int NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(12),
  `Gender` bit,
  `Password` varchar(50) NOT NULL
);

CREATE TABLE `Products` (
  `ProductID` int PRIMARY KEY AUTO_INCREMENT,
  `CategoryID` int NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Thumbnail` varchar(255),
  `UnitPrice` int NOT NULL,
  `CreateAt` datetime NOT NULL,
  `Description` longtext
);

CREATE TABLE `Category` (
  `CategoryID` int PRIMARY KEY AUTO_INCREMENT,
  `CategoryName` varchar(50) NOT NULL,
  `Thumbnail` varchar(255),
  `Description` varchar(255)
);

CREATE TABLE `Order` (
  `OrderID` int PRIMARY KEY AUTO_INCREMENT,
  `UserID` int,
  `Address` varchar(150),
  `ShippingFee` int NOT NULL,
  `OrderDate` date NOT NULL,
  `ShippedDate` date,
  `RequiredDate` date,
  `Status` bit,
  `Message` varchar(500)
);

CREATE TABLE `OrderDetail` (
  `OrderDetailID` int PRIMARY KEY AUTO_INCREMENT,
  `OrderID` int NOT NULL,
  `ProductID` int NOT NULL,
  `Quantity` int NOT NULL,
  `UnitPrice` int NOT NULL,
  `Discount` int
);

ALTER TABLE `User` ADD FOREIGN KEY (`RoleID`) REFERENCES `Role` (`RoleID`);

ALTER TABLE `OrderDetail` ADD FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

ALTER TABLE `Order` ADD FOREIGN KEY (`OrderID`) REFERENCES `User` (`UserID`);

ALTER TABLE `OrderDetail` ADD FOREIGN KEY (`OrderID`) REFERENCES `Order` (`OrderID`);

ALTER TABLE `Products` ADD FOREIGN KEY (`CategoryID`) REFERENCES `Category` (`CategoryID`);
