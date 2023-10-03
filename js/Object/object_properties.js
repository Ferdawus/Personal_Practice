var point = {
  x: 10,
  y: 20,
};
point.a = 30;
// console.log(point);
point["x"] = 100;
// console.log(point);

var prop = "z";
point[prop] = 230;
console.log(point);
