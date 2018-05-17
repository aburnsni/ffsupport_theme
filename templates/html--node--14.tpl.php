<html>
<title>Job Counts</title>
<body>
<total><?php
$query = new EntityFieldQuery;

$count = $query->entityCondition('entity_type', 'node')
  ->entityCondition('bundle', 'support_ticket')
  ->propertyCondition('status', 1) // Getting published nodes only.
  ->count()
  ->execute();

echo $count;
?></total>

<urgent><?php
$query2 = new EntityFieldQuery;

$count2 = $query2->entityCondition('entity_type', 'node')
  ->entityCondition('bundle', 'support_ticket')
  ->propertyCondition('status', 1) // Getting published nodes only.
  ->fieldCondition('field_priority', 'value', '1', '=')
  ->count()
  ->addMetaData('account', user_load(1))
  ->execute();

echo $count2;
?></urgent>
</body></html>
