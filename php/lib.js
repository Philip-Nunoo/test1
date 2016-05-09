var integerDigits = function(num){
  var digits = num.toString().split(''),
      newDigit = [];

  for (var i = 0; i < digits.length; i++) {
    newDigit[i] = parseInt(digits[i])
  }
  return newDigit;
}

var averageOfDigits = function(x){
  var array = integerDigits(x),
      sum = 0;

  for (var i = 0; i < array.length; i++) {
    sum = sum + array[i]
  }

  return sum/array.length;
}

var heavyDeciCount = function (x, y, output){
  if (x>y)
    throw new Error('X is greater than y')

  if (x<=0 || x>=500000)
    throw new Error('X is invalid')

  if (y<=0)
    throw new Error('Y is invalid')

  var count = 0,
      outputObject = {array: []};

  for (var i = x; i <= y; i++) {
    var avg = averageOfDigits(i);
    var currentObject = {number: i, average: avg, isHeavy: false};
    if(avg > 7){
      count ++;
      currentObject.isHeavy = true;
    }
    outputObject.array.push(currentObject);
  }
  outputObject.x = x;
  outputObject.y = y;
  outputObject.count = outputObject.array.length;
  outputObject.heavy = count;

  if (output)
    return outputObject
  return count;
}


// module.exports = heavyDeciCount
