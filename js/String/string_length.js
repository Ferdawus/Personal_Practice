var str = "Sk Ferdawus";
var length = 0;
while (true) {
  if (str.charAt(length) == "") {
    break;
  } else {
    length++;
  }
}
console.log(length);
console.log(str.length);
// console.log(str.lastIndexOf());
