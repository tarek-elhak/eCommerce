import {country_currency_codes} from "./country-currency-list";
import {countryList} from "./country_list";
import {status_list} from "./status_list";

const currencyOptionsContainer = document.querySelector("#currency__list");
const countryOptionsContainer = document.querySelector("#country__list");
const statusOptionsContainer = document.querySelector("#status__list");
const categoryOptionsContainer = document.querySelector("#category__list");



// start of currency select options
// Toggle the List
const currencySelected = document.querySelector("#currency__list + .selected")
currencySelected.addEventListener("click" , ()=>{
    currencyOptionsContainer.classList.toggle("active")
});
// place the options in the div wrapper
const currencyOptionsWrapper = document.createElement("div");
for (let currency_code in country_currency_codes){
    const option =
        `<label class="option bg-indigo-200 flex items-center hover:bg-indigo-400" for="${currency_code}">
        <img
            src="https://flagcdn.com/16x12/${country_currency_codes[currency_code].toLowerCase()}.png"
            alt="${currency_code}"
            class="mr-2"
        />
        <div class="currency__code">${currency_code}</div>
        <input type="radio" class="radio" id="${currency_code}" name="currency" value="${currency_code}">
</label>`
    currencyOptionsWrapper.insertAdjacentHTML("beforeend" , option);
}
// insert the options in the options container
currencyOptionsContainer.appendChild(currencyOptionsWrapper);
// get the options
const currencyOptions = document.querySelectorAll("#currency__list .option");
currencyOptions.forEach(option=> option.addEventListener("click",currencyOptionHandler));
// handler for currency option list
function currencyOptionHandler(e)
{
    currencySelected.textContent = e.currentTarget.querySelector("#currency__list .currency__code").textContent;
    currencyOptionsContainer.classList.remove("active");
}
// end of currency select options
/***************************************************************************************/
// start of country select options

// toggle the list
const countrySelected = document.querySelector("#country__list + .selected")
countrySelected.addEventListener("click" , ()=>{
    countryOptionsContainer.classList.toggle("active")
});
const countryOptionsWrapper = document.createElement("div");
// place the options in the div wrapper
for (let country in countryList){
    const option =
        `<label class="option bg-indigo-200 flex items-center hover:bg-indigo-400" for="${countryList[country]}">
            <div class="country__name">${countryList[country]}</div>
            <input type="radio" class="radio" id="${countryList[country]}" name="made_country" value="${countryList[country]}">
        </label>`
    countryOptionsWrapper.insertAdjacentHTML("beforeend" , option);
}
// insert the options in the options' container
countryOptionsContainer.appendChild(countryOptionsWrapper);
// get the options
const countryOptions = document.querySelectorAll("#country__list .option");
countryOptions.forEach(option=> option.addEventListener("click",countryOptionHandler));
    // handler for currency option list
function countryOptionHandler(e)
{
    countrySelected.textContent = e.currentTarget.querySelector("#country__list .country__name").textContent;
    countryOptionsContainer.classList.remove("active");
}
/*******************************************************************************************/

// start status select box

// toggle the list
const statusSelected = document.querySelector("#status__list + .selected")
statusSelected.addEventListener("click" , ()=>{
    statusOptionsContainer.classList.toggle("active")
});
const statusOptionsWrapper = document.createElement("div");
// place the options in the div wrapper
for (let status in status_list){
    const option =
        `<label class="option bg-indigo-200 flex items-center hover:bg-indigo-400" for="${status_list[status]}">
            <div class="status__name">${status_list[status]}</div>
            <input type="radio" class="radio" id="${status_list[status]}" name="status" value="${status_list[status]}">
        </label>`
    statusOptionsWrapper.insertAdjacentHTML("beforeend" , option);
}
// insert the options in the options' container
statusOptionsContainer.appendChild(statusOptionsWrapper);
// get the options
const statusOptions = document.querySelectorAll("#status__list .option");
statusOptions.forEach(option=> option.addEventListener("click",statusOptionHandler));
// handler for currency option list
function statusOptionHandler(e)
{
    statusSelected.textContent = e.currentTarget.querySelector("#status__list .status__name").textContent;
    statusOptionsContainer.classList.remove("active");
}
/**********************************************************************************************************/

// start of category select options
// toggle the list
const categorySelected = document.querySelector("#category__list + .selected")
categorySelected.addEventListener("click" , ()=>{
    categoryOptionsContainer.classList.toggle("active")
});
const categoryOptions = document.querySelectorAll("#category__list .option");
categoryOptions.forEach(option=> option.addEventListener("click",categoryOptionHandler));
// handler for currency option list
function categoryOptionHandler(e)
{
    categorySelected.textContent = e.currentTarget.querySelector("#category__list .category__name").textContent;
    categoryOptionsContainer.classList.remove("active");
}
// end of category select options

