const Seed = { 'EMPTY' : 1 , 'CROSS' : 2 , 'AALU' : 3 };
const GameState = { 'PLAYING' : 1, 'CROSS_WON' : 2, 'AALU_WON' : 3, 'DRAW' : 4 };
const ROW = 3 , COL = 3;
Object.freeze(Seed);
Object.freeze(GameState);
var currentRow, currentCol;
var currentPlayer, currentState;
//var mouseClicked;

var Board = [
    [ 0 , 0 , 0 ],
    [ 0 , 0 , 0 ],
    [ 0 , 0 , 0 ]
];
localStorage.setItem("BoardArray", Board);
var btnSt = document.querySelector('#buttonSt');
var btnDiplay = document.getElementById('#buttonSt');

function TicTacToeInput( a, b) {
    currentRow = a - 1;
    currentCol = b - 1;
    var ab = 'b' + a + b;
    do {

        if ( document.getElementById(ab).value == 'X' 
        || document.getElementById(ab).value == 'O'){
            break;
        }
        if(currentState != GameState.PLAYING){ break;}        
        //mouseClicked += 1;
        if ( /*mouseClicked % 2 == 0 || */ currentPlayer == Seed.AALU ) {
            document.getElementById(ab).value='O';
            Board[currentRow][currentCol] = currentPlayer;
        } else if (/* mouseClicked % 2 == 1 || */ currentPlayer == Seed.CROSS ) {
            document.getElementById(ab).value='X';
            Board[currentRow][currentCol] = currentPlayer;
        }
        localStorage.setItem("BoardArray", Board);
        BoardUpdate(currentPlayer, currentRow, currentCol);
        currentPlayer = ((currentPlayer == Seed.CROSS)  ? Seed.AALU : Seed.CROSS );
        if(currentState == GameState.CROSS_WON){
            btnSt.innerHTML = "X won! New Game";
            btnSt.style.background = '#008CBA';
        } else if (currentState == GameState.AALU_WON){
            btnSt.innerHTML = "O won! New Game";
            btnSt.style.background = '#008CBA';
        } else if (currentState ==GameState.DRAW){
            btnSt.innerHTML = "It's Draw! New Game";
            btnSt.style.background = '#f44336';
        } else if ( currentState == GameState.PLAYING){
            btnSt.innerHTML = ("Keep On");
            btnSt.style.background = '#e7e7e7';
        }
    } while ( currentState == GameState.PLAYING) ;
}
function initGame(){
    for(var i=0;i<ROW;i++){
        for(var j=0;j<COL;j++){
            Board[i][j]=Seed.EMPTY;
            var ii = i + 1, jj = j + 1;
            var bij = 'b' + ii + jj ;
            document.getElementById(bij).value = '';
        }
    }
    btnSt.innerHTML = ("Make a Move");
    btnSt.style.background = '#e7e7e7';   
    mouseClicked = 0;
    currentPlayer= Seed.CROSS;
    currentState = GameState.PLAYING;
}
function BoardUpdate(currentPlayer, currentRow, currentCol){
    if ( hasWon(currentPlayer, currentRow, currentCol) == true ){
        currentState = currentPlayer == Seed.CROSS ? GameState.CROSS_WON : GameState.AALU_WON ; 
    }
    if ( isDraw() == true ){
        currentState = GameState.DRAW ;
    }
}
function hasWon (currentPlayer, currentRow, currentCol) {
    return ( 
        Board[currentRow][0]==currentPlayer &&
        Board[currentRow][1]==currentPlayer &&
        Board[currentRow][2]==currentPlayer
        ||
        Board[0][currentCol]==currentPlayer &&
        Board[1][currentCol]==currentPlayer &&
        Board[2][currentCol]==currentPlayer
        ||
        Board[0][0]==currentPlayer &&
        Board[1][1]==currentPlayer &&
        Board[2][2]==currentPlayer 
        ||
        Board[0][2]==currentPlayer &&
        Board[1][1]==currentPlayer &&
        Board[2][0]==currentPlayer
     );
}
function isDraw (){
    for(var i=0;i<ROW;i++){
        for(var j=0;j<COL;j++){
            if(Board[i][j]==Seed.EMPTY)
                return false;
        }
    }
    return true;
}