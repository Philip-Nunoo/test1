"user strict";
const heavyDeciCount = require("./lib");

var x = 9872,
    y = 9884;

// console.log(heavyDeciCount(x, y));
const imageToAscii = require("image-to-ascii");

// The path can be either a local path or an url
imageToAscii("./git_github.png", function (err, converted) {

    console.log(err || converted);
});
