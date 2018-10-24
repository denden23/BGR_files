/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.10-MariaDB : Database - db_bgr
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`c_id`,`c_description`,`data_as_of`) values (5,'Filter','0000-00-00 00:00:00'),(6,'Seals','0000-00-00 00:00:00'),(7,'Tank','0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_customer_information` */

insert  into `tbl_customer_information`(`ci_id`,`ci_fname`,`ci_mname`,`ci_lname`,`ci_company`,`ci_contact_no`,`ci_company_address`,`ci_email`,`data_as_of`) values (1,'sdsd','sdsd','sdsd','sds','dsd','dsds','sd','2018-10-07 23:18:14'),(2,'Teddy','Corsame','Belarmino','Water Group Inc','09264761877','San Jose','wcbuenaventura@gmail.com','2018-10-14 23:06:17'),(3,'sds','dsdsd','sdsd','sdsd','sds','sdsd','sdsd','2018-10-08 00:34:31');

/*Table structure for table `tbl_item` */

DROP TABLE IF EXISTS `tbl_item`;

CREATE TABLE `tbl_item` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `sc_id` int(11) DEFAULT NULL,
  `i_description` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `i_id` (`i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_item` */

insert  into `tbl_item`(`i_id`,`c_id`,`sc_id`,`i_description`,`data_as_of`) values (1,8,0,'sdfsdf','2018-10-01 21:07:16'),(3,5,4,'dsdsd','2018-10-01 21:14:33'),(4,6,0,'llll','2018-10-01 21:23:07'),(5,5,4,'sdsd','2018-10-01 21:35:03'),(6,6,0,'sdsdsd','2018-10-01 21:35:13'),(7,6,0,'dsdsd','2018-10-01 21:35:59');

/*Table structure for table `tbl_po_order` */

DROP TABLE IF EXISTS `tbl_po_order`;

CREATE TABLE `tbl_po_order` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_po_id` int(11) DEFAULT NULL,
  `o_i_id` int(11) DEFAULT NULL,
  `o_buying_price` decimal(12,2) DEFAULT NULL,
  `o_quantity` int(11) DEFAULT NULL,
  `o_date` date DEFAULT NULL,
  `o_status` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_po_order` */

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_i_id` int(11) DEFAULT NULL,
  `p_quantity` int(11) DEFAULT NULL,
  `p_barcode` varchar(100) DEFAULT NULL,
  `p_buying_price` decimal(12,2) DEFAULT NULL,
  `p_selling_price` decimal(12,2) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p_date_purchased` date DEFAULT NULL,
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

insert  into `tbl_product`(`p_id`,`p_i_id`,`p_quantity`,`p_barcode`,`p_buying_price`,`p_selling_price`,`data_as_of`,`p_date_purchased`) values (1,1,200,'1155555555','100.00','200.00','2018-10-18 11:53:13',NULL);

/*Table structure for table `tbl_purchase_order` */

DROP TABLE IF EXISTS `tbl_purchase_order`;

CREATE TABLE `tbl_purchase_order` (
  `po_id` int(11) NOT NULL AUTO_INCREMENT,
  `po_s_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`po_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purchase_order` */

/*Table structure for table `tbl_sampling_information` */

DROP TABLE IF EXISTS `tbl_sampling_information`;

CREATE TABLE `tbl_sampling_information` (
  `si_id` int(11) NOT NULL AUTO_INCREMENT,
  `si_ci_id` int(11) DEFAULT NULL,
  `si_sample_by` varchar(100) DEFAULT NULL,
  `si_date` date DEFAULT NULL,
  `si_sow_id` int(11) DEFAULT NULL,
  `si_wc_id` int(11) DEFAULT NULL,
  `si_time` time DEFAULT NULL,
  `si_tot_id` int(11) DEFAULT NULL,
  `si_sampling_point` varchar(100) DEFAULT NULL,
  `si_commission_si` varchar(100) DEFAULT NULL,
  `si_notes` varchar(1000) DEFAULT NULL,
  `si_amount` decimal(12,2) DEFAULT NULL,
  `si_name_of_si` varchar(100) DEFAULT NULL,
  `si_area_of_si` varchar(100) DEFAULT NULL,
  KEY `si_id` (`si_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sampling_information` */

insert  into `tbl_sampling_information`(`si_id`,`si_ci_id`,`si_sample_by`,`si_date`,`si_sow_id`,`si_wc_id`,`si_time`,`si_tot_id`,`si_sampling_point`,`si_commission_si`,`si_notes`,`si_amount`,`si_name_of_si`,`si_area_of_si`) values (24,1,'sample by','2018-10-10',9,5,'17:00:00',2,'point','si','notes','200.00','name','area'),(25,2,'by','2018-10-18',10,5,'06:00:00',4,'sample','com','notteee','500.00','san','si'),(26,2,'sample by','2018-10-14',10,8,'08:00:00',4,'sample point','com','notes','1500.00','name','area');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sub_category` */

insert  into `tbl_sub_category`(`sc_id`,`sc_c_id`,`sc_description`,`data_as_of`) values (3,5,'Sediment Filter','2018-09-23 16:25:23'),(4,5,'Carbon Filter','2018-09-23 16:25:32'),(5,5,'mmm','2018-10-05 00:13:27'),(6,6,'','2018-10-05 00:24:05'),(7,6,'jjjj','2018-10-05 00:27:20');

/*Table structure for table `tbl_supplier` */

DROP TABLE IF EXISTS `tbl_supplier`;

CREATE TABLE `tbl_supplier` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_supplier_name` varchar(100) DEFAULT NULL,
  `s_address` varchar(100) DEFAULT NULL,
  `s_contact_number` varchar(100) DEFAULT NULL,
  `s_email` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_supplier` */

insert  into `tbl_supplier`(`s_id`,`s_supplier_name`,`s_address`,`s_contact_number`,`s_email`,`data_as_of`) values (1,'(NULL)dff','ddfdf','ddf','(NdfULL)','2018-10-14 23:27:28');

/*Table structure for table `tbl_system_logs` */

DROP TABLE IF EXISTS `tbl_system_logs`;

CREATE TABLE `tbl_system_logs` (
  `sl_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `sl_description` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `sl_id` (`sl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_system_logs` */

insert  into `tbl_system_logs`(`sl_id`,`u_id`,`sl_description`,`data_as_of`) values (1,1,'Logout','2018-09-21 19:47:02'),(2,1,'Login','2018-09-21 19:50:24'),(3,1,'Logout','2018-09-21 19:50:34'),(4,1,'Login','2018-09-21 19:50:36'),(5,1,'Login','2018-09-22 22:33:04'),(6,1,'Login','2018-09-22 23:20:45'),(7,1,'Login','2018-09-22 23:21:51'),(8,1,'Login','2018-09-22 23:22:10'),(9,1,'Login','2018-09-23 15:25:05'),(10,1,'Login','2018-09-24 20:12:53'),(11,1,'Login','2018-10-01 20:53:03'),(12,1,'Login','2018-10-04 23:34:00'),(13,1,'Login','2018-10-07 22:56:35'),(14,1,'Login','2018-10-07 22:56:37'),(15,1,'Login','2018-10-14 20:45:50'),(16,1,'Login','2018-10-14 23:59:44'),(17,1,'Login','2018-10-15 00:26:11'),(18,1,'Login','2018-10-18 11:51:07');

/*Table structure for table `tbl_type_of_test` */

DROP TABLE IF EXISTS `tbl_type_of_test`;

CREATE TABLE `tbl_type_of_test` (
  `tot_id` int(11) NOT NULL AUTO_INCREMENT,
  `tot_description` varchar(100) DEFAULT NULL,
  `tot_status` varchar(100) DEFAULT 'Active',
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `tot_id` (`tot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_type_of_test` */

insert  into `tbl_type_of_test`(`tot_id`,`tot_description`,`tot_status`,`data_as_of`) values (4,'Water clear','Active','2018-10-14 21:13:31');

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
  `up_image` varchar(100) DEFAULT NULL,
  `data_as_of` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `up_id` (`up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user_profile` */

insert  into `tbl_user_profile`(`up_id`,`up_fname`,`up_mname`,`up_lname`,`up_status`,`up_image`,`data_as_of`) values (1,'Wenny','B','Belarmino','Active','face23.jpg','2018-10-15 00:08:34');

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
