var arr = [2, 3, 5, 8, 9, 40];

for (i = 0; i < arr.length; i++) {
  if (arr[i] % 2 === 0) {
    console.log(arr[i]);
  }
}
// odd sum
sum = 0;
for (i = 0; i < arr.length; i++) {
  if (arr[i] % 2 === 0) {
    sum += arr[i];
  }
}
console.log(sum);
