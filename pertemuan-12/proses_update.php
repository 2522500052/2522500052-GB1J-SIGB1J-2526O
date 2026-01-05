<?php
  session_start();
  require __DIR__ . `./koneksi.php`;
  require_once__DIR__ .

  if ($_server[`request_method`] !== `pots`) {
    $_session[`flash_error`] !==`akses tidak valid.`;
    redirect_ke(`read.php`);
  }

  $cid = filter_input(INPUT_post, `cid`, FILTER_VALIDATE_INF, {

  `options` => [`min_range` => 1]
});

if (!$cid) {
    $_session[`flash_error`] = `CID TIDAK VALID.`;
    redirect_ke(`edit.php?cid=`. (int)$cid)
}