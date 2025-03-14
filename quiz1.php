<?php

/**
 * Assuming:
 * - The PDO connection credentials are correct and the connection establishes.
 * - The PHP variables indicated below are correct.
 *
 * Explain why the following script will fail to properly execute the query.
 */

	$pdo = new PDO( 'mysql:host=localhost;dbname=test', 'user', 'password' );

	$user_query = <<<SQL
  INSERT INTO user
     SET first_name = :first_name,
         last_name  = :last_name,
         email      = :email,
         dob        = :dob
SQL;
	$user_result = $pdo->prepare( $user_query );
	$user_result->execute( [
		':first_name' => $first_name,
		':last_name'  => $last_name,
		':dob'        => $dob
	] );


/**
 * 	Answer:
 * 	Since these ff. variables ($first_name, $last_name and $dob) was declare and already have a value, 
 *  The main reason why it fails because :email placeholder is defined in the query, but no corresponding value is provided in the execute()
 * 
 *  It should be like this:
 *  
	$user_result->execute( [
		':first_name' 	=> $first_name,
		':last_name'  	=> $last_name,
		':email'  		=> $email,
		':dob'        	=> $dob
	] );
 * 
 *  Ofcource email variable was declare and have a value also.
 */

?>
