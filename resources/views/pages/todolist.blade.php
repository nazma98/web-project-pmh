@extends('layouts.master')
@section('content')
 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <link rel="stylesheet" href="styles\styletodolist.css">

<body>
            <div class="box">
            <h1>Work On Yourself</h1>
            <p>
                No one is born perfect.Everyone has to explore themselves to know about their own personality.
                If you want to explore yourself you have to try diffenet things which you want to try.<br><br>
                
                This "To-Do-List" will help you to track yourself what are you doing. You can make some goal which you want to fulfill.You can add them by yourself and delete them by yourself,it is all upto you.<br><br>
                
                Most important thing is everyone has to work on themselves to be good at someting. Try to work on yourself to be a successful person as well as great human being,most importantly a happy soul.
            </p>
        </div>

    <div class="container">
        <div class="addTask">
            <input type="text" placeholder="Add a Task" >
            <button>Add</button>
        </div>
        <ol class="notcompleted">
            <h3>Not Completed</h3>
        </ol>
    <ol class="completed">
          <h3>Completed</h3>
      </ol>
    </div>
    <script>
        const input=document.querySelector('input');
        const btn=document.querySelector('.addTask > button');
        
        btn.addEventListener('click',addList);
        input.addEventListener('keyup',(e)=>{
            (e.keyCode ===13 ? addList(e) :null);
        });
        
        
        function addList(e){
            const notcompleted=document.querySelector('.notcompleted');
            const completed=document.querySelector('.completed');
            const newLi=document.createElement('li');
            const checkBtn=document.createElement('button');
            const delBtn=document.createElement('button');
            checkBtn.innerHTML='<i class="fa fa-check"></i>';
            delBtn.innerHTML='<i class="fa fa-trash"></i>';
            
            if(input.value !==''){
                newLi.textContent=input.value;
                input.value= '';
                notcompleted.appendChild(newLi);
                newLi.appendChild(checkBtn);
                newLi.appendChild(delBtn);
            }
            checkBtn.addEventListener('click',function(){
                const parent=this.parentNode;
                parent.remove();
                completed.appendChild(parent);
                checkBtn.style.display='none';
            });
          delBtn.addEventListener('click',function(){
                const parent=this.parentNode;
                parent.remove();

            });
        }
    </script>
</body>
    
@endsection