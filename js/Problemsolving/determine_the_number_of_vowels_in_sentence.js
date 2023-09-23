const vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

function countVowels(sentance) {
  let count = 0;
  let letters = Array.from(sentance);

  letters.forEach(function (value) {
    if (vowels.includes(value)) {
      count++;
    }
  });
  return count;
}

console.log(countVowels("I Love Bangladesh"));
