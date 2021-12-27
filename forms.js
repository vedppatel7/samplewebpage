const input = document.querySelectorAll("input[type=text]");
const small = document.getElementsByTagName("small")

const checkbox = document.getElementsByClassName("gridCheck");
const username = document.getElementById("name");
const contact = document.getElementById("contact");
const alternateNumber = document.getElementById("alternateNumber");
const address = document.getElementById("address");
const product = document.getElementById("product");
const modelname = document.getElementById("modelname");
const modelno = document.getElementById("modelno");
const serialno = document.getElementById("serialno");
const IMEI_1 = document.getElementById("IMEI_1");
const IMEI_2 = document.getElementById("IMEI_2");
const accessories = [];
const problem = document.getElementById("problem");
const currentStatus = document.getElementById("status");
const submitBtn = document.getElementById("submit");
const alertMsg = document.getElementById("alert");
let error = true;

username.addEventListener("blur", function (e) {

    // Validating username
    let nameRegex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
    if (nameRegex.test(username.value)) {
        username.classList.remove("is-invalid");
        username.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        username.classList.remove("is-valid");
        username.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});


contact.addEventListener("blur", function (e) {

    // Validating contact
    let contactRegex = /^([0-9]){10}$/;
    if (contactRegex.test(contact.value)) {
        contact.classList.remove("is-invalid");
        contact.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        contact.classList.remove("is-valid");
        contact.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});


alternateNumber.addEventListener("blur", function (e) {

    // Validating alternateNumber
    let alternateNumberRegex = /^([0-9]){10}$/;
    if (alternateNumberRegex.test(alternateNumber.value)) {
        alternateNumber.classList.remove("is-invalid");
        alternateNumber.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        alternateNumber.classList.remove("is-valid");
        alternateNumber.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});

address.addEventListener("blur", function (e) {

    // Validating alternateNumber
    let addressRegex = /Will see later/;
    if (addressRegex.test(address.value)) {
        address.classList.remove("is-invalid");
        address.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        address.classList.remove("is-valid");
        address.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});

modelname.addEventListener("blur", function (e) {

    // Validating alternateNumber
    let modelnameRegex = /Will see later/;
    if (modelnameRegex.test(modelname.value)) {
        modelname.classList.remove("is-invalid");
        modelname.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        modelname.classList.remove("is-valid");
        modelname.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});

modelno.addEventListener("blur", function (e) {

    // Validating alternateNumber
    let modelnoRegex = /Will see later/;
    if (modelnoRegex.test(modelno.value)) {
        modelno.classList.remove("is-invalid");
        modelno.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        modelno.classList.remove("is-valid");
        modelno.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});

serialno.addEventListener("blur", function (e) {

    // Validating alternateNumber
    let serialnoRegex = /Will see later/;
    if (serialnoRegex.test(serialno.value)) {
        serialno.classList.remove("is-invalid");
        serialno.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        serialno.classList.remove("is-valid");
        serialno.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});

IMEI_1.addEventListener("blur", function (e) {

    // Validating alternateNumber
    let IMEI_1Regex = /Will see later/;
    if (IMEI_1Regex.test(IMEI_1.value)) {
        IMEI_1.classList.remove("is-invalid");
        IMEI_1.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
        
    }
    else {
        IMEI_1.classList.remove("is-valid");
        IMEI_1.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});

IMEI_2.addEventListener("blur", function (e) {

    // Validating alternateNumber
    let IMEI_2Regex = /Will see later/;
    if (IMEI_2Regex.test(IMEI_2.value)) {
        IMEI_2.classList.remove("is-invalid");
        IMEI_2.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        IMEI_2.classList.remove("is-valid");
        IMEI_2.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});

problem.addEventListener("blur", function (e) {

    // Validating alternateNumber
    let problemRegex = /Will see later/;
    if (problemRegex.test(problem.value)) {
        problem.classList.remove("is-invalid");
        problem.classList.add("is-valid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "valid-feedback");
            element.innerText = "Looks good !";
        });
    }
    else {
        problem.classList.remove("is-valid");
        problem.classList.add("is-invalid");
        Array.from(small).forEach(element => {
            element.setAttribute("class", "invalid-feedback");
            element.innerText = "Error !";
        });
        error = true;
    }
});

submitBtn.addEventListener("click", function (e) {
   
    // Fetching the values for 'Accessories'
    Array.from(checkbox).forEach((element) => {
        if (element.checked == true) {
            accessories.push(element.value);
        }
    });

    printPDF();


    // Preventing the default browser behavior
    // e.preventDefault();
});


function printPDF() {


    if (error === true) {
        // GENERATING A PDF
        var doc = new jsPDF();
        doc.text(20, 20, `Name: ${username.value}`);
        doc.text(20, 30, `Mobile No. : ${contact.value}`);
        doc.text(20, 40, `Alternate No. : ${alternateNumber.value}`);
        doc.text(20, 50, `Address: ${address.value}`);
        doc.text(20, 60, `Product type: ${product.value}`);
        doc.text(20, 70, `Model Name: ${modelname.value}`);
        doc.text(20, 80, `Model No. : ${modelno.value}`);
        doc.text(20, 90, `Serial No. : ${serialno.value}`);
        doc.text(20, 100, `IMEI_1 : ${IMEI_1.value}`);
        doc.text(20, 110, `IMEI_2 : ${IMEI_2.value}`);
        doc.text(20, 120, `Accessories : ${accessories}`);
        doc.text(20, 130, `Problem Description : ${problem.value}`);
        doc.text(20, 140, `Current Status : ${currentStatus.value}`);

        // Saving the PDF
        doc.save(`${username.value}.pdf`);
    }

    else {
        console.log("PDF not generated.");
    };



}
