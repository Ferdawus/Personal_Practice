var obj = {
  a: 4,
  b: 5,
  c: 10,
};

// console.log(Object.keys(obj));
// console.log(Object.values(obj));
// console.log(Object.entries(obj));

var obj2 = Object.assign({}, obj);
obj2.a = 20;
console.log(obj);
console.log(obj2);
