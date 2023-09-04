-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 10:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manageapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'malasngoding', '10406c1d7b7421b1a56f0d951e952a95');

-- --------------------------------------------------------

--
-- Table structure for table `api_list`
--

CREATE TABLE `api_list` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `request_type` varchar(10) NOT NULL,
  `parameters` text NOT NULL,
  `response_code` varchar(5) NOT NULL,
  `result` longtext NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_list`
--

INSERT INTO `api_list` (`id`, `url`, `request_type`, `parameters`, `response_code`, `result`, `createdon`) VALUES
(1, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:33:41'),
(2, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:34:08'),
(3, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:34:12'),
(4, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:40:34'),
(5, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:40:35'),
(6, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:40:51'),
(7, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:40:52'),
(8, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:53:18'),
(9, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:53:54'),
(10, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:54:11'),
(11, 'http://103.179.56.140:7771/api/getsms.php', 'GET', 'user:jsu;pass:77jsu77;number:085771363810', '200', 'null', '2023-08-31 13:54:15'),
(12, 'http://103.179.56.140:7771/api/getnumber.php', 'GET', 'user:jsu;pass:77jsu77;limit:50', '200', '[{\"id\":\"967085\",\"gwr\":\"gw020\",\"com\":\"dongle5\",\"imei\":\"\",\"imsi\":\"510017146551562\",\"number\":\"085771363915\"},{\"id\":\"966950\",\"gwr\":\"gw186\",\"com\":\"dongle6\",\"imei\":\"\",\"imsi\":\"510011135809395\",\"number\":\"085811291959\"},{\"id\":\"967050\",\"gwr\":\"gw186\",\"com\":\"dongle26\",\"imei\":\"\",\"imsi\":\"510011135809664\",\"number\":\"085811292410\"},{\"id\":\"967097\",\"gwr\":\"gw020\",\"com\":\"dongle19\",\"imei\":\"\",\"imsi\":\"510017146551536\",\"number\":\"085771363848\"},{\"id\":\"966943\",\"gwr\":\"gw186\",\"com\":\"dongle5\",\"imei\":\"\",\"imsi\":\"510011135809696\",\"number\":\"085811292452\"},{\"id\":\"967007\",\"gwr\":\"gw020\",\"com\":\"dongle2\",\"imei\":\"\",\"imsi\":\"510017146551541\",\"number\":\"085771363857\"},{\"id\":\"967075\",\"gwr\":\"gw020\",\"com\":\"dongle30\",\"imei\":\"\",\"imsi\":\"510013900506727\",\"number\":\"081539457439\"},{\"id\":\"967006\",\"gwr\":\"gw020\",\"com\":\"dongle42\",\"imei\":\"\",\"imsi\":\"510011135815644\",\"number\":\"085811302937\"},{\"id\":\"967008\",\"gwr\":\"gw186\",\"com\":\"dongle41\",\"imei\":\"\",\"imsi\":\"510011135809348\",\"number\":\"085811291851\"},{\"id\":\"967039\",\"gwr\":\"gw020\",\"com\":\"dongle26\",\"imei\":\"\",\"imsi\":\"510013900506734\",\"number\":\"081539457448\"},{\"id\":\"967044\",\"gwr\":\"gw020\",\"com\":\"dongle17\",\"imei\":\"\",\"imsi\":\"510017146551550\",\"number\":\"085771363891\"},{\"id\":\"967047\",\"gwr\":\"gw020\",\"com\":\"dongle27\",\"imei\":\"\",\"imsi\":\"510013900506749\",\"number\":\"081539457464\"},{\"id\":\"966911\",\"gwr\":\"gw186\",\"com\":\"dongle51\",\"imei\":\"\",\"imsi\":\"510017146550344\",\"number\":\"085771357591\"},{\"id\":\"967005\",\"gwr\":\"gw020\",\"com\":\"dongle12\",\"imei\":\"\",\"imsi\":\"510017146551553\",\"number\":\"085771363896\"},{\"id\":\"967038\",\"gwr\":\"gw020\",\"com\":\"dongle46\",\"imei\":\"\",\"imsi\":\"510013900506751\",\"number\":\"081539457466\"},{\"id\":\"966976\",\"gwr\":\"gw186\",\"com\":\"dongle29\",\"imei\":\"\",\"imsi\":\"510015448022482\",\"number\":\"085754335696\"},{\"id\":\"967076\",\"gwr\":\"gw186\",\"com\":\"dongle9\",\"imei\":\"\",\"imsi\":\"510011135809382\",\"number\":\"085811291932\"},{\"id\":\"966909\",\"gwr\":\"gw186\",\"com\":\"dongle1\",\"imei\":\"\",\"imsi\":\"510013900506541\",\"number\":\"081539457108\"},{\"id\":\"966977\",\"gwr\":\"gw186\",\"com\":\"dongle10\",\"imei\":\"\",\"imsi\":\"510011135810781\",\"number\":\"085811294291\"},{\"id\":\"966947\",\"gwr\":\"gw186\",\"com\":\"dongle55\",\"imei\":\"\",\"imsi\":\"510011135809723\",\"number\":\"085811292490\"},{\"id\":\"967049\",\"gwr\":\"gw020\",\"com\":\"dongle7\",\"imei\":\"\",\"imsi\":\"510017146551569\",\"number\":\"085771363926\"},{\"id\":\"967129\",\"gwr\":\"gw020\",\"com\":\"dongle14\",\"imei\":\"\",\"imsi\":\"510017146551513\",\"number\":\"085771363810\"},{\"id\":\"967045\",\"gwr\":\"gw020\",\"com\":\"dongle57\",\"imei\":\"\",\"imsi\":\"510011135815631\",\"number\":\"085811302919\"},{\"id\":\"967109\",\"gwr\":\"gw186\",\"com\":\"dongle14\",\"imei\":\"\",\"imsi\":\"510013900462215\",\"number\":\"081539368339\"},{\"id\":\"967013\",\"gwr\":\"gw020\",\"com\":\"dongle3\",\"imei\":\"\",\"imsi\":\"510017146551531\",\"number\":\"085771363839\"},{\"id\":\"967186\",\"gwr\":\"gw020\",\"com\":\"dongle35\",\"imei\":\"\",\"imsi\":\"510013900506756\",\"number\":\"081539457471\"},{\"id\":\"967096\",\"gwr\":\"gw186\",\"com\":\"dongle19\",\"imei\":\"\",\"imsi\":\"510011135809720\",\"number\":\"085811292487\"},{\"id\":\"966978\",\"gwr\":\"gw186\",\"com\":\"dongle40\",\"imei\":\"\",\"imsi\":\"510011135809713\",\"number\":\"085811292476\"},{\"id\":\"967081\",\"gwr\":\"gw186\",\"com\":\"dongle42\",\"imei\":\"\",\"imsi\":\"510013900506713\",\"number\":\"081539457425\"},{\"id\":\"967029\",\"gwr\":\"gw020\",\"com\":\"dongle15\",\"imei\":\"\",\"imsi\":\"510017146551573\",\"number\":\"085771363930\"},{\"id\":\"966971\",\"gwr\":\"gw186\",\"com\":\"dongle28\",\"imei\":\"\",\"imsi\":\"510011135809675\",\"number\":\"085811292422\"},{\"id\":\"966959\",\"gwr\":\"gw186\",\"com\":\"dongle27\",\"imei\":\"\",\"imsi\":\"510011135809387\",\"number\":\"085811291939\"},{\"id\":\"966952\",\"gwr\":\"gw186\",\"com\":\"dongle16\",\"imei\":\"\",\"imsi\":\"510011135808933\",\"number\":\"085811290886\"},{\"id\":\"967058\",\"gwr\":\"gw186\",\"com\":\"dongle17\",\"imei\":\"\",\"imsi\":\"510011135809680\",\"number\":\"085811292431\"},{\"id\":\"967077\",\"gwr\":\"gw186\",\"com\":\"dongle49\",\"imei\":\"\",\"imsi\":\"510011135810821\",\"number\":\"085811294355\"},{\"id\":\"967094\",\"gwr\":\"gw020\",\"com\":\"dongle48\",\"imei\":\"\",\"imsi\":\"510013900506815\",\"number\":\"081539457531\"},{\"id\":\"966945\",\"gwr\":\"gw186\",\"com\":\"dongle45\",\"imei\":\"\",\"imsi\":\"510011135817072\",\"number\":\"085811305226\"},{\"id\":\"967074\",\"gwr\":\"gw020\",\"com\":\"dongle40\",\"imei\":\"\",\"imsi\":\"510013900506812\",\"number\":\"081539457528\"},{\"id\":\"967092\",\"gwr\":\"gw020\",\"com\":\"dongle58\",\"imei\":\"\",\"imsi\":\"510011135815632\",\"number\":\"085811302920\"},{\"id\":\"966997\",\"gwr\":\"gw020\",\"com\":\"dongle41\",\"imei\":\"\",\"imsi\":\"510011135815623\",\"number\":\"085811302909\"},{\"id\":\"967221\",\"gwr\":\"gw020\",\"com\":\"dongle53\",\"imei\":\"\",\"imsi\":\"510011135815556\",\"number\":\"085811302802\"},{\"id\":\"967108\",\"gwr\":\"gw186\",\"com\":\"dongle13\",\"imei\":\"\",\"imsi\":\"510011135809718\",\"number\":\"085811292485\"},{\"id\":\"967110\",\"gwr\":\"gw020\",\"com\":\"dongle52\",\"imei\":\"\",\"imsi\":\"510011135815580\",\"number\":\"085811302836\"},{\"id\":\"967113\",\"gwr\":\"gw020\",\"com\":\"dongle18\",\"imei\":\"\",\"imsi\":\"510017146551593\",\"number\":\"085771363975\"},{\"id\":\"966927\",\"gwr\":\"gw186\",\"com\":\"dongle52\",\"imei\":\"\",\"imsi\":\"510015448022535\",\"number\":\"085754335765\"},{\"id\":\"967080\",\"gwr\":\"gw020\",\"com\":\"dongle51\",\"imei\":\"\",\"imsi\":\"510011135815615\",\"number\":\"085811302898\"},{\"id\":\"966938\",\"gwr\":\"gw186\",\"com\":\"dongle4\",\"imei\":\"\",\"imsi\":\"510011135809667\",\"number\":\"085811292413\"},{\"id\":\"966939\",\"gwr\":\"gw186\",\"com\":\"dongle24\",\"imei\":\"\",\"imsi\":\"510015448022505\",\"number\":\"085754335724\"},{\"id\":\"967046\",\"gwr\":\"gw020\",\"com\":\"dongle37\",\"imei\":\"\",\"imsi\":\"510011135815599\",\"number\":\"085811302872\"},{\"id\":\"967131\",\"gwr\":\"gw020\",\"com\":\"dongle25\",\"imei\":\"\",\"imsi\":\"510013900506739\",\"number\":\"081539457453\"}]', '2023-08-31 13:55:35'),
(13, 'http://103.179.56.140:7771/api/getnumber.php', 'GET', 'user:jsu;pass:77jsu77;limit:2', '200', '[{\"id\":\"967129\",\"gwr\":\"gw020\",\"com\":\"dongle14\",\"imei\":\"\",\"imsi\":\"510017146551513\",\"number\":\"085771363810\"},{\"id\":\"967016\",\"gwr\":\"gw020\",\"com\":\"dongle33\",\"imei\":\"\",\"imsi\":\"510013900506807\",\"number\":\"081539457523\"}]', '2023-08-31 14:43:46'),
(14, 'http://103.179.56.140:7771/api/getnumber.php', 'GET', 'user:jsu;pass:77jsu77;limit:2', '200', '[{\"id\":\"966971\",\"gwr\":\"gw186\",\"com\":\"dongle28\",\"imei\":\"\",\"imsi\":\"510011135809675\",\"number\":\"085811292422\"},{\"id\":\"967020\",\"gwr\":\"gw186\",\"com\":\"dongle12\",\"imei\":\"\",\"imsi\":\"510011135809422\",\"number\":\"085811292037\"}]', '2023-08-31 14:46:15'),
(15, 'http://103.179.56.140:7771/api/getnumber.php', 'POST', 'user:jsu;pass:77jsu77;limit:2', '200', '[{\"id\":\"967039\",\"gwr\":\"gw020\",\"com\":\"dongle26\",\"imei\":\"\",\"imsi\":\"510013900506734\",\"number\":\"081539457448\"},{\"id\":\"967082\",\"gwr\":\"gw020\",\"com\":\"dongle32\",\"imei\":\"\",\"imsi\":\"510013900506736\",\"number\":\"081539457450\"}]', '2023-08-31 14:47:19'),
(16, 'http://103.179.56.140:7771/api/getnumber.php', 'POST', 'user:jsu;pass:77jsu77;limit:2', '200', '[{\"id\":\"966997\",\"gwr\":\"gw020\",\"com\":\"dongle41\",\"imei\":\"\",\"imsi\":\"510011135815623\",\"number\":\"085811302909\"},{\"id\":\"966927\",\"gwr\":\"gw186\",\"com\":\"dongle52\",\"imei\":\"\",\"imsi\":\"510015448022535\",\"number\":\"085754335765\"}]', '2023-09-02 08:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `record_from_operator`
--

CREATE TABLE `record_from_operator` (
  `p_id` int(11) NOT NULL,
  `p_cli` text NOT NULL,
  `p_to` text NOT NULL,
  `p_msg` longtext NOT NULL,
  `p_uuid` text NOT NULL,
  `p_createdon` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_from_operator`
--

INSERT INTO `record_from_operator` (`p_id`, `p_cli`, `p_to`, `p_msg`, `p_uuid`, `p_createdon`) VALUES
(1, 'testcli', 'testto', 'testmsg', 'testuuid', '0000-00-00 00:00:00'),
(2, 'testcli', 'testto', 'testmsg', 'testuuid', '0000-00-00 00:00:00'),
(3, 'testcli2', 'testto2', 'testmsg2', 'testuuid2', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_list`
--
ALTER TABLE `api_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record_from_operator`
--
ALTER TABLE `record_from_operator`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `api_list`
--
ALTER TABLE `api_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `record_from_operator`
--
ALTER TABLE `record_from_operator`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
