

INSERT INTO `Student` (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('Mark', 'mar', '$2y$10$GJbUnRpln0GlscQesf83GeMcBxwyV5aJQliE/QfTbjUsUFCEqe2Nu','NYU', 'Computer Science','MS', '3.8', 'hiking','good at operation system', 'Yes');
INSERT INTO `Student` (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('Adele', 'ade', '$2y$10$pOaZpbIc7e.4mHFw4FT2JOpKxIHyxwa5qOMXwG1W4ZmhetSLUKM7W','CMU', 'Electrical Engineering','MS', '3.5', 'singing','good at machine learning', 'Yes');
INSERT INTO `Student` (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('Bob', 'bob', '$2y$10$.eNwG94/Ut.qSRkehY/25O9DcSkuxJ7UpVJStCDUPeth4QQ.vLXOi','NYU', 'Computer Science','BS', '4.0', 'swimming','good at database systems', 'Yes');
INSERT INTO `Student` (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('Taylor Swift', 'tay', '$2y$10$MSPwm4C3U5IxBgUhNAyLJedSDhFjkzHTnoiUMEv223Q16/TKK5koa','CMU', 'Electrical Engineering','BS', '3.0', 'coding','good at database systems', 'Yes');
INSERT INTO `Student` (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('Jessie J', 'jes', '$2y$10$hcQOCIvD9w9SC89gO5sOzOVHR3n3ssPZZV2ONzKQk6d8pSvtTO1oq','NEU', 'Mechanical Engineering','MS', '3.9', 'sports','good at operation system', 'Yes');
INSERT INTO `Student` (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('Justin Bieber', 'jus', '$2y$10$4VaOc6iFiBg..gKY9wHZMe4mhdfB653EGAqZK4cHL/TfxMfYpNUMG','NEU', 'Mechanical Engineering','BS', '3.2', 'film','ggood at database systems', 'Yes');
INSERT INTO `Student` (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('PTX', 'ptx', '$2y$10$uQA/HQWNyP.KEbiRJtZmGOecn0Z9.2IRr/1xz85SYro6Hlx9VqYtO','USC', 'Physics', 'MS', '4.0', 'hiking','good at algorithm', 'No');
INSERT INTO `Student` (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`) VALUES ('Aha', 'aha', '$2y$10$RNfN06gpeSIRMAJI0kXp2e94uwiXjiqpsMW7M9jkxDPWJ/uz1canq','USC', 'Physics','BS', '3.8', 'coding','good at machine learning', 'Yes');

INSERT INTO `Company` (`cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('Microsoft', '$2y$10$flSDf1chF1SozKqHZAp.p.pHQK5AMkkNlPENa3B7oHIvUb7.nNrxG', 'Seattle', 'Software');
INSERT INTO `Company` (`cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('Google', '$2y$10$aeHcjwuz91NwEc6OECdelOyLn1NsbUCP.ET0iGwGlwkF1hf0tQVW6', 'California', 'Internet');
INSERT INTO `Company` (`cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('Facebook', '$2y$10$wi0psH/CdBOcQxBDiz84nOXJDBQrBjYFFlIYfAX.H184k24Q/bH/W', 'California', 'Internet');
INSERT INTO `Company` (`cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('Amazon', '$2y$10$9/18HMqxFbbrVIaQQWFzJOC787rQb87mce5P/pfnsYw.c66uu4LLG', 'Seattle', 'Internet');
INSERT INTO `Company` (`cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('Linkedin', '$2y$10$i5DpfSThvSc1Y5r8yhyAOOUofDYZrW5GVxrIersROUDMyFVmNroTa', 'California', 'Internet');
INSERT INTO `Company` (`cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('Uber', '$2y$10$m0UFG17dV6Mx.sRpqn.obOiuEKjw/7kD3U/r3R0lmrnidn5WQAOCe', 'California', 'Internet');
INSERT INTO `Company` (`cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('Airbnb', '$2y$10$xCq4iXZFTd7VO5TUejSuF.UfYVDmf797M/cyCwBr5xNfhYZzZAjpe', 'Seattle', 'Internet');
INSERT INTO `Company` (`cname`, `cpwd`, `clocation`, `cindustry`) VALUES ('Goldman Sashs', '$2y$10$./EIdQJ0T10UesVMO2leUOwqOOODymn6WHBICd92reDNfxWu8d2p.', 'New York', 'Finance');


INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('1', 'Software Engineer'		, 'Seattle'		, '100k', 'MS'	, 'CS'	, 'Rock solid coders in Java and a distributed systems generalist, those able to dive deep into any part of the stack and low level systems, as well as design broad distributed system interactions. ', '2018-4-20', '2018-6-30');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('2', 'Software Engineer'		, 'California'	, '120k', 'MS'	, 'CS'	, 'You should value simplicity and scale, work comfortably in a collaborative, agile environment, and be excited to learn.', '2017-11-20', '2018-4-30');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('2', 'Data Engineer'			, 'California'	, '120k', 'MS'	, 'MFE'	, 'You work well when you interact with your team and you are able to collaborate with people working in different areas of the stack. ', '2017-12-31', '2018-5-30');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('3', 'Software Engineer'		, 'California'	, '130k', 'BS'	, 'CS'	, 'GPA should greater or equal to 3 ', '2018-4-15', '2018-5-30');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('3', 'Site Reliable Engineer'	, 'California'	, '110k', 'MS'	, 'EE'	, 'Strong communication and problem solving abilities.', '2017-9-30', '2018-1-1');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('4', 'Software Engineer'		, 'Seattle'		, '120k', 'BS'  , 'Math', 'You work well when you interact with your team and you are able to collaborate with people working in different areas of the stack. ', '2017-12-20', '2018-1-30');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('4', 'Machine Learning Engineer', 'Seattle'		, '150k', 'PHD' , 'CS'	, 'Strong communication and problem solving abilities.', '2017-9-30', '2018-1-1');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('5', 'Machine Learning Engineer', 'California'	, '160k', 'PHD'	, 'Math', 'Experience with Amazon Web Services.', '2018-1-1', '2018-6-15');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('5', 'Data Engineer'			, 'California'	, '120k', 'MS'	, 'CS', 'You work well when you interact with your team and you are able to collaborate with people working in different areas of the stack. ', '2018-4-20', '2018-5-15');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('6', 'Software Engineer'		, 'California'	, '130k', 'MS', 'CS', 'Strong communication and problem solving abilities.', '2017-11-20', '2018-1-20');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('6', 'Researcher'				, 'California'	, '150k', 'PHD' , 'Math', '0-2 yrs of experience in Java will be added a advantage', '2017-9-30', '2018-3-30');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('7', 'Software Engineer'		, 'Seattle'		, '100k', 'MS'	, 'CS', 'You should value simplicity and scale, work comfortably in a collaborative, agile environment, and be excited to learn.', '2018-1-1', '2018-6-15');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('7', 'Hardware Engineer'		, 'Seattle'		, '120k', 'BS'	, 'EE', 'You work well when you interact with your team and you are able to collaborate with people working in different areas of the stack. ', '2017-11-1', '2018-3-30');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('8', 'Software Engineer'		, 'New York'	, '120k', 'PHD'	, 'CS', 'Experience with Amazon Web Services.', '2018-1-1', '2018-4-15');
INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `desc`, `postdate`,`duedate`) VALUES ('8', 'Quant Researcher'		, 'New York'	, '150k', 'MS'	, 'MFE', 'You should value simplicity and scale, work comfortably in a collaborative, agile environment, and be excited to learn.', '2017-9-30', '2018-5-30');


INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '2', '2017-12-31', 'pending');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '3', '2017-12-31', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '4', '2018-1-1', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '5', '2018-1-1', 'reject');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '6', '2018-1-1', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('1', '7', '2018-3-1', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('2', '4', '2018-3-31', 'pending');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('2', '5', '2018-3-31', 'reject');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('2', '6', '2018-4-1', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('2', '7', '2018-3-31', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('3', '4', '2018-1-1', 'pending');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('3', '5', '2018-1-1', 'reject');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('3', '6', '2018-3-31', 'approve');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('3', '7', '2018-4-15', 'reject');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('4', '5', '2018-1-1', 'pending');
INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('4', '6', '2018-4-15', 'approve');

INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('1', '3', '2018-3-31', 'hello');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('1', '4', '2017-3-31', 'hi');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('1', '5', '2018-4-15', 'hello');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('2', '3', '2018-1-1', 'hi');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('2', '6', '2018-1-1', 'hello');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('2', '7', '2018-3-1', 'hi');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('3', '6', '2018-3-31', 'hello');
INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`) VALUES ('4', '6', '2018-3-31', 'hi');

INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('5', '1', '2018-3-31', 'read');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('8', '1', '2017-3-31', 'unread');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('10', '2', '2018-4-15', 'read');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('6', '2', '2018-1-1', 'unread');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('12', '3', '2018-1-1', 'read');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('14', '5', '2018-3-1', 'unread');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('10', '8', '2018-3-31', 'read');
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('7', '6', '2018-3-31', 'unread');

INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('3', '5', '2018-3-27', 'pending');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('4', '6', '2017-3-4', 'approve');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('6', '3', '2018-4-2', 'pending');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('1', '2', '2018-1-20', 'reject');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('8', '8', '2018-2-7', 'approve');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('4', '6', '2018-4-15', 'pending');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('5', '4', '2018-3-21', 'reject');
INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('1', '1', '2018-3-31', 'approve');

INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('1', '3', '1', '2018-3-27', 'read');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('1', '4', '2','2017-3-4', 'unread');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('1', '6', '3', '2018-4-2', 'read');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('2', '3', '4', '2018-1-20', 'unread');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('2', '6', '5', '2018-2-7', 'read');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('2', '7', '6', '2018-4-15', 'unread');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('3', '6', '7', '2018-3-21', 'read');
INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('4', '6', '8', '2018-3-31', 'unread');

INSERT INTO `Follow` (`sid`, `cid`) VALUES ('3', '1');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('4', '1');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('5', '2');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('3', '2');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('6', '3');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('7', '5');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('5', '8');
INSERT INTO `Follow` (`sid`, `cid`) VALUES ('4', '6');