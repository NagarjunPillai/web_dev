var currentquestion=0;
var score=0;
var totquestions=questions.length;
var container=document.getElementById('quizcontainer');
var questionel=document.getElementById('question');
var opt1=document.getElementById('opt1');
var opt2=document.getElementById('opt2');
var opt3=document.getElementById('opt3');
var opt4=document.getElementById('opt4');
var nextbutton=document.getElementById('nextbutton');
var resultcont=document.getElementById('result');
function loadquestion(questionindex)
{
    var q=questions[questionindex];
    questionel.textContent= (questionindex + 1) + '. ' + q.question;
    opt1.textContent=q.option1; 
    opt2.textContent=q.option2;
    opt3.textContent=q.option3;
    opt4.textContent=q.option4;
    
};
function loadnextquestion()
{
    
    var selectedoption=document.querySelector('input[type=radio]:checked');
    if(!selectedoption)
        {
            alert('please select an answer');
            return;
        
        }
    var answer=selectedoption.value;
    if(questions[currentquestion].answer==answer)
        {
        score += 10;
        }
    selectedoption.checked= false;
    currentquestion++;
    if(currentquestion==totquestions - 1)
        {
            nextbutton.textContent='Finish';
        }
    if(currentquestion==totquestions)
        {   loadhomepage();
            container.style.display='none';
            resultcont.style.display='';
            resultcont.textContent='your score' + score;
            return;
        }
    loadquestion(currentquestion);
}
function loadpreviousquestion()
{    
    if(currentquestion>=1)
    {
       
    currentquestion--;
    }
  loadquestion(currentquestion);
}
function loadhomepage()
{
   var getout= confirm('Are you sure you want to submit the quiz');
   if(getout)
        window.location="generate.php/?scores="+score;   
    
}

loadquestion(currentquestion);