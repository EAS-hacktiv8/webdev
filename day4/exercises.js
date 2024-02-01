// Modular Function
function removeSpaces(text) {
    return text.replaceAll(' ', '',)
}

function reverseText(text) {
    return text.split("").reverse().join("");
}

function updateVowels(text) {
    // Simpler way
    // return text.replace(/[aeiouAEIOU]/g, function(match) {
    //     return String.fromCharCode(match.charCodeAt(0) + 1);
    // });
    let result = text.replaceAll('A', 'B',);
    result = result.replaceAll('E', 'F',);
    result = result.replaceAll('I', 'J',);
    result = result.replaceAll('O', 'P',);
    result = result.replaceAll('U', 'V',);
    result = result.replaceAll('a', 'b',);
    result = result.replaceAll('e', 'f',);
    result = result.replaceAll('i', 'j',);
    result = result.replaceAll('o', 'p',);
    result = result.replaceAll('u', 'v',);
    return result
}


// Javascript Review
let tempVar1 = "var1";
let tempVar2 = "var2";
console.log(tempVar1);
console.log(tempVar2);

let tempArr1 = ['apple', 'orange', 'grape', 'kiwi', 'melon'];
console.log(tempArr1);
tempArr1.push('banana');
console.log(tempArr1);
tempArr1[1] = 'jeruk';
console.log(tempArr1);
tempArr1.pop();
console.log(tempArr1);

let tempObj = {
    nama_depan: "gehan",
    nama_belakang: "syafesi",
    hobi: ["main"],
    angka_favorit: 42,
    memakai_kacamata: true,
    kelas: 'php-js'
}
console.log(JSON.stringify(tempObj));
console.log(`nama lengkap: ${tempObj.nama_depan} ${tempObj.nama_belakang}`);
tempObj.angka_favorit = 8;
console.log(JSON.stringify(tempObj));
tempObj.hobi.push("coding");
console.log(JSON.stringify(tempObj));
tempObj.lulusan = "hacktiv8"
console.log(JSON.stringify(tempObj));
for (const hobi_data in tempObj.hobi) {
    console.log("hobi: " + hobi_data);
}
console.log(Object.keys(tempObj));
console.log(Object.values(tempObj));
for (const key in Object.keys(tempObj)) {
    console.log(`${key}: ${tempObj[key]}`)
}

function tempFunc1() {
    let date = new Date();
    console.log(date.toLocaleString());
}
function tempFunc2() {
    return new Date().getDate();
}
console.log(tempFunc2());

function tempFunc3(angka) {
    return angka % 2 === 0 ? "genap" : "ganjil";
}
function tempFunc3WithCheck(angka) {
    if (typeof (angka) !== "number") return "invalid data";
    return angka % 2 === 0 ? "genap" : "ganjil";
}


// Javascript Logic Exercises
function compareNumbers(firstNumber, secondNumber) {
    if (secondNumber > firstNumber) return true;
    if (firstNumber > secondNumber) return false;
    if (secondNumber === firstNumber) return -1;
}

function reverseString(text) {
    return text.split("").reverse().join("");
}

function urutHuruf(text) {
    text.split("").sort().join("");
}
function urutHurufCustom(text) {
    let textArr = text.split("");
    let resultArr = [];
    resultArr.push(textArr.shift());
    for (const huruf in textArr) {
        for (let i = 0; i < resultArr.length; i++) {
            if (textArr[huruf] < resultArr[i]) {
                resultArr.splice(i, 0, textArr[huruf]);
                break;
            }
            if (i === resultArr.length - 1) {
                resultArr.push(textArr[huruf]);
                break;
            }
        }
    }
    return resultArr.join("")
}

function isArithmeticProgression(numbers) {
    let diff = numbers[1] - numbers[0];
    for (let i = 0; i < numbers.length; i++) {
        const element = numbers[i];
        const nextElement = numbers[i + 1];
        if (nextElement - element !== diff) return false;
    }
    return true;
}

function threeStepsAB(text) {
    let textArr = text.split("");
    let len = textArr.length;
    for (let i = 0; i < len-4; i++) {
        if (textArr[i].toLowerCase() === 'a' && text[i + 4].toLowerCase() === 'b') return true;
        if (textArr[i + 4].toLowerCase() === 'a' && text[i].toLowerCase() === 'b') return true;
    }
    return false;
}

function gcd(firstNumber, secondNumber) {
    while (secondNumber !== 0) {
        let t = secondNumber;
        secondNumber = firstNumber % secondNumber;
        firstNumber = t;
    }
    return firstNumber;
}

function isPrime(number) {
    if (number < 2) return false
    sqrt = Math.sqrt(number)
    for (let i = 2; i <= sqrt; i++)
        if (number % i === 0) return false;
    return true;
}

function listPrima(angkaPertama, angkaKedua) {
    let resultArr = [];
    for (let i = angkaPertama; i <= angkaKedua; i++) {
        if (isPrime(i)) {
            resultArr.push(i);
        }
    }
    return resultArr;
}
