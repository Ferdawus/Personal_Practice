var point = {
  x: 10,
  y: 20,
  a: 40,
};

point.a = undefined;
delete point.a;
console.log(point);
