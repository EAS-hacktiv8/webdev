// Soal 1
console.log('Soal 1')
var myArray = [];
console.log(`before: ${JSON.stringify(myArray)}`);
myArray.push("apple");
myArray.push("banana");
myArray.pop();
myArray.unshift("orange");
myArray.shift();
console.log(`after: ${JSON.stringify(myArray)}`);

// Soal 2
console.log('\nSoal 2')
var firstArray = [ "a","b","c"];
var secondArray = ["x","y","z"];
console.log(`before: ${JSON.stringify(firstArray)} and ${JSON.stringify(secondArray)}`);
var resultArraySoal2 = firstArray.concat(secondArray);
var resultSoal2 = resultArraySoal2.join(', ');
console.log(`after: ${JSON.stringify(resultSoal2)}`);

// Soal 3
console.log('\nSoal 3')
var numbers = [4,2,7,3,8, 10];
console.log(`before: ${JSON.stringify(numbers)}`);
var numbers_sorted = numbers.slice().sort((a,b) => a-b);
var numbers_sorted_descending = numbers.slice().sort(((a,b) => b-a));
console.log(`after sorted: ${JSON.stringify(numbers_sorted)}`);
console.log(`after sorted descending: ${JSON.stringify(numbers_sorted_descending)}`);

// Soal 4
console.log('\nSoal 4')
var fruits = ["apple", "banana", "orange", "grape", "kiwi"];
console.log(`before: ${JSON.stringify(fruits)}`);
fruits.splice(1,2);
console.log(`after: ${JSON.stringify(fruits)}`);

// Soal 5
console.log('\nSoal 5')
var sentence = "Hello,World,JavaScript";
console.log(`before: ${JSON.stringify(sentence)}`);
var sentence_splitted = sentence.split(",");
console.log(`after: ${JSON.stringify(sentence_splitted)}`);