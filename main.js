const fuelform = document.querySelector('#fuel-form');
const GallonsRequested = document.querySelector('#GallonsRequested');
const DeliveryAddress = document.querySelector('#DeliveryAddress');
const DeliveryDate = document.querySelector('#DeliveryDate');
const SuggestedPriceperGallon = document.querySelector('#SuggestedPriceperGallon');
const TotalAmountDue = document.querySelector('#TotalAmountDue');
const table = document.getElementById('fuel-history');
const msg = document.querySelector('.msg');
let requestnum = 0;

fuelform.addEventListener('submit', Submit);
function Submit(s) {
  s.preventDefault();
  if (GallonsRequested.value === '') {
    msg.classList.add('error');
    msg.innerHTML = 'Please enter the number of gallons requested';

    setTimeout(()=> msg.remove(), 2000);
  }
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
