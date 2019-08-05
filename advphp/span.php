
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>

.red{ background-color:#093;}
</style>

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


foreach($arr['survey']['ques'] as $question)
{

  echo "<div class='question' id='". $question['ques_id']. "'>";
  echo "<h1 class='quesHed' data-ques='". $question['ques_id']. "'>".$question['ques_label']. " ". $question['ques_type']. " " ."</h1><br>";
    foreach ($question['ques_choices'] as $newkey)
    {
      echo "<span class='ques_label' data-choice='". $newkey['ch_id']. "'>".$newkey['ch_label']."</span><br>";
    } 
    echo "</div>";
}



  echo "<input type='button' value='submit' name='submit' id='jsonBtn' />";
echo "


<script>
        $('.question').each(function () {
            var para = $(this).find('span');
            para.click(function () {
                var selected = $(this).hasClass('red');
                para.removeClass('red');
                if (!selected)
                    $(this).addClass('red');
            });
        });
           
    </script>

<script>
$(document).ready(function(){
  $('#jsonBtn').on('click', function(){
  $('.question').each(function () {
      var para= $(this).find('span');
      para.click(function (){
          var selected =$(this).hasClass('red');
          if(selected)
          {
           var ques_id=$(this).find('.quesHed').attr('data-ques');
           console.log('ques_id'); 
          }

      }); 
    });
  }); 
});
</script>






// <script>
       
//         $('div[id=". $question['ques_id']. "] p').click(function () {
//             var selected = $(this).hasClass('red');
//             $('div[id=". $question['ques_id']. "] p').removeClass('red');
//             if (!selected)
//                 $(this).addClass('red');
//         });
       
//     </script>







//   <script>
//   $(document).ready(function(){
    
//     $('span').click(function(){
//     $('this').removeClass('red');
//     $(this).toggleClass('red');
//           });
            
//   });
// </script>

  // <script>
  // $(document).ready(function(){
  //   $('.quesd').each(function(){
  //     var clk=$('this').find('.quesHed').attr('data-ques');
  //       $(clk).click(function(){
  //        $('this').removeClass('red');
  //         $('span').toggleClass('red');
  //       });
  //    });
  // });

  // $(document).ready(function(){
  //   $('span').click(function(){
  //   $('span').removeClass('red');
  //   $(this).toggleClass('red');
  //         });
            
  // });

//</script>
// <script>

// function clickme(){

//   alert('you clicked me');
// }

 // $('.ques_label').click(function(this){

 //    $('this').css('background-color','#00ff00');
    
 //  });


// $(document).ready(function(){
//   $('.ques_label').css('background-color','#ff0000');
//   $('.ques_label').click(function(){

//     $('this').css('background-color','#00ff00');
    
//   });
// });


</script> ";
