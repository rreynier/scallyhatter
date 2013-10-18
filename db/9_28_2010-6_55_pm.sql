-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2010 at 06:54 PM
-- Server version: 5.1.46
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scallyhatter`
--
CREATE DATABASE `scallyhatter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `scallyhatter`;

-- --------------------------------------------------------

--
-- Table structure for table `ipn`
--

CREATE TABLE IF NOT EXISTS `ipn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `player_scallyhatter_id` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ipn`
--

INSERT INTO `ipn` (`id`, `date`, `player_scallyhatter_id`, `content`) VALUES
(1, '0000-00-00 00:00:00', 0, ''),
(2, '0000-00-00 00:00:00', 0, ''),
(3, '0000-00-00 00:00:00', 0, ''),
(4, '0000-00-00 00:00:00', 0, ''),
(5, '0000-00-00 00:00:00', 0, 'mc_gross=25.00&invoice=12&protection_eligibility=Ineligible&payer_id=NDHFPYFENR8ZQ&tax=0.00&payment_date=17:45:30 Sep 24, 2010 PDT&payment_status=Completed&charset=windows-1252&first_name=Test&mc_fee=1.03&notify_version=3.0&custom=&payer_status=unverified&business=seller_1285370967_biz@bythepixel.com&quantity=1&verify_sign=AANVvdss5-wsWB3pVF2IpGq6K2hoAMIK3IwUrrqVDcD4jeC7NfBU5Nmb&payer_email=buyer_1285370994_per@bythepixel.com&txn_id=42E55763XA2947313&payment_type=instant&last_name=User&receiver_email=seller_1285370967_biz@bythepixel.com&payment_fee=1.03&receiver_id=DGT2CSE3EY3BE&txn_type=web_accept&item_name=Scally Hatter 2010 - Signup Fee&mc_currency=USD&item_number=&residence_country=US&test_ipn=1&handling_amount=0.00&transaction_subject=Scally Hatter 2010 - Signup Fee&payment_gross=25.00&shipping=0.00&'),
(6, '2010-09-26 13:48:03', 14, 'invoice=14&'),
(7, '2010-09-26 13:54:53', 15, 'mc_gross=25.00&invoice=15&protection_eligibility=Ineligible&payer_id=NDHFPYFENR8ZQ&tax=0.00&payment_date=10:55:03 Sep 26, 2010 PDT&payment_status=Completed&charset=windows-1252&first_name=Test&mc_fee=1.03&notify_version=3.0&custom=&payer_status=unverified&business=seller_1285370967_biz@bythepixel.com&quantity=1&verify_sign=A4Tocjf7wPR1JUojrrTj3oLR5s8BA6QgcE7Gp5v.AH4kLMLl2oPLKm4X&payer_email=buyer_1285370994_per@bythepixel.com&txn_id=4CJ84204F3570114N&payment_type=instant&last_name=User&receiver_email=seller_1285370967_biz@bythepixel.com&payment_fee=1.03&receiver_id=DGT2CSE3EY3BE&txn_type=web_accept&item_name=Scally Hatter 2010 - Signup Fee&mc_currency=USD&item_number=&residence_country=US&test_ipn=1&handling_amount=0.00&transaction_subject=Scally Hatter 2010 - Signup Fee&payment_gross=25.00&shipping=0.00&'),
(8, '2010-09-26 13:58:12', 16, 'mc_gross=25.00&invoice=16&protection_eligibility=Ineligible&payer_id=NDHFPYFENR8ZQ&tax=0.00&payment_date=10:58:28 Sep 26, 2010 PDT&payment_status=Completed&charset=windows-1252&first_name=Test&mc_fee=1.03&notify_version=3.0&custom=&payer_status=unverified&business=seller_1285370967_biz@bythepixel.com&quantity=1&verify_sign=Aw2rBkBEaF9Jm2gw4adz0JucoTW3AaZ7v4MHRBI-BGmu3rGA30ifmFrj&payer_email=buyer_1285370994_per@bythepixel.com&txn_id=3K457697GC192110T&payment_type=instant&last_name=User&receiver_email=seller_1285370967_biz@bythepixel.com&payment_fee=1.03&receiver_id=DGT2CSE3EY3BE&txn_type=web_accept&item_name=Scally Hatter 2010 - Signup Fee&mc_currency=USD&item_number=&residence_country=US&test_ipn=1&handling_amount=0.00&transaction_subject=Scally Hatter 2010 - Signup Fee&payment_gross=25.00&shipping=0.00&'),
(9, '2010-09-26 14:45:53', 5, 'mc_gross=25.00&invoice=5&protection_eligibility=Ineligible&payer_id=NDHFPYFENR8ZQ&tax=0.00&payment_date=10:39:30 Sep 26, 2010 PDT&payment_status=Completed&charset=windows-1252&first_name=Test&mc_fee=1.03&notify_version=3.0&custom=&payer_status=unverified&business=seller_1285370967_biz@bythepixel.com&quantity=1&verify_sign=ABQPt6NEZAQW32UPyfMCAWS2ruoPATJhNptVbGboc1yRxTq907xgTriR&payer_email=buyer_1285370994_per@bythepixel.com&txn_id=0KD45916RJ639303E&payment_type=instant&last_name=User&receiver_email=seller_1285370967_biz@bythepixel.com&payment_fee=1.03&receiver_id=DGT2CSE3EY3BE&txn_type=web_accept&item_name=Scally Hatter 2010 - Signup Fee&mc_currency=USD&item_number=&residence_country=US&test_ipn=1&handling_amount=0.00&transaction_subject=Scally Hatter 2010 - Signup Fee&payment_gross=25.00&shipping=0.00&'),
(10, '2010-09-26 16:43:30', 23, 'mc_gross=25.00&invoice=23&protection_eligibility=Ineligible&payer_id=NDHFPYFENR8ZQ&tax=0.00&payment_date=13:43:47 Sep 26, 2010 PDT&payment_status=Completed&charset=windows-1252&first_name=Test&mc_fee=1.03&notify_version=3.0&custom=&payer_status=unverified&business=seller_1285370967_biz@bythepixel.com&quantity=1&verify_sign=An5ns1Kso7MWUdW4ErQKJJJ4qi4-AJ2m61cgAutBpaTE4QeGM7cm.-AU&payer_email=buyer_1285370994_per@bythepixel.com&txn_id=2MK80355WM864762P&payment_type=instant&last_name=User&receiver_email=seller_1285370967_biz@bythepixel.com&payment_fee=1.03&receiver_id=DGT2CSE3EY3BE&txn_type=web_accept&item_name=Scally Hatter 2010 - Signup Fee&mc_currency=USD&item_number=&residence_country=US&test_ipn=1&handling_amount=0.00&transaction_subject=Scally Hatter 2010 - Signup Fee&payment_gross=25.00&shipping=0.00&'),
(11, '2010-09-26 16:48:07', 24, 'mc_gross=25.00&invoice=24&protection_eligibility=Ineligible&payer_id=NDHFPYFENR8ZQ&tax=0.00&payment_date=13:48:15 Sep 26, 2010 PDT&payment_status=Completed&charset=windows-1252&first_name=Test&mc_fee=1.03&notify_version=3.0&custom=&payer_status=unverified&business=seller_1285370967_biz@bythepixel.com&quantity=1&verify_sign=AsOdY2u8OoMUargbefGE9-hAUy1kADrk7t7wJ1HlZNki.sNyLK7bVOGL&payer_email=buyer_1285370994_per@bythepixel.com&txn_id=21641117H8057580C&payment_type=instant&last_name=User&receiver_email=seller_1285370967_biz@bythepixel.com&payment_fee=1.03&receiver_id=DGT2CSE3EY3BE&txn_type=web_accept&item_name=Scally Hatter 2010 - Signup Fee&mc_currency=USD&item_number=&residence_country=US&test_ipn=1&handling_amount=0.00&transaction_subject=Scally Hatter 2010 - Signup Fee&payment_gross=25.00&shipping=0.00&'),
(12, '2010-09-26 19:28:05', 26, 'mc_gross=25.00&invoice=26&protection_eligibility=Ineligible&payer_id=NDHFPYFENR8ZQ&tax=0.00&payment_date=16:28:23 Sep 26, 2010 PDT&payment_status=Completed&charset=windows-1252&first_name=Test&mc_fee=1.03&notify_version=3.0&custom=&payer_status=unverified&business=seller_1285370967_biz@bythepixel.com&quantity=1&verify_sign=ACUe-E7Hjxmeel8FjYAtjnx-yjHAA18jFLOame8PYlekid5ETOo0k2xD&payer_email=buyer_1285370994_per@bythepixel.com&txn_id=3TF192309P6232318&payment_type=instant&last_name=User&receiver_email=seller_1285370967_biz@bythepixel.com&payment_fee=1.03&receiver_id=DGT2CSE3EY3BE&txn_type=web_accept&item_name=Scally Hatter 2010 - Signup Fee&mc_currency=USD&item_number=&residence_country=US&test_ipn=1&handling_amount=0.00&transaction_subject=Scally Hatter 2010 - Signup Fee&payment_gross=25.00&shipping=0.00&');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL DEFAULT 'n/a',
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skill` int(11) NOT NULL,
  `shirt_size` varchar(2) NOT NULL,
  `request` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10156 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `first_name`, `last_name`, `gender`, `phone`, `email`, `skill`, `shirt_size`, `request`) VALUES
(1, 'Roeland', 'Reyniers', 'm', '813468003', 'roeland.reyniers@gmail.com', 4, 'm', 'I wanna be with my homies!'),
(3, 'Bob', '', 'm', '654654', '', 1, 's', ''),
(6, 'Roeland', 'Reyniers', 'm', '12903478', 'laskdjf', 1, 's', 'asljkf'),
(7, 'Roeland', 'Reyniers', 'm', '12903478', 'laskdjf', 1, 's', 'asljkf'),
(8, 'asf', 'asdfasf', 'm', '123', '', 1, 's', 'asdf'),
(9, 'asdf', '', 'm', '123', '', 1, 's', ''),
(10, 'Roberto', 'Adino', 'm', '8138382828', 'roberto@aol.com', 1, 'm', 'Get me in!'),
(11, 'asdf', 'asdf', 'm', '1234', '', 1, 's', ''),
(12, 'wetr', 'wet', 'm', '', '', 1, 's', ''),
(13, 'asdf', 'asdf', 'm', '', '', 1, 's', ''),
(14, 'Roeland', 'Reyniers', 'm', '', 'roeland@bythepixel.com', 1, 's', ''),
(15, 'asdf', 'asdf', 'm', '', 'rr@rr.com', 1, 's', ''),
(16, 'etr', 'wet', 'm', '123123', 'roeland@bythepixel.com', 1, 's', ''),
(17, 'Pimp', 'Daddy', 'm', '', 'roeland.reyniers@gmail.com', 1, 's', ''),
(18, 'asdf', 'asdf', 'm', '', 'roeland@bythepixel.com', 1, 's', ''),
(19, 'asdf', 'asdf', 'm', '', '', 1, 's', ''),
(20, 'roeland', 'reynier', 'm', '', 'roeland@theshit.com', 1, 's', ''),
(21, 'dog', 'y', 'm', '18231', 'roeland@bythepixel.com', 1, 's', ''),
(22, 'asdf', 'asdfasdf', 'm', '', '', 1, 's', ''),
(23, 'dfasdf', 'fdas', 'm', '123', 'asdf', 1, 's', ''),
(24, 'dsf', 'gdsfg', 'm', '', 'gfgds', 1, 's', ''),
(25, 'asd', 'fasdf', 'm', '', '', 1, 's', ''),
(26, 'asd', 'fasdf', 'm', '', '', 1, 's', ''),
(10000, 'Roeland', 'Reyniers', 'm', '813 468 0703', 'roeland.reyniers@gmail.com', 4, 'm', ''),
(10001, 'Daniel', 'Marquez', 'n/a', '7274800201', 'danmarq@gmail.com', 3, 'm', ''),
(10002, 'Mike', 'Farrell', 'n/a', '6465058269', 'sugacandy2@hotmail.com', 3, 'l', ''),
(10003, 'Brooke', 'Abney', 'n/a', '8133945942', 'bkrabill@mail.usf.edu', 3, 's', ''),
(10004, 'Patricia', 'Igar', 'n/a', '727-776-687', 'patriciaigar@gmail.com', 3, 's', ''),
(10005, 'Stacey', 'Herdegen', 'n/a', '941-323-7007', 'stacey.herdegen@yahoo.com', 3, 's', ''),
(10006, 'ryan', 'kalpakian', 'n/a', '954-805-4287', 'rkalpaki@mail.usf.edu', 3, 'm', ''),
(10007, 'Patricia', 'Stevenson', 'n/a', '(813) 956-4029', 'plsteve2@mail.usf.edu', 3, 's', ''),
(10008, 'Patricia (T-Money)', 'Brooks', 'n/a', '(954) 326-9423', 'pbroo001@gmail.com', 4, 's', ''),
(10009, 'Glenn', 'Goodwin', 'n/a', '(817) 726-8597', 'glenn.david.goodwin@gmail.com', 3, 'l', ''),
(10010, 'Michel', 'Avey', 'n/a', '2392811514', 'michelavey@mail.usf.edu', 3, 'l', ''),
(10011, 'Chris', 'Ozi', 'n/a', '999-999-9999', 'mccchris2@yahoo.com', 3, 'm', ''),
(10012, 'Sydnor', 'Richkind', 'n/a', '(813) 610-7373', 'srichkin@health.usf.edu', 3, 's', ''),
(10013, 'Dawson', 'Kleist', 'n/a', '706-726-2042', 'dkleist07@aol.com', 4, 'm', ''),
(10014, 'Tony', 'Christian', 'n/a', '941-504-6439', 'beckham08@earthlink.net', 4, 'l', ''),
(10015, 'Andrew', 'Abney', 'n/a', '8133945945', 'adabney@mail.usf.edu', 4, 'm', ''),
(10016, 'Rickamer', 'Hoover', 'n/a', '813-317-7073', 'Rickamer@aol.com', 4, 's', ''),
(10017, 'John', 'Harris', 'n/a', '8135285841', 'jaharri6@mail.usf.edu', 4, 'm', ''),
(10018, 'Andrew', 'Ramer', 'n/a', '8137861761', 'aramer2@mail.usf.edu', 4, 'm', ''),
(10019, 'Adilia', 'Taylor', 'n/a', '941-962-1924', 'ajtaylo4@mail.usf.edu', 4, 's', ''),
(10020, 'Danielle', 'Davis', 'n/a', '321-298-2301', 'dmdavis4@mail.usf.edu', 4, 's', ''),
(10021, 'Tessa', 'Walter', 'n/a', '3215147870', 'twalter@mail.usf.edu', 4, 's', ''),
(10022, 'Ashlee', 'Rogers', 'n/a', '4077332857', 'anroger3@mail.usf.edu', 3, 's', ''),
(10023, 'Jake Tee', 'Hart', 'n/a', '312 420 7469', 'jakobteewashington@yahoo.com', 4, 'm', ''),
(10024, 'Mike', 'Potter', 'n/a', '(941) 374-6899', 'mppotter@mail.usf.edu', 4, 'm', ''),
(10025, 'Tina', 'Goularte', 'n/a', '360-471-5654', 'vgoulart@mail.usf.edu', 3, 's', ''),
(10026, 'Remy', 'Mullen', 'n/a', '(941)-538-8960', 'fwonga18@aol.com', 4, 'm', ''),
(10027, 'Shane', 'Hagmaier', 'n/a', '941-224-5562', 'shanehagmaier@hotmail.com', 3, 'l', ''),
(10028, 'therese', 'doebler', 'n/a', '(813) 270-0439', 'therese@mail.usf.edu', 2, 's', ''),
(10029, 'Kathy', 'Yang', 'n/a', '813-407-2881', 'naning525@aol.com', 3, 's', ''),
(10030, 'Dario', 'Milano', 'n/a', '954-993-2608', 'dmilano@mail.usf.edu', 2, 'm', ''),
(10031, 'Jackie', 'Smith', 'n/a', '813-748-2120', 'horsegirl2848@hotmail.com', 3, 's', ''),
(10032, 'Leonard', 'Cho', 'n/a', '727.278.3692', '00cho00@gmail.com', 4, 'm', ''),
(10033, 'Missy', 'Willoughby', 'n/a', '9048615503', 'mjwillou@mail.usf.edu', 4, 's', ''),
(10034, 'Yale', 'Lin', 'n/a', '919-602-6233', 'Yyzlin@gmail.com', 3, 'm', ''),
(10035, 'Ryan', 'Chard', 'n/a', '561-827-9118', 'rchard@mail.usf.edu', 4, 'l', ''),
(10036, 'Dan', 'Macklin', 'n/a', '321-604-6792', 'dmacksk8er@yahoo.com', 3, 'm', ''),
(10037, 'Marisa A.', 'Westberry', 'n/a', '3868047882', 'mwestberry@alumni.flagler.edu', 3, 'm', ''),
(10038, 'Ray', 'Chumbley', 'n/a', '941-380-4519', 'breezeshooter@hotmail.com', 3, 'l', ''),
(10039, 'Matt', 'Vernon', 'n/a', '4076875692', 'mattvernon@mac.com', 4, 'l', ''),
(10040, 'Amanda', 'Nord', 'n/a', '7728126106', 'Qroxydudet27@msn.com', 4, 's', ''),
(10041, 'Eric', 'Reding', 'n/a', '3214808314', 'reddogrer@gmail.com', 2, 'm', ''),
(10042, 'Sean', 'Hopcraft', 'n/a', '4072529647', 'seanhopcraft@hotmail.com', 5, 'l', ''),
(10043, 'Kyle', 'Reedy', 'n/a', '727-443-2607', 'shortround10393@aol.com', 2, 'm', ''),
(10044, 'Brad', 'Agee', 'n/a', '765-717-4844', 'brad.agee@gmail.com', 5, 'l', ''),
(10045, 'Melissa', 'Agee', 'n/a', '517-643-0007', 'makeilen@aol.com', 4, 's', ''),
(10046, 'Monica', 'Carrington', 'n/a', '941-713-5314', 'mcarrington18@gmail.com', 3, 's', ''),
(10047, 'Aron', 'Andino', 'n/a', '561 699 4279', 'aronandino@gmail.com', 4, 'm', ''),
(10048, 'Edward', 'Moore', 'n/a', '813 817 2160', 'Emoore4@mail.usf.edu', 5, 'm', ''),
(10049, 'Jason', 'KcirtapkriK', 'n/a', '813-949-8250', 'kirksinbirks@verizon.net', 3, 'l', ''),
(10050, 'Ron', 'Hensler', 'n/a', '407-346-7502', 'rhensjr@gmail.com', 4, 'l', ''),
(10051, 'Jennifer', 'Chard', 'n/a', '561-543-5973', 'jen.chard@yahoo.com', 4, 's', ''),
(10052, 'Mike', 'Rigo', 'n/a', '941 524 7577', 'lilrigour@verizon.net', 3, 'l', ''),
(10053, 'Terry', 'Murphy', 'n/a', '407-770-7985', 'terence.murphy@email.saintleo.edu', 2, 'm', ''),
(10054, 'Claire', 'Selius', 'n/a', '3305599229', 'cselius@mail.usf.edu', 4, 's', ''),
(10055, 'Seamus', 'Belisle', 'n/a', '2676143361', 'smbelisl@mail.usf.edu', 4, 'l', ''),
(10056, 'Chris', 'Cawley', 'n/a', '321-480-4635', 'mrman7865@yahoo.com', 2, 'm', ''),
(10057, 'Taylor', 'Armstrong', 'n/a', '941-932-6857', 'strongarm18@gmail.com', 3, 'm', ''),
(10058, 'Matt', 'Nations', 'n/a', '9412669014', 'msk8105@hotmail.com', 3, 'm', ''),
(10059, 'Lauren', 'Centrella', 'n/a', '201-983-9316', 'lauren.centrella@email.saintleo.edu', 1, 'm', ''),
(10060, 'Jon', 'Alatriste', 'n/a', '407-496-7118', 'jonathan.alatriste@email.saintleo.edu', 2, 'm', ''),
(10061, 'Kyle', 'Krumwiede', 'n/a', '4074622574', 'Krumweede@cfl.rr.com', 4, 'm', ''),
(10062, 'Demetri', 'Houmis', 'n/a', '8139889214', 'mskh28@aol.com', 2, 'l', ''),
(10063, 'Peter', 'Helmore', 'n/a', '804-263-5870', 'phelmore@vt.edu', 3, 'm', ''),
(10064, 'Chasen', 'Brokaw', 'n/a', '850-508-3978', 'braves777@comcast.net', 1, 'm', ''),
(10065, 'Daniel', 'Nations', 'n/a', '9413213313', 'shmanz@ufl.edu', 3, 'm', ''),
(10066, 'Matt', 'Reedy', 'n/a', '727-542-8995', 'mtthwreedy@yahoo.com', 3, 'l', ''),
(10067, 'Michael', 'Vu', 'n/a', '7276317638', 'mvu@knights.ucf.edu', 2, 's', ''),
(10068, 'Danny', 'herrera', 'n/a', '3868431946', 'dherrer2@mail.usf.edu', 4, 'm', ''),
(10069, 'Mallory', 'White', 'n/a', '(540) 295 7381', 'mwhite14@mail.usf.edu', 2, 'm', ''),
(10070, 'Jesse', 'Goldsmith', 'n/a', '3216264730', 'fpl91291@hotmail.com', 2, 'm', ''),
(10071, 'Aaron', 'Puebla', 'n/a', '941-350-7388', 'arunnnn101@hotmail.com', 5, 's', ''),
(10072, 'Ashley', 'Long', 'n/a', '724 9444596', 'ashley.nicole.long@gmail.com', 4, 's', ''),
(10073, 'Rebecca', 'Poznansky', 'n/a', '347 729 6519', 'rpoznans@fau.edu', 3, 's', ''),
(10074, 'Oliver', 'Ucke', 'n/a', '8133356450', 'jucke@mail.usf.edu', 2, 's', ''),
(10075, 'Billy', 'Dzwonkowski', 'n/a', '941-301-1006', 'bd1366@aol.com', 3, 'm', ''),
(10076, 'Jack', 'Dupell', 'n/a', '813-495-7399', 'JDupe98@aol.com', 4, 'm', ''),
(10077, 'jd', 'eibe', 'n/a', '9414486087', 'dmx1369@aol.com', 3, 'm', ''),
(10078, 'Mark', 'Mendelevitz', 'n/a', '703-626-6263', 'mmendelevitz2008@my.fit.edu', 4, 's', ''),
(10079, 'Thomas', 'Reyniers', 'n/a', '941 725 0962', 'treynier@mail.usf.edu', 4, 'l', ''),
(10080, 'Tom', 'Chrzanowski', 'n/a', '313-525-6064', 't.chrzanowski01@gmail.com', 4, 'm', ''),
(10081, 'D', 'Lee', 'n/a', '727-204-1897', 'dan.b.lee@gmail.com', 4, 'm', ''),
(10082, 'Marty', 'Oswald', 'n/a', '(440) 655-3310', 'niten08@yahoo.com', 4, 'm', ''),
(10083, 'Sean', 'Messer', 'n/a', '3217490103', 'klahan81@yahoo.com', 2, 'm', ''),
(10084, 'Forrest', 'Hannahs', 'n/a', '321 446-6606', 'fhannahs@mail.usf.edu', 4, 'm', ''),
(10085, 'Brandon', 'Perales', 'n/a', '813-334-0849', 'brandonperales@gmail.com', 5, 'm', ''),
(10086, 'Summer', 'Strickler', 'n/a', '321-697-2535', 'Summerstrickler5@gmail.com', 3, 's', ''),
(10087, 'Eric', 'Siegmund', 'n/a', '727-420-7063', 'ericrsiegmund@gmail.com', 3, 'l', ''),
(10088, 'josh', 'pfenning', 'n/a', '813.802.0812', 'joshua_pfenning@verizon.net', 5, 'xl', ''),
(10089, '"Al ""Doc"""', 'Brown', 'n/a', '321-728-1985', 'abrown@fit.edu', 3, 'm', ''),
(10090, 'Joshua', 'Adams', 'n/a', '321-474-7513', 'josh@iamjosh.com', 3, 'm', ''),
(10091, 'Johanna', 'Kovarik', 'n/a', '269 932 8681', 'jkovarik@mail.usf.edu', 3, 's', ''),
(10092, 'Brian', 'Clarke', 'n/a', '813-335-0501', 'brianbclarke@hotmail.com', 4, 'l', ''),
(10093, 'Daiquiri', 'Frieling', 'n/a', '941.330.4821', 'dfrielin@student.mccfl.edu', 3, 's', ''),
(10094, 'Ged', 'Helm', 'n/a', '(727)455-7133', 'gedhelm@gmail.com', 1, 'l', ''),
(10095, 'Kelleigh', 'Simpson', 'n/a', '(609)651-7157', 'thewanderer527@yahoo.com', 4, 's', ''),
(10096, 'Mike', 'Mullins', 'n/a', '727-537-9695', 'reemox@gmail.com', 3, 'xl', ''),
(10097, 'Chase', 'Gardner', 'n/a', '772 224 0523', 'cgardne2@mail.usf.edu', 4, 'l', ''),
(10098, 'Alex', 'Heslep', 'n/a', '813-368-3511', 'alexheslep@hotmail.com', 4, 'l', ''),
(10099, 'Savio', 'Fernandes', 'n/a', '(813)966-1551', 'sjfernandes13@gmail.com', 2, 'm', ''),
(10100, 'Jordan', 'Anderson', 'n/a', '407-758-0281', 'freedomballa34@yahoo.com', 2, 'm', ''),
(10101, 'Rick', 'RIessle', 'n/a', '6038975341', 'rick.riessle@gmail.com', 4, 'xl', ''),
(10102, 'paul', 'rabaut', 'n/a', '813-555-5555', 'paulrabaut@hotmail.com', 5, 'l', ''),
(10103, 'Conrad', 'Estes', 'n/a', '321-432-9702', 'McDazzlepants@gmail.com', 3, 'l', ''),
(10104, 'Jimmy', 'Price', 'n/a', '(813) 416-7931', 'bulge57@yahoo.com', 5, 'xl', ''),
(10105, 'Kali', 'Westphalen', 'n/a', '941 504-9378', 'kwestphalen@me.com', 3, 'm', ''),
(10106, 'John', 'DallaRosa', 'n/a', '386 334 2944', 'Jdallaro@mail.usf.edu', 3, 'm', ''),
(10107, 'Joseph', 'Crinkley', 'n/a', '9417050431', 'jcrinkley@hotmail.com', 4, 'm', ''),
(10108, 'Viviana', 'Lit', 'n/a', '813-523-2323', 'viviana.lit@gmail.com', 2, 's', ''),
(10109, 'Rich', 'Meyerson', 'n/a', '813-894-4533', 'rmeyerson@sealimited.com', 3, 'l', ''),
(10110, 'William', 'Folchi', 'n/a', '860-371-6124', 'wfolchi2009@my.fit.edu', 2, 'l', ''),
(10111, 'Casey', 'Gamble', 'n/a', '(708) 772-6595', 'CaseyLove723@yahoo.com', 3, 'm', ''),
(10112, 'Jeremy', 'Sidman', 'n/a', '954-895-8664', 'wurm989@yahoo.com', 3, 'xl', ''),
(10113, 'alec', 'foster', 'n/a', '813-731-6917', 'afoster2@mail.usf.edu', 4, 'xl', ''),
(10114, 'Jesse', 'Velasquez', 'n/a', '813-766-8173', 'Javelasq@mail.usf.edu', 3, 'm', ''),
(10115, 'Matt', 'Leniton', 'n/a', '7273645012', 'wleniton@mail.usf.edu', 4, 'm', ''),
(10116, 'Kristopher', 'Bosque', 'n/a', '4079278149', 'bosko06@aol.com', 3, 'l', ''),
(10117, 'Jenn', 'Dronkers Masone', 'n/a', '727-437-8260', 'jdronkers@poynter.org', 4, 's', ''),
(10118, 'Darren', 'Rose', 'n/a', 'nunya', 'DCRUWOFL@aol.com', 3, 'l', ''),
(10119, 'Steven', 'Bassi', 'n/a', '8133358610', 'fudabushi@gmail.com', 3, 'l', ''),
(10120, 'Steve', 'Erdberg', 'n/a', '(727) 207-4180', 'hoppingonrunnynoses@yahoo.com', 3, 'm', ''),
(10121, 'Ryan', 'Leacock', 'n/a', '813-928-0782', 'ryanleacock@verizon.net', 3, 'l', ''),
(10122, 'Sam', 'Slater', 'n/a', '813 786 1734', 'samslater@alphatampa.net', 2, 'm', ''),
(10123, 'Eric', 'Davis', 'n/a', '813-985-4989', 'mad_mexican2@hotmail.com', 2, 'l', ''),
(10124, 'Catherine', 'Linton', 'n/a', '321-298-4645', 'clinton6@fau.edu', 3, 's', ''),
(10125, 'Matt', 'Wissler', 'n/a', '813-299-2214', 'mwissler@geosyntec.com', 3, 'l', ''),
(10126, 'Jeremy', 'White', 'n/a', '813.918.8341', 'jtwhite@geosyntec.com', 3, 'xl', ''),
(10127, 'Daniel', 'Huber', 'n/a', '813-351-9240', 'danieladamhuber@gmail.com', 2, 'l', ''),
(10128, 'Marlena', 'Perales', 'n/a', '813-476-4100', 'marlenaperales@gmail.com', 2, 's', ''),
(10129, 'Cathy', 'Marshall', 'n/a', '941 807 1153', 'marshallcathy@gmail.com', 4, 's', ''),
(10130, 'Mike', 'Zaagman', 'n/a', '616-443-1881', 'mikezaagman04@gmail.com', 4, 'm', ''),
(10131, 'Alison', 'Stargel', 'n/a', '7273653924', 'stargel.alison@gmail.com', 2, 'm', ''),
(10132, 'Jenny', 'Spacek', 'n/a', '727-385-6099', 'blackbirdbrown@gmail.com', 3, 's', ''),
(10133, 'Boe', 'Quisenberry', 'n/a', '813.928.3880', 'boe_quisenberry@yahoo.com', 4, 'm', ''),
(10134, 'Kathleen', 'Quisenberry', 'n/a', '614.946.7953', 'k_q2834@hotmail.com', 4, 's', ''),
(10135, 'Christopher', 'LoPresto', 'n/a', '813-486-6529', 'clopresto1464@aol.com', 3, 'm', ''),
(10136, 'Anthony', 'Encarnacion', 'n/a', '941-441-5705', 'encarnacion@mail.usf.edu', 3, 'xl', ''),
(10137, 'Frank', 'Price', 'n/a', '941-761-2802', 'catlinjrette@yahoo.com', 2, 'l', ''),
(10138, 'Roy', 'Juniors', 'n/a', '904 SUCK IT1', 'rje24@ufl.edu', 3, 's', ''),
(10139, 'Louis', 'Brown', 'n/a', '727-743-6099', 'woodybdc@gmail.com', 3, 'xl', ''),
(10140, 'Andrew', 'Leathers', 'n/a', '3523593444', 'nolocalreality@excite.com', 4, 'm', ''),
(10141, 'Robert', 'Negron', 'n/a', '787 525-2884', 'rmnegron@hotmail.com', 1, 'm', ''),
(10142, 'Troy', 'Greenawalt', 'n/a', '772-564-9356', 'tag112462@aol.com', 3, 'm', ''),
(10143, 'Seth', 'Richards', 'n/a', '941 812 2365', 'frichards13@msn.com', 5, 'xl', ''),
(10144, 'Joshua', 'Kearns', 'n/a', '724-272-4499', 'jjkearns22@hotmail.com', 4, 'm', ''),
(10145, 'Zachary', 'Hipkens', 'n/a', '615 512-0778', 'hipkenzh@eckerd.edu', 4, 'm', ''),
(10146, 'camilo', 'buitrago', 'n/a', '8139186588', 'zero19876@hotmail.com', 3, 'm', ''),
(10147, 'efrain', 'ramon', 'n/a', '239-682-9785', 'efrainramon@yahoo.com', 4, 'm', ''),
(10148, 'Andrew', 'Ashby', 'n/a', '7273594956', 'Psycodog2000@aol.com', 2, 'm', ''),
(10149, 'Alisha', 'Stoun', 'n/a', '850-445-1869', 'stoun@ufl.edu', 4, 's', ''),
(10150, 'Michael', 'Plante', 'n/a', '407-687-6755', 'rbrmike@hotmail.com', 3, 'l', ''),
(10151, 'Matthew', 'Hardy', 'n/a', '(941) 780-5476', 'mhardy3@knights.ucf.edu', 3, 'm', ''),
(10152, 'Carlo', 'Mosca', 'n/a', '203-668-0786', 'cmosca84@gmail.com', 4, 'm', ''),
(10153, 'Ding', 'Dong', 'm', '', '', 1, 's', ''),
(10154, 'Ding', 'Dong', 'm', '', 'asdf', 1, 's', ''),
(10155, 'dong', 'dingz', 'm', '', '', 1, 's', '');

-- --------------------------------------------------------

--
-- Table structure for table `player_scallyhatter`
--

CREATE TABLE IF NOT EXISTS `player_scallyhatter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_player_id` int(11) NOT NULL,
  `fk_scallyhatter_id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date_registered` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_player_id` (`fk_player_id`),
  KEY `fk_scallyhatter_id` (`fk_scallyhatter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=187 ;

--
-- Dumping data for table `player_scallyhatter`
--

INSERT INTO `player_scallyhatter` (`id`, `fk_player_id`, `fk_scallyhatter_id`, `status`, `date_registered`) VALUES
(5, 1, 2, 'Signed Up - Waiting List', '0000-00-00 00:00:00'),
(7, 3, 2, 'None', '0000-00-00 00:00:00'),
(10, 7, 2, 'Registering...', '0000-00-00 00:00:00'),
(11, 8, 2, 'Registering...', '0000-00-00 00:00:00'),
(12, 9, 2, 'Registering...', '0000-00-00 00:00:00'),
(13, 10, 2, 'Registering...', '0000-00-00 00:00:00'),
(14, 11, 2, 'Registering...', '0000-00-00 00:00:00'),
(15, 12, 2, 'Registering...', '0000-00-00 00:00:00'),
(16, 13, 2, 'Paid - Online', '0000-00-00 00:00:00'),
(17, 14, 2, 'Registering...', '0000-00-00 00:00:00'),
(18, 15, 2, 'Registering...', '0000-00-00 00:00:00'),
(19, 16, 2, 'Registering...', '0000-00-00 00:00:00'),
(20, 17, 2, 'Registering...', '0000-00-00 00:00:00'),
(21, 18, 2, 'Registering...', '0000-00-00 00:00:00'),
(22, 19, 2, 'Registering...', '0000-00-00 00:00:00'),
(23, 20, 2, 'Paid - Online', '0000-00-00 00:00:00'),
(24, 21, 2, 'Paid - Online', '0000-00-00 00:00:00'),
(25, 22, 2, 'Registering...', '0000-00-00 00:00:00'),
(26, 23, 2, 'Paid - Online', '2010-09-26 19:27:25'),
(27, 24, 2, 'Registering...', '0000-00-00 00:00:00'),
(28, 26, 2, 'Signed Up - Choose Payment', '2010-09-26 19:35:10'),
(31, 10000, 1, 'None', NULL),
(32, 10001, 1, 'None', NULL),
(33, 10002, 1, 'None', NULL),
(34, 10003, 1, 'None', NULL),
(35, 10004, 1, 'None', NULL),
(36, 10005, 1, 'None', NULL),
(37, 10006, 1, 'None', NULL),
(38, 10007, 1, 'None', NULL),
(39, 10008, 1, 'None', NULL),
(40, 10009, 1, 'None', NULL),
(41, 10010, 1, 'None', NULL),
(42, 10011, 1, 'None', NULL),
(43, 10012, 1, 'None', NULL),
(44, 10013, 1, 'None', NULL),
(45, 10014, 1, 'None', NULL),
(46, 10015, 1, 'None', NULL),
(47, 10016, 1, 'None', NULL),
(48, 10017, 1, 'None', NULL),
(49, 10018, 1, 'None', NULL),
(50, 10019, 1, 'None', NULL),
(51, 10020, 1, 'None', NULL),
(52, 10021, 1, 'None', NULL),
(53, 10022, 1, 'None', NULL),
(54, 10023, 1, 'None', NULL),
(55, 10024, 1, 'None', NULL),
(56, 10025, 1, 'None', NULL),
(57, 10026, 1, 'None', NULL),
(58, 10027, 1, 'None', NULL),
(59, 10028, 1, 'None', NULL),
(60, 10029, 1, 'None', NULL),
(61, 10030, 1, 'None', NULL),
(62, 10031, 1, 'None', NULL),
(63, 10032, 1, 'None', NULL),
(64, 10033, 1, 'None', NULL),
(65, 10034, 1, 'None', NULL),
(66, 10035, 1, 'None', NULL),
(67, 10036, 1, 'None', NULL),
(68, 10037, 1, 'None', NULL),
(69, 10038, 1, 'None', NULL),
(70, 10039, 1, 'None', NULL),
(71, 10040, 1, 'None', NULL),
(72, 10041, 1, 'None', NULL),
(73, 10042, 1, 'None', NULL),
(74, 10043, 1, 'None', NULL),
(75, 10044, 1, 'None', NULL),
(76, 10045, 1, 'None', NULL),
(77, 10046, 1, 'None', NULL),
(78, 10047, 1, 'None', NULL),
(79, 10048, 1, 'None', NULL),
(80, 10049, 1, 'None', NULL),
(81, 10050, 1, 'None', NULL),
(82, 10051, 1, 'None', NULL),
(83, 10052, 1, 'None', NULL),
(84, 10053, 1, 'None', NULL),
(85, 10054, 1, 'None', NULL),
(86, 10055, 1, 'None', NULL),
(87, 10056, 1, 'None', NULL),
(88, 10057, 1, 'None', NULL),
(89, 10058, 1, 'None', NULL),
(90, 10059, 1, 'None', NULL),
(91, 10060, 1, 'None', NULL),
(92, 10061, 1, 'None', NULL),
(93, 10062, 1, 'None', NULL),
(94, 10063, 1, 'None', NULL),
(95, 10064, 1, 'None', NULL),
(96, 10065, 1, 'None', NULL),
(97, 10066, 1, 'None', NULL),
(98, 10067, 1, 'None', NULL),
(99, 10068, 1, 'None', NULL),
(100, 10069, 1, 'None', NULL),
(101, 10070, 1, 'None', NULL),
(102, 10071, 1, 'None', NULL),
(103, 10072, 1, 'None', NULL),
(104, 10073, 1, 'None', NULL),
(105, 10074, 1, 'None', NULL),
(106, 10075, 1, 'None', NULL),
(107, 10076, 1, 'None', NULL),
(108, 10077, 1, 'None', NULL),
(109, 10078, 1, 'None', NULL),
(110, 10079, 1, 'None', NULL),
(111, 10080, 1, 'None', NULL),
(112, 10081, 1, 'None', NULL),
(113, 10082, 1, 'None', NULL),
(114, 10083, 1, 'None', NULL),
(115, 10084, 1, 'None', NULL),
(116, 10085, 1, 'None', NULL),
(117, 10086, 1, 'None', NULL),
(118, 10087, 1, 'None', NULL),
(119, 10088, 1, 'None', NULL),
(120, 10089, 1, 'None', NULL),
(121, 10090, 1, 'None', NULL),
(122, 10091, 1, 'None', NULL),
(123, 10092, 1, 'None', NULL),
(124, 10093, 1, 'None', NULL),
(125, 10094, 1, 'None', NULL),
(126, 10095, 1, 'None', NULL),
(127, 10096, 1, 'None', NULL),
(128, 10097, 1, 'None', NULL),
(129, 10098, 1, 'None', NULL),
(130, 10099, 1, 'None', NULL),
(131, 10100, 1, 'None', NULL),
(132, 10101, 1, 'None', NULL),
(133, 10102, 1, 'None', NULL),
(134, 10103, 1, 'None', NULL),
(135, 10104, 1, 'None', NULL),
(136, 10105, 1, 'None', NULL),
(137, 10106, 1, 'None', NULL),
(138, 10107, 1, 'None', NULL),
(139, 10108, 1, 'None', NULL),
(140, 10109, 1, 'None', NULL),
(141, 10110, 1, 'None', NULL),
(142, 10111, 1, 'None', NULL),
(143, 10112, 1, 'None', NULL),
(144, 10113, 1, 'None', NULL),
(145, 10114, 1, 'None', NULL),
(146, 10115, 1, 'None', NULL),
(147, 10116, 1, 'None', NULL),
(148, 10117, 1, 'None', NULL),
(149, 10118, 1, 'None', NULL),
(150, 10119, 1, 'None', NULL),
(151, 10120, 1, 'None', NULL),
(152, 10121, 1, 'None', NULL),
(153, 10122, 1, 'None', NULL),
(154, 10123, 1, 'None', NULL),
(155, 10124, 1, 'None', NULL),
(156, 10125, 1, 'None', NULL),
(157, 10126, 1, 'None', NULL),
(158, 10127, 1, 'None', NULL),
(159, 10128, 1, 'None', NULL),
(160, 10129, 1, 'None', NULL),
(161, 10130, 1, 'None', NULL),
(162, 10131, 1, 'None', NULL),
(163, 10132, 1, 'None', NULL),
(164, 10133, 1, 'None', NULL),
(165, 10134, 1, 'None', NULL),
(166, 10135, 1, 'None', NULL),
(167, 10136, 1, 'None', NULL),
(168, 10137, 1, 'None', NULL),
(169, 10138, 1, 'None', NULL),
(170, 10139, 1, 'None', NULL),
(171, 10140, 1, 'None', NULL),
(172, 10141, 1, 'None', NULL),
(173, 10142, 1, 'None', NULL),
(174, 10143, 1, 'None', NULL),
(175, 10144, 1, 'None', NULL),
(176, 10145, 1, 'None', NULL),
(177, 10146, 1, 'None', NULL),
(178, 10147, 1, 'None', NULL),
(179, 10148, 1, 'None', NULL),
(180, 10149, 1, 'None', NULL),
(181, 10150, 1, 'None', NULL),
(182, 10151, 1, 'None', NULL),
(183, 10152, 1, 'None', NULL),
(185, 10154, 2, 'None', NULL),
(186, 10155, 2, 'Signed Up - Choose Payment', '2010-09-26 23:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `scallyhatter`
--

CREATE TABLE IF NOT EXISTS `scallyhatter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `year` varchar(50) DEFAULT NULL,
  `max_players` varchar(50) DEFAULT NULL,
  `signup_fee_online` float DEFAULT NULL,
  `signup_fee_other` float DEFAULT NULL,
  `address` text,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `longitude` float NOT NULL DEFAULT '0',
  `latitude` float NOT NULL DEFAULT '0',
  `desc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scallyhatter`
--

INSERT INTO `scallyhatter` (`id`, `date`, `active`, `year`, `max_players`, `signup_fee_online`, `signup_fee_other`, `address`, `city`, `state`, `zip`, `longitude`, `latitude`, `desc`) VALUES
(1, '2009-11-30', 0, '2009', '150', 3, 0, 'Alumni Drive', 'Tampa', 'Florida', '33617', 0, 0, ''),
(2, '2010-11-06', 1, '2010', '200', 25, 30, '14421 Americana Circle Unit 105', 'Tampa', 'FL', '33612', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`) VALUES
(1, 'rreynier', '6dbd97851d347720fc13b91477ef1c84');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player_scallyhatter`
--
ALTER TABLE `player_scallyhatter`
  ADD CONSTRAINT `player_scallyhatter_ibfk_1` FOREIGN KEY (`fk_player_id`) REFERENCES `player` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `player_scallyhatter_ibfk_2` FOREIGN KEY (`fk_scallyhatter_id`) REFERENCES `scallyhatter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
