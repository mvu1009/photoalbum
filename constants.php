<?php

// [ACTION REQUIRED] your full name
define('STUDENT_NAME', 'Vu Huu Nhat Minh');
// [ACTION REQUIRED] your Student ID
define('STUDENT_ID', 'SWH03022');
// [ACTION REQUIRED] your tutorial session
define('TUTORIAL_SESSION', 'COS20019');

// S3 Bucket Info
define('BUCKET_NAME', 'cos20019-photoalbum-nhatminh-swh03022'); // Put your real bucket name here
define('REGION', 'us-east-1');
define('S3_BASE_URL','https://'.BUCKET_NAME.'.s3.amazonaws.com/');

// Database connection parameters
define('DB_NAME', 'photoalbum');
define('DB_ENDPOINT', 'photoalbum-db.c6wirdsb1rzi.us-east-1.rds.amazonaws.com'); // Put your real RDS endpoint here
define('DB_USERNAME', 'admin');
define('DB_PWD', 'admin123'); // Ensure this matches your real RDS password

// Database table metadata column names
define('DB_PHOTO_TABLE_NAME', 'photos'); // Make sure your table in phpMyAdmin is actually named 'photos'
define('DB_PHOTO_TITLE_COL_NAME', 'title');
define('DB_PHOTO_DESCRIPTION_COL_NAME', 'description');
define('DB_PHOTO_CREATIONDATE_COL_NAME', 'creationdate');
define('DB_PHOTO_KEYWORDS_COL_NAME', 'keywords');
define('DB_PHOTO_S3REFERENCE_COL_NAME', 'reference');
?>