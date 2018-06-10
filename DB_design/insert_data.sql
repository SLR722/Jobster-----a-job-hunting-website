

INSERT INTO `Student` (`sid`, `sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('0', 'Mark', 'mar', '12345','NYU', 'Computer Science','MS', '3.8', 'hiking','good at operation system', 'Yes');
INSERT INTO `Student` (`sid`, `sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('1', 'Bob', 'bob', '123457','NYU', 'Computer Science','BS', '4.0', 'swimming','good at database systems', 'Yes');
INSERT INTO `Student` (`sid`, `sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('2', 'Adele', 'ade', '123458','CMU', 'Electrical Engineering','MS', '3.5', 'singing','good at machine learning', 'Yes');
INSERT INTO `Student` (`sid`, `sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('3', 'Taylor Swift', 'tay', '123459','CMU', 'Electrical Engineering','BS', '3.0', 'coding','good at database systems', 'Yes');
INSERT INTO `Student` (`sid`, `sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('4', 'Jessie J', 'jes', '123460','NEU', 'Mechanical Engineering','MS', '3.9', 'sports','good at operation system', 'Yes');
INSERT INTO `Student` (`sid`, `sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('5', 'Justin Bieber', 'jus', '123461','NEU', 'Mechanical Engineering','BS', '3.2', 'film','ggood at database systems', 'Yes');
INSERT INTO `Student` (`sid`, `sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('6', 'PTX', 'ptx', '123462','USC', 'Physics', 'MS', '4.0', 'hiking','good at algorithm', 'No');
INSERT INTO `Student` (`sid`, `sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('7', 'Aha', 'aha', '123463','USC', 'Physics','BS', '3.8', 'coding','good at machine learning', 'Yes');

INSERT INTO `Company` (`cid`, `cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('0', 'Microsoft', '11111', 'Seattle', 'Software');
INSERT INTO `Company` (`cid`, `cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('1', 'Google', '22222', 'California', 'Internet');
INSERT INTO `Company` (`cid`, `cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('2', 'Facebook', '33333', 'California', 'Internet');
INSERT INTO `Company` (`cid`, `cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('3', 'Amazon', '44444', 'Seattle', 'Internet');
INSERT INTO `Company` (`cid`, `cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('4', 'Linkedin', '55555', 'California', 'Internet');
INSERT INTO `Company` (`cid`, `cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('5', 'Uber', '66666', 'California', 'Internet');
INSERT INTO `Company` (`cid`, `cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('6', 'Airbnb', '77777', 'Seattle', 'Internet');
INSERT INTO `Company` (`cid`, `cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('7', 'Goldman Sashs', '88888', 'New York', 'Finance');


INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('0', '0', 'Software Engineer'		, 'Seattle'		, '100k', 'MS'	, 'CS'	, 'Rock solid coders in Java and a distributed systems generalist, those able to dive deep into any part of the stack and low level systems, as well as design broad distributed system interactions. ', '2018-4-20', '2018-6-30');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('1', '0', 'Researcher'				, 'Seattle'		, '110k', 'PHD'	, 'EE'	, 'You will be able to apply those fundamentals to real-world problems and come up with specialized solutions.', '2017-9-30', '2018-2-15');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('2', '1', 'Software Engineer'		, 'California'	, '120k', 'MS'	, 'CS'	, 'You should value simplicity and scale, work comfortably in a collaborative, agile environment, and be excited to learn.', '2017-11-20', '2018-4-30');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('3', '1', 'Data Engineer'			, 'California'	, '120k', 'MS'	, 'MFE'	, 'You work well when you interact with your team and you are able to collaborate with people working in different areas of the stack. ', '2017-12-31', '2018-5-30');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('4', '2', 'Software Engineer'		, 'California'	, '130k', 'BS'	, 'CS'	, 'GPA should greater or equal to 3 ', '2018-4-15', '2018-5-30');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('5', '2', 'Site Reliable Engineer'	, 'California'	, '110k', 'MS'	, 'EE'	, 'Strong communication and problem solving abilities.', '2017-9-30', '2018-1-1');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('6', '3', 'Software Engineer'		, 'Seattle'		, '120k', 'BS'  , 'Math', 'You work well when you interact with your team and you are able to collaborate with people working in different areas of the stack. ', '2017-12-20', '2018-1-30');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('7', '3', 'Machine Learning Engineer', 'Seattle'		, '150k', 'PHD' , 'CS'	, 'Strong communication and problem solving abilities.', '2017-9-30', '2018-1-1');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('8', '4', 'Machine Learning Engineer', 'California'	, '160k', 'PHD'	, 'Math', 'Experience with Amazon Web Services.', '2018-1-1', '2018-6-15');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('9', '4', 'Data Engineer'			, 'California'	, '120k', 'MS'	, 'CS', 'You work well when you interact with your team and you are able to collaborate with people working in different areas of the stack. ', '2018-4-20', '2018-5-15');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('10', '5', 'Software Engineer'		, 'California'	, '130k', 'MS', 'CS', 'Strong communication and problem solving abilities.', '2017-11-20', '2018-1-20');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('11', '5', 'Researcher'				, 'California'	, '150k', 'PHD' , 'Math', '0-2 yrs of experience in Java will be added a advantage', '2017-9-30', '2018-3-30');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('12', '6', 'Software Engineer'		, 'Seattle'		, '100k', 'MS'	, 'CS', 'You should value simplicity and scale, work comfortably in a collaborative, agile environment, and be excited to learn.', '2018-1-1', '2018-6-15');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('13', '6', 'Hardware Engineer'		, 'Seattle'		, '120k', 'BS'	, 'EE', 'You work well when you interact with your team and you are able to collaborate with people working in different areas of the stack. ', '2017-11-1', '2018-3-30');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('14', '7', 'Software Engineer'		, 'New York'	, '120k', 'PHD'	, 'CS', 'Experience with Amazon Web Services.', '2018-1-1', '2018-4-15');
INSERT INTO `Job` (`jid`, `cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('15', '7', 'Quant Researcher'		, 'New York'	, '150k', 'MS'	, 'MFE', 'You should value simplicity and scale, work comfortably in a collaborative, agile environment, and be excited to learn.', '2017-9-30', '2018-5-30');


INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('0', '1', '2017-12-31', 'pending');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('0', '2', '2017-12-31', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('0', '3', '2018-1-1', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('0', '4', '2018-1-1', 'reject');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('0', '5', '2018-1-1', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '2', '2018-3-1', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '3', '2018-3-31', 'pending');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '4', '2018-3-31', 'reject');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '5', '2018-4-1', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '6', '2018-3-31', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('2', '3', '2018-1-1', 'pending');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('2', '4', '2018-1-1', 'reject');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('2', '5', '2018-3-31', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('2', '6', '2018-4-15', 'reject');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('3', '4', '2018-1-1', 'pending');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('3', '5', '2018-4-15', 'approve');

INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('0', '2', '2018-3-31', 'hello');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('0', '3', '2017-3-31', 'hi');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('0', '4', '2018-4-15', 'hello');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('1', '2', '2018-1-1', 'hi');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('1', '5', '2018-1-1', 'hello');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('1', '6', '2018-3-1', 'hi');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('2', '5', '2018-3-31', 'hello');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('3', '5', '2018-3-31', 'hi');

INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('4', '0', '2018-3-31', 'read');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('7', '0', '2017-3-31', 'unread');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('9', '1', '2018-4-15', 'read');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('5', '1', '2018-1-1', 'unread');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('11', '2', '2018-1-1', 'read');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('13', '4', '2018-3-1', 'unread');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('9', '7', '2018-3-31', 'read');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('6', '5', '2018-3-31', 'unread');

INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('2', '4', '2018-3-27', 'pending');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('3', '5', '2017-3-4', 'approve');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('5', '2', '2018-4-2', 'pending');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('0', '1', '2018-1-20', 'reject');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('7', '7', '2018-2-7', 'approve');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('3', '5', '2018-4-15', 'pending');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('4', '3', '2018-3-21', 'reject');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('0', '0', '2018-3-31', 'approve');

INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('0', '2', '0', '2018-3-27', 'read');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('0', '3', '1','2017-3-4', 'unread');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('0', '5', '2', '2018-4-2', 'read');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('1', '2', '3', '2018-1-20', 'unread');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('1', '5', '4', '2018-2-7', 'read');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('1', '6', '5', '2018-4-15', 'unread');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('2', '5', '6', '2018-3-21', 'read');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('3', '5', '7', '2018-3-31', 'unread');

INSERT INTO `Follow` (`sid`, `cid`) VALUES ('2', '0');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('3', '0');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('4', '1');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('2', '1');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('5', '2');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('6', '4');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('4', '7');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('3', '5');