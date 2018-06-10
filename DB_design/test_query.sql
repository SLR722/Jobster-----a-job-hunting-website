# 1
INSERT INTO `Student`
  (`sid`, `sname`, `slogname`, `spwd`, `university`,
   `major`, `degree`, `GPA`, `sinfo`, `resume`, `restrict`)
VALUES
  ('8', 'Ai', 'root', 'root','NYU', 'CS','MS',
        '3.8', 'coding','good at database system', 'No');

# 2
SELECT S.sname
FROM FriendRequest F, Student S
WHERE ((F.fromsid = 2 AND F.tosid = S.sid) OR (F.tosid = 2 AND F.fromsid = S.sid)) AND status = 'approve';

# 3
DELETE FROM FriendRequest
WHERE status = 'pending' AND DATEDIFF(CURDATE(), DATE(time)) >30;;


# 4
SELECT sname
FROM Student NATURAL JOIN Follow NATURAL JOIN Company
WHERE cname = 'Microsoft';

# 5
SELECT *
FROM Job
WHERE degree='MS' AND major='CS' AND DATEDIFF(CURDATE(), DATE(postdate)) <= 7;

# 6
INSERT INTO `Push` (`jid`, `sid`, `time`, `status`)
    SELECT 0, sid, now(), 'unread'
    FROM Student S
    WHERE resume LIKE '%database systems%' AND GPA > 3.5 ;


