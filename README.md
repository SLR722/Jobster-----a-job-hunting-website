# Jobster-----a-job-hunting-website

Brief Introduction
The website is a data-driven social network web application called Jobster which helps graduating students look for jobs.
Students can sign up and post their information on the website. Similarly, companies also can sign up, post their information and job announcements on the website. Students can send friend requests to other students and send messages and share job information to their friends. Students can also search the information they are interested in and follow certain companies to get updated information of those companies. Companies can also search by keywords to find candidates matching their opening jobs.

Tools
PHP, MySQL, Apache, HTML, CSS, Bootstrap

Schema
Student (sid, sname, slogname, spwd, university, major, GPA, sinfo, resume, restrict) restrict in (yes, no)
Company(cid, cname, cpwd, clocation, cindustry)
Job(jid, cid, jtitle, jlocation, salary, req, desc, postdate, duedate)
Job.cid referencing Company.cid
FriendRequest(fromsid, tosid, time, status)
status in (pending, approve, reject)
FriendRequest.fromsid, FriendRequest.tosid referencing Student.sid
Message(fromsid, tosid, time, mcontent) Message.fromsid, Message.tosid referencing Student.sid
Push(jid, sid, time, status) status in (unread, read)            
Push.jid referencing Job.jid, Push.sid referencing Student.sid
Apply(sid, jid, time, status)
status in (pending, approve, reject)
Apply.sid referencing Student.sid, Apply.jid referencing Job.jid
Share(fromsid, tosid, jid, time, status)
status in(read, unread)
Share.fromsid, Share.tosid referecing Student.sid, Share.jid referencing Job.jid
Follow(sid, cid)
Follow.sid referencing Student.sid, Follow.cid referencing Company.cid

File Organization
Private:
    - Shared
        -   XX_header.php: frontend code of header of the pages
        -   XX_footer.php: frontend code of footer of the pages
    - Database.php: Functions for initializing and using database
    - Functions.php: Functions for security, error, session message
    - Initialize.php: Include all global variables and function files, which should be included in
    all public files.
    - Log.php: Functions for company/student login, registration.
    - Query.php: Query functions
    - Validate.php: Validation functions
Public
    - Company
        -   Implementation including:
            Push/post/search jobs
            Look up applied job/all open position/following student invite/reject students’ job application
            See company/position/(following) student details Search company/position/student by keyword
    - Company_admin
        - Implementation including:
        Login/logout/registration 
    - Student
        -   Implementation including:
            See company/position/student (friend or no restrict) details
            Look up all open position/following company/friends/message/applied job Look up/apply/decline every friends’ 
            share/company push position Read/reply/write messages
            Search company/position/student by keyword
            Accept/decline/send friend request
            Personal homepage
- Student_admin
        -   Implementation including:
            Login / logout / registration
Index.php:
    Welcome page
    Lead users to student/company login/registration
Asset:
    Bootstrap framework file
Dist:
    Bootstrap framework file
StyleSheets:
    CSS files for frontend customize design
