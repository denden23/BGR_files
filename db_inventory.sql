/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.10-MariaDB : Database - db_inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_bgr` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_bgr`;

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_description` varchar(100) DEFAULT NULL,
  `data_as_of` datetime NOT NULL,
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`c_id`,`c_description`,`data_as_of`) values (5,'Filter','0000-00-00 00:00:00'),(6,'Seals','0000-00-00 00:00:00'),(7,'Tank','0000-00-00 00:00:00'),(8,'Motor','0000-00-00 00:00:00');

/*Table structure for table `tbl_customer_information` */

DROP TABLE IF EXISTS `tbl_customer_information`;

CREATE TABLE `tbl_customer_information` (
  `ci_id` int(11) NOT NULL AUTO_INCREMENT,
  `ci_fname` varchar(100) DEFAULT NULL,
  `ci_mname` varchar(100) DEFAULT NULL,
  `ci_lname` varchar(100) DEFAULT NULL,
  `ci_company` varchar(100) DEFAULT NULL,
  `ci_contact_no` varchar(100) DEFAULT NULL,
  `ci_company_address` varchar(100) DEFAULT NULL,
  `ci_email` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `id` (`ci_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_customer_information` */

/*Table structure for table `tbl_item` */

DROP TABLE IF EXISTS `tbl_item`;

CREATE TABLE `tbl_item` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `sc_id` int(11) DEFAULT NULL,
  `i_description` varchar(100) DEFAULT NULL,
  `i_price` decimal(12,2) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `i_id` (`i_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_item` */

/*Table structure for table `tbl_sampling_information` */

DROP TABLE IF EXISTS `tbl_sampling_information`;

CREATE TABLE `tbl_sampling_information` (
  `si_id` int(11) NOT NULL AUTO_INCREMENT,
  `si_client_name` varchar(100) DEFAULT NULL,
  `si_company` varchar(100) DEFAULT NULL,
  `si_contact` varchar(100) DEFAULT NULL,
  `si_address` varchar(100) DEFAULT NULL,
  `si_email` varchar(100) DEFAULT NULL,
  `si_sample_by` int(11) DEFAULT NULL,
  `si_date` date DEFAULT NULL,
  `si_sow_id` int(11) DEFAULT NULL,
  `si_wc_id` int(11) DEFAULT NULL,
  `si_time` time DEFAULT NULL,
  `si_tot_id` int(11) DEFAULT NULL,
  `si_sampling_point` varchar(100) DEFAULT NULL,
  `si_commission_si` varchar(100) DEFAULT NULL,
  `si_notes` varchar(1000) DEFAULT NULL,
  KEY `si_id` (`si_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sampling_information` */

insert  into `tbl_sampling_information`(`si_id`,`si_client_name`,`si_company`,`si_contact`,`si_address`,`si_email`,`si_sample_by`,`si_date`,`si_sow_id`,`si_wc_id`,`si_time`,`si_tot_id`,`si_sampling_point`,`si_commission_si`,`si_notes`) values (18,'sdssd','sdsd','dsd','sdsds','sds',NULL,'2018-09-13',8,0,'03:21:00',9,NULL,NULL,NULL);

/*Table structure for table `tbl_source_of_water` */

DROP TABLE IF EXISTS `tbl_source_of_water`;

CREATE TABLE `tbl_source_of_water` (
  `sow_id` int(11) NOT NULL AUTO_INCREMENT,
  `sow_description` varchar(100) DEFAULT NULL,
  `sow_status` varchar(100) DEFAULT 'Active',
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `sow_id` (`sow_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_source_of_water` */

insert  into `tbl_source_of_water`(`sow_id`,`sow_description`,`sow_status`,`data_as_of`) values (9,'MWSS','Active','2018-09-23 16:28:28'),(10,'LWD','Active','2018-09-23 16:28:34'),(12,'Shallow Well','Active','2018-09-23 16:28:49'),(13,'Spring','Active','2018-09-23 16:28:57');

/*Table structure for table `tbl_sub_category` */

DROP TABLE IF EXISTS `tbl_sub_category`;

CREATE TABLE `tbl_sub_category` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_c_id` int(11) DEFAULT NULL,
  `sc_description` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `sc_id` (`sc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sub_category` */

insert  into `tbl_sub_category`(`sc_id`,`sc_c_id`,`sc_description`,`data_as_of`) values (3,5,'Sediment Filter','2018-09-23 16:25:23'),(4,5,'Carbon Filter','2018-09-23 16:25:32');

/*Table structure for table `tbl_system_logs` */

DROP TABLE IF EXISTS `tbl_system_logs`;

CREATE TABLE `tbl_system_logs` (
  `sl_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `sl_description` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `sl_id` (`sl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_system_logs` */

insert  into `tbl_system_logs`(`sl_id`,`u_id`,`sl_description`,`data_as_of`) values (1,1,'Logout','2018-09-21 19:47:02'),(2,1,'Login','2018-09-21 19:50:24'),(3,1,'Logout','2018-09-21 19:50:34'),(4,1,'Login','2018-09-21 19:50:36'),(5,1,'Login','2018-09-22 22:33:04'),(6,1,'Login','2018-09-22 23:20:45'),(7,1,'Login','2018-09-22 23:21:51'),(8,1,'Login','2018-09-22 23:22:10'),(9,1,'Login','2018-09-23 15:25:05');

/*Table structure for table `tbl_type_of_test` */

DROP TABLE IF EXISTS `tbl_type_of_test`;

CREATE TABLE `tbl_type_of_test` (
  `tot_id` int(11) NOT NULL AUTO_INCREMENT,
  `tot_description` varchar(100) DEFAULT NULL,
  `tot_status` varchar(100) DEFAULT 'Active',
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `tot_id` (`tot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_type_of_test` */

insert  into `tbl_type_of_test`(`tot_id`,`tot_description`,`tot_status`,`data_as_of`) values (1,'sdd','Active','2018-09-23 16:36:27');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `up_id` int(11) DEFAULT NULL,
  `u_username` varchar(100) DEFAULT NULL,
  `u_password` varchar(100) DEFAULT NULL,
  `u_status` varchar(100) DEFAULT 'Active',
  `u_user_type` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`u_id`,`up_id`,`u_username`,`u_password`,`u_status`,`u_user_type`,`data_as_of`) values (1,1,'wbbelarmino','123','Active','Administrator','2018-09-19 22:06:56');

/*Table structure for table `tbl_user_profile` */

DROP TABLE IF EXISTS `tbl_user_profile`;

CREATE TABLE `tbl_user_profile` (
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  `up_fname` varchar(100) DEFAULT NULL,
  `up_mname` varchar(100) DEFAULT NULL,
  `up_lname` varchar(100) DEFAULT NULL,
  `up_status` varchar(100) DEFAULT 'Active',
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `up_id` (`up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user_profile` */

insert  into `tbl_user_profile`(`up_id`,`up_fname`,`up_mname`,`up_lname`,`up_status`,`data_as_of`) values (1,'Wenny','B','Belarmino','Active','2018-09-19 22:06:18');

/*Table structure for table `tbl_water_classification` */

DROP TABLE IF EXISTS `tbl_water_classification`;

CREATE TABLE `tbl_water_classification` (
  `wc_id` int(11) NOT NULL AUTO_INCREMENT,
  `wc_description` varchar(100) DEFAULT NULL,
  `wc_status` varchar(100) DEFAULT 'Active',
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `wc_id` (`wc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_water_classification` */

insert  into `tbl_water_classification`(`wc_id`,`wc_description`,`wc_status`,`data_as_of`) values (5,'Filtered','Active','2018-09-23 16:27:15'),(6,'Unfiltered','Active','2018-09-23 16:27:24'),(7,'Ice','Active','2018-09-23 16:27:31'),(8,'Alkaline','Active','2018-09-23 16:27:41'),(9,'Mineral','Active','2018-09-23 16:27:48'),(10,'Purified','Active','2018-09-23 16:27:58'),(11,'Pool','Active','2018-09-23 16:28:04');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
