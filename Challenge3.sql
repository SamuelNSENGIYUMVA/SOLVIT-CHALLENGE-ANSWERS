
-- Database: `user`
CREATE DATABASE `user`;
-- create table `user_table`
--

CREATE TABLE `user_table` (
  `User_ID` int(11) primary key,
  `FullName` text NOT NULL,
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

-- inserting multiple data in `user_table`

INSERT INTO `user_table` (`User_ID`, `FullName`, `Username`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Samuel NSENGIYUMVA', 'SamRiley', 'sam@gmail.com', 'sam1234', '2023-02-07 06:36:04'),
(2, 'NGABO Emmy', 'ngaboemmy', 'emmy123@gmail.com', 'emmy1234', '2023-02-07 07:23:00'),
(3, 'Noel GATETE', 'NoelGATETE', 'noelgat@gmail.com', 'noel1234', '2023-02-07 07:23:00'),
(4, 'Sandra HABIMANA', 'sandrahabi', 'sandrahabimana@gmail.com', 'sandra1234', '2023-02-07 07:23:00'),
(5, 'MWIZERWA William', 'williammwi', 'williammwizerwa@gmail.com', 'willy@1234', '2023-02-07 07:23:00');

