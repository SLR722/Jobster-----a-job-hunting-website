
CREATE TABLE `Student` (
    `sid` INT NOT NULL  AUTO_INCREMENT,
    `sname` VARCHAR(45) NULL,
    `slogname` VARCHAR(45) NULL,
    `spwd` VARCHAR(45) NULL,
    `university` VARCHAR(45) NULL,
    `major` VARCHAR(45) NULL,
    `degree` VARCHAR(45) NULL,
    `GPA` FLOAT(3,1) NULL,
    `sinfo` VARCHAR(45) NULL,
    `resume` VARCHAR(1024) NULL,
    `restrict` ENUM('Yes', 'No') NOT NULL,
    PRIMARY KEY (`sid`)
);

CREATE TABLE `Company` (
    `cid` INT NOT NULL AUTO_INCREMENT,
    `cname` VARCHAR(45) NULL,
    `cpwd` VARCHAR(45) NULL,
    `clocation` VARCHAR(45) NULL,
    `cindustry` VARCHAR(45) NULL,
    PRIMARY KEY (`cid`)
);

CREATE TABLE `Job` (
    `jid` INT NOT NULL AUTO_INCREMENT, 
    `cid` INT NOT NULL,
    `jtitle` VARCHAR(45) NULL,
    `jlocation` VARCHAR(45) NULL,
    `salary` VARCHAR(45) NULL,
    `degree` VARCHAR(45) NULL,
    `major` VARCHAR(45) NULL,
    `desc` VARCHAR(1024) NULL,
    `postdate` DATETIME NOT NULL,
    `duedate` DATETIME NOT NULL,
    PRIMARY KEY (`jid`),
    FOREIGN KEY (`cid`)
        REFERENCES `Company` (`cid`)
);

CREATE TABLE `FriendRequest` (
    `fromsid` INT NOT NULL,
    `tosid` INT NOT NULL,
    `time` DATETIME NOT NULL,
    `status` ENUM('pending', 'approve','reject') NOT NULL,
    PRIMARY KEY (`fromsid` , `tosid` , `time`),
    FOREIGN KEY (`fromsid`)
        REFERENCES `Student` (`sid`),
    FOREIGN KEY (`tosid`)
        REFERENCES `Student` (`sid`)
);

CREATE TABLE `Message` (
    `fromsid` INT NOT NULL,
    `tosid` INT NOT NULL,
    `time` DATETIME NOT NULL,
    `mcontent` VARCHAR(45) NULL,
    PRIMARY KEY (`fromsid` , `tosid` , `time`),
    FOREIGN KEY (`fromsid`)
        REFERENCES `Student` (`sid`),
    FOREIGN KEY (`tosid`)
        REFERENCES `Student` (`sid`)
);

CREATE TABLE `Push` (
    `jid` INT NOT NULL,
    `sid` INT NOT NULL,
    `time` DATETIME NOT NULL,
    `status` ENUM('read', 'unread') NOT NULL,
    PRIMARY KEY (`jid` , `sid` , `time`),
    FOREIGN KEY (`jid`)
        REFERENCES `Job` (`jid`),
    FOREIGN KEY (`sid`)
        REFERENCES `Student` (`sid`)
);

CREATE TABLE `Apply` (
    `sid` INT NOT NULL,
    `jid` INT NOT NULL,
    `time` DATETIME NOT NULL,
    `status` ENUM('pending', 'approve', 'reject') NOT NULL,
    PRIMARY KEY (`sid` , `jid` , `time`),
    FOREIGN KEY (`sid`)
        REFERENCES `Student` (`sid`),
    FOREIGN KEY (`jid`)
        REFERENCES `Job` (`jid`)
);

CREATE TABLE `Share` (
    `fromsid` INT NOT NULL,
    `tosid` INT NOT NULL,
    `jid` INT NOT NULL,
    `time` DATETIME NOT NULL,
    `status` ENUM('read', 'unread') NOT NULL,
    PRIMARY KEY (`fromsid` , `tosid` , `jid`, `time`),
    FOREIGN KEY (`fromsid`)
        REFERENCES `Student` (`sid`),
    FOREIGN KEY (`tosid`)
        REFERENCES `Student` (`sid`),
    FOREIGN KEY (`jid`)
        REFERENCES `Job` (`jid`)

);

CREATE TABLE `Follow` (
    `sid` INT NOT NULL,
    `cid` INT NOT NULL,
    PRIMARY KEY (`sid` , `cid`),
    FOREIGN KEY (`sid`)
        REFERENCES `Student` (`sid`),
    FOREIGN KEY (`cid`)
        REFERENCES `Company` (`cid`)
);




