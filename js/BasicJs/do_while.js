// var isRunning = false;
// do {
//   console.log("I am Running");
// } while (isRunning);

var randomNum;

do {
  randomNum = Math.floor(Math.random() * 10); // Generate a random number between 0 and 9
  console.log("Random number is: " + randomNum);
} while (randomNum !== 7);

var numbers = [1, 2, 3, 4, 5];
var index = 0;

do {
  console.log("Element at index " + index + " is: " + numbers[index]);
  index++;
} while (index < numbers.length);
