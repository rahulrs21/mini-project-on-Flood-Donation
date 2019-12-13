-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 04:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `addplace`
--

CREATE TABLE IF NOT EXISTS `addplace` (
`id` int(10) NOT NULL,
  `head` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `image` mediumtext NOT NULL,
  `more` varchar(1000) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addplace`
--

INSERT INTO `addplace` (`id`, `head`, `content`, `image`, `more`, `details`) VALUES
(88, 'KERALA FLOOD', 'On 16 August 2018, severe floods affected the south Indian state Kerala, due to unusually high rainf', 'kerala3.jpg', 'Kerala is one of the beautiful place to visiters. It is having some of the cool places like Munnar, Kumarakom, Wayanad and more.But the flood which has happened in kerala was unexpected one for the people. On 16 August 2018, severe floods affected the south Indian state Kerala, due to unusually high rainfall during the monsoon season.On 16 August 2018, severe floods affected the south Indian state Kerala, due to unusually high rainfall during the monsoon season. It was the worst flood in Kerala in nearly a century. Over 483 people died, and 140 are missing.', 'About a million people were evacuated, mainly from Chengannur, Pandanad, Edanad, Aranmula, Kozhencherry, Ayiroor, Ranni, Pandalam, Kuttanad, Malappuram, Aluva, Chalakudy, Thrissur, Thiruvalla, Eraviperoor, Vallamkulam, North Paravur, Chellanam, Vypin Island and Palakkad. All 14 districts of the state were placed on red alert. According to the Kerala government, one-sixth of the total population of Kerala had been directly affected by the floods and related incidents. It is the worst flood in Kerala after the great flood of 99 that took place in 1924.'),
(89, 'GUJARATH FLOOD', 'Due to heavy rain in July-August 2019, the city of Vadodara and its administrative district in the I', 'kerala6.jpg', 'Due to heavy rain in July-August 2019, the city of Vadodara and its administrative district in the Indian state of Gujarat were affected by severe flooding.On 31 July 2019, nearly 50cm of rain fell on Vadodara within 12 hours, with 424mm recorded in one 6 hour period. As a result, the nearby Vishwamitri River rose to 1 metre below the danger line and the Ajwa dam overflowed, flooding the city. The flood caused 8 deaths and the evacuation of more than 6000 people by the NDRF and SDRF.Train services were cancelled owing to water-logging, and the electricity supply was interrupted. On 1 August, Vadodara Airport was closed, GSRTC buses were cancelled and 69 trains passing through Vadodara Junction railway station were either cancelled or rerouted.', 'As water in the Vadodara receded, Crocodiles were seen on Vadodara roads causing harassment to people and stray dogs. 22 crocodiles were rescued from the residential areas of Vadodara within a week after flood.he main possible factor that caused or intensified floods. According to governmet officials report any particular region can manage rainfall only up to a point, based on its land use and soil holding. Once that is breached, it floods.Strong winds, lightning strikes and torrential rainfall in western India have caused at least 20 fatalities since 22 June in the states of Gujarat and Maharashtra'),
(90, 'KARNATAKA FLOOD', 'Media call it the worst flood of the century in the region. After more than two weeks of relentless ', 'kerala5.jpg', 'On 1 August 2019 1st week, due to heavy rainfall in the Monsoon season, severe flood affected the southern Indian State of Karnataka. As a security measure in the prevailing situation of heavy rains, India Meteorological Department issued Red alert to several regions of coastal and malnad regions of Karnataka state. Thousands of people were evacuated to safer places and relief camps. A total of 61 people have been killed and seven lakh have been displaced. As of 14 August 2019, Over 6.97 lakh people were evacuated. Chief Minister BS Yediyurappa had announced a compensation of â‚¹5 lakh for the family members of those who died in the floods', 'Due to the heavy water discharge from the Maharashtra reservoir, the North Karnataka districts of Belagavi, Bijapur, Raichur, Kalburgi, Yadgir and Uttara Kannada were severely affected by the flood discharge. On August 8, Karnataka received nearly five times the rainfall it normally used to have, adding to the severity of the ongoing floods in 12 districts that had killed 20 people by August 9, 2019. Excess rainfall is the main possible factor that caused or intensified floods. According to governmet officials report any particular region can manage rainfall only up to a point, based on its land use and soil holding. Once that is breached, it floods.'),
(91, 'CHHATTISGARH', 'Chhattisgarh was carved out to make a separate state in November 2000, fulfilling its peopleâ€™s lon', 'image11.jfif', 'Chhattisgarh, then a backward region of Madhya Pradesh, was carved out to make a separate state in November 2000, fulfilling its peopleâ€™s long-cherished demand for statehood. The state is bestowed with rich natural resources such as forests, minerals and surface water, and the strategically favourable location of the state along with a conducive industrial environment attracted huge investments. However, despite many advantageous factors, the stateâ€™s growth story is a mixed bag. In the initial eight years, the state emerged as one of the fastest growing states with an impressive annual growth rate of 10% per annum, but in subsequent years, the growth rate slowed down to 7% per annum. In fact, the manufacturing sector that had been one of the dominant reasons for high growth initially has been on the decline since 2008-09.The share of the manufacturing sector to the stateâ€™s income decreased from 22% in 2008-09 to 13% in 2013-14. The per capita income in the state, measured in real', 'Given the lacklustre economic conditions and progress of the state, it is not surprising that Chhattisgarh tops the list of states in terms of poverty rate. The Tendulkar committee estimates by the Planning Commission point towards 40% of the population living below the poverty line.Spatial analysis illustrates a clear connection between forest areas and poverty. Chhattisgarh has the third largest area under forest cover after Madhya Pradesh and Arunachal Pradesh. About 41% of the total geographical area of the state is covered under forests. A microscopic view of the poor districtsâ€”Bijapur, Surguja, Bastar and Narayanpurâ€”shows significant proportion of the poor population in the forested areas. One aspect of high poverty in the forested areas is the lack of economic opportunities, with neither arable land nor scope for sufficient employment. The degradation of forest resources and restricted access for the poor to available natural resources keep the poor trapped in their circumstances.'),
(92, 'JHARKHAND', 'Despite holding 40% of Indiaâ€™s mineral wealth, economic development of the state has not been suff', 'jimage4.jfif', 'The state of Jharkhand came into being on 15 November 2000 after a century-old demand articulated by the people of central India. Despite holding 40% of Indiaâ€™s mineral wealth, economic development of the state has not been sufficient to trickle down to the people in need. The poverty level in Jharkhand, as measured by the Tendulkar Committee, is one of the highest amongst all large states with high levels in both rural and the urban parts. With the start of any development project, a large number of tribal villagers are often displaced from their locations. The Indian Peopleâ€™s Tribunal on Environment and Human Rights, which conducts investigations on issues related to eviction of slum dwellers, relocation of rural people, industrial pollution, etc., reports a total of 6.5 million people being displaced in the name of development. Displacement in the name of dams, factories, mining, etc. goes largely unreported. This also raises questions on Jharkhandâ€™s better-off districts. Pove', 'Being centrally located amid all the poor states, i.e., Bihar in the north, West Bengal in the east, Uttar Pradesh in the west and Odisha towards the south, Jharkhand also attracts a large inflow of cheap labour. The entire eastern belt of Jharkhand, close to West Bengal, has a high concentration of poverty. Some of the industrially developed areas like Bokaro and Dhanbad are in this zone. For many generations, the poor have been settling in and around mining and basic industry centres in search of better livelihoods. Once removed from their traditional surroundings for a few years, they cannot return, yet the new surroundings have been unable to deliver on the initial promises and expectations. Further, our analysis shows large pockets of poverty in areas close to forests. Jharkhand is a hotbed of Naxalism, which is a cause as well as an effect of persisting poverty in the state. The well-known Naxal war zones of Jharkhandâ€”Palamu, Chatra, Latehar, Gumla and Lohardagaâ€”are home to almost a fifth of the stateâ€™s poor population. The Naxal movement started with deprivation and a demand for justice and dignity. However, the violent nature of the movement compelled the Naxalites to move towards thick forest-covered areas for protection.'),
(94, 'kocchin', 'On 16 August 2018, severe floods affected the south Indian state Kerala, due to unusually high rainf', 'chimage5.jfif', 'On 1 August 2019 1st week, due to heavy rainfall in the Monsoon se nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnason, severe flood affected the southern Indian State of Karnataka. As a security measure in the prevailing situation of heavy rains, India Meteorological Department issued Red alert to several regions of coastal and malnad regions of Karnataka state. Thousands of people were evacuated to safer places and relief camps. A total of 61 people have been killed and seven lakh have been displaced. As of 14 August 2019, Over 6.97 lakh people were evacuated. Chief Minister BS Yediyurappa had announced a compensation of â‚¹5 lakh for the family members of those who died in the floods. many of the people have died beacuase of teh at', 'On 1 August 2019 1st week, due to heavy rainfall in the Mnahonsoon season, severe flood affected the southern Indian State of Karnataka. As a security measure in the prevailing situation of heavy rains, India Meteorological Department issued Red alert to several regions of coastal and malnad regions of Karnataka state. Thousands of people were evacuated to safer places and relief camps. A total of 61 people have been killed and seven lakh have been displaced. As of 14 August 2019, Over 6.97 lakh people were evacuated. Chief Minister BS Yediyurappa had announced a compensation of â‚¹5 lakh for the family members of those who died in the floods. many of the people have died beacuase of teh atnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `addsubplace`
--

CREATE TABLE IF NOT EXISTS `addsubplace` (
  `place` varchar(100) NOT NULL,
  `subplacename` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsubplace`
--

INSERT INTO `addsubplace` (`place`, `subplacename`, `content`, `image`) VALUES
('KERALA FLOOD', 'WAYANAD', 'A total of 22 people have died in rain-related calamities.There are 9,951 number of people in the ca', 'kerala10.jpg'),
('KERALA FLOOD', 'ERNUKULAM', 'Heavy monsoon rains are falling over Kerala since August 7, increasing river levels and causing dead', 'kerala11.jpg'),
('GUJARATH FLOOD', 'VADODARA', 'The flood caused 8 deaths and the evacuation of more than 6000 people by the NDRF and SDRF.Train ser', 'gujarath1.jfif'),
('GUJARATH FLOOD', 'SURAT', 'Fifteen people -- who were trapped in the flooding water of Kim river were airlifted to safety from ', 'gujarath2.jfif'),
('GUJARATH FLOOD', 'BANASKANTHA', 'after torrential rains leading to flood wreaked havoc in north Gujarat, state revenue department has', 'gujarath3.jfif'),
('KARNATAKA FLOOD', 'BELAGAVI', 'As many as 5,137 houses have suffered partial damages and 11 houses were completely collapsed due to', 'belagavi.jfif'),
('KARNATAKA FLOOD', 'KODAGU', 'The coffee capital of India had effected by the flood so badly.The destruction caused by the rains i', 'kodagu.jfif'),
('KARNATAKA FLOOD', 'RAYACHUR', 'Several bridges, including Huvinadagi-Kollur, which connects Raichur district with Kalaburagi and Ya', 'rayachur.jfif'),
('CHHATTHISGHAR', '', 'People have to walk kilo meters to get a water.', 'chimage1.jfif'),
('CHHATTHISGHAR', '', 'Most of are children''s are not getting the education.', 'chimage2.jfif'),
('CHHATTHISGHAR', '', 'Women''s are working in the hot for getting few amount of salary.', 'chimage3.jfif'),
('JHARKHAND', '', 'People are working in risky situation for the money.', 'jimage1.jfif'),
('JHARKHAND', '', 'People are fighting for to get a water for the daily basis.', 'jimage3.jfif'),
('JHARKHAND', '', 'There is no bus or any other vehicles in some of the areas.', 'jimage4.jfif'),
('CHHATTISGARH', '', 'People have to walk kilo meters to get a water.', 'chimage1.jfif'),
('kocchin', 'mangalore', 'it is one of the greatest place that i have ever visited .', 'flood2.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
`id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'shobhith', '1234'),
(2, 'harsh', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_add`
--

CREATE TABLE IF NOT EXISTS `admin_add` (
  `head` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finaldonation`
--

CREATE TABLE IF NOT EXISTS `finaldonation` (
`id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `mobileno` bigint(50) NOT NULL,
  `altmobileno` bigint(50) NOT NULL,
  `emailid` text NOT NULL,
  `altemailid` text NOT NULL,
  `donatethings` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finaldonation`
--

INSERT INTO `finaldonation` (`id`, `name`, `country`, `mobileno`, `altmobileno`, `emailid`, `altemailid`, `donatethings`, `address`) VALUES
(2, 'sandesh', 'Karnataka', 7338324884, 9845902873, 'sandeshnayak1998@gmail.com', '', 'money', 'Santhrupthi Nivas,Bangalore Karnataka '),
(3, 'sharath', 'Andra Pradesh', 9324958756, 8476453642, 'sharath1@gmail.com', 'sharath1998@gmail.com', 'cloths', 'sharath nivas,andhra pradesh'),
(4, 'shakthi', 'Panjab', 8276356272, 8272635462, 'shakthi@gmail.com', 'shakthi1234@gmail.com', 'bag', 'shakthi Nivas, panjab'),
(5, 'Rithik', 'Karnataka', 8276716251, 8272262534, 'rithikritzy@gmail.com', '', 'money', 'devi kripa,bailoor,karnataka'),
(6, 'rakesh', 'Kerala', 8736473827, 9273652637, 'rakesh@gmail.com', 'rakeshkumar@gmail.com', 'cloths', 'rakesh nilaya,kazikkodu,kerala'),
(7, 'ranjith', 'Tamil Nadu', 8736471234, 9273650987, 'ranjithkumar@gmail.com', '', 'money', 'ranjith nivas,tamilunadu'),
(8, 'Harsh ', 'Andra Pradesh', 9827635242, 0, 'harshkumar@gmail.com', '', 'cloths', 'harsh villa,2nd cross,banashankari,bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(16, 'shobhith', 'shobhithnayak1998@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addplace`
--
ALTER TABLE `addplace`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finaldonation`
--
ALTER TABLE `finaldonation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addplace`
--
ALTER TABLE `addplace`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `finaldonation`
--
ALTER TABLE `finaldonation`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
