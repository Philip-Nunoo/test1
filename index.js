"user strict";
const heavyDeciCount = require("./lib");
const imageToAscii = require("image-to-ascii");

// The path can be either a local path or an url
imageToAscii("./git_github.png", function (err, converted) {

  // console.log(err || converted);
});

var x = 9872,
    y = 9884;

// console.log(heavyDeciCount(x, y));)

var results = heavyDeciCount(x, y, true);
console.log("Number\t\tAverage\t\tIs Heavy");
for (var i = 0; i < results.array.length; i++) {
  var obj = results.array[i];
  console.log(obj.number + "\t\t" + obj.average + "\t\t" + (obj.isHeavy? "Yes": "No"));
}
console.log("\nTotal Heavy Count:\t" + results.heavy);
// console.log(results);
