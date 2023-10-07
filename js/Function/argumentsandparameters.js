arr1 = [2, 5, 60];
arr2 = [40, 4, 20];
arr3 = [30, 7, 3];

function arrOfSum(arr) {
  sum = 0;

  for (i = 0; i < arr.length; i++) {
    sum += arr[i];
  }
  console.log(sum);
}
arrOfSum(arr1);
arrOfSum(arr2);
