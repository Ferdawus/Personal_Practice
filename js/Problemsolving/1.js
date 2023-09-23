//  Write a function that can print any random number between any two given numbers (including them).

function getRandomNumber(max, min) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
console.log(getRandomNumber(1, 6));

// How can you order names of students in your class sequentially?
const students = ["Sumit", "Ferdawus", "Naim", "Alamin", "Nasir", "Lima"];
console.log(students.sort());

const roll_numbers = [3, 4, 5, 26, 927, 56, 82];
console.log(
  roll_numbers.sort(function (a, b) {
    return b - a;
  })
);

//  Write a function that can tell us whether an year is a leap year or not.

// isLeapYear(2032);
