<?php

/**
 *
 */
class Controllers
{


  function __construct()
  {
    session_name('edutask');
    session_set_cookie_params(0);
    session_cache_expire(0);
    session_start();
    // var_dump(session_get_cookie_params());
    //
    // echo session_cache_expire();
  }
}
