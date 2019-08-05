<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.red{ background-color:#093; }
span{cursor: pointer;}
.space{margin-right: 10px;}
.ques_ans{ margin-right:  20px; }
.grey{ box-shadow: 2px 0px 2px 2px #ccc9c9;   }
.ques_ans{font-weight: bold;}
#jsonBtn{ width: 100%; height: 30px; }
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

  echo "<div class='question' data-ques='". $question['ques_id']. "'>";
  echo "<h3 class='quesHed'>".$question['ques_label']. " ". $question['ques_type']. " " ."</h3><br>";
    $i=1;
    foreach ($question['ques_choices'] as $newkey)
    {
      echo "<span class='space'>".$i.".</span><span class='ques_ans' data-choice='". $newkey['ch_id']. "'>" .$newkey['ch_label']."</span>";
      $i++;
    }
    
    echo "</div>";
}



  echo "<input type='button' value='submit' name='submit' id='jsonBtn' />";
echo "


<script>
$(document).ready(function()
{
  //.ques_ans is span class
  //color swaping work 

  $('.ques_ans').on('click',function()
  {
    $(this).siblings('.ques_ans').removeClass('red');
    if ($(this).hasClass('red'))
    {
        $(this).removeClass('red');
    }
    else
    {
        $(this).addClass('red');
    }
  });
// css on div 
$('.question').on('mouseover',function(){
  $(this).addClass('grey');
  $('.question').on('mouseout',function(){
   $(this).removeClass('grey');
 });
});

  //on click work

  $('#jsonBtn').on('click', function()
  {
     var finalJson=[];
      $('.question').each(function ()
       {
          var para = $(this).find('.ques_ans');

            if( para.hasClass('red'))
            {
              var jsonObj={};
              var ansId = para.attr('data-choice');
              var quesId = para.parent('.question').attr('data-ques');
              jsonObj.ques_Id = quesId;
              jsonObj.ans_Id = ansId;
              finalJson.push(jsonObj);
            }
        });
    console.log(finalJson);
   });
});


</script>

";
