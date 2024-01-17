// // script.js 
// const inputs = document.getElementById("inputs"); 

// inputs.addEventListener("input", function (e) { 
// 	const target = e.target; 
// 	const val = target.value; 

// 	if (isNaN(val)) { 
// 		target.value = ""; 
// 		return; 
// 	} 

// 	if (val != "") { 
// 		const next = target.nextElementSibling; 
// 		if (next) { 
// 			next.focus(); 
// 		} 
// 	} 
// }); 

// inputs.addEventListener("keyup", function (e) { 
// 	const target = e.target; 
// 	const key = e.key.toLowerCase(); 

// 	if (key == "backspace" || key == "delete") { 
// 		target.value = ""; 
// 		const prev = target.previousElementSibling; 
// 		if (prev) { 
// 			prev.focus(); 
// 		} 
// 		return; 
// 	} 
// });


// const inputs = document.querySelectorAll("input"),
// 	  button = document.getElementById("submit-btn");

// inputs.forEach((input, index1) => {
// 	input.addEventListener("keyup", (e) => {
// 		const currentInput = input,
// 			nextInput = input.nextElementSibling,
// 			prevInput = input.previousElementSibling;

// 		if (currentInput.value.length > 1){
// 			currentInput.value = "";
// 			return;
// 		}

// 		if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== ""){
// 			nextInput.removeAttribute("disabled");
// 			nextInput.focus();
// 		}

// 		if(e.key === "Backspace" || e.key === "Delete"){
// 			inputs.forEach((input, index2) => {
// 				if(index1 <= index2 && prevInput){
// 					input.setAttribute("disabled", true);
// 					input.value = "";
// 					prevInput.focus();
// 					prevInput.value = "";
// 				}
// 			});
// 		}


// 		if(!inputs[5].disabled && inputs[5].value !== ""){
// 			button.classList.add("active");
// 			return;
// 		}

// 		button.classList.remove("active");
// 	});
// });

// window.addEventListener("load", () => inputs[0].focus());

const input = document.querySelectorAll(".input");
const inputField = document.querySelector(".inputs");
const submitButton = document.getElementById("submit-btn");

let inputCount = 0,
	finalInput = "";

const updateInputConfig = (element, disabledStatus) => {
	element.disabled = disabledStatus;

	if(!disabledStatus){
		element.focus();
	} else {
		element.blur();
	}
};

input.forEach((element) => {
	element.addEventListener("keyup", (e) => {
		e.target.value = e.target.value.replace(/[^0-9]/g, "");
		let { value } = e.target;

		if (value.length == 1){
			updateInputConfig(e.target, true);
			if(inputCount <= 5 && e.key != "Backspace") {
				finalInput += value;
				if(inputCount < 5) {
					updateInputConfig(e.target.nextElementSibling, false);
				}
			}
			inputCount += 1;
		} else if(value.length == 0 && e.key == "Backspace") {
			finalInput = finalInput.substring(0, finalInput.length - 1);
			if(inputCount == 0) {
				updateInputConfig(e.target, false);
				return false;
			}
			updateInputConfig(e.target, true);
			e.target.previousElementSibling.value = "";

			updateInputConfig(e.target.previousElementSibling, false);
			inputCount -= 1;
		} else if(value.length > 1){
			e.target.value = value.split("")[0];
		} 
		submitButton.classList.add("hide");
	});
});

window.addEventListener("keyup", (e) => {
	if(inputCount > 5){
		submitButton.classList.remove("hide");
		submitButton.classList.add("show");
		if(e.key == "Backspace"){
			finalInput = finalInput.substring(0, finalInput.length - 1);

			updateInputConfig(inputField.lastElementChild, false);

			inputField.lastElementChild.value = "";
			inputCount -= 1;
			submitButton.classList.add("hide");
		}
	}
});

const validateOTP = () => {
	alert("Success");
}

const startInput = () => {
	inputCount = 0;
	finalInput = "";
	input.forEach((element) => {
		element.value = "";
	});

	updateInputConfig(inputField.firstElementChild, false);
};

window.addEventListener("load", () => input[0].focus());