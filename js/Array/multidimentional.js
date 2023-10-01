var arr = [
  [20, 50, 30],
  [15, 25, 40],
  [56, 90, 10],
];

// var length = arr.length;
// console.log(length);

for (var i = 0; i < arr.length; i++) {
  for (var j = 0; j < arr[i].length; j++) {
    console.log("Element " + i + ":" + arr[i][j]);
  }
}
