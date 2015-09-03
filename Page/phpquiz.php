<html>

<head>
	
	
	<title>Debbecing</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
  <div id="wrap">
     
    <blockquote>
		<h1 class="head">PHP Quiz</h1>
    </blockquote>
	<blockquote>
		<form action="phpgrade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>What's the best way to copy a file from within a piece of PHP? </h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)  Print out a message asking your user to "telnet" in to the server and copy the file for you </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Open the input and output files, and use read() and write() to copy the data block by block until read() returns a zero</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Use the built in copy() functione</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)  Use "exec" to run an operating system command such as cp (Unix, Linux) or copy (Windows)</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>How do you get information from a form that is submitted using the "get" method? </h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)$_GET[]; </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Request.Form;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)Request.QueryString;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) $_POST[];</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>In php Which method is used to getting browser properties?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A)$_SERVER['HTTP_USER_AGENT'];</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)  $_SERVER['PHP_SELF']</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) $_SERVER['SERVER_NAME']</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D)$_SERVER['HTTP_VARIENT'] </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3><"?php
                             $x=array(1,3,2,3,7,8,9,7,3);
                             $y=array_count_values($x);
                             echo $y[8];
                         ?">
                         </h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 43     </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)1 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)  8  </label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)   6 </label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>How would you add 1 to the variable $count?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) incr count;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) $count++; </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)$count =+1  </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) incr $count;   </label>
                    </div>
                
                </li>                
                <li>
                
                    <h3> Assume that your php file 'index.php' in location c:/apache/htdocs/phptutor/index.php. If you used $_SERVER['PHP_SELF'] function in your page, then what is the return value of this function ?</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A)  phptutor/index.php</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question--6answers" id="question-6-answers-B" value="B" />
                        <label for="question-1-answers-B">B) </phptutor/index.php</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) c:/apache/htdocs/phptutor/index.php</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) index.php</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>In PHP, which of the following function is used to insert content of one php file into another php file before server executes it?
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A)  include[] </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B)  #include()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) include()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D)#include{}  </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>
                         <"?php
                         define("x","5");
                         $x=x+10;
                         echo x;
                         ?">
                   </h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A">A) Error
      </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) 15</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C)   10  </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) 5  </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>what will be the output of below code ?

                        <"?php
                        $arr = array(5 => 1, 12 => 2);
                        $arr[] = 56;
                        $arr["x"] = 42;
                        unset($arr);
                        echo var_dump($arr);

                        ?">
                        </h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A">A)42</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) ) 56 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) Null  </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) x=42 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>PHP variables are
</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Multitype variables
      </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Double type variables</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Single type variable
      </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Trible type variables </label>
                    </div>
                    
                    
                
                </li>
          
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
    </blockquote>   
	
	</div>
</div>	
</body>

</html>