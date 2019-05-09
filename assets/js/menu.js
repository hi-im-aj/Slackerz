let CW_btn = document.querySelector("#CW_btn");
let CW_modal = document.querySelector("#CW_modal");
let CW_exit = document.querySelector("#CW_exit");

CW_btn.addEventListener("click", function(){
	CW_modal.style.display = "block";
});
CW_exit.addEventListener("click", function(){
	CW_modal.style.display = "none";
});