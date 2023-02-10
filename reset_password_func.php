<?php
$email = $_POST["email"];
$username = $_POST["username"];
$name_found = false;
$user_index;
    $ASTRA_DB_ID = "617ced2f-7eb2-46b9-9b01-28a1fd2f4e2d";
    $ASTRA_DB_REGION = "asia-south1";
    $ASTRA_DB_KEYSPACE= "food";
    $ASTRA_DB_TABLE = "users";
    $ASTRA_DB_APPLICATION_TOKEN= "AstraCS:IlZfzQfrWWXCSZUcsZbHQGTl:34582d72acfc2bd1bfe1fa4e70d41f153b2dc1ddd097feadb6c049ece41fcb1e";
    $URL = "https://" . "$ASTRA_DB_ID" . "-" . "$ASTRA_DB_REGION" . ".apps.astra.datastax.com/api/rest/v2/keyspaces/" . "$ASTRA_DB_KEYSPACE" . "/" . "$ASTRA_DB_TABLE" ."/rows";
    $HEADER = array('accept: application/json', 'x-cassandra-token: '."$ASTRA_DB_APPLICATION_TOKEN");
    $session = curl_init();
    curl_setopt($session, CURLOPT_URL, $URL);
    curl_setopt($session,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($session,CURLOPT_HTTPHEADER, $HEADER); 
    try {
        $result = curl_exec($session);
        $rows = json_decode($result, true);
        $keys = array_keys($rows);
        $count = $rows[$keys[0]];
        $data = $rows[$keys[1]];
        $data_keys = array_keys($data);
        for ($i = 0; $i < $count ; $i++)
        {
            if ($data[$i]["email"] == $email) {
                $name_found = true;
                $user_index = $i;
                break;
            }            
        }
        if (!$name_found) {
            session_start();
            $_SESSION['1email_error'] = true;
            
          header('Location:reset_password.php');
        }
        else {
        if ($username == $data[$user_index]["username"])  {
            reset_password($data[$user_index]["id"], $data[$user_index]["email"], $data[$user_index]["username"] );
            header('Location:reset_password_successful.php');
        }   
        else {
            session_start();
            $_SESSION['username_error'] = true;
            header('Location:reset_password.php');
        }    
        }
        
//        var_dump($data[$data_keys[0]]);
//        var_dump($data[$data_keys[0]]["password"]);
//        var_dump($data[$data_keys[0]]["password"]);
//        var_dump($data[$data_keys[0]]["password"]);
//       array_walk_recursive($rows,"myfunction");
//        foreach ($rows as $key => $value) {
//            echo $key;
//        }
    } catch (RuntimeException $ex) {
        die(sprint('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
    }
    
    function reset_password($id, $email, $username) {
        $password = uniqid();
        //mail($email, "Reset Password", "Your password is ".$password);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $ASTRA_DB_ID = "617ced2f-7eb2-46b9-9b01-28a1fd2f4e2d";
        $ASTRA_DB_REGION = "asia-south1";
        $ASTRA_DB_KEYSPACE= "food";
        $ASTRA_DB_TABLE = "users";
        $ASTRA_DB_APPLICATION_TOKEN= "AstraCS:IlZfzQfrWWXCSZUcsZbHQGTl:34582d72acfc2bd1bfe1fa4e70d41f153b2dc1ddd097feadb6c049ece41fcb1e";
        $URL = "https://" . "$ASTRA_DB_ID" . "-" . "$ASTRA_DB_REGION" . ".apps.astra.datastax.com/api/rest/v2/keyspaces/" . "$ASTRA_DB_KEYSPACE" . "/" . "$ASTRA_DB_TABLE" ."/".$id;
        $HEADER = array('x-cassandra-token: '."$ASTRA_DB_APPLICATION_TOKEN", 'content-type: application/json');
        $POST = array('password' => "$password");
        $session = curl_init();
        curl_setopt($session, CURLOPT_URL, $URL);
        curl_setopt($session,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($session, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($session,CURLOPT_HTTPHEADER, $HEADER); 
        curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($POST));
        try {
        $result = curl_exec($session);
    } catch (RuntimeException $ex) {
        die(sprint('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
    }
    }

