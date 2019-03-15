<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php 
		$name = $_REQUEST['name'];
        $section = $_REQUEST['section'];
        $credit_card_pin = $_REQUEST['credit_card_pin'];
         
     if($name != "" && $section != "" && $credit_card_pin != "" && isset($_REQUEST['credit_type'])){ 
      $credit_type = $_REQUEST['credit_type'];?>

		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
      <dt>Name</dt>
      <dd><?php echo $name; ?></dd>

      <dt>Section</dt>
      <dd><?php echo $section; ?></dd>

      <dt>Credit Card</dt>
      <dd><?php echo $credit_card_pin. '('.$credit_type.')'; ?></dd>
        </dl>

        <?php 
        file_put_contents("suckers.txt", $name.';'.$section.';'.$credit_card_pin.';'.$credit_type.PHP_EOL, FILE_APPEND);
        ?>

        <p>Here are the list of customers:</p>

        <?php 
        echo '<pre>'.file_get_contents("suckers.txt").'</pre>';
        ?>
    <?php }
    else{?>
    <h1>Sorry</h1>
    <p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
    <?php }?>


	</body>
</html>  