const clearButton = document.querySelector("[data-all-clear]");
const output = document.querySelector("[data-output]");
const operationButtons = document.querySelectorAll("[data-operation]");
const equalsButton = document.querySelector("[data-equals]");

function clear() {
  output.innerText = "";
  OperationCalcul = undefined;
}

clearButton.addEventListener("click", clear);

const numberButtons = document.querySelectorAll("[data-number]");

numberButtons.forEach((button) => {
  button.addEventListener("click", () => {
    appendNumber(button.innerText);
  });
});

function appendNumber(number) {
  output.innerText += number;
}

operationButtons.forEach((button) => {
  button.addEventListener("click", () => {
    chooseOperation(button.innerText);
  });
});

function chooseOperation(operation) {
  if (
    output.innerText.includes("x") ||
    output.innerText.includes("+") ||
    output.innerText.includes("-") ||
    output.innerText.includes("÷")
  )
    return;

  OperationCalcul = operation;
  output.innerText = output.innerText.toString() + " " + operation + " ";
}

var OperationCalcul = undefined;

equalsButton.addEventListener("click", (button) => {
  calcul();
});

function calcul() {
  if (output.innerText === "") return;
  let split = output.innerHTML.split(OperationCalcul);

  let nombre1 = parseFloat(split[0]);
  let nombre2 = parseFloat(split[1]);

  if (isNaN(nombre1) || isNaN(nombre2)) return;

  let moncalcul;

  switch (OperationCalcul) {
    case "+":
      moncalcul = nombre1 + nombre2;
      break;
    case "-":
      moncalcul = nombre1 - nombre2;
      break;
    case "x":
      moncalcul = nombre1 * nombre2;
      break;
    case "÷":
      moncalcul = nombre1 / nombre2;
      break;
    default:
      return;
  }

  console.info(moncalcul);
  //console.info(split);
  //console.log(nombre1);
  //console.log(nombre2);
  //console.log(OperationCalcul);

  output.innerText = moncalcul;
  OperationCalcul = undefined;
}
