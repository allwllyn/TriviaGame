# TriviaGame
CSC 4370 - Project 1

Name: Panther Trivia

Team Members:\
Andrew Llewellyn\
Natnael Dejene\
Nasor Clough


This github includes all code that was used during development, including code that is not used in the final.

This is a question and answer trivia developed for Web Programming. The game is made using HTML, CSS, and PHP. The file that serves as the first file to visit is index.php. This file will then route the user to a login page if there is not an active session logged in, or it will go to the home menu screen. New users must sign up with a unique username, and a passord that is at least 6 characters with no special characters. There are options for start the game, view top scores, visit the about section, or logout.\
\
If the user chooses to start the game, they will be presented with thre options: easy, normal, or hard. From there there are various numbers of questions depending on the setting.\
\
The questions, answer options, answers, scores, and login information are all stored in txt files. The php files (startEasy.php,startNormal.php,startHard.php) takes the question information from the appropriate text files, and stores them in the session. The score is also saved in the session. At the end of the game, the user's name and score is stored in a txt file. The leader board will display the top 10 scores from the txt file.
