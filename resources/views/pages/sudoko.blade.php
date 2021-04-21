
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Recursive&family=Red+Rose&family=Sriracha&family=Ubuntu&family=Poppins&family=Raleway&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/stylesudoko.css">
    <title>followyourdreams</title>
</head>
<body class="flex-row">
    

    <div id="main__container">
        <div id="header__controls" class="flex-row">
            <span id="header__menu"><img src="images/3dots.svg" id="dotMenuSpan" ></span>
            <Span id="header__header">SUDOKU</Span>
            <span id="header__submit"><span>Submit</span ></span>
        </div>
        <div id="dotMenu">
            <div id="back" class="flex-row" style="justify-content: space-evenly;"><img src="images/home.svg" alt=""> Home</div>
            <div id="newGame">New Game</div>
            <div id="clear">Clear All</div>
            <div id="solver"> <span id="text"></span>
                <div id="solverMenu">
                    <div id="solverStart">Start</div>
                    <div id="solverWatch"> 
                        <input type="checkbox" id="solverWatchCbox" name="solverWatchCbox" value="watch" checked>
                        <label for="solverWatchCbox">Watch</label>
                    </div>
                    <div id="solverSpeed">
                        <label for="speedRange">Speed</label>
                        <input type="range" name="speedRange" id="speedRange" max="250" min="50" value="100">
                    </div>
                    <div id="solverStop">Stop</div>
                </div>

            </div>
        </div>
        
        <!-- board -->
        <div id="board">

        </div>
        <div id="keypad" class="flex-row">
        </div>

    </div>

    <!-- home page with menu options -->
    <div id="home">
        <div id="header">
            <div id="title">SUDOKU</div>
            <p style="font-size:18px">The Game Is Made By STEVE</p>

            <div id="selection__size" class="selection flex-row">
                <span class="title">Size</span>
                <div class="options flex-row">
                    <span data-size="4"><svg width="24" height="24" viewBox="0 0 1792 1792"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path
                                d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z" />
                            </svg></span>
                    <span data-size="9"><svg width="24" height="24" viewBox="0 0 1792 1792"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path
                                d="M512 1248v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm-640-1024v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm-640-1024v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68z" />
                            </svg></span>
                </div>
            </div>

            <div id="selection__level" class="selection flex-row">
                <span class="title">Level</span>
                <div class="options">
                    <Span data-level=0>Easy</Span>
                    <Span data-level=1>Maybe</Span>
                    <Span data-level=2>Evil</Span>
                </div>
            </div>
            <div id="start">start</div>
        </div>
    </div>


    <script>
        let setLimits;
let boardSize = 4;
let level = 2; // 0 = Easy, 1 = Hard, 2 = Evil
let board, boxSize, isBoardValidate, solvedBoard, digger, questionBoard;
let view, dotMenuButton,solverMenu,dotMenuDiv;
let solver, solverStartButton,speedRangeButton, solverStopButton ,solverWatchButton;


//get set limits. for eg. for grid size: 4, set limits are [[0,1],[2,3]]
function getSetLimits(size) {
    setLimits = []
    let boxSize = parseInt(Math.sqrt(size))
    let arr = []
    for (let i = 0; i < size; i++) {
        arr.push(i)
        if ((i + 1) % boxSize == 0 && i != 0) {
            setLimits.push(arr);
            arr = []
        }
    }
    return setLimits;
}



function random(max, min = 0) {
    return Math.floor(Math.random() * (max - min + 1) + min)
}


// we have row, columns and boxes in a sudoku
//accessing rows is pretty simple. 
//the below function returns a 2D array with
//box values inside a single row
function generateBoxArray(board, boardSize) {
    // generate a table, but each row contains values of a box
    let boxSize = parseInt(Math.sqrt(boardSize))
    let boxes = Array.from(Array(boardSize), () => new Array());
    for (let i = 0; i < board.length; i++) {
        for (let j = 0; j < board.length; j++) {
            let row = parseInt(i / boxSize)
            let col = parseInt(j / boxSize)
            let box = col + row * boxSize;
            boxes[box].push(board[i][j])
        }
    }
    return boxes
}

function getBoxNumber(row, col, boxSize) {
    let x = parseInt(row / boxSize)
    let y = parseInt(col / boxSize)
    return (y + x * boxSize);
}

//returns the column array of a board
function generateColumnArray(board) {
    let boardSize = board.length;
    let colArray = Array.from(Array(boardSize), () => new Array());

    for (let col = 0; col < boardSize; col++) {
        for (let row = 0; row < boardSize; row++) {
            colArray[col][row] = board[row][col]
        }
    }

    return colArray;
}

function removeInArrayValue(arr, val){
    let idx = arr.indexOf(val);
    if(idx >= 0){
        arr.splice(idx,1)
        return true;
    } else{
        return false;
    }
}

//return the tranposed values of the board, and 'which' has 2 values: position or values
function transposeBoard(board, boardSize, which) {
    let board_inv = Array.from(Array(boardSize), () => new Array(boardSize).fill(0));
    for (let i = 0; i < board.length; i++) {
        for (let j = 0; j < board.length; j++) {
            if (which == 'values') {
                board_inv[j][i] = board[i][j]
            } else if (which == 'positions') {
                board_inv[j][i] = [i, j]
            }
        }
    }

    return board_inv
}


//return copy of a given board
//?because somehow, iam not able to acheive the same in script.js
//?everytime i try to copy, its making a reference copy and not value copy
function copyBoard(board) {
    let copyOfBoard = Array.from(Array(board.length), () => new Array(board.length).fill(0))
    for (let i = 0; i < board.length; i++) {
        for (let j = 0; j < board.length; j++) {
            copyOfBoard[i][j] = board[i][j]
        }
    }
    return copyOfBoard;
}


//########################## sleep
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {
    console.log('Taking a break...');
    await sleep(2000);
    console.log('Two seconds later, showing sleep in a loop...');

    // Sleep in loop
    for (let i = 0; i < 5; i++) {
        if (i === 3)
            await sleep(2000);
        console.log(i);
    }
}</script>
    <script>class Combinations {
    board;
    boardSize;
    boxSize;

    constructor(_board, _boardSize, _boxSize) {
        this.board = _board
        this.boardSize = _boardSize
        this.boxSize = _boxSize
    }

    //*board manipulation to increse complexity
    runCombinations() {
        let funcs = [this.rowShifter, this.columnShifter, this.valueShifter]
        let combs = random(this.boardSize, this.boxSize) * 2
        while (combs > 0) {
            let randFunc = random(funcs.length - 1)
            let val1, val2;

            //Value Shifter
            if (randFunc == 2) {
                val1 = random(this.boardSize, 1)
                val2 = random(this.boardSize, 1)
                while (val1 == val2) {
                    val2 = random(this.boardSize, 1)
                }
            }

            //Column shifter
            if(randFunc == 1 || randFunc == 0){
                let limits = getSetLimits(this.boardSize)
                let randomSet = random(limits.length-1)
                
                val1 = random(limits[randomSet].length - 1)
                val2 = random(limits[randomSet].length - 1)
                while (val1 == val2) {
                    val2 = random(limits[randomSet].length - 1)
                }
                val1 = limits[randomSet][val1]
                val2 = limits[randomSet][val2]
            }

            //? console.log(`going to perform: ${funcs[randFunc].name} with values ${val1} and ${val2}`);
            //call the random selected function with val1 & val2
            funcs[randFunc](val1, val2, this.board)

            combs--;
        }
    }

    columnShifter(col1, col2, board) {
        for (let i = 0; i < board.length; i++) {
            let temp = board[i][col1]
            board[i][col1] = board[i][col2]
            board[i][col2] = temp
        }
    }

    rowShifter(row1, row2, board) {
        let temp = board[row1]
        board[row1] = board[row2]
        board[row2] = temp
    }

    valueShifter(val1, val2, board) {
        for (let i = 0; i < board.length; i++) {
            for (let j = 0; j < board.length; j++) {
                if (board[i][j] == val1) {
                    board[i][j] = val2
                } else if (board[i][j] == val2) {
                    board[i][j] = val1
                }
            }
        }
    }

    
}</script>
    <script>class Validate {
    board;
    boardSize;
    sumTarget;
    boxArray_fromBoard;

    constructor(_board, _boardSize) {
        this.board = _board;
        this.boardSize = _boardSize;
        this.sumTarget = parseInt(this.boardSize * (this.boardSize + 1) / 2)
    }

    runTests() {        
        return this.columnSums__validation() && this.rowSums_validation() && this.box_validation()
    }

    columnSums__validation() {
        let isValid = true;
        for (let i = 0; i < this.board.length; i++) {
            let sum = 0;
            for (let j = 0; j < this.board.length; j++) {
                sum += this.board[j][i]
            }
            if (sum != this.sumTarget) {
                isValid = false;
                return isValid;
            }
        }

        return isValid;
    }

    rowSums_validation() {
        let isValid = true
        this.board.forEach(x => {
            if (x.reduce((a, b) => a + b, 0) != this.sumTarget) {
                isValid = false
            }
        });
        return isValid
    }


    

    box_validation() {
        this.boxArray_fromBoard = generateBoxArray(this.board, this.boardSize)
        let isValid = true
        this.boxArray_fromBoard.forEach(x => {
            isValid = this.unique(x)
        });

        return isValid;
    }

    unique(array) {
        
        let x = array;
        x.sort()
        x = [...new Set(x)]
        let sum = x.reduce((a, b) => a + b, 0);
        if (sum != this.sumTarget || x.length != this.boardSize) {
            return false
        }
        return true;
    }

    //TODO rowUnique_validation
    //TODO columnUnique_validation
}</script>
    <script>class Board {
    board;
    boardSize;
    boxSize;
    boardValues;

    constructor(_boardSize) {
        this.boardSize = _boardSize;
        this.boxSize = parseInt(Math.sqrt(_boardSize))
        this.board = Array.from(Array(this.boardSize), () => new Array(this.boardSize).fill(0));
        this.boardValues = Array.from(Array(this.boardSize), () => new Array(this.boardSize).fill(0));
        
    }

    getBoard(){
        let newBoard = [...this.board]
        console.table(newBoard);
        return [...newBoard];
    }

    createBoard() {  
        //basic board is created here by shifting              
        this.board[0] = this.randomArray(this.boardSize)        
        for (let i = 2; i <= this.boardSize; i++) {
            //if the row is in a new set then shift by boxSize + 1
            let shiftSize = (i - 1) % this.boxSize == 0 ? this.boxSize + 1 : this.boxSize;
            this.board[i-1] = this.shiftSequence(this.board[i-2],shiftSize)            
        }

        //board is ran through combinations for removing obviousness                  
        return this.combinations() 
    }

    validate(){
        let validation = new Validate(this.board, this.boardSize);
        return validation.runTests()
    }

    random(max, min = 0) {
        return Math.floor(Math.random() * (max - min + 1) + min)
    }


    randomArray(length, starting = 1) {
        //returns a array with random values 
        let sequence = Array.from({
            length: length
        }, (val, idx) => idx + starting)
        let temp;
        for (let i = 0; i < sequence.length; i++) {
            let randomNumber = this.random(length - 1)
            temp = sequence[i]
            sequence[i] = sequence[randomNumber]
            sequence[randomNumber] = temp
        }

        return sequence
    }

    shiftSequence(sequence, pos) {
        let newSeq = [...sequence]
        let part1 = newSeq.splice(0, pos)
        newSeq.push(...part1)
        return newSeq
    }

    combinations(){
        let combination = new Combinations(this.board, this.boardSize, this.boxSize)
        combination.runCombinations()
        return this.validate();
    }

}</script>
    <script>class View{

    createBoardHTML(size){
        this.changeGridCSS(size)  

        //board
        let boardElement = document.querySelector('#board')
        let html = '';
        for(let i=0;i<size;i++){
            for(let j=0;j<size;j++){
                let id = String(i) + String(j);
                
                let setSize = parseInt(Math.sqrt(size));
                let set__row = (i+1)%(setSize) == 0  ? "set__row" : "";
                let set__col = (j+1)%(setSize) == 0  ? "set__col" : "";                             

                let item = `<div id='${id}' data-row='${i}' class="grid__item flex-col ${set__row} ${set__col}">${j+1}</div>`
                html += item;
            }
        }

        boardElement.innerHTML = html;

        //keypad
        let keypad = document.querySelector('#keypad')
        html = ''
        for(let i=0;i<size;i++){
            html += `<span class="flex-col keypad__item">${i+1}</span>`
        }
        html+=`<span class="flex-col keypad__item"><img src="images/trash-o.svg" alt=""></span>`;        
        keypad.innerHTML = html;        
    }

    printBoard(board){
        
        let size = board.length;
        for(let i=0;i<size;i++){
            for(let j=0; j<size;j++){
                let element = document.getElementById(`${i}${j}`);
                
                element.textContent = board[i][j] > 0 ? board[i][j] : " ";
                let given = board[i][j] > 0 ? "given " : "emptyItem ";
                
                element.classList.add(given.replace(" ",''))
                
            }
        }
    }

    changeGridCSS(size){
        let temp = "auto ".repeat(size)
        let boardElement = document.querySelector('#board')
        boardElement.style.gridTemplateColumns = temp
        boardElement.style.gridTemplateRows = temp
        boardElement.style.fontSize = size == 4 ? "2.25rem" : "1rem";
    }
}</script>
    <script >class Digger {
    level
    holesCount;
    board;
    board_transpose;
    boardSize;
    LevelSelector;
    levels = [
        [
            [4, 6],
            [8, 9],
            [10, 11]
        ],
        [
            [32, 45],
            [46, 49],
            [54, 59]
        ]
    ];
    rowColumn_MinCount = [
        [
            [2],
            [1],
            [1]
        ],
        [
            [4, 8],
            [3, 6],
            [1, 4]
        ]
    ];

    constructor(_level, _board, _boardSize) {
        this.level = _level
        this.board = _board;
        this.boardSize = _boardSize;
        this.LevelSelector = _boardSize == 9 ? 1 : 0;
        this.holesCount = this.random(this.levels[this.LevelSelector][_level][1], this.levels[this.LevelSelector][_level][0])        
        this.digChooser(this.holesCount)
    }

    digChooser(howMany){
        let partition1 = random(howMany - 1) + 1;
        partition1 += ( parseInt(partition1%2) )
        let partition2 = howMany - partition1;        
        this.symmetricalDig(partition1)
        this.randomDig(partition2)
    }

    random(max, min = 0) {
        return Math.floor(Math.random() * (max - min + 1) + min)
    }

    randomDig(howMany){
        let copyOfBoard = copyBoard(this.board)
        let copyOfHowMany = howMany;

        while (howMany > 0) {
            let availabaleArray = this.availableCells();            
            //if no cells available for digging, copy board and holesCount and start again
            if(availabaleArray.length < 1){                
                howMany = copyOfHowMany
                this.board = copyOfBoard
                copyOfBoard = copyBoard(this.board)                                
            }else{
                let randomCell = availabaleArray[this.random(availabaleArray.length - 1)]            
                this.board[randomCell[0]][randomCell[1]] = 0;
                howMany--;
            }            
        }        
    }

    

    symmetricalDig(howMany) {
        let copyOfBoard = copyBoard(this.board)
        let copyOfHowMany = howMany;

        while(howMany > 0){
            let availabaleArray = this.availableCells();
            
            //if no items avaialble for diggin, start over
            if(availabaleArray.length < 1){
                howMany = copyOfHowMany
                this.board = copyBoard(copyOfBoard)
                copyOfBoard = copyBoard(this.board)
            }else{
                let randomCell = availabaleArray[random( parseInt(availabaleArray.length/2 - 1) )]            
                let row = randomCell[0]
                let col = randomCell[1]
                let row_t = (this.boardSize - 1) - row
                let col_t = (this.boardSize - 1) - col
        
                this.board[row][col] = 0;
                this.board[row_t][col_t] = 0;
        
                howMany -= 2;
            }

        }
    }

    availableCells(){
        let availableRows = [];
        let availableColumns = [];
        let availCells = []
        let min = this.rowColumn_MinCount[this.LevelSelector][this.level][0];    

        //availabale rows
        this.board.forEach((x, idx) => {
          let rowValuesSum =  x.filter(y => y > 0)
          if(rowValuesSum.length > min ) availableRows.push(idx)
        })

        for(let col = 0; col < this.boardSize; col++){
            let colValuesSum = 0
            for(let row=0; row< this.boardSize; row++){
                colValuesSum += (this.board[row][col] > 0)
            }
            if(colValuesSum > min) availableColumns.push(col)
        }

        // console.log(this.board);
        // console.log('availableRows: ', availableRows);
        // console.log('availableColumns: ', availableColumns);

        for(let row = 0 ;row < availableRows.length; row++){
            for(let col =0; col < availableColumns.length; col ++){
                let x = availableRows[row];
                let y = availableColumns[col]

                if(this.board[x][y] > 0){
                    availCells.push([x,y]);
                }
            }
        }

        return availCells
    }


    //this function is no more in use and is replaced by the above function
    randomDig1(howMany) {
        let availableRows = Array.from({length: this.boardSize}, (val, idx) => idx)
        let availableColumns = Array.from({length: this.boardSize}, (val, idx) => idx)        
        let min = this.rowColumn_MinCount[this.LevelSelector][this.level][0];        

        while (howMany > 0) {
            this.availableCells()
            let row = availableRows[this.random(availableRows.length - 1)]
            let col = availableColumns[this.random(availableColumns.length - 1)]

            //row min checker
            let rowMinCount = this.board[row].filter(x => x > 0);
            //col min checker
            let colMinCount = 0;
            for (let i = 0; i < this.boardSize; i++) colMinCount += (this.board[i][col] > 0);
        
            while (rowMinCount.length == min || colMinCount == min) {
                if(rowMinCount.length == min) availableRows.splice(row, 1)
                if(colMinCount == min) availableColumns.splice(col, 1)
                if(availableColumns.length <1 || availableRows.length < 1 ){
                    console.log('available columns or available rows exhausted');
                    break;
                }
                row = availableRows[this.random(availableRows.length - 1)]
                col = availableColumns[this.random(availableColumns.length - 1)]

                rowMinCount = this.board[row].filter(x => x > 0);
                colMinCount = 0;
                for (let i = 0; i < this.boardSize; i++) colMinCount += (this.board[i][col] > 0)
            }
            //col min 

            if (this.board[row][col] != 0) {
                this.board[row][col] = 0;
                howMany--;
            }

        }
    }

}</script>
    <script>let isFirstTime = true;
let isFirstTime_dotMenu = true;
let emptyItems;
let keyPadItems;
let user__level = [level, 'Evil'];
let user__size = boardSize;

function initActions() {

    if (isFirstTime) {
        let submitButton = document.querySelector('#header__submit > span')
        let body = document.querySelector('body')
        let startButton = document.querySelector('#start')
        let home__options = document.querySelectorAll('.selection .options span')

        submitButton.addEventListener('click', submitHandler)
        body.addEventListener('keyup', keyUpHandler)
        startButton.addEventListener('click', startHandler)
        home__options.forEach(x => x.addEventListener('click', homeOptionsHandler))

        isFirstTime = false;
    }

    let selection;

    function emptyItemHandler() {
        emptyItems.forEach(x => x.classList.remove('selected'))
        this.classList.add('selected')
    }

    function keyPadHandler(event) {
        event.stopPropagation()
        if (selection = document.querySelector('.selected')) {
            selection.textContent = this.textContent;
            let x = selection.id[0];
            let y = selection.id[1];
            board.board[x][y] = this.textContent == "" ? 0 : parseInt(this.textContent)
        }
    }

    function submitHandler(event) {
        event.stopPropagation();
        let validater = new Validate(board.board, boardSize)
        let isValid = validater.runTests();
        if (isValid) {
            alert("You've Solved this. Awesome!!!")
        } else {
            alert("That's not correct. Keep trying.")
        }
    }

    function dotMenuHandler(e) {
        e.stopPropagation()
        dotMenuDiv = document.querySelector('#dotMenu')
        dotMenuDiv.classList.add('d-block')

        if (isFirstTime_dotMenu) {
            isFirstTime_dotMenu = false;

            //solver handlers
            solverStartButton.addEventListener('click', () => solverStartHandler())
            speedRangeButton.addEventListener('click', (event) => speedRangeHandler(event))
            solverStopButton.addEventListener('click', ()=> {
                dotMenuDiv.classList.remove('d-block');
                solver.requestStop = true;
            })

            //page reloadon clear ALl
            document.querySelector('#back').addEventListener('click', (event) => {
                event.stopPropagation()
                window.location.reload()
            })

            //clear user input
            document.querySelector('#clear').addEventListener('click', (event) => {
                event.stopPropagation()
                clearUserInput()
                dotMenuDiv.classList.remove('d-block')
            })

            //load new game, with same user inputs
            document.querySelector('#newGame').addEventListener('click', (event) => {
                event.stopPropagation()
                dotMenuDiv.classList.remove('d-block')
                startHandler()
            })

            document.querySelector('#solver').addEventListener('click', (event) => {
                event.stopPropagation()                
                solverMenu.classList.toggle('d-block')
            })
            
            //hide menu when clicking on div
            document.querySelector('body').addEventListener('click', () => {                
                dotMenuDiv.classList.remove('d-block')
                solverMenu.classList.remove('d-block')
            })
        }

    }

    function keyUpHandler(event) {
        if (selection = document.querySelector('.selected')) {
            let k = event.keyCode;
            if (((k < 46 || k > 57) && (k < 96 || k > 105)) || k == 47) {
                //not a number        
            } else {
                selection.textContent = event.keyCode == 46 ? "" : event.key;
                let x = selection.id[0];
                let y = selection.id[1];
                board.board[x][y] = event.keyCode == 46 ? 0 : parseInt(event.key)
            }
        }

    }

    //starts here: after user clicks on start game button
    function startHandler() {
        let home = document.querySelector('#home')
        let main__container = document.querySelector('#main__container')
        home.style.display = "none";
        main__container.style.display = "block";
        newGame(user__size, user__level[0])
        declareBoardElements()
    }

    function homeOptionsHandler(event) {
        event.stopPropagation()
        let remaining = this.parentNode;
        remaining = remaining.querySelectorAll('span');
        if (this.parentNode.parentNode.id == "selection__level") {
            remaining.forEach(x => {
                x.style.background = "none"
                x.style.color = "black"
            })
            this.style.color = "white";
            this.style.background = "#0097e6";
            user__level[0] = parseInt(this.dataset["level"])
            user__level[1] = this.textContent;

        } else if (this.parentNode.parentNode.id == "selection__size") {
            remaining.forEach(x => x.style.color = "black")
            this.style.color = "#0097e6";
            user__size = parseInt(this.dataset["size"])
        }
    }

    function solverStartHandler() {     
        dotMenuDiv.classList.remove('d-block')   
        solver = new Solver(board.board)
        solver.watch = solverWatchButton.checked;
        solver.requestStop = false;
        solver.speed = 250 - parseInt(speedRangeButton.value) + 50;
        solver.startSolving()
    }

    function speedRangeHandler(event){
        event.stopPropagation();
        
    }

    function declareBoardElements() {
        emptyItems = document.querySelectorAll('.emptyItem')
        keyPadItems = document.querySelectorAll('.keypad__item')
        dotMenuButton = document.querySelector('#dotMenuSpan')
        solverMenu = document.querySelector('#solverMenu')
        solverStartButton = document.querySelector('#solverStart')
        solverWatchButton = document.querySelector('#solverWatchCbox')
        solverStopButton = document.querySelector('#solverStop')
        speedRangeButton = document.querySelector('#speedRange')

        emptyItems.forEach(x => x.addEventListener('click', emptyItemHandler))
        keyPadItems.forEach(x => x.addEventListener('click', keyPadHandler))
        dotMenuButton.addEventListener('click', (e) => dotMenuHandler(e))        
    }
}</script>
    <script>class Solver {
    watch = true;
    speed = 200;
    requestStop = false;    

    board;
    originalBoard;

    boardSize;
    boxSize;

    boardRows;
    boardColumns;
    boardBoxes;

    questionsCount;
    solvedCount=0;
    isBoardSolved = false;

    emptiesObject = {};
    singlesObject = {};
    backTrackObject = {};

    constructor(_board) {
        this.board = _board;
        this.originalBoard = copyBoard(_board);

        this.boardSize = _board.length;
        this.boxSize = parseInt(Math.sqrt(this.boardSize))

        this.init3arrays()
        this.questionsCount = this.findQuestionsCount();
        this.solvedCount = 0;        
    }

    startSolving(){
        this.initEmptiesObject()
        this.singlesFinder()
        if(!this.isBoardSolved) this.backTracking()
    }

    initEmptiesObject() {
        let emptyObjectCounter = 0;
        for (let row = 0; row < boardSize; row++) {
            for (let col = 0; col < boardSize; col++) {

                if (this.board[row][col] == 0) {

                    let boxNumber = getBoxNumber(row, col, this.boxSize);
                    this.emptiesObject[`${emptyObjectCounter}`] = {
                        row: row,
                        col: col,
                        box: boxNumber,
                        currentValue: 0,
                        possibleValues: [],
                        possibleIdx: null,
                        isSingle: false,
                        solved: false
                    }

                    emptyObjectCounter++;
                }
            }
        }

        if (emptyObjectCounter != this.questionsCount) {
            console.log("Error in intEmptiesObject: questionsCount and empty object count doesn't match");
        }
    }


    //################################ Singles Finder START

    // the below function is not being used and is replaced by singlesFinder
    createSinglesObject() {
        let singlesCounter = 0;

        for (let idx = 0; idx < Object.keys(this.emptiesObject).length; idx++) {

            let obj = this.emptiesObject[idx];
            let isSingleFilled = this.findSinglesFromObject(obj);
            if (isSingleFilled > 0) {
                this.singlesObject[singlesCounter] = obj;
                singlesCounter++
            }
        }

        // write values to board
        if (singlesCounter > 0) {
            this.solvedCount = singlesCounter;
            this.writeToBoard(this.singlesObject)
            view.printBoard(this.board)
        }

        // is board solved
        if (this.solvedCount == this.questionsCount) {
            this.isBoardSolved = true;
            console.log("Board Solved: createSinglesObject attempt 1");
        }else{
            this.singlesFinder()
        }

    }

    singlesFinder() {
        let valuesFilledCounter;

        do {
            valuesFilledCounter = 0;

            for (let idx in this.emptiesObject) {
                let obj = this.emptiesObject[idx]
                if (!obj.solved) {
                    let isSingleFilled = this.findSinglesFromObject(obj);
                    if (isSingleFilled > 0) {
                        this.singlesObject[valuesFilledCounter] = obj;
                        valuesFilledCounter++;
                    }
                }
            }


            // write values to board
            if (valuesFilledCounter > 0) {
                this.solvedCount += valuesFilledCounter;
                this.writeToBoard(this.singlesObject)
                view.printBoard(this.board)                
            }
        } while (valuesFilledCounter > 0);

        // is board solved
        if (this.solvedCount == this.questionsCount) {
            this.isBoardSolved = true;
            console.log("Singles: board solved");
            //validate the board
            let isSolutionValid = this.boardValidation()
            if(isSolutionValid) console.log('Singles: solution is a valid sudoku');
            alert('Yo!!! Board Solved')
        }
        console.log(`Singles: ${this.solvedCount} filled out of ${this.questionsCount}`);
    }

    findSinglesFromObject(obj) {
        let valueFilled = 0;
        let { row, col, box } = obj;
        let isSingle = this.checkIfSingle(row, col, box);
        if (isSingle.length == 1) {
            valueFilled = isSingle[0];

            obj.isSingle = true;
            obj.solved = true;
            obj.currentValue = isSingle[0];
        }
        obj.possibleValues = [...isSingle];
        obj.possibleIdx = 0;

        return valueFilled;
    }

    checkIfSingle(row, col, box) {
        let possible = Array.from({ length: boardSize }, (val, idx) => idx + 1)
        let rowValues = [...new Set(this.boardRows[row])]
        let colValues = [...new Set(this.boardColumns[col])]
        let boxValues = [...new Set(this.boardBoxes[box])]
        let existigValues = [...new Set(rowValues.concat(colValues).concat(boxValues))]
        removeInArrayValue(existigValues, 0);

        for (let item of existigValues) removeInArrayValue(possible, item);

        return possible;
    }

    //################################ Singles Finder END
    
    //################################ back tracking START
    async backTracking(){        

        let bTquestions = this.createBackTrackingObject()
        console.log(`backTrackign: remaining empty items are: ${bTquestions}`);
        let beforeBackTrackBoard = copyBoard(this.board);

        let i = 0;
        let iterations = 0;
        while(i < bTquestions){            
            let obj = this.backTrackObject[i]                        
            let {row, col, box, possibleValues, possibleIdx} = obj;            

            let isFilled = false;
            while(possibleIdx < possibleValues.length){
                let value = possibleValues[possibleIdx]
                let isValueValid = this.checkIfValidValue(row, col, box, value)
                possibleIdx++;
                this.backTrackObject[i].possibleIdx = possibleIdx;
                if(isValueValid){
                    this.backTrackObject[i].currentValue = value   
                    isFilled = true       
                    break;
                }
            }

            //if no value filled for this 'i'
            if(!isFilled){
                if(i == 0 ){
                    console.log('backTracking: solution cannot be found');
                    return;
                }else{
                    this.backTrackObject[i].possibleIdx = 0;
                    this.backTrackObject[i].currentValue = 0;
                    i -= 2;
                }
            }
            
            this.writeToBoard(this.backTrackObject)
            view.printBoard(this.board)   
            //if user requests to stop then abort
            if(this.requestStop) return;

            // all things related to speeed and watch
            if(this.watch){
                let reduction = parseInt(iterations/100)*10
                reduction = reduction >= this.speed ? 0 : reduction;
                await sleep(this.speed - reduction )   
            }


            i++; iterations++;
        }


        // final steps
        console.log('iteration done: ', iterations);
        if(this.boardValidation()){
            console.log('backTracking Complete: board Solved');
            alert('Yo!!! Board Solved')
        }else{
            console.log('backTracking Complete: no solution found');
        }
        
    }

    checkIfValidValue(row,col,box,value){
        let isValid = true;
        let rowValues = [...new Set(this.boardRows[row])]
        let colValues = [...new Set(this.boardColumns[col])]
        let boxValues = [...new Set(this.boardBoxes[box])]
        if(rowValues.includes(value) || colValues.includes(value) || boxValues.includes(value)) isValid = false;        

        return isValid;
    }

    createBackTrackingObject(){
        let counter = 0;
        for(let idx in this.emptiesObject){
            let obj = this.emptiesObject[idx];
            if(!obj.solved){
                this.backTrackObject[counter] = obj;
                counter++;
            }
        }

        return counter;
    }
    //################################ back tracking END

    writeToBoard(_obj) {
        let objLen = Object.keys(_obj).length;
        for (let i = 0; i < objLen; i++) {
            let obj = _obj[i];
            this.board[obj.row][obj.col] = obj.currentValue;
        }
        this.init3arrays()
    }


    init3arrays() {
        this.boardRows = this.board;
        this.boardColumns = generateColumnArray(this.board)
        this.boardBoxes = generateBoxArray(this.board, this.boardSize)
    }

    findQuestionsCount() {
        return parseInt(Math.pow(this.boardSize, 2)) - this.board.reduce((a, b) => a + (b.filter(x => x > 0).length), 0)
    }

    boardValidation(){
        let resultValidator = new Validate(this.board,this.boardSize);
        return resultValidator.runTests()
    }

}</script>
    <script>window.addEventListener('load', () => {
    //program enters from this door
    initActions()    
})

function newGame(_boardSize, _level) {    
    
    boardSize = _boardSize;
    boxSize = parseInt(Math.sqrt(boardSize))
    level = _level; 


    board = new Board(boardSize);
    isBoardValidate = board.createBoard(boardSize);
    console.log('isBoardValidate', isBoardValidate)

    //dig holes
    solvedBoard = copyBoard(board.board)
    digger = new Digger(level, board.board, boardSize)
    questionBoard = copyBoard(board.board)

    //draw grid on DOM
    view = new View()
    view.createBoardHTML(boardSize)
    view.printBoard(questionBoard)

    initActions()

    //solver
    //solver = new Solver(board.board)
}

function clearUserInput(){
    board.board = copyBoard(questionBoard)
    view.printBoard(questionBoard)
}</script>
</body>
</html>
<!-- 
TODO
    1. Dot Menu: Show errors (direct errors like doubles in box, row, column)
    2. Dot Menu: Show conflicts (compare user board with solved board and highlight differences)
    3. Dot Menu: New Game with same configguration
    4. Dot Menu: remove Level notification in board and replace it with dot menu
    5. Board: Modal on completeion
    6. Board: Box min availableBoxes()


-->