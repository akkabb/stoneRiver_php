<?php
   $title = 'Currency conversion';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
   <?php require_once('include/head.php'); ?>
</head>
<body>
   <main class="main_currency">
      <div class="code_display">

      </div>
      <h1>I need to search another currency calculator </h1>
      <p>
         <?php
         /*
         function currency_convert($amount,  $from, $to){
         $result = file_get_contents('url');//Don't have the same URL
         $expl = explode('', $result);

         if ($expl[1] == '' || $expl[2] == '') {
               return false;
         }else{
            return array(
               $expl[1],
               $expl[2],
            );
         }
         }
         print_r(currency_convert(100, 'usd', 'gbp'));

         if (isset($_POST['amount'], $_POST['from'], $_POST['to'])){
            $amount = $_POST['amount'];
            $from = $_POST['from'];
            $to = $_POST['to'];

            $conversion = currency_convert($amount, $from, $to);
            if ($conversion == false)
            {
               echo 'Sorry, something went wrong';
            }else{
               echo $conversion[0], ' = ', $converion[1];
            }
         }
         */
         ?>
      </p>
      <section class="form">
        <form action="" method="post">
           <p>
              <label for="amount">Amount:</label>
              <input type="text" name="amount" id="">
           </p>
           <p>
              <label for="from">From:</label>
              <input type="text" name="from" id="">
           </p>
           <p>
              <label for="to">To:</label>
              <input type="text" name="to" id="">
           </p>
           <input type="submit" name="submit" value="Submit">
        </form>
      </section>
   </main>
</body>
</html>