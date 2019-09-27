<?php
include 'vendor/chromephp-master/ChromePhp.php';



ChromePhp::log("start download script");

if ($_GET['action']=='a') {
	header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename='.basename('container/output_pdf.pdf'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.filesize('container/output_pdf.pdf'));
    readfile('container/output_pdf.pdf');
    exit();

} elseif ($_GET['action']=='b') {

	header('Content-Type: application/application/vnd.openxmlformats-officedocument.wordprocessingml.document
');
    header('Content-Disposition: attachment; filename='.basename('container/output_doc.docx'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.filesize('container/output_doc.docx'));
    readfile('container/output_doc.docx');
	exit();

	# code...
} elseif ($_GET['action']=='c') {

	header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename('container/output.txt'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.filesize('container/output.txt'));
    readfile('container/output.txt');
	exit();

}elseif ($_GET['action']=='d') {
	# code...
}




/*header("Location: result.php"); /* Redirect browser */

?>