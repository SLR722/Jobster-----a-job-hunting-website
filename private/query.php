<?php
function Slogname_Exist($slogname){
    global $db;
    $sql="select* from Student where slogname='".db_escape($db, $slogname)."'"; 
    $result_1=mysqli_query($db, $sql);
    $result_2 = mysqli_fetch_array($result_1);
    if(!empty($result_2)){
          return true;
    }
    else{
        return false;
    }
}

function Spwd_Correct($slogname, $spwd){
    global $db;
    $sql="select spwd from Student where slogname='".db_escape($db, $slogname)."'"; 
    $result=mysqli_query($db, $sql);
    $result_1=mysqli_fetch_array($result);
    $hashed_spwd=$result_1['spwd'];
    return password_verify($spwd, $hashed_spwd);
}

function Cname_Exist($cname){
    global $db;
    $sql="select* from Company where cname='".db_escape($db, $cname)."'"; 
    $result_1=mysqli_query($db, $sql);
    $result_2 = mysqli_fetch_array($result_1);
    if(!empty($result_2)){
        return true;
    }
    else{
        return false;
    }
}

function Cpwd_Correct($cname, $cpwd){
    global $db;
    $sql="select cpwd from Company where cname='".db_escape($db, $cname)."'"; 
    $result=mysqli_query($db, $sql);
    $result_1=mysqli_fetch_array($result);
    $hashed_cpwd=$result_1['cpwd'];
    return password_verify($cpwd, $hashed_cpwd);
    
}

function Find_Student_By_Slogname($slogname){
    global $db;
    $sql="select* from Student where slogname='".db_escape($db, $slogname)."'";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    $result_1=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $result_1;
}

function Find_Student_By_Sid($sid){
    global $db;
    $sql="select* from Student where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Find_Company_By_Cname($cname){
    global $db;
    $sql="select* from Company where cname='".db_escape($db, $cname)."'";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    $result_1=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $result_1;
}

function Test_Company($sid){
    global $db;
    $sql="select cname, clocation, cindustry from Company";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Test_Friend($sid){
    global $db;
    $sql="select * from Student";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Test_Followed($cid){
    global $db;
    $sql="select * from Student";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Test_Applied($cid){
    global $db;
    $sql="select sid as slogname, jid as jtitle, time, status from Apply";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Test_Message($sid){
    global $db;
    $sql="select * from Message";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Test_Jobs(){
    global $db;
    $sql="select * from Job natural join company";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Test_Friend_Request(){
    global $db;
    $sql="select * from FriendRequest";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Insert_Student($student){
    global $db;
    $hashed_pwd = password_hash($student['spwd'], PASSWORD_BCRYPT);
    $sql="INSERT INTO `Student`  
        (`sname`, `slogname`, `spwd`, `university`, `major`, `degree`, `GPA`, `sinfo`, `resume`, `res`)
        VALUES (
        '".db_escape($db, $student['sname'])."','".db_escape($db, $student['slogname'])."','".db_escape($db, $hashed_pwd)."','"
        .db_escape($db, $student['university'])."','".db_escape($db, $student['major'])."','".db_escape($db, $student['degree'])."','"
        .db_escape($db, $student['GPA'])."','".db_escape($db, $student['sinfo'])."','".db_escape($db, $student['resume'])."','".db_escape($db, $student['res']).
        "')";                                                              //insert student basic information
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Insert_Company($company){
    global $db;
    $hashed_pwd = password_hash($company['cpwd'], PASSWORD_BCRYPT);
    $sql="INSERT INTO `Company`  
            (`cname`, `cpwd`, `clocation`, `cindustry`)
            VALUES (
            '".db_escape($db, $company['cname'])."','".db_escape($db, $hashed_pwd)."','".db_escape($db, $company['clocation'])."','".db_escape($db, $company['cindustry'])."')";                                                              //insert company basic information
    $result=mysqli_query($db, $sql);
    if($result){
        echo "true";
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        echo "false";
        exit;
    }
}

function Find_Followed_Company_By_Sid($sid){
    global $db;
    $sql="select Company.cid as cid, cname, clocation, cindustry from Company, Follow where Company.cid=Follow.cid and sid='".db_escape($db, $sid)."'"; 
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Find_Friends_By_Sid($sid){
    global $db;
    $sql="(select* from FriendRequest, Student where Student.sid=FriendRequest.tosid and status='approve' and FriendRequest.fromsid='".db_escape($db, $sid)."')
    UNION
    (select* from FriendRequest, Student where Student.sid=FriendRequest.fromsid and status='approve' and FriendRequest.tosid='".db_escape($db, $sid)."')";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Find_Unread_Message_By_Sid($sid){
    global $db;
    $sql="select mid, slogname as fromsname, mcontent, status from Message, Student where Student.sid=Message.fromsid and tosid='".db_escape($db, $sid)."' order by status, Message.time desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result; 
}

function Find_All_Open_Position(){
    global $db;
    $sql="select* from Company, Job where job.cid=Company.cid and duedate>=curdate() order by postdate desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result; 
}

function Find_Applied_Positions_by_Sid($sid){
    global $db;
    $sql="select* from Company, Job, Apply where Company.cid=Job.cid and Apply.jid=Job.jid and Apply.sid='"
    .db_escape($db, $sid)."'
    order by Apply.time desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result; 
}

function Find_Unread_Friend_Share_By_Sid($sid){
    global $db;
    $sql="select* from Company, Job, Share where Share.tosid='".db_escape($db, $sid)."' and Company.cid=Job.cid and Share.jid=Job.jid and Share.status='unread'
    order by Share.time desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Find_Unread_Friend_Request_By_Sid($sid){
    global $db;
    $sql="select* from FriendRequest, Student where fromsid=Student.sid and status='pending' and tosid='".db_escape($db, $sid)."' order by time desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result; 
}

function Find_Unread_Company_Push_By_Sid($sid){
    global $db;
    $sql="select* from Push, Company, Job where Push.jid=Job.jid and Job.cid=Company.cid and status='unread' and Push.sid='".db_escape($db, $sid)."' order by 
    Push.time desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Search_Student_By_Keyword($keyword){
    global $db;
    $sql="(select* from Student where university like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Student where sname like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Student where slogname like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Student where major like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Student where GPA like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Student where resume like '%".db_escape($db, $keyword)."%')";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Search_Job_By_Keyword($keyword){
    global $db;
    $sql="(select* from Job, Company where Job.cid=Company.cid and jtitle like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Job, Company where Job.cid=Company.cid and jlocation like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Job, Company where Job.cid=Company.cid and salary like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Job, Company where Job.cid=Company.cid and degree like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Job, Company where Job.cid=Company.cid and major like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Job, Company where Job.cid=Company.cid and description like '%".db_escape($db, $keyword)."%')";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Search_Company_By_Keyword($keyword){
    global $db;
    $sql="(select* from Company where cname like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Company where clocation like '%".db_escape($db, $keyword)."%')
    UNION
    (select* from Company where cindustry like '%".db_escape($db, $keyword)."%')";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Find_Applied_Job_By_Cid($cid){
    global $db;
    $sql="select* from Student, Apply, Job where Student.sid=Apply.sid and Job.jid=Apply.jid and 
    Job.cid='".db_escape($db, $cid)."' order by Apply.time desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Find_Push_Job_By_Cid($cid){
    global $db;
    $sql="select* from Job, Push, Student where Push.sid=Student.sid and Push.jid=Job.jid and Job.cid='".db_escape($db, $cid)."' 
    order by Push.time desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Find_Following_Student_By_Cid($cid){
    global $db;
    $sql="select* from Follow, Student where Follow.sid=Student.sid and Follow.cid='".db_escape($db, $cid)."'";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function Find_Open_Position_By_Cid($cid){
    global $db;
    $sql="select* from Company, Job where job.cid=Company.cid and duedate>=curdate() and Job.cid='".db_escape($db, $cid)."'order by postdate desc";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result; 
}

function Is_Follow($sid, $cid){
    global $db;
    $sql="select* from Follow where sid='".db_escape($db, $sid)."' and cid='".db_escape($db, $cid)."'";
    $result_1=mysqli_query($db, $sql);
    $result_2 = mysqli_fetch_array($result_1);
    if(!empty($result_2)){
          return true;
    }
    else{
        return false;
    }
}

function Follow_Company($sid, $cid){
    global $db;
    $sql="INSERT INTO `Follow` (`sid`, `cid`) VALUES ('".db_escape($db,$sid)."', '".db_escape($db, $cid)."')";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Unfollow_Company($sid, $cid){
    global $db;
    $sql="delete from Follow where sid='".db_escape($db, $sid)."' and cid='".db_escape($db, $cid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Search_Company_Position($cid){
    global $db;
    $sql="select* from Job, Company where Company.cid=Job.cid and Job.duedate>=curdate() and Job.cid='".db_escape($db, $cid)."'";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result; 
}

function Student_Add_Friend($fromsid, $tosid){
    global $db;
    $sql="INSERT INTO `FriendRequest` (`fromsid`, `tosid`, `time`, `status`) VALUES ('".db_escape($db, $fromsid)."', '".db_escape($db, $tosid)."', now(), 'pending')";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Delete_Friend($fromsid, $tosid){
    global $db;
    $sql="delete from FriendRequest where (fromsid='".db_escape($db, $fromsid)."' and tosid='".db_escape($db, $tosid)."')
    or
    (tosid='".db_escape($db, $fromsid)."' and fromsid='".db_escape($db, $tosid)."')";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function If_FriendRequest_Pending($fromsid, $tosid){
    global $db;
    $sql="select* from FriendRequest where fromsid='".db_escape($db, $fromsid)."' and tosid='".db_escape($db, $tosid)."' and status='pending'";
    $result_1=mysqli_query($db, $sql);
    $result_2 = mysqli_fetch_array($result_1);
    if(!empty($result_2)){
          return true;
    }
    else{
        return false;
    }
}

function If_FriendRequest_Reject($fromsid, $tosid){
    global $db;
    $sql="select* from FriendRequest where fromsid='".db_escape($db, $fromsid)."' and tosid='".db_escape($db, $tosid)."' and status='reject'";
    $result_1=mysqli_query($db, $sql);
    $result_2 = mysqli_fetch_array($result_1);
    if(!empty($result_2)){
          return true;
    }
    else{
        return false;
    }
}

function Is_Friend($fromsid, $tosid){
    global $db;
    $sql="(select* from FriendRequest where fromsid='".db_escape($db, $fromsid)."' and tosid='".db_escape($db, $tosid)."' and status='approve')
        UNION
        (select* from FriendRequest where fromsid='".db_escape($db, $tosid)."' and tosid='".db_escape($db, $fromsid)."' and status='approve')";
    $result_1=mysqli_query($db, $sql);
    $result_2 = mysqli_fetch_array($result_1);
    if(!empty($result_2)){
          return true;
    }
    else{
        return false;
    }
}

function Is_FriendDetail_Available($fromsid, $tosid){
    global $db;
    $sql="select res from Student where sid='".db_escape($db, $tosid)."'";
    $result=mysqli_query($db, $sql);
    $result_1 = mysqli_fetch_array($result);
    if($result_1['res']=='No'){
        return true;
    }
    if(($result_1['res']=='Yes')&&(Is_Friend($fromsid, $tosid))){
        return true;
    }
    if(($result_1['res']=='Yes')&&(!Is_Friend($fromsid, $tosid))){
        return false;
    }
}

function Is_StudentDetail_Available($cid, $sid){
    global $db;
    $sql="select res from Student where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    $result_1 = mysqli_fetch_array($result);
    if($result_1['res']=='No'){
        return true;
    }
    if(($result_1['res']=='Yes')&&(Is_Follow($sid, $cid))){
        return true;
    }
    if(($result_1['res']=='Yes')&&(!Is_Follow($sid, $cid))){
        return false;
    }
}

function Apply_Job($sid, $jid){
    global $db;
    $sql="INSERT INTO `Apply` (`sid`, `jid`, `time`, `status`) VALUES ('".db_escape($db, $sid)."', '".db_escape($db, $jid)."', now(), 'pending')";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Apply_Status($sid, $jid){
    global $db;
    $sql="select* from Apply where sid='".db_escape($db, $sid)."' and jid='".db_escape($db, $jid)."'";
    $result_1=mysqli_query($db, $sql);
    $result_2 = mysqli_fetch_array($result_1);
    if(empty($result_2)){
        return 'empty';
    }
    else return $result_2['status'];
}


function Post_Job($cid, $jtitle, $jlocation, $salary, $degree, $major, $description){
    global $db;
    $sql="INSERT INTO `Job` (`cid`, `jtitle`, `jlocation`, `salary`, `degree`, `major`, `description`, `postdate`, `duedate`) 
    VALUES (
        '".db_escape($db, $cid)."','".db_escape($db, $jtitle)."','".db_escape($db, $jlocation)."','"
        .db_escape($db, $salary)."','".db_escape($db, $degree)."','".db_escape($db, $major)."','"
        .db_escape($db, $description)."', now(), date_add(now(), interval 3 month)".
        ")"; 
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Send_Message($fromsid, $toslogname, $message){
    global $db;
    $sql_1="select sid from Student where slogname='".db_escape($db, $toslogname)."'";
    $result_1=mysqli_query($db, $sql_1);
    $result_2 = mysqli_fetch_array($result_1);
    if(empty($result_2)){
        return false;
    }
    else{
        $tosid=$result_2['sid'];
        if(!Is_Friend($fromsid, $tosid)){
        return false;
        }
        else{
            $sql_2="INSERT INTO `Message` (`fromsid`, `tosid`, `time`, `mcontent`, `status`) VALUES ('".db_escape($db, $fromsid)."', '".$result_2['sid']."', now(), '".db_escape($db, $message)."', 'unread')";
            $result=mysqli_query($db, $sql_2);
            if($result){
                return true;
            }
            else{
                echo mysqli_error($db);
                db_discount($db);
                exit;
            }   
        }
    } 
}

function Read_The_Unread_Message($mid){
    global $db;
    $sql_1="update Message set status='read' where mid='".db_escape($db, $mid)."'";
    $result_1=mysqli_query($db, $sql_1);
    if($result_1){
        $sql_2="select mcontent from Message where mid='".db_escape($db, $mid)."'";
        $result_2=mysqli_query($db, $sql_2);
        $result_3 = mysqli_fetch_array($result_2);
        return $result_3;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Find_Job_By_Jid($jid){
    global $db;
    $sql="select* from Job, Company where Job.cid=Company.cid and jid='".db_escape($db, $jid)."'";
    $result=mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function From_Mid_Get_slogname($mid){
    global $db;
    $sql="select slogname from Message, Student where Student.sid=Message.fromsid and mid='".db_escape($db, $mid)."'";
    $result=mysqli_query($db, $sql);
    $result_1=mysqli_fetch_array($result);
    return $result_1['slogname'];
}


/*function Apply_Status($sid, $jid){
    global $db;
    $sql="select status from Apply where sid='".db_escape($db, $sid)."'and jid='".db_escape($db, $jid)."'";
    $result=mysqli_query($db, $sql);
    $result_1=mysqli_fetch_array($result);
    return $result_1['status'];
}*/


function Offer_Invitation($aid){
    global $db;
    $sql="update Apply set status='approve' where aid='".db_escape($db, $aid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Decline($aid){
    global $db;
    $sql="update Apply set status='reject' where aid='".db_escape($db, $aid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Share($fromsid, $toslogname, $jid){
    global $db;
    $sql_1="select sid from Student where slogname='".db_escape($db, $toslogname)."'";
    $result_1=mysqli_query($db, $sql_1);
    $result_2=mysqli_fetch_array($result_1);
    if(empty($result_2)){
        return false;
    }
    else{
        $tosid=$result_2['sid'];
        if(!Is_Friend($fromsid, $tosid)){
        return false;
        }
        else{
            $sql_2="INSERT INTO `Share` (`fromsid`, `tosid`, `jid`, `time`, `status`) VALUES ('".db_escape($db,$fromsid)."', '".$tosid."'
            , '".db_escape($db, $jid)."', now(), 'unread')";
            $result=mysqli_query($db, $sql_2);
            if($result){
                return true;
            }
            else{
                echo mysqli_error($db);
                db_discount($db);
                exit;
                
            } 
        }
    }

}

function Push_Status($jid, $sid){
    global $db;
    $sql="select* from Push where jid='".db_escape($db, $jid)."' and sid='".db_escape($db, $sid)."'";
    $result_1=mysqli_query($db, $sql);
    $result_2=mysqli_fetch_array($result_1);
    if(empty($result_2)){
        return "unpush";
    }
    else{
        return "push";
    }
}

function Push($jid, $sid){
    global $db;
    $sql="INSERT INTO `Push` (`jid`, `sid`, `time`, `status`) VALUES ('".db_escape($db, $jid)."', '".db_escape($db, $sid)."', now(), 'unread')";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Accept_Friend_Request($fromsid, $tosid){
    global $db;
    $sql="update FriendRequest set status='approve' where fromsid='".db_escape($db, $fromsid)."' and tosid='".db_escape($db, $tosid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Decline_Friend_Request($fromsid, $tosid){
    global $db;
    $sql="update FriendRequest set status='reject' where fromsid='".db_escape($db, $fromsid)."' and tosid='".db_escape($db, $tosid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function See_Applied_Student_Detail($cid, $sid){
    global $db;
    $sql="select* from Job, Apply where Job.jid=Apply.jid and Job.cid='".db_escape($db, $cid)."' and sid='".db_escape($db, $sid)."'";
    $result_1=mysqli_query($db, $sql);
    $result_2=mysqli_fetch_array($result_1);
    if(empty($result_2)){
        return false;
    }
    else{
        return true;
    }

}

function Edit_Sname($sid, $newsname){
    global $db;
    $sql="update student set sname='".db_escape($db, $newsname)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Edit_Slogname($sid, $newslogname){
    global $db;
    $sql="update student set slogname='".db_escape($db, $newslogname)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Edit_Spwd($sid, $newspwd){
    global $db;
    $hashed_pwd = password_hash($newspwd, PASSWORD_BCRYPT);
    $sql="update student set spwd='".$hashed_pwd."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Edit_University($sid, $newuniversity){
    global $db;
    $sql="update student set university='".db_escape($db, $newuniversity)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Edit_Major($sid, $newmajor){
    global $db;
    $sql="update student set major='".db_escape($db, $newmajor)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Edit_Degree($sid, $newdegree){
    global $db;
    $sql="update student set degree='".db_escape($db, $newdegree)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Edit_GPA($sid, $newgpa){
    global $db;
    $sql="update student set GPA='".db_escape($db, $newgpa)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Edit_Sinfo($sid, $newsinfo){
    global $db;
    $sql="update student set sinfo='".db_escape($db, $newsinfo)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}

function Edit_Resume($sid, $newresume){
    global $db;
    $sql="update student set resume='".db_escape($db, $newresume)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}


function Edit_Restrict($sid, $newrestrict){
    global $db;
    $sql="update student set restrict='".db_escape($db, $newrestrict)."' where sid='".db_escape($db, $sid)."'";
    $result=mysqli_query($db, $sql);
    if($result){
        return true;
    }
    else{
        echo mysqli_error($db);
        db_discount($db);
        exit;
    }
}



?>


