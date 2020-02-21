<?php
	$host='localhost';
	$user='root';
	$pass='';
	$dbname='crs1';
	$conn=mysqli_connect($host,$user,$pass,$dbname);
	if(!$conn)
	{
		die('Could not connect : '.mysqli_error());
	}
	echo '<h1 align=center>Connected Successfully</h1>';
	
	//$sql='create table vehiclebrand(vbrid int auto_increment,name varchar(20) not null,
	//details varchar(20) not null,primary key(vbrid))';
	//$sql='create table vehicle(vid int auto_increment,vbrid int,price varchar(20) not null,
	//primary key(vid),foreign key (vbrid) references vehiclebrand(vbrid))';
	//$sql='create table vehiclebooking(vboid int auto_increment,vid int,name varchar(20) not null,
	//details varchar(20) not null,primary key(vboid))';
	//$sql='create table userprofile(uid int auto_increment,fname varchar(20) not null,
	//lname varchar(20),email varchar(20) not null,password varchar(20) not null,
	//contact varchar(20) not null,primary key(uid))';
	/*$sql='create table vehiclebooking(vboid int auto_increment,vid int,uid int,booking varchar(20) not null,
	status varchar(20),primary key(vboid),foreign key (vid) references vehicle(vid),
	foreign key (uid) references userprofile(uid))';*/
	/*$sql='create table vehicletestimonial(vtid int auto_increment,vid int,test varchar(20) not null,
	primary key(vtid),foreign key (vid) references vehicle(vid))';*/
	/*$sql='create table admin(aid int,email varchar(20),password varchar(20),primary key(aid))';
	$sql='create table guest(gid int auto_increment,fname varchar(20) not null,
	lname varchar(20) not null,email varchar(20) not null,password varchar(20),contact varchar(20) not null,
	primary key(gid))';
	$sql='create table contact(cid int auto_increment,gid int,query varchar(50) not null,reply varchar(50),primary key(cid),
	foreign key(gid) references guest(gid))';
	$sql='create table usertestimonial(utid int auto_increment,uid int,feedback varchar(50),primary key(utid),
	foreign key(uid) references userprofile(uid))';*/
	if(mysqli_query($conn,$sql))
	{
		echo "<h2 align=center>Table created successfully</h2>";
	}
	else
	{
		echo "<h2 align=center>Could not create table ".mysqli_error($conn)."</h2>";
	}
	mysqli_close($conn);
?>