    const questions = [
        {
            question: "What is the sum of 130+125+191?",
            choices: [ 335 , 456 , 446 , 426 ] ,
            correctAnswer: 'c'
        },{
            question: "If we minus 712 from 1500, how much do we get?",
            choices: [ 788 , 778 , 768 , 758 ] ,
            correctAnswer: 'a'
        },{
            question: "50 times of 8 is equal to:",
            choices: [ 80 , 400 , 800 , 4000 ],
            correctAnswer: 'b'
        },{
            question: "110 divided by 10 is:",
            choices: [ 11 , 10 , 5 , 'none' ],
            correctAnswer: 'a'
        },{
            question: "20+(90÷2) is equal to:",
            choices: [ 50 , 55 , 65 , 60],
            correctAnswer: 'c'
        },{
            question: "The product of 82 and 5 is:",
            choices: [400 , 410 , 420 ,'none' ],
            correctAnswer: 'b'
        },{
            question: "Find the missing terms in multiple of 3: 3, 6, 9, __, 15",
            choices: [ 10 , 11 , 12 , 13],
            correctAnswer: 'c'
        },{
            question: " Solve 24÷8+2.",
            choices: [ 5 , 6 , 8 , 12 ],
            correctAnswer: 'a'
        },{
            question: " Solve: 300 – (150×2)",
            choices: [ 150 , 100 , 50 , 0 ],
            correctAnswer: 'd'
        },{
            question: "The product of 121 x 0 x 200 x 25 is",
            choices: [ 1500 , 0 , 4000 ,'none' ],
            correctAnswer: 'b'
        },{
            question: "What is the next prime number after 5?",
            choices: [ 6 , 7 , 9 , 11 ],
            correctAnswer: 'b'
        }
    ];

    let questionCounter = 0;
    let selectedAnswer = [];

    // var easyLevel = [0,1,2,3];
    // var mediumLevel = [4,5,6];
    // var hardLevel = [7,8,9];

    let checkSelect;

    var quiz = document.getElementById('quiz');
    var quizHeadQues = document.getElementById('quizQuestionPart');
    var quizBodyAns = document.getElementById('quizAnswerPart');
    var nextBtn = document.getElementById('next');
    var prevBtn = document.getElementById('prev');
    var startBtn = document.getElementById('start');
    var quesIndex = document.getElementById('questionNumber');
    var quesContent = document.getElementById('questionContent');
    var aans = document.getElementById('a-ans');
    var bans = document.getElementById('b-ans');
    var cans = document.getElementById('c-ans');
    var dans = document.getElementById('d-ans');
    var scoreval = document.getElementById('scoreValue');
    var scoreSub = document.getElementById('scoreField');

    //initiate first question automatically
    resumeGame();

    // nextBtn.addEventListener("click" , function(event) {
    //     event.preventDefault();
    //     if ( isNaN ( selectedAnswer[questionCounter])){
    //         alert("seclet some ans");
    //     }else{
    //         questionCounter++;
    //         resumeGame();
    //     }
    // });

    function resumeGame(){
        if( questionCounter < questions.length ) {
            let nextQuestion = createNormalQuestion(questionCounter);

            quiz.prepend(nextQuestion);
        }
        else{
            let score = displayScore();
            quiz.append(score);
            nextBtn.style.display ='none';
            prevBtn.style.display = 'block';
            startBtn.style.display = 'block';
            //hide next and show start over
        }
        checkSelect = false;
        nextBtn.onclick=()=>{
            checkAnswer();
            // prevBtn.style.display = 'block';
            // nextBtn.classList.remove('btn-success');
            // nextBtn.classList.add('btn-primary');
            if(checkSelect){
                questionCounter++;
                resumeGame();
            }else{
                alert("please select an answer")
            }
        }
    }
    checkAnswer = () => {
        let checkAns = document.querySelectorAll("#quiz .card-body input[name='ans']");
        for (let i = 0 ; i < 4 ; i++ ) {
            if ( checkAns[i].checked === true) {
                checkSelect=true;
                selectedAnswer[questionCounter] = document.querySelectorAll("#quiz .card-body input[name='ans']")[i].defaultValue;
                break;
           }
        }
    }
    function createEasyQuestion(){
        let questionNo = easyLevel[Math.round(Math.random()*(easyLevel.length - 1))];
        quesContent.innerHTML = questions[questionNo].question;
        aans.innerHTML = questions[questionNo].choices[0];
        bans.innerHTML = questions[questionNo].choices[1];
        cans.innerHTML = questions[questionNo].choices[2];
        dans.innerHTML = questions[questionNo].choices[3];
    }
    function createMediumQuestion(){
        let questionNo = mediumLevel[Math.round(Math.random()*(mediumLevel.length - 1))];
        quesContent.innerHTML = questions[questionNo].question;
        aans.innerHTML = questions[questionNo].choices[0];
        bans.innerHTML = questions[questionNo].choices[1];
        cans.innerHTML = questions[questionNo].choices[2];
        dans.innerHTML = questions[questionNo].choices[3];
    }
    function createHardQuestion(){
        let questionNo = hardLevel[Math.round(Math.random()*(hardLevel.length - 1))];
        quesContent.innerHTML = questions[questionNo].question;
        aans.innerHTML = questions[questionNo].choices[0];
        bans.innerHTML = questions[questionNo].choices[1];
        cans.innerHTML = questions[questionNo].choices[2];
        dans.innerHTML = questions[questionNo].choices[3];
    }
    function createNormalQuestion(questionNo){
        quesIndex.innerHTML = questionNo + 1;
        quesContent.innerHTML = questions[questionNo].question;
        aans.innerHTML = questions[questionNo].choices[0];
        bans.innerHTML = questions[questionNo].choices[1];
        cans.innerHTML = questions[questionNo].choices[2];
        dans.innerHTML = questions[questionNo].choices[3];
    }
    function displayScore(){
        let numCorrect = 0;
        for (let i = 0 ; i < selectedAnswer.length ; i++ ) {
            if ( selectedAnswer[i] == questions[i].correctAnswer ) {
                numCorrect++;
            }
        }
        quizHeadQues.innerHTML = "Congratulation user";
        quizBodyAns.innerHTML = "Your Score is : ";
        scoreval.innerHTML = numCorrect;
        scoreSub.setAttribute('value', numCorrect);
    }

