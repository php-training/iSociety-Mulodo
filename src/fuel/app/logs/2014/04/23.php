<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2014-04-23 11:48:10 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'status' cannot be null with query: "INSERT INTO `user` (`email`, `password`, `status`) VALUES ('test@test.com', '81dc9bdb52d04dc20036dbd8313ed055', null)" in /Users/hoaqt/Sites/fuel/core/classes/database/pdo/connection.php on line 234
ERROR - 2014-04-23 13:31:29 --> Runtime Recoverable error - Argument 1 passed to Orm\Query::_parse_where_array() must be an array, string given, called in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 566 and defined in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 553
ERROR - 2014-04-23 13:36:01 --> Runtime Recoverable error - Argument 1 passed to Orm\Query::_parse_where_array() must be an array, string given, called in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 566 and defined in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 553
ERROR - 2014-04-23 13:37:47 --> Runtime Recoverable error - Argument 1 passed to Orm\Query::_parse_where_array() must be an array, string given, called in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 566 and defined in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 553
ERROR - 2014-04-23 13:37:54 --> Runtime Recoverable error - Argument 1 passed to Orm\Query::_parse_where_array() must be an array, string given, called in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 566 and defined in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 553
ERROR - 2014-04-23 13:38:16 --> Runtime Recoverable error - Argument 1 passed to Orm\Query::_parse_where_array() must be an array, string given, called in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 566 and defined in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 553
ERROR - 2014-04-23 13:38:28 --> Runtime Recoverable error - Argument 1 passed to Orm\Query::_parse_where_array() must be an array, string given, called in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 566 and defined in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 553
ERROR - 2014-04-23 13:38:33 --> Runtime Recoverable error - Argument 1 passed to Orm\Query::_parse_where_array() must be an array, string given, called in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 566 and defined in /Users/hoaqt/Sites/fuel/packages/orm/classes/query.php on line 553
ERROR - 2014-04-23 13:42:17 --> 22007 - SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: '1398235337' for column 'due_date' at row 1 with query: "UPDATE `login_token` SET `due_date` = '1398235337' WHERE `id` = '4'" in /Users/hoaqt/Sites/fuel/core/classes/database/pdo/connection.php on line 234