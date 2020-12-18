let btn = document.getElementById("btn");

btn.addEventListener('click',function(){
  let table = document.getElementById("targetTable")
  let newRow = table.insertRow();
  newRow.style.height = '50px';
  newRow.style.collapse = 'blue';
});