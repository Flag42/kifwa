<?php
$link=$_GET['var'];
$json_string = file_get_contents("http://marineapi.azurewebsites.net/api/Invoices/generate/".$link);
$data = json_decode($json_string, true);
$array = $data;

$name=$data['ClientName'];

$accno=rand(5000, 15000);
$email=$data['Email'];
$mobile=$data['PhoneNumber'];

$premium=$data['GrandTotal'];

$name=$data['ClientName'];
$invoiceno=$data['ClientName'];

$r="Unpaid";
$quote=$data['QuoteDetails'];
$vat=$data['VAT'];
$image=$data['ImageUrl'];
$insurer=$data['Insurer'];
$dis=$data['Discount'];
$pin= $data['VATReg'];
$policy=$data['PolicyNo'];

$ship=$data['ShippingDetails'];

$from=$ship['CountryOfOrigin'];
$to= $ship['PortOfDischange'];
$vessel=$ship['VesselName'];

require('convert/WriteHTML.php');

	$pdf=new PDF_HTML();
	$pdf->AliasNbPages();
	 
	////add page page automatically for its true parameter
	 
	$pdf->SetAutoPageBreak(true, 15);
	$pdf->AddPage();
	//add images or logo which you want
	//$pdf->Image('images/logo.png',18,13,33);
	//set font style
	$pdf->SetFont('times','B',12);
	$pdf->Image('time.jpg',0,0,200);
	$pdf->SetFont('times','',12);
	$pdf->SetXY(70, 30); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, $insurer);

	$pdf->SetFont('times','',10);
	$pdf->SetXY(55, 63); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, $name);
	$pdf->SetFont('times','',10);
	$pdf->SetXY(55, 70); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, $pin);
	$pdf->SetFont('times','',10);
	$pdf->SetXY(55, 77); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, $mobile);

	$pdf->SetFont('times','',10);
	$pdf->SetXY(140, 55); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, $policy);
	
	$pdf->SetXY(140, 60); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, $policy);

	$pdf->SetXY(163, 75); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, $premium);

	$pdf->SetXY(165, 89); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, "1830");
	$pdf->SetXY(167, 94); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0, "3");

	$pdf->SetXY(165, 99); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  $premium);

	 $pdf->SetXY(60, 115); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  "Kenbright Insurance Brokers");

	$pdf->SetXY(60, 120); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  $insurer);

	$pdf->SetXY(60, 125); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  "Freight Kenya Ltd");

	$pdf->SetXY(60, 130); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  "James Kimani");


	 $pdf->SetXY(147, 115); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  "A676655666F");

	$pdf->SetXY(147, 120); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  "A343323338G");

	$pdf->SetXY(147, 125); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  "A345443328G");



	 $pdf->SetXY(60, 144); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  $from);

	 $pdf->SetXY(135, 144); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  $to);

	$pdf->SetXY(60, 149); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  $vessel);

	 $pdf->SetXY(135, 149); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  $from);

	$pdf->SetXY(60, 154); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  $to);

	$pdf->SetXY(135, 154); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  "");

	$pdf->SetXY(135, 159); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  "perfect Condition");
foreach ($quote as $row) {
	$product=$row['TypeOfGood'];

	$pdf->SetXY(135, 170); // position of text1, numerical, of course, not x1 and y1
	$pdf->Write(0,  $product);

}


$pdf->Output("pdf/$accno.pdf",'F');






$name=$data['ClientName'];
$accno=rand(5000, 15000);
$email=$data['Email'];
$mobile=$data['PhoneNumber'];

$premium=$data['GrandTotal'];

$name=$data['ClientName'];
$invoiceno=$data['ClientName'];

$r="Unpaid";
$quote=$data['QuoteDetails'];
$vat=$data['VAT'];
$image=$data['ImageUrl'];
$insurer=$data['Insurer'];
$dis=$data['Discount'];



include('kituinvoice/phpinvoice.php');
$invoice = new phpinvoice();
  /* Header Settings */
  $invoice->setLogo("$image");
  $invoice->setColor("#007fff");
  $invoice->setType("Sale Invoice");
  $invoice->setReference("$invoiceno");
  $invoice->setDate(date('M dS ,Y',time()));
  $invoice->setTime(date('h:i:s A',time()));
  $invoice->setDue(date('M dS ,Y',strtotime('+1 months')));
  $invoice->setFrom(array("Insurer Name","$insurer","","",""));
  $invoice->setTo(array("Customer Name","$name","Account no: $accno","Email: $email","Mobile No: $mobile"));
  /* Adding Items in table */
  foreach ($quote as $row) {

 //$insurer=$data['ClientName'];

$cnt="1";
$price=$row['Premium'];


$product=$row['TypeOfGood'];
  
  $invoice->addItem("$product","",1,0,$price,0,$price);
}
  //$invoice->addItem("PDC-E5300","2.6GHz/1GB/320GB/SMP-DVD/FDD/VB",4,0,645,0,2580);
  //$invoice->addItem('LG 18.5" WLCD',"",10,0,230,0,2300);
  //$invoice->addItem("HP LaserJet 5200","",1,0,1100,0,1100);
  /* Add totals */
  $invoice->addTotal("Total",$premium);
  $invoice->addTotal("VAT and Levy",$vat);
  $invoice->addTotal("Discount",$dis);
  $invoice->addTotal("Total due",$premium,true);
  /* Set badge */ 
  $invoice->addBadge("$r");
  /* Add title */
  $invoice->addTitle("Important Notice");
  /* Add Paragraph */
  $invoice->addParagraph("Payments will be done via mpesa paybill number 2330092.");
  /* Set footer note */
  $invoice->setFooternote("Kenbright");
  /* Render */
  $invoice->render("invoice/$accno.pdf",'F'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */







$files = array("pdf/$accno.pdf","invoice/$accno.pdf");
// email fields: to, from, subject, and so on
$to = $email;
$from = "Alerts@flag42.com"; 
$subject ="Policy Certificate"; 
$message = "Certificate Document";
$headers = "From: $from";
 
// boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
 
// headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// multipart boundary 
$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
$message .= "--{$mime_boundary}\n";
 
// preparing attachments
for($x=0;$x<count($files);$x++){
	$file = fopen($files[$x],"rb");
	$data = fread($file,filesize($files[$x]));
	fclose($file);
	$data = chunk_split(base64_encode($data));
	$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
	"Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
	"Content-transfer-Encoding: base64\n\n" . $data . "\n\n";
	$message .= "--{$mime_boundary}\n";
}
 
// send
 
$ok = @mail($to, $subject, $message, $header);
$ok1= @mail($to1,$subject1,$message1,$header); 



?>
<script language="javascript">
                  alert(" successful");
                  top.location.href = "http://marineportal.azurewebsites.net/"; //the page to redirect
</script>