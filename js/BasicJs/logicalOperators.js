var a = 30;
var b = 20;
var c = 40;
var d = 55;

if (a > b && c > d) {
  console.log("A is greater than B and C is Greater than D");
} else {
  console.log("At least one condition is flase");
}

if (a > b || c > d) {
  console.log("A is greater than B and C is Greater than D");
} else {
  console.log("At least one condition is flase");
}

var check = !(a < b);
console.log(check);
