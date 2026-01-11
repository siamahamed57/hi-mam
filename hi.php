<?php
if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $message = " ";
      if($number == ""){
        $message = "Please mam input a number";
    }
    elseif($number ==1){
        $message =  "Hey mam you are so cute😒😒😒";
    }
    elseif($number ==2){
        $message =  "Porashunar obostha khub i kharap apnar🙅‍♂️🙅‍♂️🙅‍♂️🙅‍♂️";
    }
    elseif($number ==3){
        $message =  "Screen Time komate hobe📉📉📉📉";
    }
    elseif($number ==4){
        $message =  "Apni Thik moto khawa dawa koren na❌❌❌";
    }
    elseif($number ==5){
        $message =  "এইভাবে চলতে থাকলে অলস হয়ে যাবেন🦥🦥🦥";
    }
    elseif($number ==6){
        $message =  "আমি জানি আপনি ৬ লিখবেন না,লিখলে ধন্যবাদ😁😁😁";
    }
    elseif($number ==7){
        $message =  "আমি অনেক স্লো🦥🦥🦥🦥🦥🦥";
    }
    elseif($number ==8){
        $message =  "কেরাম ,লুডু আমার সাথে পারবেন না🏸🏸🏸";
    }
    elseif($number ==9){
        $message =  "আপনি আসলেই কিউট😻😻😻😻😻";
    }

    else{
        $message =  "৯ এর মধ্যে ইনপুট দিবা😒😒😒";
    }
    echo "
    <script>
    alert('$message');
    window.location.href = 'hi.html';
    </script>    
    ";


}
?>


