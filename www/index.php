<?php require'header.php'; ?>

<secion>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span>Question 1</span>
                <h4>Explain the differences between HEAD, GET and POST in the HTTP protocol.</h4>
                <div class="alert alert-success" role="alert">
                    <h4>ANSWER</h4>
                    <p class="title">
                        Those are also known as HTTP VERBS.
                        <ul>
                            <li>The GET method is used to retrieve/query information.</li>
                            <li>The HEAD method is identical to GET except that the server MUST NOT return a message-body in the response | <a href="https://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html" target="_blank">source: w3.org</a></li>
                            <li>POST is a method we use when we need to create or delete a resource.</li>
                            <li>PUT is used when trying to update a resource.</li>
                        </ul>
                    </p>
                </div>

                <div class="divider"></div>

                <span>Question 2</span>
                <h4>Convert the following procedural PHP7 code into object oriented style code.</h4>

<pre>function make_astronaut( string $name, float $weight ) {
    return [ 'name' => $name, 'weight' => $weight ];
}

function add_weight_to_astronaut( array &$astronaut, float $pounds ) {
    $astronaut['weight'] += $pounds;
}

function launch_astronaut( array $astronaut ) {
    if ( $astronaut['weight'] > 200 ) {
        echo "{$astronaut['name']} too heavy, grounded.\n";
    } else {
        echo "{$astronaut['name']} going where no human has gone before.\n";
    }
}</pre>
                <a href="q2.php" class="btn btn-info btn-lg">Solution</a>

                <div class="divider"></div>

                <span>Question 3</span>
                <h4>You are given the following table in database `nasa`:</h4>
                <p>CREATE TABLE astronaut ( name text, weight int ); Write a simple PHP page that displays a form to enter the name and weight of an astronaut and on submission enters those values into the database. (Simple in this case means you do not have to be fancy, but you still need to be complete and correct.</p>
                <p>Assume the database is running on the local host and use user nasa and password nasa to connect). Use a DB abstraction layer to write your code. Example: PDO or WPDB. Use prepared statements.</p>
                <a href="q3.php" class="btn btn-info btn-lg">Solution</a>

                <div class="divider"></div>

                <span>Question 4</span>
                <h4>You have a group of people that are taking courses from a given list of courses. Write ANSI compliant SQL statements that will do the following:</h4>
                <ul>
                    <li>Create the tables that allow any person to take any course, but only allow them to sign up for any given course once.</li>
                    <li>Show all courses taken by a given person.</li>
                    <li>Show all people and the number of courses they are taking.</li>
                </ul>
                <div class="alert alert-success">
                    <h4>ANSWER</h4>
                    <div class="row mt-3">
                        <div class="col-12">
                            <h5>Structure</h5>
                            <script src="https://gist.github.com/ogabrielguerra/2a6a695c60b51758126219739f3e1a32.js"></script>
                        </div>

                        <div class="col-12">
                            <h5>Data</h5>
                            <script src="https://gist.github.com/ogabrielguerra/588b0a3b871010d822c337639ebd421b.js"></script>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <h5>Queries</h5>
                            <script src="https://gist.github.com/ogabrielguerra/c8073aff6fb1c405f691a615693a5ed0.js"></script>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <span>Question 5</span>
                <h4>Given the following string: $str = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃';</h4>
                <p>Using PHP, write a function that:</p>
                <ul>
                    <li>Moves all Chinese characters to the end of the string, reversing their current order.</li>
                    <li>Removes duplicate English words.</li>
                    <li>Returns the modified string.</li>
                </ul>
                <div class="alert alert-success">
                    <h4>ANSWER</h4>
                    <script src="https://gist.github.com/ogabrielguerra/e76d82db6de91896d2d304ca8b7e28c9.js"></script>
                    <p>FORMATTED STRING: drinking giving jogging passing 吃 跑步 制图 喝 喝</p>
                </div>

                <div class="divider"></div>

                <span>Question 6</span>
                <h4>Use a GitHub Branch as a Composer Dependency</h4>
                <p>Explain how you would configure composer to use `https://github.com/pressbooks/new-private-project` with the branch `bugfixes` in your project.</p>

                <div class="alert alert-success">
                    <h4>ANSWER</h4>
                    <p> <strong>Since it's a private repository it's necessary to setup the ssh keys for you to communicate with Github properly.</strong><br>
                    Then you add the related repository entry as described below:</p>
                    <script src="https://gist.github.com/ogabrielguerra/9667159c1bcca11e0435608a7d960a0e.js"></script>
                </div>

                <div class="divider"></div>

                <span>Question 7</span>
                <h4>Get Pressbooks working locally and attach a screenshot showing that you could do it. If there are problems, document and fix them. </h4>

                <div class="divider"></div>

                <span>Question 8</span>
                <h4>This string contains information about this test. Can you determine what its significance is? </h4>
                <p>aXA6MTg2LjIyOS4yMzEuOCB0aW1lOjIwMjAtMDktMTggMTE6MTM6MzI=</p>
                <div class="alert alert-success">
                    <h4>ANSWER</h4>
                    The string is encoded as base64 -> ip:186.229.231.8 time:2020-09-18 11:13:32
                </div>

                <div class="divider"></div>

            </div>
        </div>
    </div>
</secion>
</body>
</html>