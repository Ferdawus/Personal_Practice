var arr = [3, 5, 8, 10, 14, 60];
var find = 10;
var isFound = false;

for (let i = 0; i < arr.length; i++) {
  if (arr[i] === find) {
    console.log("Data Found of index " + i);
    isFound = true;
    break;
  }
}
if (!isFound) {
  console.log("Data Not Found");
}
