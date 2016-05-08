var assert = require('assert'),
    should = require('chai').should(),
    heavyDeciCount = require('../lib');

var x = 9872,
    y = 9884;

describe("TEST", function(){
  it(" should return 6 heavy", function(done){
    // heavyDeciCount
    var results = heavyDeciCount(x, y);
    results.should.equal(6);
    done();
  });

  it(" should throw error if x is greater than y", function(done){
    (function() {
      heavyDeciCount(y, x);
    }).should.Throw('X is greater than y');

    done();
  });

  describe(" value of X", function(){
    it(" throws exception X = 0 is invalid", function(done){
      (function() {
        heavyDeciCount(0, 500000);
      }).should.Throw('X is invalid');

      done();
    });
    it(" throws exception X = 500000 is invalid", function(done){
      (function() {
        heavyDeciCount(500000, 500000);
      }).should.Throw('X is invalid');

      done();
    });
  })
})
