<?php
setcookie('user','kanak',time()+600);
if($_COOKIE['user'])
{
    echo 'Thank You for Returning';
}
setcookie('user','kanak',time()-600);


?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            