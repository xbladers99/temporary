{// THIS IS FOR TREE EFFECT
  var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
}

 

{//THIS IS TO ADD TOPICS
  topics=[]
function addnode(id)
{
  var select=document.getElementById("display");
  var newnode=id.innerHTML;
  
  if(topics.includes(newnode)==true)
    {
      alert("Element already present");
      return;
    }
     
  topics.push(newnode);
  
  var i;
  var str="";
  for(i=0;i<topics.length;i++){
    var str= str + topics[i];
  }
  select.innerHTML= str;
}
}
