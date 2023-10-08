function someThing(greet, name) {
  function sayHi() {
    console.log(greet, name);
  }
  sayHi();
}
someThing("Good Morning", "Ferdawus");

function someThing1(greet, name) {
  function firstName() {
    if (name) {
      return name.split(" ")[0];
    } else {
      return "";
    }
  }
  var message = greet + " " + firstName();
  console.log(message);
}
someThing1("Good Morning", "Nasir SK");
