<?php
$target_dir     =   "uploads/";

$target_file    =   $target_dir . basename( $_FILES[ "fileToUpload" ][ "name" ] );
$uploadOk       =   1;

$imageFileType  =   strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );

// Check if image file is a actual image or fake image
if ( isset( $_POST[ "submit" ] ) ):
    $check  =   getimagesize( $_FILES[ "fileToUpload" ][ "tmp_name" ] );
    if ( $check !== false ):
        echo "File is an image - ". $check["mime"] . ".";
        $uploadOk   =   1;
        else:
            echo "File is not an image";
        $uploadOk   =   0;
        endif;
    endif;

// check if file already exists
if ( file_exists( $target_file ) ):
    echo "Sorry, file already exists!";
    endif;
//check file size
if( $_FILES[ "fileToUpload" ][ "size" ] > 500000 ):
    echo "Sorry, your file is too large";
    endif;

// Allow certain file format
if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ):
    echo "Sorry, only jpg, jpeg, png and gif files are allowed  ";
    endif;

// Check if $uploadOk is set to 0 by an error
if ( $uploadOk  == 0 ):
    echo "Sorry, your file was not uploaded";
// if everything is ok, try to upload file
else:
    if ( move_uploaded_file( $_FILES[ "fileToUpload" ][ "tmp_name" ], $target_file ) ):
        echo "The file ".  htmlspecialchars( basename( $_FILES[ "fileToUpload" ][ "name" ] ) ). " has been uploaded";
        else:
        echo "Sorry, there was an error uploading your file";
        endif;
endif;