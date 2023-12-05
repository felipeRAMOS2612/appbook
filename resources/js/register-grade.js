var step1 = document.getElementById("step1");
    var step2 = document.getElementById("step2");
    var step3 = document.getElementById("step3");
 
    var Next1 = document.getElementById("Next1");
    var Next2 = document.getElementById("Next2");
    var Previous1 = document.getElementById("Previous1");
    var Previous2 = document.getElementById("Previous2");
 
    Next1.onclick = function(){
       step1.style.top = "-500px";
       step2.style.top = "100px";
       progress.style.width = "70%";
    }
    Previous1.onclick = function(){
       step1.style.top = "100px";
       step2.style.top = "500px";
       progress.style.width = "40%";
    }
    Next2.onclick = function(){
       step2.style.top = "-500px";
       step3.style.top = "100px";
       progress.style.width = "100%";
    }
    Previous2.onclick = function(){
       step2.style.top = "100px";
       step3.style.top = "500px";
       progress.style.width = "70%";
    }