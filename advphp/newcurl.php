
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
//step1
$cSession = curl_init();
//step2
curl_setopt($cSession,CURLOPT_URL,"https://admin-dev.theaterears.net/api/options/get_surveydata/?lang=en&sur_ver=3");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5



$arr=json_decode($result,true);
// print_r($arr);
//
// foreach($arr['survey']['ques'] as $value)
// {
//   echo $value['ques_label']." ". $value['ques_type']."<br>";
//
// }
//
//   if($question['ques_type']=="single-choice")
//   {
//
//
//     echo "radio button";
//   } else{
//     foreach ($question['ques_choices'] as $newkey)
//     {
//        echo $newkey['ch_label']."<br>";
//     }
// }

echo "<form class='frm'  >";
foreach($arr['survey']['ques'] as $question)
{

  echo "<pre>";
  echo "<h1>".$question['ques_label']. " ". $question['ques_type']. " " ."</h1><br>";
    foreach ($question['ques_choices'] as $newkey)
    {
      echo $newkey['ch_label']."<input type='radio' name='".$question['ques_id']."' value='". $newkey['ch_id']."' class='newid'/><br>";
    }
}
  echo "<input type='submit' name='submit' />";




// <!-- <script>
// var formData = JSON.stringify(jQuery('#frm').serializeArray());
// console.info(formData);
// </script> -->
// <!-- <script>
// function showInput(form){
//     var array = jQuery(form).serializeArray();
//    // console.log(array);
//    document.write(array);
// }

//</script> -->
//
// <!-- <script>
// $(document).ready(function(){
//     $("submit").click(function(){
//         var x = $("form").serializeArray();
//
//         var jsonString = JSON.stringify(x);
//
//
//          console.log(jsonString);



        // $.each(x, function(i, field){
        //   console.log(x);
             // $("#tex").append(field.name + ":" + field.value + " ");
             // //console.log(formInput[0].value);
             // console.log($(this).attr('name') + " = " + $(this).val());
//         // });
//     });
// }); -->

//</script>
//<div id="tex"></div>
// echo "<script>

//   var i = 0;
//     document.querySelector('form.frm').addEventListener('submit', function (e) {
//         e.preventDefault();
//         var radio =document.getElementByName('".$question['ques_id']."');
//         for ( i=0; i < radio.length; i++)
//           {
//            if (radios[i].checked)
//            {

//             console.log(radios[i].value);


//            }
//           }

        // var formInput = document.querySelectorAll('.newid');
        // console.log(formInput);
       //    var formInput = document.querySelectorAll('.newid');
       // console.log(formInput[6].value);
    });
</script> ";
