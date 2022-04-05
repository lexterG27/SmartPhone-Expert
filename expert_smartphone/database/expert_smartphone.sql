/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.6.24 : Database - expert_smartphone
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`expert_smartphone` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `expert_smartphone`;

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`id`,`question`,`nom`) values (1,'My phone is not charging','1'),(2,'My phone shows Battery Contact Error when charged','2'),(3,'Battery doesnt seem to hold up','3'),(4,'My screen keeps freezing','4'),(5,'I see vertical lines in my LCD','5'),(6,'Stuck Logo','6'),(7,'Ghost Touch','7'),(8,'My phones camera is not working','8'),(9,'My phone has no sound from the speaker','9'),(10,'I forgot my Google Account login credentials after doing Hard Reset','10'),(11,'App crashes','11'),(12,'My phone does not read my SD card','12'),(13,'My phone gets hot, what should I do?','13'),(14,'Forgot Pattern','14');

/*Table structure for table `yesno` */

DROP TABLE IF EXISTS `yesno`;

CREATE TABLE `yesno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` text NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `ans` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `yesno` */

insert  into `yesno`(`id`,`num`,`q1`,`q2`,`q3`,`q4`,`q5`,`ans`) values (1,'1','Have you changed the charger and check if it supplies the proper voltage?','Have you cleaned the charger connecter?','Have you checked the voltage of the battery connector?','Have you checked the charging section?','Consult to a Cellphone Technician.','Do What You Can, Then Have it Fixed Professionally<br><br>\r\n\r\nIf you just need to brush away some debris from the port, try using an unused toothbrush or cotton swab to clean out the gunk thats preventing a good connection. If its the cable or a wall adapter thats faulty, swap them out. Unfortunately, if the issue is really related to a broken charging port, youll need to head to the repair shop or change the battery.'),(2,'2','Did you clean the charging port connector before installing the new battery?','Did you check the flex cable for dirt or dust?','Did you try to clean the charging pin?','Did you check if the battery is original?','Consult to a Cellphone Technician.','Usually this happens when you try to replace the phone with a Class A Battery. Make use of an original battery to solve your problem.'),(3,'3','Are you using your phone while charging?','Did you clear the apps that drains the battery?','Do you usually drain your battery everytime you use it?','Are you using your phone for how many years?','Consult to a Cellphone Technician.','Maximize Your Standby Time<br><br>\r\n\r\nFirst, make sure the charger you are using is optimized for your battery. Then, shorten your screen timeout setting so that your phone will fall asleep sooner when it is not in use. In addition, reduce your screens brightness whenever possible. If your phone has a battery-saving mode, initiate it whenever you need your phone to be accessible without plugging it in for several hours. Finally (and maybe most importantly), alter your settings so that system-hogging apps and updates dont run in the background.'),(4,'4','Did you try to do force shutdown to your phone?','Did you check if your phone has low storage space?','Did you checked for excessive app use?','Did you check for malware infection?','Consult to a Cellphone Technician.','Clean up Your Phone<br><br>\r\nSome form of housekeeping is likely in order. Close apps that are running, clear the cache, delete programs you dont need, move some of your stuff over to an external hard-drive or get an app that literally cleans up the trash on your phone for you. Your phone will likely begin running much more smoothly after some of that extra data and activity is wiped away.'),(5,'5','Have you restarted your phone and got the same result?','Did you cycle the battery and still got the same result?','Have you tried to boot on Safe Mode and got the same result?','Have you tried to do Factory Reset and got the same result?','Consult to a Cellphone Technician.','Faulty Hardware<br><br>\r\n\r\nIf the horizontal or vertical lines still appear on your phone screen after trying all the above methods, you better take your device to a reliable technician. Most likely, its a faulty hardware component that needs to be repaired or replaced.'),(6,'6','Could you remember if you installed apps before this problems happened?','Is there a phone update and you unfinished the update and force to shut down the device?','Have you tried to remove the battery and got the same result?','Have you tried to Wipe the Partition and got the same result?','Consult to a Cellphone Technician.','Factory Reset Your Device<br><br>\r\n\r\nIf nothing work, the only thing you can do is to reset your device. This happened because of a software glitch, rooted your phone, incomplete update or malicious apps installed on your phone. Depending on your phone model, you can hard reset your phone using this video tutorial.\r\n<br><br>\r\nReference Video Tutorial Link:<br>\r\nhttps://www.youtube.com/watch?v=o4BEGcFzlik'),(7,'7','Have you ever accidentally fall your phone?','Have you cleaned the screen then restarted the phone and got the same result?','Did your try to reset the settings or update the device?','Did you tried to do Factory Reset on your phone?','Consult to a Cellphone Technician if you do not how to disassemble your device.','Do it at your own risk. Dissamble your device LCD, clean it and put it back together, it may solve the issue. Otherwise, replace the LCD.'),(8,'8','Did you have unfinished updates before this happens?','Did you try to restart your device and same results happened?','Did you clear the data of camera?','Have you tried to uninstall thiry party apps that uses your camera prefences and got the same result?','Do a Factory Reset.','Perform a Factory Reset on your phone. If none of the above tips helped fix your smartphone camera, I suggest you visit a repair center. The problem is most likely hardware-related. If your phone is slightly older and is not very expensive, you might want to skip the repair center and buy yourself a new phone.'),(9,'9','Did you checked the volume setting first?','Have you tried to do a phone call and same result happened?','Did you execute functionality test on your phone by using dial codes?','Is the phone accidentally placed to water?','Consult to a Cellphone Technician.','Clean the speaker. If the sound coming from your phone is muffled or muted, it might be because the speaker is wet or blocked. Gently brush the speaker using a dry toothbrush to clean any obstructions. Test your phone afterwards to see if the sound has improved. If nothing happed,proceed to Safe Mode. If the issues do not appear while in Safe mode, the problem is caused by a downloaded app and it should be uninstalled. The final option is to perform a factory reset.'),(10,'10','Have you checked if you are connected to a Wi-Fi network?','Have you verified if you have a stable internet connection to login?','Have you recently changed your Google account password?','Have you checked for typo of your email address?','Google locked your sign in by marking your login attempts as suspicious activity. This can sometimes occur if you change location, internet provider, etc. You can still use your phone by using an FRP bypass tool.<br><br>\r\nReference Video Tutorial<br>\r\nhttps://www.youtube.com/watch?v=7C5naV1OGXE','Perform a DIY FRP Bypass using the available tutorials online. Depending on your model, you can do bypass by using this reference video. <br><br>\r\nReference Video Tutorial<br>\r\nhttps://www.youtube.com/watch?v=7C5naV1OGXE'),(11,'11','After resetting your phone, did it come up with the same result?','Did you try to clear the data?','Did you free up some space of your storage?','Have you perform uninstall then reinstall the app?','Wipe the cache partition and if nothing happens, perform a hard reset.','When nothing else has function to aid with application crashes, factory reset is the best bet. Since it is going to delete device settings and data, it should be ones last resort. '),(12,'12','Do you usually eject your SD card from the tray?','Did you try to clean your SD card and reiinsert it?','Have you checked the connection properly?','Did you try to insert to your SD card to another phone or PC and checked if it is detected?','SD Card is damaged or corrupted. Buy a new one.','If you already perfomed the previous questions and got a negative result, the SD card is damaged, corrupted or having bad sectors. Make sure to use an original SD card from the authorized seller. '),(13,'13','Have you been using your phone in a long period of time in gaming?','Have you checked if your phone settings is optimal?','Do you have outdated apps?','Have you been using your phone for streaming?','Streaming or Gaming affects your phones battery life. Adjust your Battery settings if needed. It is recommended also to update your apps. ','Charge your phone correcty and avoid direct sunlight of your device. It is recommended also to update the apps, use antivirus, and adjust battery settings.'),(14,'14','Di you configure the settings of your phone after you unable to unlock it?','Have your tried to reenter the pattern after 30 seconds?','Have you checked your phone if it has backup pin in order for you to unlock your phone? ','Have you tried to troubleshoot it using Screen Unlock software from your PC/Laptop?','Perform a Factory Reset or consult to a cellphone technician if you are skeptical.','If nothing above works, perform a factory reset on your device.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
