const teacher = document.querySelector('#teacher-tab');
const student = document.querySelector('#student-tab'); 

if(teacher || student){
    if(teacher){
        teacher.addEventListener('click', function(e) {
            console.log(e.target)
            localStorage.setItem('selected', 'teacher');
        })
    }
    
    if(student){
        student.addEventListener('click', function(e) {
            console.log(e.target);
            localStorage.setItem('selected', 'student');
        })
    }

    document.addEventListener('DOMContentLoaded', function(){
        if(localStorage.getItem('selected') == 'teacher'){
            if(teacher){
                teacher.setAttribute('aria-selected', 'true');
            }
        } else{
            if(student){
            student.setAttribute('aria-selected', 'true');
            }
        }
    });
}
