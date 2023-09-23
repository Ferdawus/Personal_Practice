var isRunning = true;
while (isRunning) {
  var rand = Math.floor(Math.random() * 10 + 1);
  if (rand === 9) {
    console.log("Winner Winneer Chichen Dinner");
    isRunning = false;
  } else {
    console.log("You have got " + rand);
  }
}
