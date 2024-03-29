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


// Callback and promises
async function fetchUserDataAsync(username, fn) {
    let url = `https://api.github.com/users/${username}`;
    const response = await fetch(url);
    const data = await response.json();
    fn(data);
}

function fetchUserDataCallback(username, fn) {
    let url = `https://api.github.com/users/${username}`;
    fetch(url).then(function (response) {
        return response.json();
    }).then(function (data) {
        fn(data);
    }).catch(function (err) {
        console.log('Error' + JSON.stringify(err));
    });
}

function fetchUserDataPromises(username, fn) {
    let url = `https://api.github.com/users/${username}`;
    let cbPromise = new Promise((resolve, reject) => {
        fetch(url).then(function (response) {
            return response.json();
        }).then(function (data) {
            resolve(data);
        }).catch(function (err) {
            reject(err);
        });
    });
    cbPromise.then((value) => fn(value));
    cbPromise.catch((value) => fn(value));
}

async function fetchUserDataReturnPromises(username){
    let url = `https://api.github.com/users/${username}`;
    return new Promise((resolve, reject) => {
        fetch(url).then(function (response) {
            return response.json();
        }).then(function (data) {
            resolve(data);
        }).catch(function (err) {
            reject(err);
        });
    });
}
function fetchUserDataPromiseCall(username, fn){
    fetchUserDataReturnPromises(username).then((value) => {
        fn(value);
    }).catch(() => {
        console.log("error");
    })
}

function loadImageCallback(url, fn) {
    let imgNode = document.createElement('img');
    imgNode.src = url;
    document.getElementsByTagName('body')[0].appendChild(imgNode);
    if (imgNode.complete) {
        fn(true);
        console.log('berhasil di load');
    } else {
        imgNode.addEventListener('load', function () {
            fn(true);
            console.log('berhasil di load');
        })
        imgNode.addEventListener('error', function () {
            fn(false);
            console.log('gagal di load');
        })
    }
}

function loadImagePromise(url, fn) {
    let imgNode = document.createElement('img');
    let cbPromise = new Promise((resolve, reject) => {
        imgNode.src = url;
        imgNode.onload = () => resolve("success");
        imgNode.onerror = () => reject("failed");
    });
    cbPromise.then((value) => fn(value));
    cbPromise.catch((value) => fn(value));
}

async function fetchPosts(){
    let url = "https://jsonplaceholder.typicode.com/posts";
    const response = await fetch(url);
    return response.json();
}
async function fetchComments(){
    let url = "https://jsonplaceholder.typicode.com/comments";
    const response = await fetch(url);
    return response.json();
}
function lastQuestion(){
    fetchPosts().then((posts) => {
        console.log(posts);
        fetchComments().then((comments) => {
            console.log(comments);
        }).catch(() => {
            console.log("error in getting comments");
        })
    }).catch(() => {
        console.log("error in getting posts");
    })
}
