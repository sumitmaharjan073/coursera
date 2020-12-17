var rowFinal, colFinal;
const Move = { 'row' : -1, 'col' : -1 };

var BoardForAi = [
    [ Seed.EMPTY , Seed.EMPTY , Seed.EMPTY ],
    [ Seed.EMPTY , Seed.EMPTY , Seed.EMPTY ],
    [ Seed.EMPTY , Seed.EMPTY , Seed.EMPTY ]
];
var test = [
    [Seed.AALU,Seed.CROSS,Seed.AALU],
    [Seed.EMPTY,Seed.CROSS,Seed.AALU],
    [Seed.CROSS,Seed.CROSS,Seed.CROSS]
];

function TicTacToePrint(){
    var boardvalue = localStorage.getItem("BoardArray");
    var indexTest = 0;
    for(var i = 0 ; i < 3 ; i++){
        for( var j = 0 ; j < 3 ; j++){
            BoardForAi[i][j] = parseInt(boardvalue[indexTest]) ;
            indexTest = indexTest + 2;
        }
    }
    //console.table(BoardForAi);
    var returnMove = findBestMove(BoardForAi);
    rowFinal = returnMove[0] + 1 ;
    colFinal = returnMove[1] + 1 ;
    //console.log( "after the final move the col and row they are " + rowFinal + " " + colFinal );
    TicTacToeInput( rowFinal, colFinal ) ;
}
function findBestMove(Board){
    var bestVal = -100;
    var move = [-1,-1];
    for( var i = 0 ; i < 3 ; i++) {
        for( var j = 0 ; j < 3 ; j++ ) {
            if ( Board[i][j] == Seed.EMPTY ){
                Board[i][j] = Seed.AALU;
                var moveVal = minimax( Board , 0 , false);
                Board[i][j] = Seed.EMPTY;
                if ( moveVal > bestVal ){
                    move[0] = i;
                    move[1] = j;
                    bestVal = moveVal;
                }
            }
        }
    }
    console.log(move[0] + " " + move[1]);
    return move;
}
function minimax ( b , depth , isMax ){
    //console.table(b);
    var score = evaluate(b, depth);
    //console.log("Return score : " + score );
    if ( score == 10 || ( score < 10 && score > 0 )   ) {
        return score;
    }
    if ( score == -10 || ( score > -10 && score < 0) ) {
        return score;
    }
    if ( isMoveLeft ( b ) == false ) {
        return 0;
    }
    if ( isMax == true ){
        var best = -100;
			for( var i = 0; i < 3; i++) {
				for ( var j = 0; j < 3; j++) {
					if ( b[i][j] == Seed.EMPTY) {
						b[i][j] = Seed.AALU;
						var bestVal = minimax ( b, depth + 1, false );
						best = Math.max(best, bestVal);
						b[i][j] = Seed.EMPTY;
					}
				}
			}
			return best;
    } else if ( isMax == false ) {
        var best = 100;
			for( var i = 0; i < 3; i++) {
				for ( var j = 0; j < 3; j++) {
					if ( b[i][j] == Seed.EMPTY) {
						b[i][j] = Seed.CROSS;
						var bestVal = minimax ( b, depth + 1, true );
						best = Math.min(best, bestVal);
						b[i][j] = Seed.EMPTY;
					}
				}
			}
			return best;
    }
}
function evaluate ( b , dep ) {
    for( var i = 0; i < 3; i++) {
        if( b[i][0] == b[i][1] && b[i][1] == b[i][2] ) {
            if( b[i][0] == Seed.AALU ){
                return (10 - dep);
            }
            else if( b[i][0] == Seed.CROSS ){
                return (-10 + dep);
            }
        }
    }
    for(var j= 0; j<3; j++) {
        if(b[0][j] == b[1][j] && b[1][j] == b[2][j] ) {
            if(b[0][j] == Seed.AALU ){
                return (10 - dep);
            }
            else if( b[0][j] == Seed.CROSS ){
                return (-10 + dep);
            }
        }
    }
    if( b[0][0] == b[1][1] && b[1][1] == b[2][2]) {
        if( b[0][0] == Seed.AALU ){
            return (10 - dep);
        }
        else if ( b[0][0] == Seed.CROSS ){
            return (-10 + dep);
        }
    }
    if ( b[0][2] == b[1][1] && b[1][1] == b[2][0]) {
        if ( b[0][2] == Seed.AALU){
            return (10 - dep);
        }
        else if ( b[0][2] == Seed.CROSS ){
            return (-10 + dep);
        }
    }
    return 0;
}
function isMoveLeft ( b ){
    for ( var i = 0; i<3; i++ ){
        for ( var j = 0; j < 3 ; j++){
            if ( b[i][j] == Seed.EMPTY)
            return true;
        }
    }
    return false;
}
