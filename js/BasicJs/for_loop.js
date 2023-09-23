// odd Number
// for (var i = 1; i <= 100; i++) {
//   if (i % 2 === 1) {
//     console.log(i + "is odd number");
//   }
// }

// sumation 1 = 10

var sum = 0;

for (let i = 1; i < 10; i++) {
  console.log(sum + " + " + i + " = " + (sum + i));
  sum = +i;
}
console.log("result is" + sum);
