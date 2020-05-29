<?php

	require_once __DIR__.'/../bootstrap/bootstrap.php';

	$user = User::first();

    echo json_encode($user);