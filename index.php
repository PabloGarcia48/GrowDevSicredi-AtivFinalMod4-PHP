<?php

require_once('./model/user.php');
require_once('./model/tweet.php');
require_once('./data/user_data.php');
require_once('./data/tweet_data.php');

$user1 = new User('Pablo', 'pablo@teste.com', 'Pablito', '123');
$user2 = new User('Sheila', 'sheila@teste.com', 'Daya', '123');
$user3 = new User('Mariana', 'mariana@teste.com', 'Mari', '123');
$user4 = new User('Sueli', 'sueli@teste.com', 'Deise', '123');
$user5 = new User('Paulo', 'paulo@teste.com', 'Paulinho', '123');
$userData = $user1->add($userData);
$userData = $user2->add($userData);
$userData = $user3->add($userData);
$userData = $user4->add($userData);
$userData = $user5->add($userData);

// User::list($userData);

$tweet1 = new Tweet('Growdev é Top', $user1->getUserName());
$tweet2 = new Tweet('Estou curtindo essa de PHP', $user1->getUserName());
$tweet3 = new Tweet('Gente, estou acordada ainda', $user3->getUserName());
$tweet4 = new Tweet('Bora treinar cedinho, para ter uma vida até tarde', $user2->getUserName());
$tweet5 = new Tweet('Olha só, galinha que avisa é ovo na bandeja', $user4->getUserName());
$tweet6 = new Tweet('Hoje o dia vai ser longo, churrasco e muita diversão', $user5->getUserName());

$tweetData = $tweet1->addTweet($tweetData);
$tweetData = $tweet2->addTweet($tweetData);
$tweetData = $tweet3->addTweet($tweetData);
$tweetData = $tweet4->addTweet($tweetData);
$tweetData = $tweet5->addTweet($tweetData);
$tweetData = $tweet6->addTweet($tweetData);

$tweet2->addLike($user2->getUserName());
$tweet2->addLike($user3->getUserName());
$tweet2->addLike($user4->getUserName());
$tweet2->addLike($user5->getUserName());

$tweet3->addLike($user4->getUserName());

$tweet6->addLike($user4->getUserName());
$tweet6->addLike($user3->getUserName());
$tweet6->addLike($user2->getUserName());
$tweet6->addLike($user1->getUserName());

$tweet4->addLike($user1->getUserName());
$tweet4->addLike($user2->getUserName());
$tweet4->addLike($user3->getUserName());

$tweet5->addLike($user3->getUserName());





Tweet::list($tweetData);


?>