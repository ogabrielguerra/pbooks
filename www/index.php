<?php

require'header.php';

function sortWords(String $string){

    $words = explode(' ', $string);
    $numWords = count($words);
    $englishWords = [];
    $chineseWords = [];

    for($i=0; $i<$numWords; $i++){
        if(ctype_alnum($words[$i])){
            if(!in_array($words[$i], $englishWords, true)) {
                array_push($englishWords, $words[$i]);
            }
        }else{
            array_push($chineseWords, $words[$i]);
        }
    }
    return implode(' ', $englishWords) . ' ' . implode(' ', array_reverse($chineseWords));
}

$str = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃';

$fStr = sortWords($str);

?>

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
                <div>
                    <div class="row">
                        <div class="col-12">
                            <pre class="alert alert-success">
-- CREATE STRUCTURE

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `course_application`;

CREATE TABLE `course_application` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `application_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_course` (`id_course`,`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE course_application
ADD UNIQUE INDEX( `id_course`, `id_user`);
                            </pre>

                        </div>

                        <div class="col-12">
                            <pre class="alert alert-success">
-- INSERT DATA

INSERT INTO `course` (`id`, `title`)
VALUES
	(1,'Cooking for Fun'),
	(2,'Arduin and Automation'),
	(3,'Education for Life'),
	(4,'Modern PHP Definitive Guide');

INSERT INTO `course_application`
(`id`, `id_user`, `id_course`, `application_date`)
VALUES
	(1,1,2,'2020-09-24 17:44:36'),
	(2,1,3,'2020-09-24 16:34:32'),
	(3,2,3,'2020-09-24 18:14:06');

INSERT INTO `user` (`id`, `email`, `name`)
VALUES
	(1,'edward@foo.com','Edward'),
	(2,'john@foo.com','John'),
	(3,'Clair','cliar@foo.com'),
	(4,'Margareth','margot@foo.com');
                            </pre>
                            <a href="q4_sql_script.sql" class="btn btn-info mb-3">Solution Part 1</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <pre class="alert alert-success">
-- COUNT APPLICATIONS BY USER

SELECT ca.id_user, u.name,
COUNT(ca.id_user) as num_applications
FROM course_application ca, user u
WHERE ca.id_user = u.id
GROUP BY ca.id_user, u.name;
                            </pre>
                            <a href="q4_sql_script_2.sql" class="btn btn-info mb-5">Solution Part 2</a>
                        </div>
                        <div class="col-12">
                            <pre class="alert alert-success">
-- COUNT COURSES BY USER OF ID 1

SELECT ca.id, ca.id_user, ca.id_course,
c.title, u.name, u.email, ca.application_date
FROM course_application ca , course c, user u
WHERE ca.id_user = u.id
AND ca.id_course = c.id
AND ca.id_user = 1;
                            </pre>
                            <a href="q4_sql_script_3.sql" class="btn btn-info">Solution Part 3</a>
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
                <pre class="alert alert-success">
                    <h4>ANSWER</h4>
function sortWords(String $string){

        $words = explode(' ', $string);
        $numWords = count($words);
        $englishWords = [];
        $chineseWords = [];

        for($i=0; $i<$numWords; $i++){
            if(ctype_alnum($words[$i])){
                if(!in_array($words[$i], $englishWords, true)) {
                    array_push($englishWords, $words[$i]);
                }
            }else{
                array_push($chineseWords, $words[$i]);
            }
        }
        return implode(' ', $englishWords) . ' ' . implode(' ', array_reverse($chineseWords));
    }
                    <p>FORMATTED STRING: <?=$fStr;?></p>
                </pre>
                <div class="divider"></div>

                <span>Question 6</span>
                <h4>Use a GitHub Branch as a Composer Dependency</h4>
                <p>Explain how you would configure composer to use `https://github.com/pressbooks/new-private-project` with the branch `bugfixes` in your project.</p>

                <pre class="alert alert-success">
                    <h4>ANSWER</h4>
<p>Since it's a private repository it's necessary to setup the ssh keys for you to communicate with Github properly.<br>
Then you add the related repository entry as described below:</p>

{
    "repositories": [
    {
        "type": "git",
        "url": "https://github.com/pressbooks/new-private-project"
    }
    ],
    "require": {
        "pressbooks/new-private-project": "dev-bugfixes"
    }
}
                </pre>
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