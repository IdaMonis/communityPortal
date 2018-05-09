-- MySQL Script generated by MySQL Workbench
-- Thu Jan 11 18:22:18 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema M4schema
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema M4schema
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `M4schema` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
USE `M4schema` ;

-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_USER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_USER` (
  `USER_ID` INT NOT NULL COMMENT 'USER_ID IS KEY ROL IN THIS MODULE D  ALL CONNECTIVITY CAN ABLE TRACK USING USE_ID',
  `USER_NAME` VARCHAR(45) NULL,
  `CONTACT_NO` VARCHAR(15) NULL,
  `EMAIL` VARCHAR(45) NULL,
  `ADDRESS` VARCHAR(200) CHARACTER SET 'big5' COLLATE 'big5_chinese_ci' NULL,
  `STATUS` VARCHAR(45) NULL COMMENT 'STATUS IS USED TO FIND USER IS ADMINISTRATOR OR SOFTWARE DEVELOPER',
  PRIMARY KEY (`USER_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_USERJOB`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_USERJOB` (
  `JOB_ID` INT NOT NULL COMMENT 'ONE USER CAN HAVE MANY JOB, TO MAKE UNIQUE CONTRAIN NEED USER_ID AND JOB_ID',
  `USER_ID` INT NOT NULL,
  `JOB_TITLE` VARCHAR(45) NULL,
  `EDU_ID` INT NULL,
  `CP_TB_USERJOBcol` VARCHAR(45) NULL,
  PRIMARY KEY (`JOB_ID`, `USER_ID`),
  INDEX `USERID_idx` (`USER_ID` ASC),
  CONSTRAINT `USERID`
    FOREIGN KEY (`USER_ID`)
    REFERENCES `M4schema`.`CP_TB_USER` (`USER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_EDU`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_EDU` (
  `USER_ID` INT NOT NULL COMMENT 'To create foriegn key constrain  on user  need this feild,  as well as user_id will be primary key\n',
  `O_LEVEL` VARCHAR(45) NULL,
  `A_LEVEL` VARCHAR(45) NULL,
  `UNIVERSITY` VARCHAR(45) NULL,
  `P_G` VARCHAR(45) NULL,
  `OTHER` VARCHAR(45) NULL,
  `EDU_ID` INT NOT NULL COMMENT 'EDU_ID CREATED TO RELATION WITNH CP_TB_USER  IF USER HAS TWO DEGREE FROM DIFFERENT UNIVERSITY',
  PRIMARY KEY (`EDU_ID`, `USER_ID`),
  CONSTRAINT `USERCONST`
    FOREIGN KEY (`USER_ID`)
    REFERENCES `M4schema`.`CP_TB_USER` (`USER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_MESSAGE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_MESSAGE` (
  `USER_ID` INT NOT NULL COMMENT 'user_id  has primary key as well as foriegn key to establish the connection between two tables cp_tb_message with cp_tb_user.',
  `MSG_ID` INT NOT NULL COMMENT 'msg_id using to to establish connection to msg_received_by ',
  `THREAD_ID` INT NULL,
  `MESSAGE` VARCHAR(200) NULL,
  `MSD_DATE` DATETIME NULL,
  PRIMARY KEY (`MSG_ID`, `USER_ID`),
  INDEX `USER_ID_idx` (`USER_ID` ASC),
  CONSTRAINT `USERIDCONSTREL`
    FOREIGN KEY (`USER_ID`)
    REFERENCES `M4schema`.`CP_TB_USER` (`USER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_THREAD`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_THREAD` (
  `USER_ID` INT NOT NULL COMMENT 'To know who create the thread we need user_id  and it should be primary key',
  `THREAD_ID` INT NOT NULL COMMENT 'THREAD ID BUILT THE RELATION WITH USER AND THREADMSG ID',
  `THREDMSGDATE` DATETIME NULL,
  `THREADMSG_ID` INT NULL COMMENT 'THREADMSGID USE FOR LINKING BETWEEN CP_TB_THREAD AND CP_TB_THREADMSG USING CONTAIN TABLE',
  `THREADMSG` VARCHAR(200) NULL,
  PRIMARY KEY (`THREAD_ID`, `USER_ID`),
  UNIQUE INDEX `THREAD_ID_UNIQUE` (`THREAD_ID` ASC),
  INDEX `USER_ID_idx` (`USER_ID` ASC),
  CONSTRAINT `USER_ID`
    FOREIGN KEY (`USER_ID`)
    REFERENCES `M4schema`.`CP_TB_USER` (`USER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_THREADATTACH`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_THREADATTACH` (
  `THREADATTACH_ID` INT NOT NULL COMMENT 'THREADATTACH_ID HELPS  IDENTIFY THE FILE ATTACHED TO WHICH MSGID AND THREAD',
  `CREATED_BY` VARCHAR(45) CHARACTER SET 'big5' NULL COMMENT 'CREATED BY USE FOR  AUDITNG PURPOSE',
  `DATE` DATETIME NULL,
  `FILENAME` VARCHAR(45) NULL,
  `THRMSG_ID` INT NOT NULL COMMENT 'THRMSG_ID HELPS TO KEEP THE TRACK ON FILE ATTACHED WITH WHICH THREAD AND USER.',
  PRIMARY KEY (`THREADATTACH_ID`, `THRMSG_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_THREADMSG`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_THREADMSG` (
  `THREADMSG_ID` INT NOT NULL,
  `MESSAGE` VARCHAR(200) NULL,
  `DATE` DATETIME NULL,
  `USER_ID` INT NULL,
  `THREAD_ID` INT NULL,
  `THREADATTACH_ID` INT NULL,
  PRIMARY KEY (`THREADMSG_ID`),
  INDEX `THREADMSGID_idx_idx` (`THREADATTACH_ID` ASC, `THREADMSG_ID` ASC),
  CONSTRAINT `THREADMSGID_idx`
    FOREIGN KEY (`THREADATTACH_ID` , `THREADMSG_ID`)
    REFERENCES `M4schema`.`CP_TB_THREADATTACH` (`THREADATTACH_ID` , `THRMSG_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_JOB`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_JOB` (
  `JOB_ID` INT NOT NULL COMMENT 'Job_id has primary key, it used to connect job post table and Jobapplication table\n\n',
  `JOB_TITLE` varchar(45),
  PRIMARY KEY (`JOB_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CP_TB_JOBAPPLY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CP_TB_JOBAPPLY` (
  `JOBAPPLICATION_ID` INT NOT NULL COMMENT 'jobapplicationid created , to connect to jobapplication table.',
  `USER_ID` INT NOT NULL COMMENT 'userid will connect to cp_tb_user  having primary key constrains',
  `JOB_ID` INT NULL COMMENT 'USER CANT APPLY MANY JOB SO NEED TO CRATE JOB ID  AND USERID TO MAKE UNIQUE RECORD',
  `APPLY_THROUGH` VARCHAR(45) NULL,
  `DATE` DATETIME NULL,
  PRIMARY KEY (`JOBAPPLICATION_ID`, `USER_ID`),
  INDEX `USERIDCONST_idx` (`USER_ID` ASC),
  CONSTRAINT `USERIDCONST`
    FOREIGN KEY (`USER_ID`)
    REFERENCES `M4schema`.`CP_TB_USER` (`USER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`JOBPOST`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`JOBPOST` (
  `USER_ID` INT NOT NULL COMMENT 'USER POSTING JOB , NEED USERID AND JOB_ID TO MAKE RELATION WITH OTHER RELEVANT TABLES.',
  `JOB_ID` INT NOT NULL,
  `POST_DATE` DATE NULL,
  PRIMARY KEY (`USER_ID`, `JOB_ID`),
  INDEX `JOB_ID_idx` (`JOB_ID` ASC),
  CONSTRAINT `USERIDCONSTJP`
    FOREIGN KEY (`USER_ID`)
    REFERENCES `M4schema`.`CP_TB_USER` (`USER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `JOB_IDCONSTJP`
    FOREIGN KEY (`JOB_ID`)
    REFERENCES `M4schema`.`CP_TB_JOB` (`JOB_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`JOBAPPLICATION`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`JOBAPPLICATION` (
  `JOBAPPLICATION_ID` INT NOT NULL,
  `JOB_ID` INT NOT NULL COMMENT 'USER APPLY MANY JOB USING JOB POSTED BY USER',
  PRIMARY KEY (`JOBAPPLICATION_ID`, `JOB_ID`),
  INDEX `JOB_ID_idx` (`JOB_ID` ASC),
  CONSTRAINT `JOB_IDCONSTJA`
    FOREIGN KEY (`JOB_ID`)
    REFERENCES `M4schema`.`CP_TB_JOB` (`JOB_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `JOBAPPCONSTJA`
    FOREIGN KEY (`JOBAPPLICATION_ID`)
    REFERENCES `M4schema`.`CP_TB_JOBAPPLY` (`JOBAPPLICATION_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`MSG_RECEIVED`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`MSG_RECEIVED` (
  `MSG_RECEIVED_ID` INT NOT NULL COMMENT 'THIS FEILD IS USED TO KEEP RECEIVER UNIQUE IDENTITY EVEN THOUGH THEIR NAME IS SAME.',
  `EMAIL` VARCHAR(45) NULL,
  `MSGCONTENT` VARCHAR(45) NULL,
  PRIMARY KEY (`MSG_RECEIVED_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`PARTICIPATE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`PARTICIPATE` (
  `USER_ID` INT NOT NULL COMMENT 'USER_ID ,THREADMSG_ID HELPS TO TRACK HOW MANY USER PARTICIPATE IN THAT MESSAGE',
  `THREADMSG_ID` INT NOT NULL,
  `DATE` DATETIME NULL COMMENT 'DATE IS NEEDED TO FIND OUT  WHEN AND WHAT TIME THE MESSAGE IS THREADED BEWEEN THE USER.',
  PRIMARY KEY (`USER_ID`, `THREADMSG_ID`),
  INDEX `THREADMSGCONST_idx` (`THREADMSG_ID` ASC),
  CONSTRAINT `USERCONSTTHREMSG`
    FOREIGN KEY (`USER_ID`)
    REFERENCES `M4schema`.`CP_TB_USER` (`USER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `THREADMSGCONST`
    FOREIGN KEY (`THREADMSG_ID`)
    REFERENCES `M4schema`.`CP_TB_THREADMSG` (`THREADMSG_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`CONTAIN`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`CONTAIN` (
  `THREAD_ID` INT NOT NULL COMMENT 'THREAD_ID  ESTABLISH THE RELATION WITN CP_TB_THREAD',
  `THREADMSGID` INT NOT NULL COMMENT 'TREADMMSGID CREATE THE RELATION WITH  CP_TB_THREADMSG',
  PRIMARY KEY (`THREAD_ID`, `THREADMSGID`),
  INDEX `THREADCONST_idx` (`THREADMSGID` ASC),
  CONSTRAINT `THREADMSGCONSTCONTAIN`
    FOREIGN KEY (`THREADMSGID`)
    REFERENCES `M4schema`.`CP_TB_THREADMSG` (`THREADMSG_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `THREADCONSTCONTAIN`
    FOREIGN KEY (`THREAD_ID`)
    REFERENCES `M4schema`.`CP_TB_THREAD` (`THREAD_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `M4schema`.`MSG_RECEIVED_BY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `M4schema`.`MSG_RECEIVED_BY` (
  `IDMSG_RECEIVED_BY` INT NOT NULL COMMENT 'IDMSG_RECEIVED_BY HELPS TO CONNECT BETWEEN RECEIVED  AND CP_TB_MESSAGE. \nSO WE CAN ABLE TO IDENTIFY THE USER.\n',
  `msgid` INT NOT NULL,
  PRIMARY KEY (`IDMSG_RECEIVED_BY`, `msgid`),
  INDEX `msgidIMR_idx` (`msgid` ASC),
  CONSTRAINT `MSGRID`
    FOREIGN KEY (`IDMSG_RECEIVED_BY`)
    REFERENCES `M4schema`.`MSG_RECEIVED` (`MSG_RECEIVED_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `msgidIMR`
    FOREIGN KEY (`msgid`)
    REFERENCES `M4schema`.`CP_TB_MESSAGE` (`MSG_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;cp_tb_user


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
