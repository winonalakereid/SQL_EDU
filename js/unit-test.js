

module("SideBar Unit test");
test("SideBar Test", 2, function(){
	equal( typeof sideBarTest, 'function', 'Must return true');
	ok( sideBarTest(), true, "Expected true as result, test result was: true");
});


module("Lesson Ouput Unit test");
test("Lesson Output Test", 2, function(){
	equal( typeof lessonOutputTest, 'function', 'Must return true');
	ok( lessonOutputTest(1,3), true, "Expected true as result, test result was: true");
});

module("Lesson Ouput Unit test");
test("Lesson Output Test", 2, function(){
	equal( typeof lessonOutputTest, 'function', 'Must return true');
	ok( lessonOutputTest(4,2), true, "Expected true as result, test result was: true");
});

module("Lesson Ouput Unit test");
test("Lesson Output Test", 2, function(){
	equal( typeof lessonOutputTest, 'function', 'Must return true');
	ok( lessonOutputTest(6,3), true, "Expected true as result, test result was: true");
});

module("Exercise Title Unit test");
test("Exercise Title Test", 2, function(){
	equal( typeof exerciseTitleTest, 'function', 'Must return true');
	ok( exerciseTitleTest(2,1), true, "Expected true as result, test result was: true");
});

module("Exercise Title Unit test");
test("Exercise Title Test", 2, function(){
	equal( typeof exerciseTitleTest, 'function', 'Must return true');
	ok( exerciseTitleTest(3,1), true, "Expected true as result, test result was: true");
});

module("Exercise Title Unit test");
test("Exercise Title Test", 2, function(){
	equal( typeof exerciseTitleTest, 'function', 'Must return true');
	ok( exerciseTitleTest(6,1), true, "Expected true as result, test result was: true");
});

module("Submit Response Unit test");
test("Submit Response Test", 2, function(){
	equal( typeof submitResponseTest, 'function', 'Must return true');
	ok( sideBarTest("USE Pokemon", 1, 4), true, "Expected true as result, test result was: true");
});

module("Submit Response Unit test");
test("Submit Response Test", 2, function(){
	equal( typeof submitResponseTest, 'function', 'Must return true');
	ok( sideBarTest("USE Pokemon", 3, 2), true, "Expected true as result, test result was: true");
});

module("Submit Response Unit test");
test("Submit Response Test", 2, function(){
	equal( typeof submitResponseTest, 'function', 'Must return true');
	ok( submitResponseTest("Don't use anything", 5, 1), true, "Expected true as result, test result was: true");
});

module("Verify Next Exercise Unit test");
test("Verify Next Exercise Test", 2, function(){
	equal( typeof verifyNextExerciseTest, 'function', 'Must return true');
	ok( verifyNextExerciseTest(3, 4), true, "Expected true as result, test result was: true");
});

module("Verify Next Exercise Unit test");
test("Verify Next Exercise Test", 2, function(){
	equal( typeof verifyNextExerciseTest, 'function', 'Must return true');
	ok( verifyNextExerciseTest(1, 3), true, "Expected true as result, test result was: true");
});

module("Verify Next Exercise Unit test");
test("Verify Next Exercise Test", 2, function(){
	equal( typeof verifyNextExerciseTest, 'function', 'Must return true');
	ok( verifyNextExerciseTest(6, 2), true, "Expected true as result, test result was: true");
});

module("Login Unit test");
test("Login Test", 2, function(){
	equal( typeof loginTest, 'function', 'Must return true');
	ok( loginTest("rdbishop@bsu.edu", "bloop"), true, "Expected true as result, test result was: true");
});

module("Login Unit test");
test("Login Test", 2, function(){
	equal( typeof loginTest, 'function', 'Must return true');
	ok( loginTest("reid", "bloop"), true, "Expected true as result, test result was: true");
});

