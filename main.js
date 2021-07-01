//place all form values into variables
const fuelform = document.querySelector('#fuel-form');
const GallonsRequested = document.querySelector('#GallonsRequested');
document.querySelector('#DeliveryAddress').value = 'Random Address 12345'; //gets value for address from client profile
const DeliveryAddress = document.querySelector('#firstAddress');
const DeliveryDate = document.querySelector('#DeliveryDate');
document.querySelector('#SuggestedPriceperGallon').value = 2; //set placeholder price per gallon, since we aren't calculating
                                                              //price module yet
const SuggestedPriceperGallon = document.querySelector('#SuggestedPriceperGallon');
const table = document.getElementById('fuel-history');
const msg = document.querySelector('.msg');
let requestnum = 0;

//Calculates the TotalAmountDue = GallonsRequested * SuggestedPriceperGallon upon entering info into GallonsRequested Field,
//Formula is TotalAmountDue = GallonsRequested * 2 as a placeholder for now
GallonsRequested.onkeyup = function () {
  document.querySelector('#TotalAmountDue').value = document.querySelector('#GallonsRequested').value * document.querySelector('#SuggestedPriceperGallon').value;
  const TotalAmountDue = document.querySelector('#TotalAmountDue');
}

fuelform.addEventListener('submit', Submit); //create an eventListener to perform an action upon clicking submit
function Submit(s) {
  s.preventDefault();
  //if all fields not filled, display error message
  if (GallonsRequested.value === '' || DeliveryAddress.value === '') {
    msg.classList.add('error'); //creates a class called error, mostly for css styling an error message
    msg.innerHTML = 'Please enter all fields';

    setTimeout(()=> msg.remove(), 3000);
  }
  //everything filled out, log the history of previous fuel quotes and add to the table
  else {
    let row = table.insertRow(1);
    let cell1 = row.insertCell(0)
    let cell2 = row.insertCell(1);
    let cell3 = row.insertCell(2);
    let cell4 = row.insertCell(3);
    let cell5 = row.insertCell(4);
    let cell6 = row.insertCell(5);
    cell1.innerHTML = requestnum++;
    cell2.innerHTML = GallonsRequested.value;
    cell3.innerHTML = DeliveryAddress.value;
    cell4.innerHTML = DeliveryDate.value;
    cell5.innerHTML = SuggestedPriceperGallon.value;
    cell6.innerHTML = TotalAmountDue.value;
  }
}
