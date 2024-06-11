/* 
document.getElementById("inText").addEventListener("click",function(){
    this.placeholder = "";
});
*/


var inText = document.querySelectorAll("#inText");
console.log(inText);
inText.forEach(element=>{
    element.addEventListener("click",function(){
        this.placeholder="";
    });
});

